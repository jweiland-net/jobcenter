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
 * Class Letter
 *
 * @package JWeiland\Jobcenter\Domain\Model
 */
class Letter extends AbstractEntity
{
    /**
     * Letter start
     *
     * @var string
     */
    protected $letterStart = '';

    /**
     * Letter end
     *
     * @var string
     */
    protected $letterEnd = '';

    /**
     * Returns the letterStart
     *
     * @return string $letterStart
     */
    public function getLetterStart(): string
    {
        return $this->letterStart;
    }

    /**
     * Sets the letterStart
     *
     * @param string $letterStart
     * @return void
     */
    public function setLetterStart(string $letterStart)
    {
        $this->letterStart = $letterStart;
    }

    /**
     * Returns the letterEnd
     *
     * @return string $letterEnd
     */
    public function getLetterEnd(): string
    {
        return $this->letterEnd;
    }

    /**
     * Sets the letterEnd
     *
     * @param string $letterEnd
     * @return void
     */
    public function setLetterEnd(string $letterEnd)
    {
        $this->letterEnd = $letterEnd;
    }
}
