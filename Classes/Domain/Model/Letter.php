<?php

declare(strict_types=1);

/*
 * This file is part of the package jweiland/maps2.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

namespace JWeiland\Jobcenter\Domain\Model;

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;

/**
 * Domain model which will be filled with data from "tx_jobcenter_domain_model_letter"
 */
class Letter extends AbstractEntity
{
    /**
     * @var string
     */
    protected $letterStart = '';

    /**
     * @var string
     */
    protected $letterEnd = '';

    public function getLetterStart(): string
    {
        return $this->letterStart;
    }

    public function setLetterStart(string $letterStart): void
    {
        $this->letterStart = $letterStart;
    }

    public function getLetterEnd(): string
    {
        return $this->letterEnd;
    }

    public function setLetterEnd(string $letterEnd): void
    {
        $this->letterEnd = $letterEnd;
    }
}
