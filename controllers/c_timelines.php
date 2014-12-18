<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $tb_timelines = new Tb_timelines();
    
    $date = $_POST["txtTIMELINE_DATE"] ;
    $month = $_POST["txtTIMELINE_MONTH"] ;
    $year = $_POST["txtTIMELINE_YEAR"] ;
    
    $fullday = $year."-".$month."-".$date;
    
     
    
        $TIMELINE_DATE = $fullday;
        $tb_timelines->setTIMELINE_DATE($TIMELINE_DATE);
     

    if (isset($_POST['txtTIMELINE_LOCATION'])) {
        $TIMELINE_LOCATION = trim($_POST['txtTIMELINE_LOCATION']);
        $tb_timelines->setTIMELINE_LOCATION($TIMELINE_LOCATION);
    }

    if (isset($_POST['txtTIMELINE_TITLE'])) {
        $TIMELINE_TITLE = trim($_POST['txtTIMELINE_TITLE']);
        $tb_timelines->setTIMELINE_TITLE($TIMELINE_TITLE);
    }


     
        $USER_ID = 2;
        $tb_timelines->setUSER_ID($USER_ID);
     


    if (isset($_POST['txtTIMELINE_CONTENT'])) {
        $TIMELINE_CONTENT = trim($_POST['txtTIMELINE_CONTENT']);
        $tb_timelines->setTIMELINE_CONTENT($TIMELINE_CONTENT);
    }


     

    if (isset($_POST['action']) && ($_POST['action']) == "Add") {
        mysql_query("BEGIN TRAN");

        $i = 0;
        if ($tb_timelines->add() > 0)
            $i = 1;
    }
    include_once('./views/v_timelines.php');
    
} else
    include_once('./views/v_timelines.php');
?>                              
