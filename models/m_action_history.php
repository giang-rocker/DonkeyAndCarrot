<?php

include_once("./config/database.php");

class Action_history extends database {

    private $USER_ID_ACTION;
    private $ACTION_ID;
    private $USER_ID_VICTIM;
    private $LOG_TIME;
    private $LOG_COMMENT;

    //List OF Primary Key
    // user_id_action 
    // action_id 
    // user_id_victim 


    public function setUSER_ID_ACTION($USER_ID_ACTION) {
        $this->USER_ID_ACTION = $USER_ID_ACTION;
    }

    public function getUSER_ID_ACTION() {
        return $this->USER_ID_ACTION;
    }

    public function setACTION_ID($ACTION_ID) {
        $this->ACTION_ID = $ACTION_ID;
    }

    public function getACTION_ID() {
        return $this->ACTION_ID;
    }

    public function setUSER_ID_VICTIM($USER_ID_VICTIM) {
        $this->USER_ID_VICTIM = $USER_ID_VICTIM;
    }

    public function getUSER_ID_VICTIM() {
        return $this->USER_ID_VICTIM;
    }

    public function setLOG_TIME($LOG_TIME) {
        $this->LOG_TIME = $LOG_TIME;
    }

    public function getLOG_TIME() {
        return $this->LOG_TIME;
    }

    public function setLOG_COMMENT($LOG_COMMENT) {
        $this->LOG_COMMENT = $LOG_COMMENT;
    }

    public function getLOG_COMMENT() {
        return $this->LOG_COMMENT;
    }

    public function add() {
        $this->setQuery("insert into user_action_history(USER_ID_ACTION,ACTION_ID,USER_ID_VICTIM,LOG_COMMENT) values  ( '" . $this->getUSER_ID_ACTION() . "','" . $this->getACTION_ID() . "','" . $this->getUSER_ID_VICTIM() . "',n'" . $this->getLOG_COMMENT() . "')");
        return $this->executeQuery();
    }

    public function update() {
        $this->setQuery("update user_action_history set ACTION_ID='" . $this->getACTION_ID() . "' ,USER_ID_VICTIM='" . $this->getUSER_ID_VICTIM() . "' ,LOG_TIME='" . $this->getLOG_TIME() . "' ,LOG_COMMENT='" . $this->getLOG_COMMENT() . "' where USER_ID_ACTION ='" . $this->getUSER_ID_ACTION() . "'");
        return $this->executeQuery();
    }

    public function delete() {
        $this->setQuery("delete from user_action_history where USER_ID_ACTION ='" . $this->getUSER_ID_ACTION() . "'");
        return $this->executeQuery();
    }

    public function listOfUser_action_history() {
        mysql_query("set character_set_results='utf8'");
        $result = mysql_query("select * from user_action_history order by LOG_TIME DESC");
        $data="";
        while ($row = mysql_fetch_array($result))
           $data [] = $row;

        return $data;
    }




  public function getPointByID($id) {
        mysql_query("set character_set_results='utf8'");
        $result = mysql_query("select sum(ACTION_POINT) as SUM from tb_action, user_action_history where USER_ID_ACTION = ".$id." and  tb_action.ACTION_ID = user_action_history.ACTION_ID");
        $data="";
         $row = mysql_fetch_array($result);
         $data [] = $row;
        
        return $data[0]["SUM"];
    }

}

?> 
