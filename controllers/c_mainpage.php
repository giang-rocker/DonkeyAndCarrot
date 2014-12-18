 <?php  
  
 if ($objUser->checkConfig("Carrot")) {
    include_once('./controllers/c_config.php');  
}
 else if (isset( $_SESSION["username"]) && $_SESSION["username"]!="" && $_SESSION["username"]!=NULL) {
    include_once('./views/v_mainpage.php');                              

}
 else include_once('./controllers/c_login.php');    

		?>                              
		