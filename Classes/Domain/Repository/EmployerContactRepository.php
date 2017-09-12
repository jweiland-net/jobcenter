<?php
declare(strict_types=1);
namespace JWeiland\Jobcenter\Domain\Repository;

/*
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

use JWeiland\Jobcenter\Domain\Model\EmployerContact;
use TYPO3\CMS\Extbase\Persistence\QueryInterface;
use TYPO3\CMS\Extbase\Persistence\Repository;

/**
 * Class EmployerContactRepository
 *
 * @package JWeiland\Jobcenter\Domain\Repository
 */
class EmployerContactRepository extends Repository
{
    /**
     * @var array
     */
    protected $defaultOrderings = [
        'uid' => QueryInterface::ORDER_DESCENDING
    ];

    /**
     * find contact specialized for given zip
     *
     * @param string $zip
     * @return EmployerContact|object|null
     */
    public function findContact(string $zip)
    {
        $query = $this->createQuery();

        return $query->matching($query->equals('zip.zip', $zip))->execute()->getFirst();
    }

    /**
     * find fallback
     *
     * @return EmployerContact|object|null
     */
    public function findFallback()
    {
        $query = $this->createQuery();

        return $query->matching($query->equals('isFallback', true))->execute()->getFirst();
    }
}
