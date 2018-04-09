<?php

class profileModel extends Model {

	public function __construct() {

		parent::__construct();
	}

	public function getAcharyaProfile($id){
		
		$db = $this->db->useDB();

		$collection = $this->db->selectCollection($db, ACHARYA_COLLECTION);
		$result = $collection->findOne(['id' => $id ]);

		return $result;
	}

	public function getGranthakaraProfile($id){
		
		$db = $this->db->useDB();

		$collection = $this->db->selectCollection($db, GRANTHAKARA_COLLECTION);
		$result = $collection->findOne(['id' => $id ]);

		return $result;
	}
}
?>
