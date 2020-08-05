<?php
    class AdvertisementsService{
        //set database config for mysql
        function __construct($config){
            $this->host = $config->host;
            $this->user = $config->user;
			$this->pass =  $config->pass;
			$this->db = $config->db;
        }
        //open database
        public function openDatabase(){
            $this->database = new mysqli($this->host,$this->user,$this->pass,$this->db);
            if($this->database->connect_error){
                die("Error in connection: " . $this->condb->connect_error);
            } 
        }
        //close database
        public function closeDatabase()
		{
			$this->database->close();
        }
        //get advertisments from mysql
        public function getAdvertisements(){
            try{
                $this->openDatabase();
                $query=$this->database->prepare("SELECT advertisements.id, advertisements.title, users.name
                                                from users LEFT JOIN advertisements on users.id=advertisements.userid
                                                WHERE users.id=advertisements.userid");
                $query->execute();
                $result=$query->get_result();
                $query->close();
                $this->closeDatabase();
                return $result;
            }
            catch(Exception $exception){
                $this->closeDatabase();
				throw $exception;
            }
        }
    }
?>