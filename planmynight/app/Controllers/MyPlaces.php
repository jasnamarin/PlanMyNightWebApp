<?php

namespace App\Controllers;
use App\Models\Entities;

class MyPlaces extends BaseController
{
    public function index()
    {
        $loggedin = $this->session->get('user');
        $name = $loggedin->getName();
        $surname = $loggedin->getSurname();
        $namesurname = "$name $surname";
        
        
        $username = $loggedin->getUsername();

        $user = $this->doctrine->em->getRepository(Entities\User::class)->findOneBy(['username'=>$username]);
        $owner = $this->doctrine->em->getRepository(Entities\Owner::class)->findOneBy(['iduser'=>$user]);
       
        $user_places = $this->doctrine->em->getRepository(Entities\Place::class)->findBy(['iduser'=>$owner]);
        

        echo view("myPlacesPage", ["namesurname"=>$namesurname, "user_places"=>$user_places]);
//        echo view("myPlacesPage", ["namesurname"=>$namesurname, "locations"=>$locations, "names"=>$names, "prices"=>$prices]);
    }
}