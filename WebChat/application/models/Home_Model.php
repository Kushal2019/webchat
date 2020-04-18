<?php 
	class Home_Model extends CI_model
	{
		public function reg_insert($data)
		{
			$this->db->insert('register_details',$data);
			return $this->db->affected_rows();
		}
		public function login_insert($data)
		{
			$this->db->insert('login_details',$data);
			return $this->db->affected_rows();
		}
		public function Login_Check($uname,$pass)
		{
			$pass=md5($pass);
			$q=$this->db->select('*')
					->from('login_details')
					->where(['email'=>$uname])
					->or_where(['Phone'=>$uname])
					->where(['password'=>$pass])
					->get();
			$data=$q->result_Array();
			//update satusa
			$this->db->set('status', 'online');
			$this->db->where(['email'=>$uname]);
			$this->db->or_where(['Phone'=>$uname]);
			$this->db->update('login_details');
			echo"<pre>";
			print_r($data);
			return $data[0]['Phone'];
		}
		public function profilepic($ph)
		{
			$q=$this->db->select('profilepic')
					->from('register_details')
					->where(['Phone'=>$ph])
					->get();
			$data=$q->result_Array();
			return $data[0]['profilepic'];
		}
		public function profilename($ph)
		{
			$q=$this->db->select('*')
					->from('register_details')
					->where(['Phone'=>$ph])
					->get();
			$data=$q->result_Array();
			$name= $data[0]['fname'];
			return $name;
		}
		public function StatusCheck($ph)
		{
			$q=$this->db->select('status')
					->from('login_details')
					->where(['Phone'=>$ph])
					->get();
			$data=$q->result_Array(); 
			return $data[0]['status'];
		}
		public function contacts($ph,$s)
		{
			$q=$this->db->select('*')
					->from('register_details')
					->where(" Phone LIKE '%$s%'  AND Phone NOT IN('$ph')")
					->get();
			$data=$q->result_Array(); 
			return $data;
		}
	} 
?>