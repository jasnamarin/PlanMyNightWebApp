<?php

namespace App\Controllers;
use App\Models\Entities;

class MyPlans extends BaseController
{
	public function index()
	{
		echo view("myPlansPage");
	}
}