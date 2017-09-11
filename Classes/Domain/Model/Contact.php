<?php
namespace JWeiland\Jobcenter\Domain\Model;

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2015 Stefan Froemken <projects@jweiland.net>, jweiland.net
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 * @package jobcenter
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 */
class Contact extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

    /**
     * Salutation
     *
     * @var boolean
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
     * @var boolean
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
     * @var boolean
     */
    protected $isFallback = false;

    /**
     * __construct
     */
    public function __construct() {
        //Do not remove the next line: It would break the functionality
        $this->initStorageObjects();
    }

    /**
     * Initializes all \TYPO3\CMS\Extbase\Persistence\ObjectStorage properties.
     *
     * @return void
     */
    protected function initStorageObjects() {
        /**
         * Do not modify this method!
         * It will be rewritten on each save in the extension builder
         * You may modify the constructor of this class instead
         */
        $this->letters = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * Returns the salutation
     *
     * @return boolean $salutation
     */
    public function getSalutation() {
        return $this->salutation;
    }

    /**
     * Sets the salutation
     *
     * @param boolean $salutation
     * @return void
     */
    public function setSalutation($salutation) {
        $this->salutation = (bool)$salutation;
    }

    /**
     * Returns the name
     *
     * @return string $name
     */
    public function getName() {
        return $this->name;
    }

    /**
     * Sets the name
     *
     * @param string $name
     * @return void
     */
    public function setName($name) {
        $this->name = (string)$name;
    }

    /**
     * Returns the address
     *
     * @return string $address
     */
    public function getAddress() {
        return $this->address;
    }

    /**
     * Sets the address
     *
     * @param string $address
     * @return void
     */
    public function setAddress($address) {
        $this->address = (string)$address;
    }

    /**
     * Returns the roomNumber
     *
     * @return string $roomNumber
     */
    public function getRoomNumber() {
        return $this->roomNumber;
    }

    /**
     * Sets the roomNumber
     *
     * @param string $roomNumber
     * @return void
     */
    public function setRoomNumber($roomNumber) {
        $this->roomNumber = (string)$roomNumber;
    }

    /**
     * Returns the telephone
     *
     * @return string $telephone
     */
    public function getTelephone() {
        return $this->telephone;
    }

    /**
     * Sets the telephone
     *
     * @param string $telephone
     * @return void
     */
    public function setTelephone($telephone) {
        $this->telephone = (string)$telephone;
    }

    /**
     * Adds a Letter
     *
     * @param \JWeiland\Jobcenter\Domain\Model\Letter $letter
     * @return void
     */
    public function addLetter(\JWeiland\Jobcenter\Domain\Model\Letter $letter) {
        $this->letters->attach($letter);
    }

    /**
     * Removes a Letter
     *
     * @param \JWeiland\Jobcenter\Domain\Model\Letter $letterToRemove The Letter to be removed
     * @return void
     */
    public function removeLetter(\JWeiland\Jobcenter\Domain\Model\Letter $letterToRemove) {
        $this->letters->detach($letterToRemove);
    }

    /**
     * Returns the handicapped
     *
     * @return boolean handicapped
     */
    public function getHandicapped() {
        return $this->handicapped;
    }

    /**
     * Sets the handicapped
     *
     * @param bool $handicapped
     */
    public function setHandicapped($handicapped) {
        $this->handicapped = (bool)$handicapped;
    }

    /**
     * Returns the letters
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage $letters
     */
    public function getLetters() {
        return $this->letters;
    }

    /**
     * Sets the letters
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage $letters
     * @return void
     */
    public function setLetters(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $letters) {
        $this->letters = $letters;
    }

    /**
     * Returns the isFallback
     *
     * @return boolean $isFallback
     */
    public function getIsFallback() {
        return $this->isFallback;
    }

    /**
     * Sets the isFallback
     *
     * @param boolean $isFallback
     */
    public function setIsFallback($isFallback) {
        $this->isFallback = (bool)$isFallback;
    }

}