<?php

namespace App\Controllers;
use App\Models\Entities;

class DiscoverPlaces extends BaseController
{
	public function index()
	{
		echo view("discoverPlacesPage");
	}
}