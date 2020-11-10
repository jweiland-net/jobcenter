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
     * @var bool
     */
    protected $salutation = false;

    /**
     * @var string
     */
    protected $firstName = '';

    /**
     * @var string
     */
    protected $lastName = '';

    /**
     * @var string
     */
    protected $address = '';

    /**
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<JWeiland\Jobcenter\Domain\Model\Zip>
     */
    protected $zip;

    /**
     * @var string
     */
    protected $roomNumber = '';

    /**
     * @var string
     */
    protected $telephone = '';

    /**
     * @var string
     */
    protected $email = '';

    /**
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<TYPO3\CMS\Extbase\Domain\Model\FileReference>
     */
    protected $image;

    /**
     * @var bool
     */
    protected $isFallback = false;

    public function __construct()
    {
        $this->zip = new ObjectStorage();
        $this->image = new ObjectStorage();
    }

    public function getSalutation(): bool
    {
        return $this->salutation;
    }

    public function setSalutation(bool $salutation): self
    {
        $this->salutation = $salutation;
        return $this;
    }

    public function getFirstName(): string
    {
        return $this->firstName;
    }

    public function setFirstName(string $firstName): self
    {
        $this->firstName = $firstName;
        return $this;
    }

    public function getLastName(): string
    {
        return $this->lastName;
    }

    public function setLastName(string $lastName): self
    {
        $this->lastName = $lastName;
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

    public function getZip(): ObjectStorage
    {
        return $this->zip;
    }

    public function setZip(ObjectStorage $zip): self
    {
        $this->zip = $zip;
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

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;
        return $this;
    }

    public function getImage(): ObjectStorage
    {
        return $this->image;
    }

    public function setImage(ObjectStorage $image): self
    {
        $this->image = $image;
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
}
