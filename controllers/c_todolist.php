<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $tb_todolist = new Tb_todolist();


    if (isset($_POST['txtTODOLIST_TITLE'])) {
        $TODOLIST_TITLE = trim($_POST['txtTODOLIST_TITLE']);
        $tb_todolist->setTODOLIST_TITLE($TODOLIST_TITLE);
    }






    $USER_ID = 2;
    $tb_todolist->setUSER_ID($USER_ID);

    if (isset($_POST['add']) && ($_POST['add']) == "addNewTaks") {
        mysql_query("BEGIN TRAN");

        if ($tb_todolist->add() > 0)
            $i = 1;
    }
    
    if (isset($_POST['done']) && ($_POST['done']) == "done") {
        $id =  trim($_POST['txtTODOLIST_ID']);
          $done = 1;
        mysql_query("BEGIN TRAN");

        if ($tb_todolist->done($id,$done) > 0)
            $i = 1;
    }else 
        if (isset($_POST['done']) && ($_POST['done']) == "undone") {
        $id =  trim($_POST['txtTODOLIST_ID']);
          $done = 0;
        mysql_query("BEGIN TRAN");

        if ($tb_todolist->done($id,$done) > 0)
            $i = 1;
    }

    include_once('./views/v_todolist.php');
} else
    include_once('./views/v_todolist.php');
?>                              
