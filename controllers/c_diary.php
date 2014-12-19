 <?php  
  if ($_SERVER['REQUEST_METHOD'] == 'POST'){  
    
        $tb_diary = new Tb_diary() ;
    
    
           
                $USER_ID = 2;
                $tb_diary->setUSER_ID($USER_ID);  
            
            if (isset($_POST['txtDIARY_CONTENT'])){
                $DIARY_CONTENT = trim($_POST['txtDIARY_CONTENT']); 
                $tb_diary->setDIARY_CONTENT($DIARY_CONTENT);  
            }
	

            if (isset($_POST['txtDIARY_TITLE'])){
                $DIARY_TITLE = trim($_POST['txtDIARY_TITLE']); 
                $tb_diary->setDIARY_TITLE($DIARY_TITLE);  
            }
	

    if (isset($_POST['action']) && ($_POST['action'])=="Add") 
			{
      			mysql_query("BEGIN TRAN");
				
					$i = 0;
					if ($tb_diary->add() > 0)  $i = 1;
					
					
	 		   
                        }
                        include_once('./views/v_diary.php');    
 	   }  
           else 
 include_once('./views/v_diary.php');    

		?>                              
		