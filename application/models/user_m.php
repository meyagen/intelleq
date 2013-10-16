<?php
class User_M extends MY_Model
{
	
	protected $_table_name = 'users';
	protected $_order_by = 'name';
	public $rules = array(
		'email' => array(
			'field' => 'email', 
			'label' => 'Email', 
			'rules' => 'trim|required|valid_email|xss_clean'
		), 
		'password' => array(
			'field' => 'password', 
			'label' => 'Password', 
			'rules' => 'trim|required'
		)
	);

	public $rules_admin = array(
		'name' => array(
			'field' => 'name', 
			'label' => 'Name', 
			'rules' => 'trim|required|xss_clean'
		), 
		'email' => array(
			'field' => 'email', 
			'label' => 'Email', 
			'rules' => 'trim|required|valid_email|callback__unique_email|xss_clean'
		), 
		'password' => array(
			'field' => 'password', 
			'label' => 'Password', 
			'rules' => 'trim|matches[password_confirm]'
		),
		'password_confirm' => array(
			'field' => 'password_confirm', 
			'label' => 'Confirm password', 
			'rules' => 'trim|matches[password]'
		),
	);

	function __construct (){
		parent::__construct();
	}

	public function login(){
		$user = $this->get_by(array(
			'email' => $this->input->post('email'),
			'password' => $this->hash($this->input->post('password')),
		), TRUE);
		
		if (count($user)) {
			//Log in user
			$data = array(
				'adminname' => $user->name,
				'adminemail' => $user->email,
				'adminid' => $user->id,
				'adminloggedin' => TRUE,
			);

			$this->session->set_userdata($data);
			return true;
		}
		else
			return false;
	}

	public function logout(){
		$this->session->sess_destroy();
	}

	public function loggedin(){
		return (bool) $this->session->userdata('adminloggedin');
	}
	
	public function get_new(){
		$user = new stdClass();
		$user->name = '';
		$user->email = '';
		$user->password = '';

		return $user;
	}

	public function hash($string){
		return hash('sha512', $string . config_item('encryption_key'));
	}

	function search_admin($name){
		$this->db->where('email', $name);
		$query = $this->db->get('users');

		if($query->num_rows > 0)
			return $query->row();

		else{
			$this->db->where('name', $name);
			$query = $this->db->get('users');
			if($query->num_rows > 0)
				return $query->row();
		}

		return null;
	}

	function search_member($name){
		$this->db->where('username', $name);
		$query = $this->db->get('membership');

		if($query->num_rows > 0)
			return $query->row();
		
		$this->db->where('email_address', $name);
		$query = $this->db->get('membership');
		if($query->num_rows > 0)
			return $query->row();

		$string = explode(" ", $name);
		$this->db->where('last_name', $string[count($string)-1]);
		$query = $this->db->get('membership');
		if($query->num_rows > 0)
			return $query->row();

		$this->db->where('first_name', $string[0]);
		$query = $this->db->get('membership');
		if($query->num_rows > 0)
			return $query->row();

		$this->db->where('first_name', $string[0] ." " .$string[1]);
		$query = $this->db->get('membership');
		if($query->num_rows > 0)
			return $query->row();

		return null;
	}

	function activate($id){
		$this->db->where('id', $id);
		$this->db->update('membership', array('activate' => 'true'));
	}

	function deactivate($id){
		$this->db->where('id', $id);
		$this->db->update('membership', array('activate' => 'false'));
	}

}