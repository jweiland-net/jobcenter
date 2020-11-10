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

    public function setLetterStart(string $letterStart): self
    {
        $this->letterStart = $letterStart;
        return $this;
    }

    public function getLetterEnd(): string
    {
        return $this->letterEnd;
    }

    public function setLetterEnd(string $letterEnd): self
    {
        $this->letterEnd = $letterEnd;
        return $this;
    }
}
