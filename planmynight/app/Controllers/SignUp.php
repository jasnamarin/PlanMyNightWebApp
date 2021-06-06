<?php

namespace App\Controllers;
use App\Models\Entities;

class SignUp extends BaseController
{
	public function index()
	{
		return view('signupPage');
	}
        
        public function submit() {
            
            $username = $this->request->getVar('username_signup');
            $password = $this->request->getVar('password_signup');
            $email = $this->request->getVar('e-mail_signup');
            $name = $this->request->getVar('name_signup');
            $surname = $this->request->getVar('surname_signup');
            $dateBirth = $this->request->getVar('dateBirth_signup');
            
            //provera da li moze da se registruje
            if (!$this->validate(['username_signup'=>'required', 'password_signup'=>'required|min_length[6]', 'e-mail_signup'=>'required', 'name_signup'=>'required', 'surname_signup'=>'required']))
                return view("signupPage", ["errors"=>$this->validator->getErrors()]);
            //ako ne moze
            
            if (!filter_var($email, FILTER_VALIDATE_EMAIL))
                return view ("signupPage", ["emailerror"=>"That's not an email."]);
            
            
            $existingUser = $this->doctrine->em->getRepository(Entities\User::class)->findOneBy(['username'=>$username]);
            
            if ($existingUser != null) {
                return view("signupPage", ["error"=>"This username is already taken."]);
            }
            
            //ako moze + ubaci u bazu
            
            $user = new Entities\User();
            $user->setUsername($username);
            $user->setPassword($password);
            $user->setEmail($email);
            $user->setName($name);
            $user->setSurname($surname);
            $user->setRole(0);
            
            $this->doctrine->em->persist($user);
            $this->doctrine->em->flush();
            return redirect()->to(site_url("Login"));
        }
}


