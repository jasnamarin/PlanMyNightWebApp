<?php

namespace App\Controllers;
use App\Models\Entities;

class DiscoverPlaces extends BaseController
{
    public function index()
    {       
        $places = $this->doctrine->em->getRepository(Entities\Place::class)->findAll();
        
        echo view("discoverPlacesPage", ["places"=>$places]);
    }
}