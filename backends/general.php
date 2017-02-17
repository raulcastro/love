<?php

$root = $_SERVER['DOCUMENT_ROOT'];

/**
 * Includes the file /models/Layout_Model.php 
 * in order to interact with the database
 */
require_once $root.'/models/Layout_Model.php';


/**
 * Contains the classes for access to the basic app info without log-in
 *
 * @package    Reservation System
 * @subpackage Tropical Casa Blanca Hotel
 * @license    http://opensource.org/licenses/gpl-license.php  GNU Public License
 * @author     Raul Castro <rd.castro.silva@gmail.com>
 */
class generalFrontBackend
{
	protected  $model;
	
	/**
	 * Initialize a class, the model one
	 */
	public function __construct()
	{
		$this->model = new Layout_Model();
	}
	
	/**
	 * Based on the section it returns the right info that could be propagated along the application
	 * 
	 * @param string $section
	 * @return array Array with the asked info of the application 
	 */
	public function loadBackend($section = '')
	{
		$data 		= array();
		
// 		Info of the Application
		
		$appInfoRow = $this->model->getGeneralAppInfo();
		
		$appInfo = array( 
				'title' 		=> $appInfoRow['title'],
				'siteName' 		=> $appInfoRow['site_name'],
				'url' 			=> $appInfoRow['url'],
				'content' 		=> $appInfoRow['content'],
				'description'	=> $appInfoRow['description'],
				'keywords' 		=> $appInfoRow['keywords'],
				'location'		=> $appInfoRow['location'],
				'creator' 		=> $appInfoRow['creator'],
				'creatorUrl' 	=> $appInfoRow['creator_url'],
				'twitter' 		=> $appInfoRow['twitter'],
				'facebook' 		=> $appInfoRow['facebook'],
				'googleplus' 	=> $appInfoRow['googleplus'],
				'pinterest' 	=> $appInfoRow['pinterest'],
				'linkedin' 		=> $appInfoRow['linkedin'],
				'youtube' 		=> $appInfoRow['youtube'],
				'instagram'		=> $appInfoRow['instagram'],
				'email'			=> $appInfoRow['email'],
				'lang'			=> $appInfoRow['lang']
		);
		
		$data['appInfo'] = $appInfo;
		
		switch ($section)
		{
			case 'index':
				$data['mainGallery'] = $this->model->getMainGallery();
				$data['sliders'] = $this->model->getSliders();
				$data['destinations'] = $this->model->getAllDestinations();
			break;
			
			
			
			case 'actividades':
				$from = $_GET['from'];
				$to = $_GET['to'];
				$kind = $_GET['kind'];
				
				if ($from && $to)
				{
					if ($kind=="voluntariado")
					{
						$newsArray 		= $this->model->getAllActividadesRangeVoluntariado($from, $to);
					}
					else 
					{
						$newsArray 		= $this->model->getAllActividadesRange($from, $to);
					}
				}
				else
				{
					$newsArray 			= $this->model->getLastTwoActividades();
				}
				
				$linkInfo			= $this->model->getLinkByCode('actividades');
				$data['linkInfo'] 	= $linkInfo;
				
				$data['actividades'] 	= $newsArray;
			break;
			
			
			
			default:
			break;
		}
		
		return $data;
	}
}

$backend = new generalFrontBackend();

