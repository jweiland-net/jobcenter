<?php

declare(strict_types=1);

/*
 * This file is part of the package jweiland/maps2.
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
     * @var array<string, mixed>
     */
    protected $defaultOrderings = [
        'uid' => QueryInterface::ORDER_DESCENDING,
    ];

    /**
     * Find contact specialized for given name
     *
     * @throws InvalidQueryException
     */
    public function findContact(string $name, int $pid, bool $handicapped, bool $selfReliance = false): ?Contact
    {
        $query = $this->createQuery();
        $query->getQuerySettings()->setStoragePageIds([$pid]);

        $constraints = [];
        $constraints[] = $query->lessThanOrEqual('letters.letterStart', $name);
        $constraints[] = $query->greaterThanOrEqual('letters.letterEnd', $name);
        $constraints[] = $query->equals('handicapped', $handicapped);
        $constraints[] = $query->equals('selfReliance', $selfReliance);
        $constraints[] = $query->equals('isFallback', false);

        /** @var Contact|null $contact */
        $contact = $query->matching($query->logicalAnd($constraints))->execute()->getFirst();

        if (!$contact instanceof Contact) {
            return $this->findFallback($pid, $handicapped, $selfReliance);
        }

        return $contact;
    }

    /**
     * Find a fallback for contact
     */
    protected function findFallback(int $pid, bool $handicapped, bool $selfReliance = false): ?Contact
    {
        $query = $this->createQuery();
        $query->getQuerySettings()->setStoragePageIds([$pid]);

        $constraints = [];
        $constraints[] = $query->equals('isFallback', true);
        $constraints[] = $query->equals('handicapped', $handicapped);
        $constraints[] = $query->equals('selfReliance', $selfReliance);

        /** @var Contact|null $contact */
        $contact = $query->matching($query->logicalAnd($constraints))->execute()->getFirst();

        return $contact;
    }

    /**
     * Find a contact for service
     *
     * @throws InvalidQueryException
     */
    public function findService(string $name, int $pid, bool $selfReliance): ?Contact
    {
        $query = $this->createQuery();
        $query->getQuerySettings()->setStoragePageIds([$pid]);

        $constraints = [];
        $constraints[] = $query->lessThanOrEqual('letters.letterStart', $name);
        $constraints[] = $query->greaterThanOrEqual('letters.letterEnd', $name);
        $constraints[] = $query->equals('selfReliance', $selfReliance);

        /** @var Contact|null $contact */
        $contact = $query->matching($query->logicalAnd($constraints))->execute()->getFirst();

        if (!$contact instanceof Contact) {
            return $this->findFallbackForService($pid, $selfReliance);
        }

        return $contact;
    }

    /**
     * Find fallback for service
     */
    protected function findFallbackForService(int $pid, bool $selfReliance = false): ?Contact
    {
        $query = $this->createQuery();
        $query->getQuerySettings()->setStoragePageIds([$pid]);

        $constraints = [];
        $constraints[] = $query->equals('isFallback', true);
        $constraints[] = $query->equals('selfReliance', $selfReliance);

        /** @var Contact|null $contact */
        $contact = $query->matching($query->logicalAnd($constraints))->execute()->getFirst();

        return $contact;
    }
}
