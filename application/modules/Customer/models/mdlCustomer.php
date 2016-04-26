<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class mdlCustomer extends CI_Model {
	
	public function __construct(){
		parent:: __construct();
	}
	
	function getDentist($options = array())
	{
		//verification
		if(isset($options['DentistID']))
			$this->db->where('DentistID', $options['DentistID']);
		
		if(isset($options['title']))
			$this->db->like('title', $options['title']);
			
		if(isset($options['firstname']))
			$this->db->like('firstname', $options['firstname']);
			
		if(isset($options['middlename']))
			$this->db->like('middlename', $options['middlename']);

		if(isset($options['lastname']))
			$this->db->like('lastname', $options['lastname']);

		if(isset($options['email']))
			$this->db->like('email', $options['email']);

		if(isset($options['telephone']))
			$this->db->like('telephone', $options['telephone']);

		if(isset($options['mobile']))
			$this->db->like('mobile', $options['mobile']);

		if(isset($options['website']))
			$this->db->like('website', $options['website']);

		if(isset($options['bstreet']))
			$this->db->like('bstreet', $options['bstreet']);

		if(isset($options['bbrgy']))
			$this->db->like('bbrgy', $options['bbrgy']);

		if(isset($options['bcity']))
			$this->db->like('bcity', $options['bcity']);

		if(isset($options['shipstreet']))
			$this->db->like('shipstreet', $options['shipstreet']);
		
		if(isset($options['shipbrgy']))
			$this->db->like('shipbrgy', $options['shipbrgy']);

		if(isset($options['shipcity']))
			$this->db->like('shipcity', $options['shipcity']);

		if(isset($options['notes']))
			$this->db->like('notes', $options['notes']);


		if(isset($options['limit']) && isset($options['offset']))
			$this->db->limit($options['limit'], $options['offset']);
		
		else if(isset($options['limit']))
			$this->db->limit($options['limit']);
		
		if(isset($options['sort_by']) && $options['sort_by'] != '' && isset($options['sort_direction']))
			$this->db->order_by($options['sort_by'], $options['sort_direction']);
		
		$query = $this->db->get("tbldentist");
		
		if(isset($options['count']))
			return $query->num_rows();
		
		if(isset($options['DentistID']))
			return $query->row(0);
		//die($this->db->last_query());
		return $query->result();
	}
	
	function AddDentist($options = array())
	{
		$this->db->insert('tbldentist', $options);	
		return $this->db->insert_id();
		
	}
	
	function modify($options = array())
	{		
		if(isset($options['username']))
			$this->db->set('username', $options['username']);
			
		if(isset($options['password']))
			$this->db->set('password', md5($options['password']));
		
		if(isset($options['permission']))
			$this->db->set('permission', $options['permission']);
		
		$this->db->where('user_id', $options['user_id']);
		$this->db->update('user');
		
		return $this->db->affected_rows();
		
	}
	
	function deleteUser($id)
	{
		$this->db->where('user_id', $id);
		$this->db->delete('user');	
		return true;
	}
	function validate()
	{
		$this->db->where('username', $this->input->post('username'));
		$this->db->where('password',md5($this->input->post('password')));
		$query =$this->db->get('users');

		if($query->num_rows ==1)
		{
			return true;
		}
			
	}
}

?>