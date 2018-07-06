<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Make_offer extends CI_Controller {

	
	public function index()
	{		
		$headerData = array(
			"pageTitle" => "Admin Home",
			"stylesheet" => array("home.css")
		);
		$footerData = array(
			"jsFiles" => array("home.js")
		);
		$viewData = array(
			"viewName" => "make_offer",
            "viewData" => array(),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('admin_template',$viewData);
	}


	public function image_sel()
	{
	$fileCounts = sizeof($files['name']);

	$n=$_POST['max_number'];

	foreach ($files['name'] as $key => $image) {

    $totalImageIndex = ($key+1);

    if($totalImageIndex <= $n ) {

        echo "<script>please select 10 images only</script>";

    }   else {
    	
        continue; // It will be in loop but skip the image uploading
    }    
} 
	}
}
