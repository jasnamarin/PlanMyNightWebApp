<?php

namespace App\Controllers;
use App\Models\Entities;

class Main extends BaseController
{
	public function index()
	{
		echo view("mainPage");
	}
}