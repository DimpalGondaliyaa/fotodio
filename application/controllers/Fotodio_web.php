<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fotodio_web extends CI_Controller {

	
	public function index()
	{		
		/*$headerData = array(
			"pageTitle" => "Home",
			"stylesheet" => array("home.css")
		);
		$footerData = array(
			"jsFiles" => array("home.js")
		);
		$viewData = array(
			"viewName" => "admin/admin_login",
            "viewData" => array(),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);*/
	
	}
	
	
	
	
	
	public function signup()
	{
		$email=$_POST['email'];

		$this->db->where('email',$email);

		$ch=$this->db->get('signup');

		if($ch->num_rows() > 0)
		{
			$msg=array('message'=>'email exist','status'=>'0');
		}

		else
		{
		   
			$data=array
			(
			'username'=>$_POST['username'],
	        'email'=>$email,
            'phone'=>$_POST['phone'],
            'password'=>base64_encode($_POST['password']),
            'ver_status'=>'0'
        	);

        	$i=$this->db->insert('signup',$data);
        	
		          
        	if($i)
        	{
        	    $id1=$this->db->insert_id();

                $id='1234'.$id1.'2313608953768';
                
                $url="http://hariskyline.com/fotodio/Fotodio_web/verify_mail/$id";

        	    $this->load->library('email');
		          $this->email->set_newline("\r\n");
		          $this->email->from('trialaths@gmail.com','trial'); // change it to yours
		          $this->email->to($email);// change it to yours
		          $this->email->subject('Verify Email from fotodio');
		          $this->email->message('Please verify your account');
		           $this->email->message($url);
		          $this->email->send();
		          
        	}
        	
        		 $msg=array('message'=>'signup success','status'=>'1');	
        		 
		}
           echo json_encode($msg);
    }
	

	public function verify_mail()
	{
		 $id=$this->uri->segment(3);
	
		$id1=substr($id,4,-13);
		$ch=$this->db->select('ver_status');
		$ch=$this->db->where('id',$id1);
		$ch=$this->db->get('signup');
		$st=$ch->row_array();
		$ver_st=$st['ver_status'];
        if($ver_st=='1')
        {
        	$this->load->view('email_already_verify');
        }
        else
        {
        $up=$this->db->query("UPDATE signup set ver_status='1' where id='$id1'");
        if($up)
        {
            $this->load->view('email_verification');
        }
    	}
	}


	public function login()
	{
		$data=array
		(
			'email'=>$_POST['email'],
			'password'=>base64_encode($_POST['password'])
		);
		$email=$_POST['email'];

		$this->db->where('email',$email);

		$ch=$this->db->get('signup');

		if($ch->num_rows() == 0)
		{
			$check=array('message'=>'your email not registered please signup','status'=>'0');
		}
		else
		{

		$this->load->model('Fotodio_model');
		$check=$this->Fotodio_model->login($data);
		}
		echo json_encode($check);
	}

	public function forgot_password()
	{
         $email=$_POST['email'];
         $s=$this->db->select('password');
         $s=$this->db->where('email',$email);
         $s=$this->db->get('signup');
         $r=$s->row_array();
         $pass=base64_decode($r['password']);

         $this->load->library('email');

				/*$this->email->from('binalpatel@hariskyline.com');
				$this->email->to('$email');

				$this->email->subject('mail from Fotodio');
				$this->email->message('Your Password Is'.$pass);

				$send_mail=$this->email->send();*/
				
				
				$this->load->library('email');
		          $this->email->set_newline("\r\n");
		          $this->email->from('trialaths@gmail.com','trial'); // change it to yours
		          $this->email->to($email);// change it to yours
		          $this->email->subject('Your password from fotodio');
		          $this->email->message('Your Fotodio Registered Password is : '.$pass);
		          $send_mail=$this->email->send();
				if($send_mail)
				{
					$msg=array('message'=>'password sent success to your email account','status'=>'1');
				}
				else
				{
					$msg=array('message'=>'fail','status'=>'0');
				}

				echo json_encode($msg);
	}


	public function change_password()
	{
		$data=array
		(
			'email'=>$_POST['email'],
			'old_password'=>base64_encode($_POST['old_password']),
			'new_password'=>base64_encode($_POST['new_password'])
		);

		$this->load->model('Fotodio_model');
		$msg=$this->Fotodio_model->change_password($data);
		echo json_encode($msg);
	}
	
	
	
	public function send_otp()
	{
		$rndno=rand(1000,9999);
		//var_dump($rndno);
		$phone=$_POST['phone'];
		$message=$rndno." Is Your One Time Password(OTP) for Phone Verification from Fotodio.
";


		$data=array(
			'phone'=>$phone,
			'otp'=>$rndno
	);
		/*$this->db->insert('phone_detail',$data);*/
		/*$url="http://123.63.33.43/blank/sms/user/urlsmstemp.php?username=kapbulk&pass=kapbulk@user!56789&senderid=KAPMSG&message=$message&dest_mobileno=$phone&response=Y";
*/



		$url = "https://smsapi.engineeringtgr.com/send/?Mobile=9824520200&Password=T2833M&Message=".urlencode($message)."&To=".urlencode($phone)."&Key=binalVgpPCzuqjG6tS1Q9";

			  $ch = curl_init();

				curl_setopt_array($ch, array(
				CURLOPT_URL => $url,
				CURLOPT_RETURNTRANSFER => true,
				CURLOPT_POST => true,
				CURLOPT_POSTFIELDS => $data
				//,CURLOPT_FOLLOWLOCATION => true
				));

				//Ignore SSL certificate verification
				
				curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);

				curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

				//get response

				$output = curl_exec($ch);

				//Print error if any

				if(curl_errno($ch))

				{
				echo 'error:' . curl_error($ch);
				}
				curl_close($ch);
				/*if($output)
				{
					$message1=array('status'=>"1",'message'=>"success",'data'=>$rndno);
				}*/
				
				$this->load->model('Fotodio_model');

				$det=$this->Fotodio_model->verify_otp($data);

				$message1=array('status'=>"1",'message'=>"success",'row-data'=>$det);

				echo json_encode($message1);
		}



}

?>
