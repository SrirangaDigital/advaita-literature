<?php

class data extends Controller {

	public function __construct() {
		
		parent::__construct();
	}

	public function insert() {

		$db = $this->model->db->useDB();
		$collection = $this->model->db->createCollection($db, ACHARYA_COLLECTION);

		$xml = simplexml_load_file(XML_SRC_URL . 'acharya.xml');

		foreach ($xml->entry as $entry) {

			$row = [];

			$row['id'] = (string) $entry->name->attributes()['id'];
			$row['name'] = (string) $entry->name;
			if(!empty($entry->period)) $row['period'] = (string) $entry->period;
			$row['bio'] = preg_replace('/<bio>(.*)<\/bio>/su', "$1", $entry->bio->asXML());

			if(isset($entry->works->work)) {
				
				$worksArray = [];
				foreach ($entry->works->work as $work) {

					$eachWork = [];;
					$eachWork['title'] = (string) $work->title;
					if(isset($work->remarks))
						$eachWork['remarks'] = preg_replace('/<remarks>(.*)<\/remarks>/su', "$1", $work->remarks->asXML());

					if((string) $work->attributes()['src'])
						$eachWork['source'] = (string) $work->attributes()['src'];

					array_push($worksArray, $eachWork);
				}
				$row['works'] = $worksArray;
			}
			$result = $collection->insertOne($row);
		}
	}
}

?>
