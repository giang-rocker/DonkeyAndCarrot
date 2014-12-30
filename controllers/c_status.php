<?php

function getDesc($id) {
    if ($id == "1") {
        return "chẳng vì lý do gì cả, vì em thích thế";
    }
    if ($id == "2") {
        return "chẳng vì lý do gì cả, vì em thích thế";
    }
    if ($id == "4") {
        return "vì em nhớ anh nhiều lắm";
    }
}

if (isset($_GET['id'])) {

    $user_action_history = new Action_history();
    $objAction = new Tb_action();

    $USER_ID_ACTION = 2;
    $user_action_history->setUSER_ID_ACTION($USER_ID_ACTION);



    if (isset($_GET['id'])) {
        $ACTION_ID = trim($_GET['id']);
        $user_action_history->setACTION_ID($ACTION_ID);
    }



    $USER_ID_VICTIM = 1;
    $user_action_history->setUSER_ID_VICTIM($USER_ID_VICTIM);






    $LOG_COMMENT = getDesc($ACTION_ID);
    $user_action_history->setLOG_COMMENT($LOG_COMMENT);


    if (isset($_GET['action'])) {
        mysql_query("BEGIN TRAN");

        $i = 0;
        if ($objActionHistory->getPointById(2)<500 ||($objActionHistory->getPointById(2)>=500 && $ACTION_ID !=4 )  ) {
               $user_action_history->add() ;
        }
    
    }
    include_once('./views/v_status.php');
} else
    include_once('./views/v_status.php');
?>                              
