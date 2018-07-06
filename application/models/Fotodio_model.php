<?php
class Fotodio_model extends CI_Model
{
	public function login($data)
	{
		$email=$data['email'];
		$password=$data['password'];

		$status=$this->db->select('ver_status');
		$status=$this->db->where('email',$email);
		$status=$this->db->get('signup');
		$r=$status->row_array();
        $ver_status=$r['ver_status'];
        if($ver_status==1)
        	{
        		$s=$this->db->query("select * from signup where email='$email' && password='$password'");
			if($s->num_rows()>0)
			{

				$status=$this->db->select('id,username,email,phone');

				$status=$this->db->where('email',$email);

				$status=$this->db->get('signup');

				$r=$status->row_array();

		        //$ver_status=$r['ver_status'];

                $message=array('message'=>'success','status'=>'1','data'=>$r);
			}
			else
			{
				$message=array('message'=>'fail','status'=>'0');
			}

			return $message;
		}
		else
		{
			$message=array('message'=>'Your email has not been verified yet. To verify go to your email account.','status'=>'0');
		}
		return $message;
	}


	public function change_password($data)
	{
		$email=$data['email'];
		$old_pass=$data['old_password'];
		$new_pass=$data['new_password'];
		
		
		$this->db->where('email',$email);

		$ch=$this->db->get('signup');

		if($ch->num_rows() == 0)
		{
			$message=array('message'=>'your email not registered please signup','status'=>'0');
		}
		else
		{
		    
		$s=$this->db->query("SELECT * from signup where email='$email' && password='$old_pass'");
		if($s->num_rows()>0)
		{
			$r=$this->db->set('password',$new_pass);
			$r=$this->db->where('email',$email);
			$r=$this->db->update('signup');
			if($r)
			{
				$message=array('message'=>'success','status'=>'1');
			}
			else
			{
				$message=array('message'=>'fail','status'=>'0');
			}
			return $message;
		}
		else
		{
			$message=array('message'=>'fail','status'=>'0');
		}
		
	}
	return $message;
	}
	
	
	///////////////////////OTP VERIFICATION????????????????????????????????

	public function verify_otp($data){
				$cno=$data['phone'];
				$otp=$data['otp'];
				$query=$this->db->query("select * from phone_detail where phone='$cno'");
				$guestRow = $query->row_array();

				if($guestRow>1){
				//verified
				$query=$this->db->query("update phone_detail set otp='$otp' where phone='$cno'");


				$query=$this->db->query("select * from phone_detail where phone='$cno'");
				$abc = $query->row_array();
				if($abc>1)
				{
				$details = array('profile'=>$abc);
				}
				}
				else
				{
				//$a=http_build_query($otp);
				$b=array(
				'phone'=>$cno,
				'otp'=>$otp
				);

				$id=$this->db->insert('phone_detail',$b);

				$m=$this->db->insert_id();

				$query=$this->db->query("select * from phone_detail where id='$m'");

				$guestRow1 = $query->row_array();

				if($guestRow1>1){

				//verified

				$details = array("profile"=>$guestRow1);
				
				}

				}
				//echo json_encode($details);

				return $details;
}
}
?>