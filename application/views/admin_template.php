<?php
    $this->load->view("includes/admin_header.php",$headerData);
    
	$this->load->view($viewName.".php",$viewData);
    
    $this->load->view("includes/admin_footer.php",$footerData); 
?>