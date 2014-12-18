<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
     if (isset($_POST["login"])) {
          $txtUsername = strtolower($_POST["txtUsername"]);
          $txtPassword = $_POST["txtPassword"];
          $txtConfirmPassword = $_POST["txtConfirmPassword"];
            
          if ($txtPassword==$txtConfirmPassword) {
              $objUser->configPassword($txtUsername,$txtPassword);
              header('Location: index.php?option=mainpage');
          }
          else {
              echo "<center><font color='red'>PASSWORD NOT MATCH</font></center>";
              include_once('./views/v_config.php');     
          }
        }
 
} else
    include_once('./views/v_config.php');
?>                              
