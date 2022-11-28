<?php

class Admin extends Controller{


    public function index(){

        $User = $this->load_model('User');
        $user_data = $User->check_login(true);

        if(is_object($user_data)){

            $data['user_data'] = $user_data;

        }
        


        $data['page_title'] = "Admin";
        return $this->view("admin/index", $data);
    }


    public function race(){

        
        $User = $this->load_model('User');
        $user_data = $User->check_login(true);

        if(is_object($user_data)){

            $data['user_data'] = $user_data;

        }

        $Races = $this->load_model('Race');
        $races = $Races->get_all();

        $data['races'] = $races;
        $data['page_title'] = "Admin";

        return $this->view("admin/race", $data);

    }


    public function race_details(){

        
        $User = $this->load_model('User');
        $user_data = $User->check_login(true);

        if(is_object($user_data)){

            $data['user_data'] = $user_data;

        }

        $result = $this->load_model('Result');
        $results = $result->get_all();


   


        $data['results'] = $results;
        $data['page_title'] = "Admin";

        return $this->view("admin/race_details", $data);

    }


   

}
