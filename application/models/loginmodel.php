<?php
class loginmodel extends CI_Model
{
	
	public function dataregisteradmin()
	{
		extract($_GET);
		$query="insert into admin values('','$username','$email','$password')";
		if($this->db->query($query))
		{
			$this->session->set_flashdata("message","success");
			return redirect('admin/adminregister');
			
		}
	}

	public function dataloginadmin()
	{
		extract($_GET);
		/*$query=$this->db->query("select username,password from admin where username='$username' and password='$password'");
		$query->fetch_array(MYSQLI_ASSOC);
		*/
		$q=$this->db->where(['username'=>$username,'password'=>$password])
					->get('admin');
		if($q->num_rows()>0)
		{
			$_SESSION['username']=$username;
			return redirect('admin/index');
		}
	}

	public function dataregisteruser()
	{
		extract($_GET);
		$query="insert into user values('','$username','$email','$password')";
		if($this->db->query($query))
		{
			$this->session->set_flashdata("message","success");
			return redirect('admin/userregister');
			
		}
	}

	public function dataloginuser()
	{
		extract($_GET);
		/*$query=$this->db->query("select username,password from admin where username='$username' and password='$password'");
		$query->fetch_array(MYSQLI_ASSOC);
		*/
		$q=$this->db->where(['username'=>$username,'password'=>$password])
					->get('user');

		if($q->num_rows()>0)
		{
			
			//$_SESSION['email']="$email";
			
			return $q->row()->id;
		}
		
	}

	public function user_profile($id)
	{
		
	
		$q=$this->db->select('')
					->from('user')
					->where(['id'=>$id])
					->get();
					
					return $q->result();

	}


}
?>