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

			$entry->bio = preg_replace('/<bio>(.*)<\/bio>/su', "$1", $entry->bio->asXML());

			if(isset($entry->works->work)) {
			
				foreach ($entry->works->work as $work) {

					if(isset($work->remarks))
						$work->remarks = preg_replace('/<remarks>(.*)<\/remarks>/su', "$1", $work->remarks->asXML());

					if((string) $work->attributes()['src'])
						$work->source = $work->attributes()['src'];

					unset($work->attributes()['src']);
				}
			}

			$result = $collection->insertOne($entry);
		}
	}
}

?>
