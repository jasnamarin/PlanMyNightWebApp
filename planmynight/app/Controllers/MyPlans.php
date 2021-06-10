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
            
            $user = $this->doctrine->em->getRepository(Entities\User::class)->findOneBy(['username'=>$loggedin->getUsername()]);
            $existingPlans = $this->doctrine->em->getRepository(Entities\Plan::class)->findAll(['iduser'=>$user]);
            $places=array();
            $dates=array();
            foreach($existingPlans as $plan){
                $planplace= $this->doctrine->em->getRepository(Entities\PlanPlace::class)->findOneBy(['idplan'=>$plan]);
                $place=$this->doctrine->em->getRepository(Entities\Place::class)->findOneBy(['idplace'=>$planplace->getIdplace()]);
                array_push($places, $place);
                array_push($dates, $plan->getDate());
            }
            
            
            
            echo view("myPlansPage", ["namesurname"=>$namesurname, "dates"=>$dates, "places"=>$places]);
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
        public function rate($id){
            $loggedin = $this->session->get('user');
            $username = $loggedin->getUsername();

            $user = $this->doctrine->em->getRepository(Entities\User::class)->findOneBy(['username'=>$username]);
            $place = $this->doctrine->em->getRepository(Entities\Place::class)->findOneBy(['idplace'=>$id]);
            $value=$this->request->getPost("rating".$id);
            if($value=="")$value=0;
            $mark=new Entities\Mark();
            $mark->setIdplace($place);
            $mark->setIduser($user);
            $mark->setMark($value);
            $this->doctrine->em->merge($mark);
            $this->doctrine->em->flush();
            return redirect()->to(site_url("MyPlans"));
        }
}