<?php
session_start();
?>
<html lang="en" class="no-js" >
    <head>
       <meta charset="UTF-8" />
        <title>DONKEY & CARROT</title>
        <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="css/main.css" rel="stylesheet" >
        <link href="css/panel_tab.css" rel="stylesheet" >

        <script src="js/bootstrap.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jqBootstrapValidation.js"></script>
        <script src="js/jquery.min.js"></script>
        <script  src="js/nicEdit.js"></script>
         
        <!-- jQuery -->
        <script src="views/jquery.min.js"></script>

        <!--  Flippage -->
        <script src="views/jquery.flippage.min.js"></script>
        <link href="views/jquery.flippage.css" type="text/css" rel="stylesheet" />

    </head>


    <body id = "body" class="boby"    >

        <?php
        date_default_timezone_set("Asia/Ho_Chi_Minh");
        // menu
        $listTable = array("config", "login", "timelines", "notes", "diary", "notes", "users", "actions", "action_history");
        $listName = array("Timelines", "Notes", "Notes");


        //get option
        // get URL variable option
        if (isset($_GET["option"]))
            $option = $_GET["option"];
        else
            $option = "mainpage";

        // check option logout;
        if (isset($_GET["option"]) && $_GET["option"] == "logout") {
            session_destroy();
            header('Location: index.php?option=mainpage');
        }



        // include model
        foreach ($listTable as $tb)
            include_once "./models/m_" . $tb . ".php";

        $objNote = new Tb_notes();
        $objUser = new Tb_users();
        $objTimeline = new Tb_timelines();
        $objActionHistory = new Action_history();
        $objAction = new Tb_action();
        $objDiary = new Tb_diary();
        // inclde controller
        if (isset($_SESSION["username"]) && $_SESSION["username"] != "" && $_SESSION["username"] != NULL) {
            include_once ("./controllers/c_" . $option . ".php");
        } else
            include_once ("./controllers/c_mainpage.php");
        ?>
    </body>