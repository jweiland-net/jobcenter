<?php

declare(strict_types=1);

/*
 * This file is part of the package jweiland/jobcenter.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

namespace JWeiland\Jobcenter\Domain\Repository;

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
        'uid' => QueryInterface::ORDER_DESCENDING,
    ];

    /**
     * Find contact specialized for given name
     *
     * @throws InvalidQueryException
     */
    public function findContact(string $name, bool $handicapped): ?Contact
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
     */
    public function findFallback(bool $handicapped): ?Contact
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
     * @throws InvalidQueryException
     */
    public function findService(string $name, bool $selfReliance): ?Contact
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
     */
    public function findFallbackForService(): ?Contact
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

    public function setStoragePids(array $storagePids): void
    {
        $this->storagePids = $storagePids;
    }
}
