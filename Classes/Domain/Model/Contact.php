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
use TYPO3\CMS\Extbase\Persistence\ObjectStorage;

/**
 * Class Contact
 *
 * @package JWeiland\Jobcenter\Domain\Model
 */
class Contact extends AbstractEntity
{

    /**
     * Salutation
     *
     * @var bool
     */
    protected $salutation = false;

    /**
     * Name
     *
     * @var string
     */
    protected $name = '';

    /**
     * Address
     *
     * @var string
     */
    protected $address = '';

    /**
     * Room number
     *
     * @var string
     */
    protected $roomNumber = '';

    /**
     * Telephone
     *
     * @var string
     */
    protected $telephone = '';

    /**
     * Handicapped
     *
     * @var bool
     */
    protected $handicapped = false;

    /**
     * Letters
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\JWeiland\Jobcenter\Domain\Model\Letter>
     * @lazy
     */
    protected $letters;

    /**
     * is fallback
     *
     * @var bool
     */
    protected $isFallback = false;

    /**
     * __construct
     */
    public function __construct()
    {
        //Do not remove the next line: It would break the functionality
        $this->initStorageObjects();
    }

    /**
     * Initializes all \TYPO3\CMS\Extbase\Persistence\ObjectStorage properties.
     *
     * @return void
     */
    protected function initStorageObjects()
    {
        /**
         * Do not modify this method!
         * It will be rewritten on each save in the extension builder
         * You may modify the constructor of this class instead
         */
        $this->letters = new ObjectStorage();
    }

    /**
     * Returns the salutation
     *
     * @return bool $salutation
     */
    public function getSalutation(): bool
    {
        return $this->salutation;
    }

    /**
     * Sets the salutation
     *
     * @param bool $salutation
     * @return void
     */
    public function setSalutation(bool $salutation)
    {
        $this->salutation = $salutation;
    }

    /**
     * Returns the name
     *
     * @return string $name
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Sets the name
     *
     * @param string $name
     * @return void
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }

    /**
     * Returns the address
     *
     * @return string $address
     */
    public function getAddress(): string
    {
        return $this->address;
    }

    /**
     * Sets the address
     *
     * @param string $address
     * @return void
     */
    public function setAddress(string $address)
    {
        $this->address = $address;
    }

    /**
     * Returns the roomNumber
     *
     * @return string $roomNumber
     */
    public function getRoomNumber(): string
    {
        return $this->roomNumber;
    }

    /**
     * Sets the roomNumber
     *
     * @param string $roomNumber
     * @return void
     */
    public function setRoomNumber(string $roomNumber)
    {
        $this->roomNumber = $roomNumber;
    }

    /**
     * Returns the telephone
     *
     * @return string $telephone
     */
    public function getTelephone(): string
    {
        return $this->telephone;
    }

    /**
     * Sets the telephone
     *
     * @param string $telephone
     * @return void
     */
    public function setTelephone(string $telephone)
    {
        $this->telephone = $telephone;
    }

    /**
     * Adds a Letter
     *
     * @param Letter $letter
     * @return void
     */
    public function addLetter(Letter $letter)
    {
        $this->letters->attach($letter);
    }

    /**
     * Removes a Letter
     *
     * @param Letter $letterToRemove The Letter to be removed
     * @return void
     */
    public function removeLetter(Letter $letterToRemove)
    {
        $this->letters->detach($letterToRemove);
    }

    /**
     * Returns the handicapped
     *
     * @return bool handicapped
     */
    public function getHandicapped(): bool
    {
        return $this->handicapped;
    }

    /**
     * Sets the handicapped
     *
     * @param bool $handicapped
     */
    public function setHandicapped(bool $handicapped)
    {
        $this->handicapped = $handicapped;
    }

    /**
     * Returns the letters
     *
     * @return ObjectStorage $letters
     */
    public function getLetters(): ObjectStorage
    {
        return $this->letters;
    }

    /**
     * Sets the letters
     *
     * @param ObjectStorage $letters
     * @return void
     */
    public function setLetters(ObjectStorage $letters)
    {
        $this->letters = $letters;
    }

    /**
     * Returns the isFallback
     *
     * @return bool $isFallback
     */
    public function getIsFallback(): bool
    {
        return $this->isFallback;
    }

    /**
     * Sets the isFallback
     *
     * @param bool $isFallback
     */
    public function setIsFallback(bool $isFallback)
    {
        $this->isFallback = $isFallback;
    }
}
