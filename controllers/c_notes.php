<?php

 if (isset($_GET['action']) && $_GET['action']=="read") {
        $objNote->readNote();
    }

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $tb_notes = new Tb_notes();
    if (isset($_POST['txtUSER_ID'])) {
        $USER_ID = 2;
        $tb_notes->setUSER_ID($USER_ID);
    }


    if (isset($_POST['txtNOTE_DATE'])) {
        $NOTE_DATE = $_POST['txtNOTE_DATE'];
        $tb_notes->setNOTE_DATE($NOTE_DATE);
    }


    if (isset($_POST['txtNOTE_CONTENT'])) {
        $NOTE_CONTENT = trim($_POST['txtNOTE_CONTENT']);
        $tb_notes->setNOTE_CONTENT($NOTE_CONTENT);
    }

    if (isset($_POST['add']) && $_POST['add']="addNewNote" ) {
        mysql_query("BEGIN TRAN");

        $i = 0;
        if ($tb_notes->add() > 0)
            $i = 1;
    
    }
    
     if (isset($_POST['delete']) ) {
        mysql_query("BEGIN TRAN");

        $i = 0;
        if ($tb_notes->delete($_POST["delete"]) > 0)
            $i = 1;
    
    }
    
   
    
     include_once('./views/v_notes.php');
    ?>
    
    <?php

} else
    include_once('./views/v_notes.php');
?>     

