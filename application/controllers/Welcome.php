<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	 
	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->model('login/registration');
		$this->load->helper('url');
	}
	public function index()
	{
		$data['msg']='Welcome Amruta';
		$this->load->view('register/home',$data);
	}
	public function loginVerify()
	{
		
		if($this->registration->loginVerify() == 1)
		{
			$this->getRegData();
		}
		else
		{
			$this->load->view('register/failed');
		}
		
	}
	public function login()
	{
		$this->load->view('register/login');
	}
	public function register()
	{
		$data['res']=array('id'=>' ','msg'=>' ');
		$this->load->view('register/register',$data);
	}
	public function registerSave()
	{
		$dd=$this->registration->registerSave();
		if($dd == 0){
			/* $data['msg']='Email already exists';
			$data['id']=''; */
			$data['res']=array('msg'=>'Email already exists','id'=>'');
			$this->load->view('register/register',$data);
		}
		else{
			$data['msg']='Registered successfully';
			$this->load->view('register/home',$data);
		}
	}
	public function getRegData()
	{
		$data['res']=$this->registration->getRegData();
		$this->load->view('register/success',$data);
	}
	public function editRegData()
	{
		$data['res']=$this->registration->getRegDataById();
		$this->load->view('register/register',$data);
	}
	public function deleteRegData()
	{
		$this->registration->deleteRegData();
		$this->getRegData();
	}
}
?>