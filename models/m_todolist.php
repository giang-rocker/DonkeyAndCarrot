<?php

include_once("./config/database.php");

class Tb_todolist extends database {

    private $TODOLIST_ID;
    private $TODOLIST_TITLE;
    private $TODOLIST_DONE;
    private $TODOLIST_DATE;
    private $USER_ID;

    //List OF Primary Key
    // todolist_id 


    public function setTODOLIST_ID($TODOLIST_ID) {
        $this->TODOLIST_ID = $TODOLIST_ID;
    }

    public function getTODOLIST_ID() {
        return $this->TODOLIST_ID;
    }

    public function setTODOLIST_TITLE($TODOLIST_TITLE) {
        $this->TODOLIST_TITLE = $TODOLIST_TITLE;
    }

    public function getTODOLIST_TITLE() {
        return $this->TODOLIST_TITLE;
    }

    public function setTODOLIST_DONE($TODOLIST_DONE) {
        $this->TODOLIST_DONE = $TODOLIST_DONE;
    }

    public function getTODOLIST_DONE() {
        return $this->TODOLIST_DONE;
    }

    public function setTODOLIST_DATE($TODOLIST_DATE) {
        $this->TODOLIST_DATE = $TODOLIST_DATE;
    }

    public function getTODOLIST_DATE() {
        return $this->TODOLIST_DATE;
    }

    public function setUSER_ID($USER_ID) {
        $this->USER_ID = $USER_ID;
    }

    public function getUSER_ID() {
        return $this->USER_ID;
    }

    public function add() {
        $this->setQuery("insert into tb_todolist(TODOLIST_TITLE,USER_ID) values  (n'" . $this->getTODOLIST_TITLE() . "','" . $this->getUSER_ID() . "')");

        return $this->executeQuery();
    }

    public function update() {
        $this->setQuery("update tb_todolist set TODOLIST_TITLE='" . $this->getTODOLIST_TITLE() . "' ,TODOLIST_DONE='" . $this->getTODOLIST_DONE() . "' ,TODOLIST_DATE='" . $this->getTODOLIST_DATE() . "' ,USER_ID='" . $this->getUSER_ID() . "' where TODOLIST_ID ='" . $this->getTODOLIST_ID() . "'");
        return $this->executeQuery();
    }
    
     public function done($id,$done) {
        $this->setQuery("update tb_todolist set  TODOLIST_DONE=".$done." where TODOLIST_ID ='" . $id. "'");
        return $this->executeQuery();
    }

    public function delete() {
        $this->setQuery("delete from tb_todolist where TODOLIST_ID ='" . $this->getTODOLIST_ID() . "'");
        return $this->executeQuery();
    }

    public function listOfTb_todolist() {
        mysql_query("set character_set_results='utf8'");
        $result = mysql_query("select * from tb_todolist order by TODOLIST_ID DESC");
        $data;
        while ($row = mysql_fetch_array($result))
            $data [] = $row;

        return $data;
    }

}
?> 
