<?php
declare(strict_types=1);
namespace JWeiland\Jobcenter\Domain\Model;

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

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;

/**
 * Class Zip
 *
 * @package JWeiland\Jobcenter\Domain\Model
 */
class Zip extends AbstractEntity
{
    /**
     * Zip
     *
     * @var string
     */
    protected $zip = '';

    /**
     * Returns the zip
     *
     * @return string $zip
     */
    public function getZip(): string
    {
        return $this->zip;
    }

    /**
     * Sets the zip
     *
     * @param string $zip
     * @return void
     */
    public function setZip(string $zip)
    {
        $this->zip = $zip;
    }
}
