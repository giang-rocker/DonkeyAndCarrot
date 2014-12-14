<html lang="en" >
    <head>
        <title>DONKEY & CARROT</title>
        <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="css/main.css" rel="stylesheet" >
        <link href="css/panel_tab.css" rel="stylesheet" >

        <script src="js/bootstrap.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jqBootstrapValidation.js"></script>
        <script src="js/jquery.min.js"></script>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    </head>
    <body class="boby" >
    <?php
    
       date_default_timezone_set("Asia/Ho_Chi_Minh"); 
    // menu
    $listTable = array("timelines", "notes", "notes","users","actions","action_history");
    $listName = array("Timelines", "Notes", "Notes");


    //get option
    // get URL variable option
    if (isset($_GET["option"]))
        $option = $_GET["option"];
    else
        $option = $listTable[0];

    // include model
    foreach (  $listTable as $tb)
    include_once "./models/m_".$tb.".php";
    
    $objNote = new Tb_notes();
    $objUser = new Tb_users();
    $objTimeline = new Tb_timelines();
    $objActionHistory = new Action_history();
    $objAction = new Tb_action();
    // inclde controller
    include_once ("./controllers/c_" . $option . ".php");
   
     
    ?>
    </body>