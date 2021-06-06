<?php

namespace App\Controllers;
use App\Models\Entities;

class Main extends BaseController
{
	public function index()
	{       
            $user=$this->session->get('user');
            if($user==NULL){
                return redirect()->to(site_url("Login"));
            }
            else{
		$name = $user->getName();
                $surname = $user->getSurname();
                $namesurname = "$name $surname";
                echo view("mainPage", ["namesurname"=>$namesurname]);
            }
	}
}