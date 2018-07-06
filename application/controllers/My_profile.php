<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class My_profile extends CI_Controller {

	
	public function index()
	{		
		$headerData = array(
			"pageTitle" => "Profile",
			"stylesheet" => array("home.css")
		);
		$footerData = array(
			"jsFiles" => array("home.js")
		);
		$viewData = array(
			"viewName" => "my_profile",
            "viewData" => array(),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('template',$viewData);
		$this->load->view('my_prof');
	}
}
