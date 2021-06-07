<?php

namespace App\Controllers;
use App\Models\Entities;

class MyPlans extends BaseController
{
	public function index()
	{
            $loggedin = $this->session->get('user');
            $name = $loggedin->getName();
            $surname = $loggedin->getSurname();
            $namesurname = "$name $surname";
            echo view("myPlansPage", ["namesurname"=>$namesurname]);
	}
        
        public function pickPlan($address){
            $place = $this->doctrine->em->getRepository(Entities\Place::class)->findOneBy(['address'=>$address]);
            
            $loggedin=$this->session->get('user');
            $username = $loggedin->getUsername();
            $user = $this->doctrine->em->getRepository(Entities\User::class)->findOneBy(['username'=>$username]);
            
            
            $date=date("m/d/y");
            $plan= new Entities\Plan();
            $plan->setIduser($user);
            $plan->setDate(new \DateTime($date));
            
            $this->doctrine->em->persist($plan);
            $this->doctrine->em->flush();
            
            $existingPlan = $this->doctrine->em->getRepository(Entities\Plan::class)->findOneBy(['iduser'=>$user, 'date'=>new \DateTime($date)]);
            
            $planplace=new Entities\PlanPlace();
            $planplace->setIdplace($place);
            $planplace->setIdplan($existingPlan);
            $this->doctrine->em->persist($planplace);
            $this->doctrine->em->flush();
            
            return redirect()->to(site_url("MyPlans"));
        }
}