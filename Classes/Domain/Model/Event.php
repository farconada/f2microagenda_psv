<?php

/***************************************************************
*  Copyright notice
*
*  (c) 2010
*  All rights reserved
*
*  This script is part of the TYPO3 project. The TYPO3 project is
*  free software; you can redistribute it and/or modify
*  it under the terms of the GNU General Public License as published by
*  the Free Software Foundation; either version 2 of the License, or
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
 * Eventos
 *
 * @version $Id$
 * @copyright Copyright belongs to the respective authors
 * @license http://bit.ly/kqimD GNU General Public License, version 3 or later
 */
class Tx_F2microagendaPsv_Domain_Model_Event extends Tx_Extbase_DomainObject_AbstractEntity {

	/**
	 * Event Date
	 * @var DateTime
	 * @validate NotEmpty
	 */
	protected $eventDate;

	/**
	 * place
	 * @var string
	 */
	protected $place;

	/**
	 * country
	 * @var string
	 */
	protected $country;

	/**
	 * gmapLink
	 * @var string
	 */
	protected $gmapLink;

	/**
	 * ticketsLink
	 * @var string
	 */
	protected $ticketsLink;

	/**
	 * isInHome
	 * @var boolean
	 */
	protected $isInHome;



	/**
	 * Setter for eventDate
	 *
	 * @param	DateTime	$eventDate	Event Date
	 * @return void
	 */
	public function setEventDate(DateTime $eventDate) {
		$this->eventDate = $eventDate;
	}

	/**
	 * Getter for eventDate
	 *
	 * @return DateTime Event Date
	 */
	public function getEventDate() {
		return $this->eventDate;
	}

	/**
	 * Setter for place
	 *
	 * @param string $place place
	 * @return void
	 */
	public function setPlace($place) {
		$this->place = $place;
	}

	/**
	 * Getter for place
	 *
	 * @return string place
	 */
	public function getPlace() {
		return $this->place;
	}

	/**
	 * Setter for country
	 *
	 * @param string $country country
	 * @return void
	 */
	public function setCountry($country) {
		$this->country = $country;
	}

	/**
	 * Getter for country
	 *
	 * @return string country
	 */
	public function getCountry() {
		return $this->country;
	}

	/**
	 * Setter for gmapLink
	 *
	 * @param string $gmapLink gmapLink
	 * @return void
	 */
	public function setGmapLink($gmapLink) {
		$this->gmapLink = $gmapLink;
	}

	/**
	 * Getter for gmapLink
	 *
	 * @return string gmapLink
	 */
	public function getGmapLink() {
		return $this->gmapLink;
	}

	/**
	 * Setter for ticketsLink
	 *
	 * @param string $ticketsLink ticketsLink
	 * @return void
	 */
	public function setTicketsLink($ticketsLink) {
		$this->ticketsLink = $ticketsLink;
	}

	/**
	 * Getter for ticketsLink
	 *
	 * @return string ticketsLink
	 */
	public function getTicketsLink() {
		return $this->ticketsLink;
	}

	/**
	 * Setter for isInHome
	 *
	 * @param boolean $isInHome isInHome
	 * @return void
	 */
	public function setIsInHome($isInHome) {
		$this->isInHome = $isInHome;
	}

	/**
	 * Getter for isInHome
	 *
	 * @return boolean isInHome
	 */
	public function getIsInHome() {
		return $this->isInHome;
	}

	/**
	 * Returns the boolean state of isInHome
	 *
	 * @return boolean The state of isInHome
	 */
	public function isInHome() {
		return $this->getIsInHome();
	}

}
?>