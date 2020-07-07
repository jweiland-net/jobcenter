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
 * Domain model which will be filled with data from "tx_jobcenter_domain_model_employer_contact"
 */
class EmployerContact extends AbstractEntity
{
    /**
     * Salutation
     *
     * @var bool
     */
    protected $salutation = false;

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
    protected $zip;

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
    protected $image;

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
     */
    protected function initStorageObjects()
    {
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
     */
    public function setSalutation(bool $salutation)
    {
        $this->salutation = $salutation;
    }

    /**
     * Returns the firstName
     *
     * @return string $firstName
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    /**
     * Sets the firstName
     *
     * @param string $firstName
     */
    public function setFirstName(string $firstName)
    {
        $this->firstName = $firstName;
    }

    /**
     * Returns the lastName
     *
     * @return string $lastName
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }

    /**
     * Sets the lastName
     *
     * @param string $lastName
     */
    public function setLastName(string $lastName)
    {
        $this->lastName = $lastName;
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
     */
    public function setAddress(string $address)
    {
        $this->address = $address;
    }

    /**
     * Returns the zip
     *
     * @return ObjectStorage $zip
     */
    public function getZip(): ObjectStorage
    {
        return $this->zip;
    }

    /**
     * Sets the zip
     *
     * @param ObjectStorage $zip
     */
    public function setZip(ObjectStorage $zip)
    {
        $this->zip = $zip;
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
     */
    public function setTelephone(string $telephone)
    {
        $this->telephone = $telephone;
    }

    /**
     * Returns the email
     *
     * @return string $email
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * Sets the email
     *
     * @param string $email
     */
    public function setEmail(string $email)
    {
        $this->email = $email;
    }

    /**
     * Returns the image
     *
     * @return ObjectStorage $image
     */
    public function getImage(): ObjectStorage
    {
        return $this->image;
    }

    /**
     * Sets the image
     *
     * @param ObjectStorage $image
     */
    public function setImage(ObjectStorage $image)
    {
        $this->image = $image;
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
