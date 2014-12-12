<?php

include_once("./config/database.php");

class Tb_notes extends database {

    private $NOTE_ID;
    private $USER_ID;
    private $NOTE_DATE;
    private $NOTE_CONTENT;

    //List OF Primary Key
    // note_id 


    public function setNOTE_ID($NOTE_ID) {
        $this->NOTE_ID = $NOTE_ID;
    }

    public function getNOTE_ID() {
        return $this->NOTE_ID;
    }

    public function setUSER_ID($USER_ID) {
        $this->USER_ID = $USER_ID;
    }

    public function getUSER_ID() {
        return $this->USER_ID;
    }

    public function setNOTE_DATE($NOTE_DATE) {
        $this->NOTE_DATE = $NOTE_DATE;
    }

    public function getNOTE_DATE() {
        return $this->NOTE_DATE;
    }

    public function setNOTE_CONTENT($NOTE_CONTENT) {
        $this->NOTE_CONTENT = $NOTE_CONTENT;
    }

    public function getNOTE_CONTENT() {
        return $this->NOTE_CONTENT;
    }

    public function add() {
        $this->setQuery("insert into tb_notes(NOTE_ID,USER_ID,NOTE_DATE,NOTE_CONTENT) values  ( '" . $this->getNOTE_ID() . "','" . $this->getUSER_ID() . "','" . $this->getNOTE_DATE() . "',n'" . $this->getNOTE_CONTENT() . "')");

        return $this->executeQuery();
    }

    public function update() {
        $this->setQuery("update tb_notes set USER_ID='" . $this->getUSER_ID() . "' ,NOTE_DATE='" . $this->getNOTE_DATE() . "' ,NOTE_CONTENT='" . $this->getNOTE_CONTENT() . "' where NOTE_ID ='" . $this->getNOTE_ID() . "'");
        return $this->executeQuery();
    }

    public function delete() {
        $this->setQuery("delete from tb_notes where NOTE_ID ='" . $this->getNOTE_ID() . "'");
        return $this->executeQuery();
    }

    public function listOfTb_notes() {
        mysql_query("set character_set_results='utf8'");
        $result = mysql_query("select * from tb_notes order by NOTE_DATE DESC");
        $data="";
        while ($row = mysql_fetch_array($result)){
            $data [] = $row;
        }
        return $data;
    }
    
     public function selectNotesById($id) {
        mysql_query("set character_set_results='utf8'");
        $result = mysql_query("select * from tb_notes where NOTE_ID=".$id);
        $data="";
        $row = mysql_fetch_array($result);
            $data = $row;

        return $data;
    }

}
?> 
