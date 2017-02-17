<?php
$root = $_SERVER['DOCUMENT_ROOT'];
require_once $root.'/Framework/Front_Default_Header.php';

/**
 * Get the general info of the application
 *
 * @package    Reservation System
 * @subpackage Tropical Casa Blanca Hotel
 * @license    http://opensource.org/licenses/gpl-license.php  GNU Public License
 * @author     Raul Castro <rd.castro.silva@gmail.com>
 */
class Layout_Model
{
    private $db; 
	
	public function __construct()
	{
		$this->db = new Mysqli_Tool(DB_HOST, DB_USER, DB_PASS, DB_NAME);
	}
	
	/**
	 * getGeneralAppInfo
	 *
	 * get all the info that from the table app_info, this is about the application
	 * the name, url, creator and so
	 *
	 * @return array row containing the info
	 */
	
	public function getGeneralAppInfo()
	{
		try {
			$query = 'SELECT * FROM app_info';
	
			return $this->db->getRow($query);
	
		} catch (Exception $e) {
			return false;
		}
	}
	
	public function getSliders()
	{
		try {
			$query = 'SELECT * FROM general_gallery ORDER BY picture_id DESC';
				
			return $this->db->getArray($query);
				
		} catch (Exception $e) {
			return false;
		}
	}
	
	public function getMainGallery()
	{
		try {
			$query = 'SELECT * FROM main_gallery';
			return $this->db->getArray($query);
		} catch (Exception $e) {
			return false;
		}
	}
	
	public function getAllDestinations()
	{
		try {
			$query = 'SELECT * FROM destinations ORDER BY destination_id DESC';
				
			return $this->db->getArray($query);
		} catch (Exception $e) {
			return false;
		}
	}

	
// 	public static function ()
// 	{
// 		try {
			
// 		} catch (Exception $e) {
// 			return false; 
// 		}
// 	}

	
}
