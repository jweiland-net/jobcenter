<?php
declare(strict_types=1);
namespace JWeiland\Jobcenter\Domain\Repository;

/**
 * This file is part of the "jobcenter" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 */

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
