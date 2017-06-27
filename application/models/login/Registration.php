<?php
	class Registration extends CI_Model
	{
		var $id;
		var $name;
		var $email;
		var $password;
		var $mobile;
		public function __construct()
		{
			parent::__construct();
		}
		public function loginVerify()
		{
			$username=$this->input->post('username');
			$pwd=$this->input->post('pwd');
			
			$this->db->select('*');
			$this->db->from('entries_new');
			$this->db->where('email',$username);
			$this->db->where('password',$pwd);
			$query=$this->db->get();
			//echo $query->num_rows." u=".$username." p=".$pwd;
			if($query->num_rows==1)
			{
				return true;
			}
			else
			{
				return false;
			}
		}
		public function registerSave(){
			$this->id=$this->input->post('id');
			$this->name=$this->input->post('name');
			$this->email=$this->input->post('username');
			$this->password=$this->input->post('pwd');
			$this->mobile=$this->input->post('mobile');
			
			
			if($this->id == 0){
				$this->db->select('*');
				$this->db->from('entries_new');
				$this->db->where('email',$this->email);
				$query=$this->db->get();
			//echo $query->num_rows;
				if($query->num_rows >= 1)
				{
					
					return false;
				}
				else {
				
					$this->db->insert('entries_new',$this);
					return true;
				}
			}
			else{
				echo "coming";
				$this->db->where('id',$this->id);
				$this->db->update('entries_new',$this);
				return true;
			}
		}
		public function getRegData()
		{
			$this->db->select('*');
			$this->db->from('entries_new');
			$query=$this->db->get();
			$result=$query->result();
			return $result;
		}
		public function getRegDataById()
		{
			$id=$this->input->get('id');
			$this->db->select('*');
			$this->db->from('entries_new');
			$this->db->where('id',$id);
			$query=$this->db->get();
			$result=$query->result_array();
			return $result;
		}
		public function deleteRegData()
		{
			$id=$this->input->get('id');
			$this->db->where('id',$id);
			$this->db->delete('entries_new');
		}
	}
?>