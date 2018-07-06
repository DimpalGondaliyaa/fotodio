<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Register extends CI_Controller{

	public function index()
	{
		$headerData = array(
			"pageTitle" => "Register",
			"stylesheet" => array("home.css")
		);
		$footerData = array(
			"jsFiles" => array("home.js")
		);
		$viewData = array(
			"viewName" => "signup",
            "viewData" => array(),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('template',$viewData);
		/*$this->load->library('form_validation');
		$this->form_validation->set_rules('username', 'Username', 'required|min_length[5]|max_length[12]|is_unique[users.username]');
		$this->form_validation->set_rules('email', 'Email Adress', 'required|valid_email|is_unique[users.email]');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('mobile_no', 'Contact No', 'required|min_length[10]|max_length[10]');

		if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('template',$viewData);
        }
        else
        {
            $this->load->view('template',$viewData);
        }*/
        
	}

	public function signup()
	{
		$email=$_POST['email'];
		$s=$this->db->where('email',$email);
		$s=$this->db->get('register');
		if($s->num_rows()>0)
		{
			?>
				<script type="text/javascript">alert('Email Already Exist');
				window.location.href='<?php echo site_url('Register'); ?>';</script>
			<?php
		}
		else
		{
		$data=array(
			'username'=>$_POST['username'],
			'email'=>$email,
			'password'=>md5($_POST['password']),
			'mobile_no'=>$_POST['mobile_no'],
			'company_name'=>$_POST['company_name'],
			'address'=>$_POST['address'],
			'city'=>$_POST['city'],
			'state'=>$_POST['state'],
			'country'=>$_POST['country'],
			'postcode'=>$_POST['postcode'],
			'tax_classification'=>$_POST['tax_classification'],
			'ssn'=>$_POST['ssn'],
			'payment_type'=>$_POST['payment_type'],
			'cheque_payable_to'=>$_POST['cheque_payable_to'],
			'paypal_email'=>$_POST['paypal_email']);

		$query=$this->db->insert('register',$data);
		if($query)
		{
		 ?><script>alert('Successfully Send');window.location.href='<?php echo site_url('Login'); ?>';</script>
		<?php }
	}

}

}
?>