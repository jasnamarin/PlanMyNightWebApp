<?php

namespace App\Controllers;
use App\Models\Entities;

class MapView extends BaseController
{
	public function index()
	{
            
            $locations = "";
            $places = $this->doctrine->em->getRepository(Entities\Place::class)->findAll();
            foreach ($places as $place) {
                $locations .= $place->getAddress();
                $locations .= ";";
            }
            return view('mapViewPage', ["locations"=>$locations, "places"=>$places]);
	}

}

