<?php
declare(strict_types=1);
namespace JWeiland\Jobcenter\Domain\Repository;

/**
 * This file is part of the "jobcenter" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 */

use JWeiland\Jobcenter\Domain\Model\Contact;
use TYPO3\CMS\Extbase\Persistence\Exception\InvalidQueryException;
use TYPO3\CMS\Extbase\Persistence\QueryInterface;
use TYPO3\CMS\Extbase\Persistence\Repository;

/**
 * Repository to find contacts
 */
class ContactRepository extends Repository
{
    /**
     * @var array
     */
    protected $storagePids = [];

    /**
     * @var array
     */
    protected $defaultOrderings = [
        'uid' => QueryInterface::ORDER_DESCENDING
    ];

    /**
     * Find contact specialized for given name
     *
     * @param string $name
     * @param bool $handicapped
     * @return Contact|null
     * @throws InvalidQueryException
     */
    public function findContact(string $name, bool $handicapped)
    {
        $query = $this->createQuery();
        $query->getQuerySettings()->setStoragePageIds($this->getStoragePids());

        $constraints = [];
        $constraints[] = $query->lessThanOrEqual('letters.letterStart', $name);
        $constraints[] = $query->greaterThanOrEqual('letters.letterEnd', $name);
        $constraints[] = $query->equals('handicapped', $handicapped);
        $constraints[] = $query->equals('isFallback', false);

        /** @var Contact|null $contact */
        $contact = $query->matching($query->logicalAnd($constraints))->execute()->getFirst();
        return $contact;
    }

    /**
     * Find a fallback for contact
     *
     * @param bool $handicapped
     * @return Contact|null
     */
    public function findFallback(bool $handicapped)
    {
        $query = $this->createQuery();
        $query->getQuerySettings()->setStoragePageIds($this->getStoragePids());

        $constraints = [];
        $constraints[] = $query->equals('isFallback', true);
        $constraints[] = $query->equals('handicapped', $handicapped);

        /** @var Contact|null $contact */
        $contact = $query->matching($query->logicalAnd($constraints))->execute()->getFirst();
        return $contact;
    }

    /**
     * Find a contact for service
     *
     * @param string $name
     * @param bool $selfReliance
     * @return Contact|null
     * @throws InvalidQueryException
     */
    public function findService(string $name, bool $selfReliance)
    {
        $query = $this->createQuery();
        $query->getQuerySettings()->setStoragePageIds($this->getStoragePids());

        $constraints = [];
        $constraints[] = $query->lessThanOrEqual('letters.letterStart', $name);
        $constraints[] = $query->greaterThanOrEqual('letters.letterEnd', $name);
        $constraints[] = $query->equals('selfReliance', $selfReliance);

        /** @var Contact|null $contact */
        $contact = $query->matching($query->logicalAnd($constraints))->execute()->getFirst();
        return $contact;
    }

    /**
     * Find fallback for service
     *
     * @return Contact|null
     */
    public function findFallbackForService()
    {
        $query = $this->createQuery();
        $query->getQuerySettings()->setStoragePageIds($this->getStoragePids());

        $constraints = [];
        $constraints[] = $query->equals('isFallback', true);

        /** @var Contact|null $contact */
        $contact = $query->matching($query->logicalAnd($constraints))->execute()->getFirst();
        return $contact;
    }

    public function getStoragePids(): array
    {
        return $this->storagePids;
    }

    public function setStoragePids(array $storagePids)
    {
        $this->storagePids = $storagePids;
    }
}
