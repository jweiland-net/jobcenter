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
     */
    public function setLetterEnd(string $letterEnd)
    {
        $this->letterEnd = $letterEnd;
    }
}
