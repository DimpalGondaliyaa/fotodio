<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Change_password extends CI_Controller {

	
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
			"viewName" => "change_password",
            "viewData" => array(),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('template',$viewData);
		$this->load->view('my_prof');
	}
	public function change()
	{
		$this->load->model('Change_password_model');
		$array=array('email'=>$_POST['email'],
		'password'=>md5($_POST['old_password']),
	    'new_pass'=>md5($_POST['new_password']),
		'con_pass'=>md5($_POST['confirm_password']));
		$d1=$this->Change_password_model->change($array);
		/*$user=$_POST['email'];
		$old_pass=md5($_POST['old_password']);
		$new_pass=md5($_POST['new_password']);
		$con_pass=md5($_POST['confirm_password']);
		$s=$this->db->query("select * from register where email='$user' && password='$old_pass'");
		if($s->num_rows()>0)
		{
			if($new_pass==$con_pass)
			{
				$this->db->set('password',$new_pass);
			$this->db->where('email',$user);
			$this->db->update('register');
			?>
				<script>alert('successfully update');window.location.href='<?php echo site_url('Login'); ?>';</script>
			<?php
			}
			else
			{
				?>
				<script type="text/javascript">
					alert('old password new password are not match');
					window.location.href='<?php echo site_url('Change_password'); ?>';
				</script>
				<?php
			}
		}
			else
			{
				?><script type="text/javascript">
					alert('user name and password not match.');
					window.location.href='<?php echo site_url('Change_password'); ?>';
				</script>
			<?php }*/
		}
	}

