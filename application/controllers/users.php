<?php
class admin extends my_controller
{

	public function index()
	{
		$this->load->view('Users/user_login');
	}
	
}