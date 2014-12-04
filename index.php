<html lang="en" >
    <head>
        <title>DONKEY & CARROT</title>
        <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="css/main.css" rel="stylesheet" >

        <script src="js/bootstrap.min.js"></script>
        <script src="js/jqBootstrapValidation.js"></script>
        <script src="js/jquery.min.js"></script>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    </head>

    <?php
    // menu
    $listTable = array("timelines", "stories", "notes");
    $listName = array("Timelines", "Stories", "Notes");


    //get option
    // get URL variable option
    if (isset($_GET["option"]))
        $option = $_GET["option"];
    else
        $option = $listTable[0];

    // include model
    include_once "./models/m_timelines.php";
    // inclde controller
    include_once ("./controllers/c_" . $option . ".php");
    ?>