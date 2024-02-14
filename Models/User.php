<?php

namespace MyShop\Models;

use MyShop\Models\BaseModel;
use PDO;


class User extends BaseModel {

    public function __construct() {
      
    }

  public function UserLogin($data){
        $database = $this->dbh();
        $db= $database->prepare("SELECT id FROM users 
        WHERE (username=:usernameORemail or email=:usernameORemail) and password=:password");
        $db->bindParam(":usernameORemail",$data['usernameORemail']); 
        $db->bindParam(":password",$data['password']); 
        $db->execute();
        $result = $db->fetch(PDO::FETCH_ASSOC); 
        
        return $result;
    
    }

    public function UserRegistration($data){
       $database = $this->dbh();
       $db= $database->prepare("INSERT INTO users (name,lastname,username,email,password) 
       VALUES (:name,:lastname,:username,:email,:password)");
       $db->bindParam(":name",$data['name']);
       $db->bindParam(":lastname",$data['lastname']); 
       $db->bindParam(":username",$data['username']); 
       $db->bindParam(":email",$data['email']); 
       $db->bindParam(":password",$data['password']); 
       $result = $db->execute();
       
       return $result;
    }
    

}

