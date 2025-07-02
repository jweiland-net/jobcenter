<?php

declare(strict_types=1);

/*
 * This file is part of the package jweiland/maps2.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

namespace JWeiland\Jobcenter\Domain\Model;

use TYPO3\CMS\Extbase\Annotation\ORM\Lazy;
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
     * @var ObjectStorage<Letter>
     */
    #[Lazy]
    protected $letters;

    public function __construct()
    {
        $this->letters = new ObjectStorage();
    }

    /**
     * Called again with initialize object, as fetching an entity from the DB does not use the constructor
     */
    public function initializeObject(): void
    {
        $this->letters = $this->letters ?? new ObjectStorage();
    }

    public function getSalutation(): bool
    {
        return $this->salutation;
    }

    public function setSalutation(bool $salutation): void
    {
        $this->salutation = $salutation;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getAddress(): string
    {
        return $this->address;
    }

    public function setAddress(string $address): void
    {
        $this->address = $address;
    }

    public function getRoomNumber(): string
    {
        return $this->roomNumber;
    }

    public function setRoomNumber(string $roomNumber): void
    {
        $this->roomNumber = $roomNumber;
    }

    public function getTelephone(): string
    {
        return $this->telephone;
    }

    public function setTelephone(string $telephone): void
    {
        $this->telephone = $telephone;
    }

    public function getHandicapped(): bool
    {
        return $this->handicapped;
    }

    public function setHandicapped(bool $handicapped): void
    {
        $this->handicapped = $handicapped;
    }

    public function getIsFallback(): bool
    {
        return $this->isFallback;
    }

    public function setIsFallback(bool $isFallback): void
    {
        $this->isFallback = $isFallback;
    }

    public function getSelfReliance(): bool
    {
        return $this->selfReliance;
    }

    public function setSelfReliance(bool $isSelfReliance): void
    {
        $this->selfReliance = $isSelfReliance;
    }

    public function getLetters(): ObjectStorage
    {
        return $this->letters;
    }

    public function setLetters(ObjectStorage $letters): void
    {
        $this->letters = $letters;
    }

    public function addLetter(Letter $letter): void
    {
        $this->letters->attach($letter);
    }

    public function removeLetter(Letter $letterToRemove): void
    {
        $this->letters->detach($letterToRemove);
    }
}
