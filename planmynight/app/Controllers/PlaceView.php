<?php

namespace App\Controllers;
use App\Models\Entities;

class PlaceView extends BaseController
{
    public function index($id)
    {   
        $place = $this->doctrine->em->getRepository(Entities\Place::class)->findOneBy(['idplace'=>$id]);
        $program = $this->doctrine->em->getRepository(Entities\Program::class)->findOneBy(['idplace'=>$place]);
        echo view("placeViewPage", ["place"=>$place, "program"=>$program]);
    }
}