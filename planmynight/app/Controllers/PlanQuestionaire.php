<?php

namespace App\Controllers;
use App\Models\Entities;

class PlanQuestionaire extends BaseController
{
	public function index()
	{      
            $user=$this->session->get('user');
            if($user==NULL){
                redirect()->to(site_url("Login"));
            }
            else{
		echo view("planQuestionairePage");
            }
	}
        
        public function setPreferences() {
            $user=$this->session->get('user');
            $username=$user->getUsername();
            
            $money = $this->request->getVar('plan_budget');
            $music_live= $this->request->getVar('music_live');
            $music_pop = $this->request->getVar('music_pop');
            $music_techno = $this->request->getVar('music_techno');
            $music_rnb = $this->request->getVar('music_rnb');
            $music_jazz = $this->request->getVar('music_jazz');
            $afterparty=$this->request->getVar('afterparty');
            $plan_time = $this->request->getVar('plan_time');
            $plan_time_end=$this->request->getVar('plan_time_end');
            
            
            if (!$this->validate(['plan_budget'=>'required', 'plan_time'=>'required']))
                return view("planQuestionairePage", ["errors"=>$this->validator->getErrors()]);
            
            $music= "";
            
            $music.=$music_live;
            if($music!="" && $music_pop!=NULL){
                $music.=" ";
            }
            
                
            $music.=$music_pop;
            if($music!="" && $music_techno!=NULL){
                $music.=" ";
            }
            
            $music.=$music_techno;
            
            if($music!="" && $music_rnb!=NULL){
                $music.=" ";
            }
            $music.=$music_rnb;
            if($music!="" && $music_jazz!=NULL){
                $music.=" ";
            }
            $music.=$music_jazz;
            
            if($afterparty==NULL)$afterparty=0;
            
            $existingUser = $this->doctrine->em->getRepository(Entities\User::class)->findOneBy(['username'=>$username]);
            
            $preferences = new Entities\Preferences();
            
            $preferences->setIduser($existingUser);
            $preferences->setMusictype($music);
            $preferences->setMoney($money);
            $preferences->setChangelocation($afterparty);
            $preferences->setPartyStart(new \DateTime($plan_time));
            $preferences->setPartyEnd(new \DateTime($plan_time_end));
            
            $this->doctrine->em->merge($preferences);
            $this->doctrine->em->flush();
            return redirect()->to(site_url("MyPlans"));
        }
}