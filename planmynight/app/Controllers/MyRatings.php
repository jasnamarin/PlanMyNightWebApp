<?php

namespace App\Controllers;
use App\Models\Entities;

class MyRatings extends BaseController
{
    public function index()
    {
        $loggedin = $this->session->get('user');
        $name = $loggedin->getName();
        $surname = $loggedin->getSurname();
        $namesurname = "$name $surname";
        
        $user = $this->doctrine->em->getRepository(Entities\User::class)->findOneBy(['username'=>$loggedin->getUsername()]);
        $ratings=$this->doctrine->em->getRepository(Entities\Mark::class)->findAll(['iduser'=>$user]);
        
        $places=array();
        $marks=array();
        foreach($ratings as $rating){
            $place=$this->doctrine->em->getRepository(Entities\Place::class)->findOneBy(['idplace'=>$rating->getIdplace()]);
            array_push($places,$place);
            array_push($marks,$rating->getMark());
        }
        echo view("myRatingsPage", ["namesurname"=>$namesurname,"places"=>$places,"marks"=>$marks]);
    }
}