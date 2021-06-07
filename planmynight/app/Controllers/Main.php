<?php

namespace App\Controllers;
use App\Models\Entities;

class Main extends BaseController
{
    public function index()
    {
        $user = $this->session->get('user');
        
        if ($user == null) {
            return redirect()->to(site_url("Login"));
        }
        
        $name = $user->getName();
        $surname = $user->getSurname();
        $namesurname = "$name $surname";
        
        $locations = "";
        $places = $this->doctrine->em->getRepository(Entities\Place::class)->findAll();
        foreach ($places as $place) {
            $locations .= $place->getAddress();
            $locations .= ";";
        }
        
        echo view("mainPage", ["namesurname"=>$namesurname, "locations"=>$locations]);
    }
}