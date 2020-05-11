<?php require_once("config.php"); ?>

<?php
 
    class Database {
        
        public $con;
        
        function __construct() {
            
            $this->open_db_connection();
            
        } //end
        
        
        public function open_db_connection() {
            
//            $this->con = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
            
            $this->con = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
 
            if($this->con->connect_errno) {

                die ("Failed connection " . $this->con->connect_error);
                
            }
    
        }//end
        
        
        
    public function query ($sql) {
        
        $result = $this->con->query($sql);
        
        $this->confirm_query($result);
        
        return $result;
        
    }//end
     
        
        
    private function confirm_query ($result) {
        
        if(!$result) {
            
            die("Query Failed " . $this->con->error);
            
        }
        
    }//end
        
        
    
    public function escape_string ($string) {
        
        $escaped_string = $this->con->real_escape_string($string);
        
        return $escaped_string;    
        
    } //end 
     
        
        
    public function the_insert_id() {
        
        return $this->con->insert_id;
        
    }//end
    
        
    
    }//end of class database
 
    $database = new Database();
   
 
 
 
 
 
 
 
 


?>