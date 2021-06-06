<?php

namespace App\Controllers;
use App\Models\Entities;

class MyPlaces extends BaseController
{
	public function index()
	{
		echo view("myPlacesPage");
	}
}