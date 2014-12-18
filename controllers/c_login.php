 <?php  
  
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){  
        if (isset($_POST["login"])) {
          $txtUsername = strtolower($_POST["txtUsername"]);
          $txtPassword = $_POST["txtPassword"];
            
          if ($objUser->checkLogin($txtUsername,$txtPassword)) {
              
              $_SESSION["username"] = $txtUsername;
              header('Location: index.php?option=mainpage');
          }
          else {
              include_once('./views/v_login.php');     
          }
        }
      	    
        }                                
	 	 else include_once('./views/v_login.php');                              
		?>                              
		