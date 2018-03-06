<?php

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		is_login();
	}

	public function index()
	{
		$data = array(
			"js" 	=> "dashboard1.js",
			"pages"	=> "page/dashboard"
		);
		$this->template->utama("utama/main",$data);

	}

}

/* End of file home.php */
/* Location: ./application/controllers/home.php */