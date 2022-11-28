<?php

class Race{
   

    private $error = "";


    public function race($POST){

        $data = array();
        $db = Database::getInstance();

        $data['fullname'] = trim($POST['fullname']);
        $data['distance'] = trim($POST['distance']);
        $data['time'] = trim($POST['time']);

        if(empty($data['fullname']) || !preg_match("/^[a-zA-Z]+$/", $data['fullname'])){

            $this->error .= "Please enter a valid Full Name <br>";

        }


        $data['url_address'] = $this->get_random_string_max(60);

        //check for url_address
        $arr = false;

        $sql = "select * from users where url_address = :url_address limit 1";
        $arr['url_address'] = $data['url_address'];
        $check = $db->read($sql, $arr);
        if(is_array($check)){


            $data['url_address'] = $this->get_random_string_max(60);
        }


        if($this->error == ""){

            $file_open = fopen("contact_data.csv", "a");
            $no_rows = count(file("contact_data.csv"));

            if($no_rows > 1){

                $no_rows = ($no_rows - 1) + 1;

            }

            $form_data = array(
                'fullname' => $data['fullname'],
                'distance' => $data['distance'],
                'time' => $data['time']
            );

            fputcsv($file_open, $form_data);

            $query = "insert into race (url_address, fullname, distance, time) values (:url_address, :fullname, :distance, :time)";
            $result = $db->write($query, $data);

            if($result){

                header("Location: " . ROOT . "result");
                die;

            }

        }

        $_SESSION['error'] = $this->error;
        


    }

    public function get_all(){

        $DB = Database::newInstance();
        return $DB->read("select * from race order by id desc");

    }


    public function update(){





        if(isset($_POST['update'])){

            $_SESSION['error'] = "";

            $id = $_POST['id'];
            $fullname = $_POST['fullname'];
            $distance = $_POST['distance'];
            $time = $_POST['time'];

            

            if(!preg_match("/^[a-zA-Z ]+$/", trim($fullname))){

                $_SESSION['error'] .= "Please enter a valid fullname </br>";
    
    
            }


            if(!isset($_SESSION['error']) || $_SESSION['error'] == ""){


                $DB = Database::newInstance();

                $query = "UPDATE race SET fullname='$fullname', distance='$distance', time='$time' WHERE id='$id' ";
    
                
                $DB->write($query);

                if(isset($_SESSION['error'])){

                    $_SESSION['error'] .= "Uspješno ste promijenili";

                } 
                
            }
    
           

            //$query_run = mysqli_query($con, $query);



        }

    }

    public function get_one(){

        $DB = Database::newInstance();

        $id = $_POST['id'];
        $fullname = $_POST['fullname'];
        $distance = $_POST['distance'];
        $time = $_POST['time'];

        $query = "UPDATE race SET fullname='$fullname',distance='$distance', time='$time'  WHERE id='$id'";

        $DB->write($query);

    }



    private function get_random_string_max($length){
        $array = array(0,1,2,3,4,5,6,7,8,9,'a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z','A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z');
        $text = "";
    
        $length = rand(4, $length);
    
        for($i = 0; $i < $length; $i++)
        {
    
            $random = rand(0,61);
            $text .= $array[$random];
        }
    
        return $text;
    }


}