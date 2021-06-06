<?php

namespace App\Controllers;
use App\Models\Entities;

class PlaceDetails extends BaseController
{
	public function index()
	{
		echo view("placeDetailsPage");
	}
}