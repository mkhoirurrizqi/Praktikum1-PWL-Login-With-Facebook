<?php

namespace App\Controllers;
use App\Models\AkunModel;
class Home extends BaseController
{
	protected $akunModel;
	public function __construct()
	{
		$this->akunModel = new AkunModel();
	}
	public function index()
	{
		$code = $this->request->getGet('code');
		if($code){
			$target = 'https://graph.facebook.com/v10.0/oauth/access_token?client_id=900105250804979&redirect_uri=http%3A%2F%2Flocalhost%3A8080%2F&client_secret=4cd34be1af0072e6fed576b05195fd74&code=' . $code;
			return redirect()->to($target);
		}
		else{
		$data=[
			'title' => 'Login Form'
		];
		echo view('login', $data);
		}
	}
	public function dashboard(){
		$data = [
			'title' => 'Dashboard'
		];
		echo view('dashboard', $data);
	}
	public function validasi(){
		$emailuname = $this->request->getPost('email');
		$pwd = $this->request->getPost('password');
		$akundb = $this->akunModel->getByEmail($emailuname);
		// var_dump($akundb);die;
		if($akundb == NULL){
			$akundb = $this->akunModel->getByUname($emailuname);
			if($akundb == NULL){
				return redirect()->to('/');
			}
			else{
				if($pwd == $akundb['password']){
					return redirect()->to('/dashboard');
				}
				else{
					return redirect()->to('/');
				}
			}
		}
		else{
			if($pwd == $akundb['password']){
				return redirect()->to('/dashboard');
			}
			else{
				return redirect()->to('/');
			}
		}
	}
}