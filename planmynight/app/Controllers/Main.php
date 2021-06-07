<?php

namespace App\Controllers;
use App\Models\Entities;

class Main extends BaseController
{
    public function index()
    {
        $user = $this->session->get('user');
        
        if ($user == null) {
            return redirect()->to(site_url("Login"));
        }
        
        $name = $user->getName();
        $surname = $user->getSurname();
        $namesurname = "$name $surname";
        
        $locations = "";
        $places = $this->doctrine->em->getRepository(Entities\Place::class)->findAll();
        foreach ($places as $place) {
            $locations .= $place->getAddress();
            $locations .= ";";
        }
        
        $possible = array();
        
        echo view("mainPage", ["namesurname"=>$namesurname, "locations"=>$locations, "places"=>$places, "possible"=>$possible]);
    }
    
    public function planNight() {
        $loggedin = $this->session->get('user');
        
        if ($loggedin == null) {
            return redirect()->to(site_url("Login"));
        }
        
        
        $name = $loggedin->getName();
        $surname = $loggedin->getSurname();
        $namesurname = "$name $surname";
        
        $locations = "";
        $places = $this->doctrine->em->getRepository(Entities\Place::class)->findAll();
        foreach ($places as $place) {
            $locations .= $place->getAddress();
            $locations .= ";";
        }
        
        $username = $loggedin->getUsername();

        $user = $this->doctrine->em->getRepository(Entities\User::class)->findOneBy(['username'=>$username]);
        
        $preferences = $this->doctrine->em->getRepository(Entities\Preferences::class)->findOneBy(['iduser'=>$user]);
        
        if ($preferences == null) {
            return redirect()->to(site_url("planQuestionaire"));
        }
        

        $money = $preferences->getMoney();
        if ($money <= 2000) {
            $money = "$";
        }
        else if ($money <= 5000)
            $money = "$$";
        else if ($money <= 10000)
            $money = "$$$";
        else if ($money <= 20000)
            $money = "$$$$";
        else
            $money = "$$$$$";
     
        $date = date('Y/m/d', time());
        $unixTimestamp = strtotime($date);
        $dayOfWeek = date("l", $unixTimestamp);

        $possible = array();
        foreach ($places as $place) {
            $program = $this->doctrine->em->getRepository(Entities\Program::class)->findOneBy(['idplace'=>$place]);
            $music = "";
            
            
            if ($program != null) {
                if ($dayOfWeek = "Monday")
                    $music = $program->getMonday();
                else if ($dayOfWeek = "Tuesday")
                    $music = $program->getTuesday();
                if ($dayOfWeek = "Wednesday")
                    $music = $program->getWednesday();
                if ($dayOfWeek = "Thursday")
                    $music = $program->getThursday();
                if ($dayOfWeek = "Friday")
                    $music = $program->getFriday();
                if ($dayOfWeek = "Saturday")
                    $music = $program->getSaturday();
                else
                    $music = $program->getSunday();
                
                
                if ($music != "" && str_contains($preferences->getMusictype(), $music) && strlen($place->getPricing()) <= strlen($money)) {
                    array_push($possible, $place);
                }
            }
        }
        
        echo view("mainPage", ["namesurname"=>$namesurname, "locations"=>$locations, "places"=>$places, "possible"=>$possible]);
    }
}