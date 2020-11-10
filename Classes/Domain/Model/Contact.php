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
use TYPO3\CMS\Extbase\Persistence\ObjectStorage;

/**
 * Domain model which will be filled with data from "tx_jobcenter_domain_model_contact"
 */
class Contact extends AbstractEntity
{
    /**
     * @var bool
     */
    protected $salutation = false;

    /**
     * @var string
     */
    protected $name = '';

    /**
     * @var string
     */
    protected $address = '';

    /**
     * @var string
     */
    protected $roomNumber = '';

    /**
     * @var string
     */
    protected $telephone = '';

    /**
     * @var bool
     */
    protected $handicapped = false;

    /**
     * @var bool
     */
    protected $isFallback = false;

    /**
     * @var bool
     */
    protected $selfReliance = false;

    /**
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\JWeiland\Jobcenter\Domain\Model\Letter>
     * @TYPO3\CMS\Extbase\Annotation\ORM\Lazy
     */
    protected $letters;

    public function __construct()
    {
        $this->letters = new ObjectStorage();
    }

    public function getSalutation(): bool
    {
        return $this->salutation;
    }

    public function setSalutation(bool $salutation): self
    {
        $this->salutation = $salutation;
        return  $this;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;
        return $this;
    }

    public function getAddress(): string
    {
        return $this->address;
    }

    public function setAddress(string $address): self
    {
        $this->address = $address;
        return $this;
    }

    public function getRoomNumber(): string
    {
        return $this->roomNumber;
    }

    public function setRoomNumber(string $roomNumber): self
    {
        $this->roomNumber = $roomNumber;
        return $this;
    }

    public function getTelephone(): string
    {
        return $this->telephone;
    }

    public function setTelephone(string $telephone): self
    {
        $this->telephone = $telephone;
        return $this;
    }

    public function getHandicapped(): bool
    {
        return $this->handicapped;
    }

    public function setHandicapped(bool $handicapped): self
    {
        $this->handicapped = $handicapped;
        return $this;
    }

    public function getIsFallback(): bool
    {
        return $this->isFallback;
    }

    public function setIsFallback(bool $isFallback): self
    {
        $this->isFallback = $isFallback;
        return $this;
    }

    public function getSelfReliance(): bool
    {
        return $this->selfReliance;
    }

    public function setSelfReliance(bool $isSelfReliance): self
    {
        $this->selfReliance = $isSelfReliance;
        return $this;
    }

    public function getLetters(): ObjectStorage
    {
        return $this->letters;
    }

    public function setLetters(ObjectStorage $letters): self
    {
        $this->letters = $letters;
        return $this;
    }

    public function addLetter(Letter $letter): self
    {
        $this->letters->attach($letter);
        return $this;
    }

    public function removeLetter(Letter $letterToRemove): self
    {
        $this->letters->detach($letterToRemove);
        return $this;
    }
}
