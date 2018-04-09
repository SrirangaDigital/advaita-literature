<?php

class profile extends Controller {

	public function __construct() {
		
		parent::__construct();
	}

	public function acharya($query = [], $id = '') {

		$profile = $this->model->getAcharyaProfile($id);
		($profile) ? $this->view('profile/acharya', $profile) : $this->view('error/index');
	}

	public function granthakara($query = [], $id = '') {

		$profile = $this->model->getGranthakaraProfile($id);
		($profile) ? $this->view('profile/granthakara', $profile) : $this->view('error/index');
	}
}

?>
