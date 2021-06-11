<?php

namespace App\Controllers;
use App\Models\Entities;

class PlaceDetails extends BaseController
{
    public function index($i)
    {   
        $address = $this->request->getVar('placeaddress'.$i);
        $place = $this->doctrine->em->getRepository(Entities\Place::class)->findOneBy(['address'=>$address]);
        $name=$place->getName();
        echo view("placeDetailsPage", ['address'=>$address, 'name'=>$name]);
    }
    
    public function setProgram($address)
        {
         
            $monday = $this->request->getVar('monday');
            $tuesday= $this->request->getVar('tuesday');
            $wednesday = $this->request->getVar('wednesday');
            $thursday = $this->request->getVar('thursday');
            $friday = $this->request->getVar('friday');
            $saturday = $this->request->getVar('saturday');
            $sunday=$this->request->getVar('sunday');
            $startTime = $this->request->getVar('startTime');
            $endTime=$this->request->getVar('endTime');
            $weekdate=$this->request->getVar('weekdate');
            
            $changePricing=$this->request->getVar('changePricing');
            
            $existingPlace = $this->doctrine->em->getRepository(Entities\Place::class)->findOneBy(['address'=>$address]);
            
            if($changePricing==1){
                $pricingChange=$this->request->getVar('pricingChange');
                $existingPlace->setPricing($pricingChange);
                $this->doctrine->em->merge($existingPlace);
            }
            $program = new Entities\Program();
            
            $program->setIdplace($existingPlace);
            $program->setMonday($monday);
            $program->setTuesday($tuesday);
            $program->setWednesday($wednesday);
            $program->setThursday($thursday);
            $program->setFriday(($friday));
            $program->setSaturday(($saturday));
            $program->setSunday(($sunday));
            $program->setWeekDate(new \DateTime($weekdate));
            $program->setWorkTimeStart(new \DateTime($startTime));
            $program->setWorkTimeEnd(new \DateTime($endTime));
            $this->doctrine->em->merge($program);
            $this->doctrine->em->flush();
            return redirect()->to(site_url("MyPlaces"));
        }
}