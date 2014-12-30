<?php

include_once("./config/database.php");

class Tb_diary extends database {

    private $DIARY_ID;
    private $USER_ID;
    private $DIARY_CONTENT;
    private $DIARY_TITLE;
    private $DIARY_TIMESTAMP;

    //List OF Primary Key
    // diary_id 


    public function setDIARY_ID($DIARY_ID) {
        $this->DIARY_ID = $DIARY_ID;
    }

    public function getDIARY_ID() {
        return $this->DIARY_ID;
    }

    public function setUSER_ID($USER_ID) {
        $this->USER_ID = $USER_ID;
    }

    public function getUSER_ID() {
        return $this->USER_ID;
    }

    public function setDIARY_CONTENT($DIARY_CONTENT) {
        $this->DIARY_CONTENT = $DIARY_CONTENT;
    }

    public function getDIARY_CONTENT() {
        return $this->DIARY_CONTENT;
    }

    public function setDIARY_TITLE($DIARY_TITLE) {
        $this->DIARY_TITLE = $DIARY_TITLE;
    }

    public function getDIARY_TITLE() {
        return $this->DIARY_TITLE;
    }

    public function setDIARY_TIMESTAMP($DIARY_TIMESTAMP) {
        $this->DIARY_TIMESTAMP = $DIARY_TIMESTAMP;
    }

    public function getDIARY_TIMESTAMP() {
        return $this->DIARY_TIMESTAMP;
    }

    public function add() {
        $this->setQuery("insert into tb_diary(USER_ID,DIARY_CONTENT,DIARY_TITLE) values  ('" . $this->getUSER_ID() . "',n'" . $this->getDIARY_CONTENT() . "',n'" . $this->getDIARY_TITLE() . "')");
        echo $this->getQuery();
        return $this->executeQuery();
    }

    public function update() {
        $this->setQuery("update tb_diary set USER_ID='" . $this->getUSER_ID() . "' ,DIARY_CONTENT='" . $this->getDIARY_CONTENT() . "' ,DIARY_TITLE='" . $this->getDIARY_TITLE() . "' ,DIARY_TIMESTAMP='" . $this->getDIARY_TIMESTAMP() . "' where DIARY_ID ='" . $this->getDIARY_ID() . "'");
        return $this->executeQuery();
    }

    public function delete() {
        $this->setQuery("delete from tb_diary where DIARY_ID ='" . $this->getDIARY_ID() . "'");
        return $this->executeQuery();
    }

    public function listOfTb_diary() {
        mysql_query("set character_set_results='utf8'");
        $result = mysql_query("select * from tb_diary order by DIARY_ID DESC");
        $data="";
        while ($row = mysql_fetch_array($result))
            $data [] = $row;

        return $data;
    }

}
?> 
