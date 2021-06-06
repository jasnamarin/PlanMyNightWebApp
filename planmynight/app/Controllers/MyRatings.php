<?php

namespace App\Controllers;
use App\Models\Entities;

class MyRatings extends BaseController
{
	public function index()
	{
		echo view("myRatingsPage");
	}
}