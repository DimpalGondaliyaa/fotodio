<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	
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
		$this->load->view('admin_login');
	}
	public function login()
	{
		$s=array('username'=>$_POST['username'],
			'password'=>$_POST['password']);
		$this->load->model('Admin_login_model');
		$this->Admin_login_model->login($s);
	}
	
}
