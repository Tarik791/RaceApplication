<?php

class Result extends Controller{


    public function index(){

        $User = $this->load_model('User');
        $Race = $this->load_model('Race');

        $user_data = $User->check_login(true);

        if(is_object($user_data)){

            $data['user_data'] = $user_data;

        }

        $results = $Race->get_all();


        if($_SERVER['REQUEST_METHOD'] == "POST"){


            $Race->update($_POST);

        }


   


        $data['results'] = $results;

        $data['page_title'] = "Home";
        return $this->view("frontend/result", $data);
    }
   

}
