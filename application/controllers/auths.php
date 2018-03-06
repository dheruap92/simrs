<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auths extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}	

	public function index()
	{
		$data = array(
			"js" => "login.js"
		);
		$this->template->utama('utama/login',$data);		
	}

	public function cekLogin() {
		$username = $this->input->post('username');
		$password = md5($this->input->post('password'));
		$this->db->where("username",$username);
		$this->db->where("password",$password);
		$this->db->join("a_user_group","a_user_group.id_user_group=a_users.groups");
		$user = $this->db->get('a_users');
		if ($user->num_rows()>0) {
			$data = $user->row_array();
			$newdata = array(
	            'id_users' => $data['id_user']."xx86",
	            'username' => $data['username'],
	            'akses'	   => $data['group'],
	        );	
	        $this->session->set_userdata($newdata);
        	redirect('home');
		} else {
			$this->session->set_flashdata('status_login', 'Username dan Password Salah');
			redirect("auths");
		}
		
        
	}

	public function logout() {
		$this->session->unset_userdata('id_users');
		redirect('auths');
	}
}

/* End of file auth.php */
/* Location: ./application/controllers/auth.php */