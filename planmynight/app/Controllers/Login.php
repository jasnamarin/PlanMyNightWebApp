<?php

namespace App\Controllers;
use App\Models\Entities;

class Login extends BaseController
{
	public function index()
	{
		echo view("loginPage");
	}
        
        public function submit() {
            
            $username = $this->request->getVar('username');
            $password = $this->request->getVar('password');
            
            if (!$this->validate(['username'=>'required', 'password'=>'required']))
                return view("loginPage", ["errors"=>$this->validator->getErrors()]);

            
            $existingUser = $this->doctrine->em->getRepository(Entities\User::class)->findOneBy(['username'=>$username]);
            if ($existingUser != null) {
                if ($password == $existingUser->getPassword()) {
                    return redirect()->to(site_url("Main"));
                } 
                return view("loginPage", ["error"=>"Password is incorrect."]);
            }
            return view("loginPage", ["error"=>"Username is incorrect."]);
            
        }
}
