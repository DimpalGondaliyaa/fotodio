<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

	
	public function index()
	{		
		$headerData = array(
			"pageTitle" => "Home",
			"stylesheet" => array("home.css")
		);
		$footerData = array(
			"jsFiles" => array("home.js")
		);
		$viewData = array(
			"viewName" => "contact",
            "viewData" => array(),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('template',$viewData);
	}
	public function insert()
	{
		$data=array(
			'name'=>$_POST['name'],
			'email'=>$_POST['email'],
			'subject'=>md5($_POST['subject']),
			'message'=>$_POST['message']);
		$s=$this->db->insert('contact_us',$data);
		if($s)
		{
			?>
			<script type="text/javascript">
				alert('successfully post');
				window.location.href='<?php echo site_url('Home'); ?>';
			</script>
			<?php
		}
	}
}
