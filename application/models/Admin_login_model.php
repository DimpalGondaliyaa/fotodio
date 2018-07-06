<?php
class Admin_login_model extends CI_Model
{
	public function login($data)
	{
		$username=$data['username'];
		$password=$data['password'];
		$s=$this->db->query("select * from admin where username='$username' && password='$password'");
			if($s->num_rows()>0)
			{
				$this->session->set_userdata('admin_session',$username);
                ?><script>alert('successfully Logged In');window.location.href='<?php echo site_url('Admin_home'); ?>';</script><?php
			}
			else
			{
				?><script>alert('Wrong Username Or Password');window.location.href='<?php echo site_url('Admin'); ?>';</script><?php
			}
	}
}
?>