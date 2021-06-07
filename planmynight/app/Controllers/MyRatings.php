<?php

namespace App\Controllers;
use App\Models\Entities;

class MyRatings extends BaseController
{
    public function index()
    {
        $user = $this->session->get('user');
        $name = $user->getName();
        $surname = $user->getSurname();
        $namesurname = "$name $surname";
        
        echo view("myRatingsPage", ["namesurname"=>$namesurname]);
    }
}