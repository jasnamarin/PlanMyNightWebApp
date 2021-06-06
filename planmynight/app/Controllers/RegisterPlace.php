<?php

namespace App\Controllers;
use App\Models\Entities;

class RegisterPlace extends BaseController
{
	public function index()
	{
		echo view("registerPlacePage");
	}
        
        public function submit() {

            $address = $this->request->getVar('Place_address');
            if (!$this->validate(['UMPN'=>'required', 'APR'=>'required', 'address'=>'required', 'Place_name'=>'required', 'Place_address'=>'required', 'pricing'=>'required']))
                return view("registerPlacePage", ["errors"=>$this->validator->getErrors()]);
            
            $existingPlace = $this->doctrine->em->getRepository(Entities\Place::class)->findBy(['address'=>$address]);
            
            if ($existingPlace != null) {
                return view("registerPlacePage", ["error"=>"This address is already taken."]);
            }
            
            $apr = $this->request->getVar('APR');
            $name = $this->request->getVar('Place_name');
            $pricing = $this->request->getVar('pricing');
            $user_address = $this->request->getVar('address');
            
            $loggedin = $this->session->get('user');
            $username = $loggedin->getUsername();
            
            $user = $this->doctrine->em->getRepository(Entities\User::class)->findOneBy(['username'=>$username]);
                      
            $owner = $this->doctrine->em->getRepository(Entities\Owner::class)->find($user);
            
            if ($owner == null) {
                $owner = new Entities\Owner();
                $owner->setIduser($user);
                $owner->setAddress($user_address);
                $owner->setJmbg("xxxx");
                $owner->setLicense($apr);
                
                $this->doctrine->em->persist($owner);
                $this->doctrine->em->flush();
            }
            
            //ako moze + ubaci u bazu
            
            $place = new Entities\Place();
            $place->setAddress($address);
            $place->setName($name);
            $place->setPricing($pricing);
            $place->setIduser($owner);
            
            $this->doctrine->em->persist($place);
            $this->doctrine->em->flush();
            return redirect()->to(site_url("Main"));
        }
}