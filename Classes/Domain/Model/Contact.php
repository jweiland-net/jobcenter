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
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\JWeiland\Jobcenter\Domain\Model\Letter>
     * @lazy
     */
    protected $letters;

    /**
     * @var bool
     */
    protected $isFallback = false;

    public function __construct()
    {
        $this->letters = new ObjectStorage();
    }

    public function getSalutation(): bool
    {
        return $this->salutation;
    }

    public function setSalutation(bool $salutation)
    {
        $this->salutation = $salutation;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function getAddress(): string
    {
        return $this->address;
    }

    public function setAddress(string $address)
    {
        $this->address = $address;
    }

    public function getRoomNumber(): string
    {
        return $this->roomNumber;
    }

    public function setRoomNumber(string $roomNumber)
    {
        $this->roomNumber = $roomNumber;
    }

    public function getTelephone(): string
    {
        return $this->telephone;
    }

    public function setTelephone(string $telephone)
    {
        $this->telephone = $telephone;
    }

    public function addLetter(Letter $letter)
    {
        $this->letters->attach($letter);
    }

    public function removeLetter(Letter $letterToRemove)
    {
        $this->letters->detach($letterToRemove);
    }

    public function getHandicapped(): bool
    {
        return $this->handicapped;
    }

    public function setHandicapped(bool $handicapped)
    {
        $this->handicapped = $handicapped;
    }

    public function getLetters(): ObjectStorage
    {
        return $this->letters;
    }

    public function setLetters(ObjectStorage $letters)
    {
        $this->letters = $letters;
    }

    public function getIsFallback(): bool
    {
        return $this->isFallback;
    }

    public function setIsFallback(bool $isFallback)
    {
        $this->isFallback = $isFallback;
    }
}
