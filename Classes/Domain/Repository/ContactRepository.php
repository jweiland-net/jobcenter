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
    protected $defaultOrderings = [
        'uid' => QueryInterface::ORDER_DESCENDING
    ];

    /**
     * find contact specialized for given name
     *
     * @param string $name
     * @param integer $pid
     * @param boolean $handicapped
     * @return Contact|object|null
     * @throws InvalidQueryException
     */
    public function findContact($name, $pid, $handicapped)
    {
        $query = $this->createQuery();
        $query->getQuerySettings()->setStoragePageIds([(int)$pid]);

        $constraints = [];
        $constraints[] = $query->lessThanOrEqual('letters.letterStart', $name);
        $constraints[] = $query->greaterThanOrEqual('letters.letterEnd', $name);
        $constraints[] = $query->equals('handicapped', $handicapped);
        $constraints[] = $query->equals('isFallback', false);

        return $query->matching($query->logicalAnd($constraints))->execute()->getFirst();
    }

    /**
     * find fallback
     *
     * @param integer $pid
     * @param boolean $handicapped
     * @return Contact|object|null
     */
    public function findFallback($pid, $handicapped)
    {
        $query = $this->createQuery();
        $query->getQuerySettings()->setStoragePageIds([(int)$pid]);

        $constraints = [];
        $constraints[] = $query->equals('isFallback', true);
        $constraints[] = $query->equals('handicapped', $handicapped);

        return $query->matching($query->logicalAnd($constraints))->execute()->getFirst();
    }

    /**
     * find service places
     *
     * @param string $name
     * @param integer $pid
     * @return Contact|object
     * @throws InvalidQueryException
     */
    public function findService($name, $pid)
    {
        $query = $this->createQuery();
        $query->getQuerySettings()->setStoragePageIds([(int)$pid]);

        $constraints = [];
        $constraints[] = $query->lessThanOrEqual('letters.letterStart', $name);
        $constraints[] = $query->greaterThanOrEqual('letters.letterEnd', $name);

        return $query->matching($query->logicalAnd($constraints))->execute()->getFirst();
    }

    /**
     * find fallback for service
     *
     * @param integer $pid
     * @return Contact|object
     */
    public function findFallbackForService($pid)
    {
        $query = $this->createQuery();
        $query->getQuerySettings()->setStoragePageIds([(int)$pid]);

        $constraints = [];
        $constraints[] = $query->equals('isFallback', true);

        return $query->matching($query->logicalAnd($constraints))->execute()->getFirst();
    }
}
