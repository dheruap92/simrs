<?php 

class template {

	protected $_ci;
	public function __construct() {
		$this->_ci = &get_instance();
	}

	function utama($content,$data=NULL) {
		$data['header']      = $this->_ci->load->view("utama/template/header",$data,TRUE);
		$data['content']     = $this->_ci->load->view($content,$data,TRUE);
		$data['footer']      = $this->_ci->load->view("utama/template/footer",$data,TRUE);
	
		$this->_ci->load->view('utama/index',$data);
	}

	function text_footer() {
		echo '<footer class="footer"> © 2018 mcdhe </footer>';
	}


}