<?php
declare(strict_types=1);
namespace JWeiland\Jobcenter\Domain\Model;

/**
 * This file is part of the "jobcenter" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 */

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;

/**
 * Domain model which will be filled with data from "tx_jobcenter_domain_model_zip"
 */
class Zip extends AbstractEntity
{
    /**
     * @var string
     */
    protected $zip = '';

    public function getZip(): string
    {
        return $this->zip;
    }

    public function setZip(string $zip): self
    {
        $this->zip = $zip;
        return $this;
    }
}
