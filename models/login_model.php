<?php

class Login_model extends Model{

    function __construct() {
        parent:: __construct();
    }

    function getUserbyEmail(string $email){
        return $this->db->select("SELECT * FROM users WHERE email = :email LIMIT 1", array("email" => $email));
    }
    
    function getUserbyUsername(string $username){
        return $this->db->select("SELECT * FROM users WHERE username = :username LIMIT 1", array("username" => $username));
    }

    
    function getUserByEmailOrUsernameWithRole(string $identifier)
{
    return $this->db->select("SELECT u.*, ut.user_type AS role_type 
    FROM users u
    LEFT JOIN user_types ut ON u.user_type_id = ut.id_type
    WHERE u.email = :identifier OR u.username = :identifier
    LIMIT 1", array("identifier" => $identifier));
}

    
}