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
use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;
use TYPO3\CMS\Extbase\Persistence\ObjectStorage;

/**
 * @package jobcenter
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 */
class EmployerContact extends AbstractEntity {

    /**
     * Salutation
     *
     * @var boolean
     */
    protected $salutation = FALSE;

    /**
     * FirstName
     *
     * @var string
     */
    protected $firstName = '';

    /**
     * LastName
     *
     * @var string
     */
    protected $lastName = '';

    /**
     * Address
     *
     * @var string
     */
    protected $address = '';

    /**
     * Zip
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<JWeiland\Jobcenter\Domain\Model\Zip>
     */
    protected $zip = null;

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
     * email
     *
     * @var string
     */
    protected $email = '';

    /**
     * IMage
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<TYPO3\CMS\Extbase\Domain\Model\FileReference>
     */
    protected $image = null;

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
        $this->zip = new ObjectStorage();
        $this->image = new ObjectStorage();
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
        $this->salutation = (bool) $salutation;
    }

    /**
     * Returns the firstName
     *
     * @return string $firstName
     */
    public function getFirstName() {
        return $this->firstName;
    }

    /**
     * Sets the firstName
     *
     * @param string $firstName
     * @return void
     */
    public function setFirstName($firstName) {
        $this->firstName = (string)$firstName;
    }

    /**
     * Returns the lastName
     *
     * @return string $lastName
     */
    public function getLastName() {
        return $this->lastName;
    }

    /**
     * Sets the lastName
     *
     * @param string $lastName
     * @return void
     */
    public function setLastName($lastName) {
        $this->lastName = (string)$lastName;
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
        $this->address = $address;
    }

    /**
     * Returns the zip
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage $zip
     */
    public function getZip() {
        return $this->zip;
    }

    /**
     * Sets the zip
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage $zip
     * @return void
     */
    public function setZip(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $zip) {
        $this->zip = $zip;
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
        $this->roomNumber = $roomNumber;
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
        $this->telephone = $telephone;
    }

    /**
     * Returns the email
     *
     * @return string $email
     */
    public function getEmail() {
        return $this->email;
    }

    /**
     * Sets the email
     *
     * @param string $email
     * @return void
     */
    public function setEmail($email) {
        $this->email = (string)$email;
    }

    /**
     * Returns the image
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage $image
     */
    public function getImage() {
        return $this->image;
    }

    /**
     * Sets the image
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage $image
     * @return void
     */
    public function setImage($image) {
        $this->image = $image;
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
        $this->isFallback = $isFallback;
    }

}