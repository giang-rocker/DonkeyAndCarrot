<?php

include_once("./config/database.php");

class Tb_users extends database {

    private $USER_ID;
    private $USER_USERNAME;
    private $USER_BIRTHDAY;
    private $USER_PASSWORD;
    private $USER_REALNAME;

    //List OF Primary Key
    // user_id 


    public function setUSER_ID($USER_ID) {
        $this->USER_ID = $USER_ID;
    }

    public function getUSER_ID() {
        return $this->USER_ID;
    }

    public function setUSER_USERNAME($USER_USERNAME) {
        $this->USER_USERNAME = $USER_USERNAME;
    }

    public function getUSER_USERNAME() {
        return $this->USER_USERNAME;
    }

    public function setUSER_BIRTHDAY($USER_BIRTHDAY) {
        $this->USER_BIRTHDAY = $USER_BIRTHDAY;
    }

    public function getUSER_BIRTHDAY() {
        return $this->USER_BIRTHDAY;
    }

    public function setUSER_PASSWORD($USER_PASSWORD) {
        $this->USER_PASSWORD = $USER_PASSWORD;
    }

    public function getUSER_PASSWORD() {
        return $this->USER_PASSWORD;
    }

    public function setUSER_REALNAME($USER_REALNAME) {
        $this->USER_REALNAME = $USER_REALNAME;
    }

    public function getUSER_REALNAME() {
        return $this->USER_REALNAME;
    }

    public function add() {
        $this->setQuery("insert into tb_users(USER_ID,USER_USERNAME,USER_BIRTHDAY,USER_PASSWORD,USER_REALNAME) values  ( '" . $this->getUSER_ID() . "','" . $this->getUSER_USERNAME() . "','" . $this->getUSER_BIRTHDAY() . "','" . $this->getUSER_PASSWORD() . "','" . $this->getUSER_REALNAME() . "')");

        return $this->executeQuery();
    }

    public function update() {
        $this->setQuery("update tb_users set USER_USERNAME='" . $this->getUSER_USERNAME() . "' ,USER_BIRTHDAY='" . $this->getUSER_BIRTHDAY() . "' ,USER_PASSWORD='" . $this->getUSER_PASSWORD() . "' ,USER_REALNAME='" . $this->getUSER_REALNAME() . "' where USER_ID ='" . $this->getUSER_ID() . "'");
        return $this->executeQuery();
    }

    public function delete() {
        $this->setQuery("delete from tb_users where USER_ID ='" . $this->getUSER_ID() . "'");
        return $this->executeQuery();
    }

    public function listOfTb_users() {
        mysql_query("set character_set_results='utf8'");
        $result = mysql_query("select * from tb_users");
        $data;
        while ($row = mysql_fetch_array($result))
            $data [] = $row;

        return $data;
    }

    public function getUsernameById($id) {
        mysql_query("set character_set_results='utf8'");
        $result = mysql_query("select USER_USERNAME from tb_users where USER_ID=" . $id);
        $data = "";
        $row = mysql_fetch_array($result);
        $data[] = $row;

        return ucfirst($data[0]["USER_USERNAME"]);
    }

    public function checkLogin($txtUsername, $txtPassword) {
        $sql = mysql_query("select USER_USERNAME from tb_users where USER_USERNAME='" . $txtUsername . "' and USER_PASSWORD "
                . "= '" . $txtPassword."'");
        $data = "";
        $row = mysql_fetch_array($sql);
        $data[] = $row;

        if ($data[0]["USER_USERNAME"] != NULL)
            return true;
        else
            return false;
    }
    
    public function configPassword($username, $password){
     $this->setQuery("update tb_users set USER_PASSWORD='" . $password. "' where USER_USERNAME ='" . $username . "'");
        return $this->executeQuery();
           
    }
    
    public function checkConfig ($username) {
        $username = strtolower($username);
        $sql = mysql_query("select USER_PASSWORD from tb_users where USER_USERNAME='" . $username . "'");
        $data = "";
        $row = mysql_fetch_array($sql);
        $data[] = $row;

        if ($data[0]["USER_PASSWORD"] == NULL || $data[0]["USER_PASSWORD"] == "" )
            return true;
        else
            return false;
        
        
    }

}
?> 
