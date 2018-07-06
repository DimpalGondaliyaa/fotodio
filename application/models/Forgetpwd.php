<?php

class Forgetpwd extends CI_Model{

	public function check_email($email)
	{
		/*$this->db->select('email');
        $this->db->from('register');*/
        $this->db->where('email', $email);
        $query=$this->db->get('register');
        if($query->num_rows() > 0)
        {
            return TRUE;
        }
        else
        {
            return FALSE;
        }

	}

	public function updatepassword($email,$password)
	{
		$this->db->where('email',$email);
		$query=$this->db->update('register',$password);
		return $query;
	}


}
?>