<?php
class Change_password_model extends CI_Model
{
	public function change($data)
	{
	$user=$data['email'];
	$old_pass=$data['password'];
	$new_pass=$data['new_pass'];
	$con_pass=$data['con_pass'];

		/*$new_pass=$data(md5($_POST['new_password']));
		$con_pass=$data(md5($_POST['confirm_password']));*/
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
			<?php }			
		}
	}
?>