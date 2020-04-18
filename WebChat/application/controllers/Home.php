<?php
 Class Home extends CI_controller
 {
 		public function index()
		{
			$this->load->view('HomePage');
		}
		public function Login()
		{
			$this->load->view('Login_registration');
		}
		public function start()
		{
			$this->load->view('Webchat');
		}
		public function Login_Check()
		{
			$this->form_validation->set_rules("username","Email/Phone","required");
			$this->form_validation->set_rules("password","Password",array('required', 'min_length[6]'));
			//$this->form_validation->set_rules("password","Your Password","required");
			if($this->form_validation->run())
			{
				$uname=$this->input->post('username');
				$pass=$this->input->post('password');
				$id=$this->Home_Model->Login_Check($uname,$pass);
				if(!$id=="")
				{
					$this->session->set_userdata('userId',$id);
					redirect('Home/start');
					
				}
				else
				{
					echo $id;
				}
			}
			else
			{
				$this->Login();
			}
		}
		public function Reg_Check()
		{
			$this->form_validation->set_rules('fname','Name','required|alpha');
		
			$this->form_validation->set_rules('email','Email',array('valid_email','required','is_unique[register_details.email]'));
			$this->form_validation->set_rules('Phone','Phone Number',array('is_natural','required','min_length[10]','is_unique[register_details.Phone]'));
			$this->form_validation->set_rules('rpassword','Password',array('required', 'min_length[6]'));
			$this->form_validation->set_rules('cpassword','Confirm Password',array('required', 'min_length[6]','matches[rpassword]'));
			if($this->form_validation->run())
			{
				$data = array(
								'fname'=>$this->input->post('fname'),
								'email'=>$this->input->post('email'),
								'Phone'=>$this->input->post('Phone'),
								'rpassword'=>md5($this->input->post('rpassword')),
								'profilepic'=>'../upload/user1.png'

							  );
				$val=$this->Home_Model->reg_insert($data);
				if($val==1)
				{
					$data = array(
								'email'=>$this->input->post('email'),
								'Phone'=>$this->input->post('Phone'),
								'password'=>md5($this->input->post('rpassword')),
								'status'=>'offline'
							  );
					$val=$this->Home_Model->login_insert($data);
					if($val==1)
					{
						$msg=md5('Done');
						redirect('Home/Login?msg='.$msg);
					}
				}
				else
				{
					$this->Login();
				}
			}
			else
			{
				$this->Login();
			}
		}
	public function contacts()
	{
		$s=$this->input->post('q');
		$user=$this->session->userdata('userId');
		$data=$this->Home_Model->contacts($user,$s);
		if(count($data)==0)
		{
				echo "<center>No contact found!</center>";
		}
		else
		{
				foreach ($data as $row) {
					echo "<li class='contact' >
          				  <div class='wrap'>
            			  		<span class='contact-status online'></span>
                         		<img src='".$row['profilepic']."'/>
            			  	<div class='meta'>
              				    <p class='name'>".$row['fname']."</p>
              				    <p class='addfriend'><i class='fa fa-comment' onclick='setCon(".$row['id'].")'></i></p>
            				</div>
          				  </div>
        				</li>";

				}


		}

	}
 }
?>