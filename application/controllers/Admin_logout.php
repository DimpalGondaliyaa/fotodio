<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_logout extends CI_Controller{


	public function index()
	{
		?><script>alert('You Successfully Logged Off');window.location.href='<?php echo site_url('Admin'); ?>'; </script><?php
		$this->session->sess_destroy();
		$headerData = array(
			"pageTitle" => "logout",
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
		);

		$this->load->view('template',$viewData);
		
        
	}
}