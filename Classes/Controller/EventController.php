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
 * Controller for the Event object
 *
 * @version $Id$
 * @copyright Copyright belongs to the respective authors
 * @license http://bit.ly/kqimD GNU General Public License, version 3 or later
 */

/**
 * MVC controller for listing events
 *
 * @author fernando
 *
 */
class Tx_F2microagendaPsv_Controller_EventController extends Tx_Extbase_MVC_Controller_ActionController {

	/**
	 * @var Tx_F2microagendaPsv_Domain_Repository_EventRepository
	 */
	protected $eventRepository;

	/**
	 * Initializes the current action
	 *
	 * @return void
	 */
	protected function initializeAction() {
		$this->eventRepository = t3lib_div::makeInstance('Tx_F2microagendaPsv_Domain_Repository_EventRepository');
	}




	/**
	 * list action
	 *
	 * @return string The rendered list action
	 */
	public function listAction() {
		$limit = t3lib_div::intval_positive($this->settings['listLimit']);
		if ($limit) {
			$this->view->assign('events', $this->eventRepository->findAll($offset = 0, $limit));
		} else {
			$this->view->assign('events', $this->eventRepository->findAll());
		}
	}

	/**
	 * List with the events for the home page
	 *
	 * @return string The rendered list action
	 */
	public function listHomeAction() {
		$limit = t3lib_div::intval_positive($this->settings['listHomepageLimit']);

		$this->view->assign('events', $this->eventRepository->findHomepageEvents($limit));
	}

	/**
	 * Lists all events fron an offset if set
	 *
	 * @return string The rendered list action
	 */
	public function listAllAction() {
		$offset = t3lib_div::intval_positive($this->settings['listLimit']);
		$limit = t3lib_div::intval_positive($this->settings['listArchiveLimit']);

		$this->view->assign('events', $this->eventRepository->findAll($offset, $limit));
	}
}
?>