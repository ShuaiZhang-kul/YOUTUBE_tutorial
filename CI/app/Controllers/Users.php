<?php namespace App\Controllers;

class Users extends BaseController
{
	public function index()
	{
//		return view('welcome_message');
        // echo "<h1>Users</h1>";
				$data['title']="CI4 login";
				echo view('template/header',$data);
				echo view('template/login');
				echo view('template/footer');

				// return  view('template/header',$data);
				// return  view('template/login',$data);
				// return  view('template/footer',$data);
				// echo view('template/header',$data);
				// echo view('template/login',$data);
				// echo view('template/footer',$data);
	}
	public function register()
	{
		$data['title']="CI4 register";
		echo view('template/header',$data);
		echo view('template/register');
		echo view('template/footer');
	}

	//--------------------------------------------------------------------

}
