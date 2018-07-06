<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Forgetpassword extends CI_Controller{

	public function __construct()
	{ 
        parent::__construct(); 
        $this->load->library('email');
		$this->load->model('Forgetpwd');
		$this->load->helper('string');
		$this->load->library('session');
    }

	public function index()
	{
		$headerData = array(
			"pageTitle" => "Forgot Password",
			"stylesheet" => array("home.css")
		);
		$footerData = array(
			"jsFiles" => array("home.js")
		);
		$viewData = array(
			"viewName" => "forgot-password",
            "viewData" => array(),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);

		$this->load->view('template',$viewData);
		
        
	}

	public function forgotPassword()
	{
		$email=$_POST['email'];
		
		$eid=$this->session->set_userdata('email',$email);
		
		$query = $this->Forgetpwd->check_email($email);
		if($query)
		{
			$password=random_string('alnum',8);
			/*var_dump($password);*/
			$pwd=array('password'=>md5($password));
			/*var_dump($pwd);*/
			$result=$this->Forgetpwd->updatepassword($email,$pwd);
			$this->email->from('chiragpatel@hariskyline.com', 'Chirag Patel');
        	$this->email->to($email);
        	$this->email->subject('Password reset');

        	$message = "<p>This email has been sent as a request to reset our password</p>";
        	$message = "<p><br>Your Temporary Password</p>".$password;
            $message .= "<p><br><a href='".base_url()."Change_password'>Click here </a>if you want to reset your password,
                        if not, then ignore</p>";
        	$this->email->message($message);
        	$q=$this->email->send();
        	if($q)
        	{
        		redirect('Login','refresh');
        	}
        	else
        	{
        		echo "Failed to Sent Email";	
        	}
    	}
    	else
    	{
    		/*echo "Email Address does not Exist";*/
    		echo anchor('Forgetpassword','Email Address Does Not Exist');
    	}
        
	}



}
?>