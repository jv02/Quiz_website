<?php
class admin extends my_controller
{

	public function index()
	{
		$this->load->view('Admin/register');
	}
	public function adminlogin()
	{
		$this->load->view('Admin/admin_login');
	}
	public function adminregister()
	{
		$this->load->view('Admin/admin_register');
	}
	public function adminregistersubmit()
	{
	//extract($_GET);
	//echo $username;
		$this->load->model('loginmodel');
		$this->loginmodel->dataregisteradmin();
	} 

	
	public function adminloginsubmit()
	{
	//extract($_GET);
	//echo $username;
		$this->load->model('loginmodel');
		$this->loginmodel->dataloginadmin();
	}

	public function afteradminlogin()
	{

	}
 
	public function url($url)
	{
		header("location:".$url);
	}


	public function userlogin()
	{
		$this->load->view('users/user_login');
	}
	public function userregister()
	{
		$this->load->view('users/user_register');
	}
	public function userregistersubmit()
	{
		$this->load->model('loginmodel');
		$this->loginmodel->dataregisteruser();
		
	}
	public function userloginsubmit()
	{
	//extract($_GET);
	//echo $username;
		$this->load->model('loginmodel');
		$id=$this->loginmodel->dataloginuser();

		$this->session->set_userdata('id',$id);
		//$this->load->library('session');
		return redirect('admin/userhome');
		
		
	}


	public function userhome()
	{
		$this->load->model('loginmodel');
		$id=$this->session->userdata('id');
		$user_data=$this->loginmodel->user_profile($id);
		
		$this->load->view('users/userhome',compact('user_data'));
		//return $user_data;
	}
	public function userjava()
	{
		
	}
}