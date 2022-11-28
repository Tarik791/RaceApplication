<?php

class Home extends Controller{


    public function index(){

        $User = $this->load_model('User');
        $user_data = $User->check_login(true);

        if(is_object($user_data)){

            $data['user_data'] = $user_data;

        }

        if($_SERVER['REQUEST_METHOD'] == "POST"){

            $race = $this->load_model("Race");
            $race->race($_POST);

       
        }

        $data['page_title'] = "Home";
        return $this->view("frontend/index", $data);
    }
   

}
