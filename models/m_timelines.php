<?php

include_once("./config/database.php");

class Tb_timelines extends database {

    private $TIMELINE_ID;
    private $TIMELINE_DATE;
    private $TIMELINE_LOCATION;
    private $TIMELINE_ICON;
    private $TIMELINE_TYPE;
    private $TIMELINE_TITLE;
    private $USER_ID;
    private $TIMELINE_CONTENT;
    private $TIMELINE_TIMESTAMP;

    //List OF Primary Key
    // timeline_id 


    public function setTIMELINE_ID($TIMELINE_ID) {
        $this->TIMELINE_ID = $TIMELINE_ID;
    }

    public function getTIMELINE_ID() {
        return $this->TIMELINE_ID;
    }

    public function setTIMELINE_DATE($TIMELINE_DATE) {
        $this->TIMELINE_DATE = $TIMELINE_DATE;
    }

    public function getTIMELINE_DATE() {
        return $this->TIMELINE_DATE;
    }

    public function setTIMELINE_LOCATION($TIMELINE_LOCATION) {
        $this->TIMELINE_LOCATION = $TIMELINE_LOCATION;
    }

    public function getTIMELINE_LOCATION() {
        return $this->TIMELINE_LOCATION;
    }

    public function setTIMELINE_ICON($TIMELINE_ICON) {
        $this->TIMELINE_ICON = $TIMELINE_ICON;
    }

    public function getTIMELINE_ICON() {
        return $this->TIMELINE_ICON;
    }

    public function setTIMELINE_TYPE($TIMELINE_TYPE) {
        $this->TIMELINE_TYPE = $TIMELINE_TYPE;
    }

    public function getTIMELINE_TYPE() {
        return $this->TIMELINE_TYPE;
    }

    public function setTIMELINE_TITLE($TIMELINE_TITLE) {
        $this->TIMELINE_TITLE = $TIMELINE_TITLE;
    }

    public function getTIMELINE_TITLE() {
        return $this->TIMELINE_TITLE;
    }

    public function setUSER_ID($USER_ID) {
        $this->USER_ID = $USER_ID;
    }

    public function getUSER_ID() {
        return $this->USER_ID;
    }

    public function setTIMELINE_CONTENT($TIMELINE_CONTENT) {
        $this->TIMELINE_CONTENT = $TIMELINE_CONTENT;
    }

    public function getTIMELINE_CONTENT() {
        return $this->TIMELINE_CONTENT;
    }

    public function setTIMELINE_TIMESTAMP($TIMELINE_TIMESTAMP) {
        $this->TIMELINE_TIMESTAMP = $TIMELINE_TIMESTAMP;
    }

    public function getTIMELINE_TIMESTAMP() {
        return $this->TIMELINE_TIMESTAMP;
    }

    public function add() {
        $this->setQuery("insert into tb_timelines(TIMELINE_DATE,TIMELINE_LOCATION,TIMELINE_TITLE,TIMELINE_CONTENT) values  ('" . $this->getTIMELINE_DATE() . "',n'" . $this->getTIMELINE_LOCATION() . "',n'" . $this->getTIMELINE_TITLE() . "',n'" . $this->getTIMELINE_CONTENT() . "')");
       echo $this->getQuery();
        return $this->executeQuery();
    }

    public function update() {
        $this->setQuery("update tb_timelines set TIMELINE_DATE='" . $this->getTIMELINE_DATE() . "' ,TIMELINE_LOCATION='" . $this->getTIMELINE_LOCATION() . "' ,TIMELINE_ICON='" . $this->getTIMELINE_ICON() . "' ,TIMELINE_TYPE='" . $this->getTIMELINE_TYPE() . "' ,TIMELINE_TITLE='" . $this->getTIMELINE_TITLE() . "' ,USER_ID='" . $this->getUSER_ID() . "' ,TIMELINE_CONTENT='" . $this->getTIMELINE_CONTENT() . "' ,TIMELINE_TIMESTAMP='" . $this->getTIMELINE_TIMESTAMP() . "' where TIMELINE_ID ='" . $this->getTIMELINE_ID() . "'");
        return $this->executeQuery();
    }

    public function delete() {
        $this->setQuery("delete from tb_timelines where TIMELINE_ID ='" . $this->getTIMELINE_ID() . "'");
        return $this->executeQuery();
    }

    public function listOfTb_timelines() {
        mysql_query("set character_set_results='utf8'");
        $result = mysql_query("select * from tb_timelines order by TIMELINE_DATE desc");
        $data="";
        while ($row = mysql_fetch_array($result))
            $data [] = $row;

        return $data;
    }

}
?> 
