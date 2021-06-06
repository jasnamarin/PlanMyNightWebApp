<?php

namespace App\Controllers;
use App\Models\Entities;

class About extends BaseController
{
	public function index()
	{
		echo view("aboutPage");
	}
}