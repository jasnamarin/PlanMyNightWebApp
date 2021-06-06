<?php

namespace App\Controllers;
use App\Models\Entities;

class PlanQuestionaire extends BaseController
{
	public function index()
	{
		echo view("planQuestionairePage");
	}
}