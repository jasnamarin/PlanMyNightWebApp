<?php

namespace App\Controllers;
use App\Models\Entities;

class RegisterPlace extends BaseController
{
	public function index()
	{
		echo view("registerPlacePage");
	}
}