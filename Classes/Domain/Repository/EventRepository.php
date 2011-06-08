<?php
/***************************************************************
*  Copyright notice
*
*  (c)  TODO - INSERT COPYRIGHT
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
 * Repository for Tx_F2microagendapsv_Domain_Model_Event
 *
 * @version $Id$
 * @copyright Copyright belongs to the respective authors
 * @license http://bit.ly/kqimD GNU General Public License, version 3 or later
 */
class Tx_F2microagendapsv_Domain_Repository_EventRepository extends Tx_Extbase_Persistence_Repository {

	/**
	 * Latests events
	 *
	 * @param	integer	$offset	Offset of returned records, <=0 if no limit
	 * @param	integer	$limit	Limit of the number of recors, <=0 if no limit
	 * @return	array<Tx_F2microagendapsv_Domain_Model_Event>	array with events
	 */
    public function findAll($time = 0) {
        $query = $this->createQuery();
        if ($time > 0) {
            $query->matching($query->greaterThanOrEqual('event_date',$time));
        }
        $query->setOrderings(
            array(
                'event_date' => Tx_Extbase_Persistence_QueryInterface::ORDER_ASCENDING
            )
        );
        return $query->execute();
    }

	/**
	 * Events for display in the homepage ordered by date desc
	 *
	 * @param	integer	$limit	Limit of the number of latests events
	 * @return	array<Tx_F2microagendapsv_Domain_Model_Event>	array with events
	 */
	public function findHomepageEvents($limit = 3, $time = 0) {
		$query = $this->createQuery();
        if ($time > 0) {
            $query->matching($query->greaterThanOrEqual('event_date',$time));
        }
		$query->equals('is_in_home', 1);
		$query->setLimit($limit);
		$query->setOrderings(
			array(
				'event_date' => Tx_Extbase_Persistence_QueryInterface::ORDER_ASCENDING
			)
		);
		return $query->execute();
	}
}
?>
