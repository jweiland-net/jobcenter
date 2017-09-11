<?php
namespace JWeiland\Jobcenter\Domain\Repository;

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
class ContactRepository extends \TYPO3\CMS\Extbase\Persistence\Repository {

	/**
	 * @var array
	 */
	protected $defaultOrderings = array(
		'uid' => \TYPO3\CMS\Extbase\Persistence\QueryInterface::ORDER_DESCENDING
	);

	/**
	 * find contact specialized for given name
	 *
	 * @param string $name
	 * @param integer $pid
	 * @param boolean $handicapped
	 * @return \JWeiland\Jobcenter\Domain\Model\Contact
	 */
	public function findContact($name, $pid, $handicapped) {
		$query = $this->createQuery();
		$query->getQuerySettings()->setStoragePageIds(array((int) $pid));

		$constraints = array();
		$constraints[] = $query->lessThanOrEqual('letters.letterStart', $name);
		$constraints[] = $query->greaterThanOrEqual('letters.letterEnd', $name);
		$constraints[] = $query->equals('handicapped', $handicapped);
		$constraints[] = $query->equals('isFallback', FALSE);

		return $query->matching($query->logicalAnd($constraints))->execute()->getFirst();
	}

	/**
	 * find fallback
	 *
	 * @param integer $pid
	 * @param boolean $handicapped
	 * @return \JWeiland\Jobcenter\Domain\Model\Contact
	 */
	public function findFallback($pid, $handicapped) {
		$query = $this->createQuery();
		$query->getQuerySettings()->setStoragePageIds(array((int) $pid));

		$constraints = array();
		$constraints[] = $query->equals('isFallback', TRUE);
		$constraints[] = $query->equals('handicapped', $handicapped);

		return $query->matching($query->logicalAnd($constraints))->execute()->getFirst();
	}

	/**
	 * find service places
	 *
	 * @param string $name
	 * @param integer $pid
	 * @return \JWeiland\Jobcenter\Domain\Model\Contact
	 */
	public function findService($name, $pid) {
		$query = $this->createQuery();
		$query->getQuerySettings()->setStoragePageIds(array((int) $pid));

		$constraints = array();
		$constraints[] = $query->lessThanOrEqual('letters.letterStart', $name);
		$constraints[] = $query->greaterThanOrEqual('letters.letterEnd', $name);

		return $query->matching($query->logicalAnd($constraints))->execute()->getFirst();
	}

	/**
	 * find fallback for service
	 *
	 * @param integer $pid
	 * @return \JWeiland\Jobcenter\Domain\Model\Contact
	 */
	public function findFallbackForService($pid) {
		$query = $this->createQuery();
		$query->getQuerySettings()->setStoragePageIds(array((int) $pid));

		$constraints = array();
		$constraints[] = $query->equals('isFallback', TRUE);

		return $query->matching($query->logicalAnd($constraints))->execute()->getFirst();
	}

}