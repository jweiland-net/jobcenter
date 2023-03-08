<?php

declare(strict_types=1);

/*
 * This file is part of the package jweiland/jobcenter.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

namespace JWeiland\Jobcenter\Domain\Repository;

use JWeiland\Jobcenter\Domain\Model\EmployerContact;
use TYPO3\CMS\Extbase\Persistence\QueryInterface;
use TYPO3\CMS\Extbase\Persistence\Repository;

/**
 * Repository to find contacts for employees
 */
class EmployerContactRepository extends Repository
{
    /**
     * @var array
     */
    protected $defaultOrderings = [
        'uid' => QueryInterface::ORDER_DESCENDING,
    ];

    /**
     * Find contact specialized for given zip
     */
    public function findContact(string $zip): ?EmployerContact
    {
        $query = $this->createQuery();

        /** @var EmployerContact|null $employerContact */
        $employerContact = $query->matching($query->equals('zip.zip', $zip))->execute()->getFirst();

        return $employerContact;
    }

    /**
     * Find fallback
     */
    public function findFallback(): ?EmployerContact
    {
        $query = $this->createQuery();

        /** @var EmployerContact|null $employerContact */
        $employerContact = $query->matching($query->equals('isFallback', true))->execute()->getFirst();

        return $employerContact;
    }
}
