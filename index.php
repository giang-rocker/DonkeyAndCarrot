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
     $listTable =array ("tb_notes", "tb_stories","tb_timelines") ;
     $listName =array ("Notes", "Stories", "Timeline") ;  
     
     
     // include
     include_once "./model/nt_users.php";
    include_once "./model/nt_match.php";
    include_once "./model/nt_join.php";
	for ($i=0; $i<$count ; $i++){
           
            include_once ("./controller/c_".$option.".php");
        }
     
     $count = count ($listTable); 

     // get URL variable option
     if (isset ($_GET["option"]))
		$option = $_GET["option"];
     else $option = $listTable[0];
     
?>