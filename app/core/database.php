<?php


class Database{

    public static $con;

    public function __construct()
    {

        try{

            $string = DB_TYPE . ":host=" . DB_HOST .";dbname=".DB_NAME;
            self::$con = new PDO($string, DB_USER, DB_PASS);


        }catch (PDOException $e){

            die($e->getMessage('connection Die'));

        }
        
    }

    public static function getInstance(){

        if(self::$con){

          
            //return self::$con;
        }
        return $instance = new self();
         
    }


    public static function newInstance(){

        return $instance = new self();
      
    }


    // read 
    public function read($query,$data = array()){


        $stm = self::$con->prepare($query);
        $result = $stm->execute($data);

        $data = $stm->fetchAll(PDO::FETCH_OBJ);

        if($result){

            if(is_array($data) && count($data) > 0){

                return $data;
    
            }

        }


        return false;
    }

    // write 
    public function write($query, $data = array()){

        
        $stm = self::$con->prepare($query);
        $result = $stm->execute($data);


        if($result){


                return true;
    
            

        }


        return false;

    }


    public function login($POST){


        $data = array();
        $db = Database::getInstance();

 
        $data['email'] = trim($POST['email']);
        $data['password'] = trim($POST['password']);
  
        
        if(empty($data['email']) || !preg_match("/^[a-zA-Z_-]+@[a-zA-Z]+.[a-zA-Z]+$/", $data['email'])){

            $this->error .= "Please enter a valid email <br>";

        }


        if(strlen($data['password']) < 4){

            $this->error .= "Password mus be at least 4 characters long <br>";
        }

       

        if($this->error == ""){
            //conform
            $data['password'] = hash('sha1', $data['password']);
            
                //check if email alredy exist
            $sql = "select * from users where email = :email && password = :password limit 1";
        
            $result = $db->read($sql, $data);
            if(is_array($result)){

                $_SESSION['user_url'] = $result[0]->url_address;
                header("Location: " . ROOT . "home");
                die;
            }
            $this->error .= "Wrong email or password <br>";

        }

		$_SESSION['error'] = $this->error;


    }

}

