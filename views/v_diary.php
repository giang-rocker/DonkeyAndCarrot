<?php
$color = ["blue", "green", "orange", "yellow", "pink"];
$user = ["donkey", "carrot"];
$i_color = 0;
$listOfDiary = $objDiary->listOfTb_diary();
$num = count($listOfDiary);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Booklet - jQuery Plugin</title>
    <!--[if lt IE 9]><script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <link href="./views/booklet/jquery.booklet.latest.css" type="text/css" rel="stylesheet" media="screen, projection, tv" />
    <style type="text/css">
        body {background: url("./lib/login_bg.jpg") ;}
    </style>
</head>

<script>
      var h = $(document).height();
        var w = $(document).width();

        var zoom = h / 580;
        
       
     //   alert(h + " " + w + " " + zoom);

        $("#body").css({"zoom": zoom});
</script>/

<body class="ios_fontvn"  >
	<header>
            <h1 class="ios_font white sizexxl" style="padding-left:10%">DIARY</h1>
	</header>
	<section>
	    <div id="mybook" class="">
                <div title="FIRST PAGE" class="diary_page">
                    <form action="" method="POST">
                    <div class="diary_content">
                        <div class="diary_date">
                            <?php 
                            $day = new DateTime();
                            $day = date_format($day,"d/m/Y");
                            echo $day;
                            ?>
                            
                        </div>
                        <input name="txtDIARY_TITLE" class="diary_title border1px bo-tron" placeholder="SOME TITLE"  />
                        <textarea  name="txtDIARY_CONTENT" class="diary_content_blank bo-tron ios_fontvn" >Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                        </textarea>
                        
                    </div>
                        <div id="note_sign" class="timeline_submit">
                        <button class="delete_button" type="reset"></button>
                        <button name="action" value="Add" class="check_button"></button>
                    </div>
                        </form>
                </div>
                <?php 
                for ($i=$num-1; $i >=0; $i--){
                ?> 
	        <div  >
                    <div class=""> <?php 
                                            $day = date_create($listOfDiary[$i]["DIARY_TIMESTAMP"]);
                                            $day = date_format($day,"d/m/Y");
                                            echo $day; 
                                                    
                                                    ?></div>
                    <div class="diary_title" ><u> <?php echo $listOfDiary[$i]["DIARY_TITLE"] ?></u> </div>    
	        <div class="diary_content">
                    <p> <?php echo $listOfDiary[$i]["DIARY_CONTENT"] ?> </p>
                </div>
	            
                </div>
                <?php } ?>
                
                <div title="LAST PAGE">
                    <div style="height: 80%; width: 100%; text-align: center; padding-top:50%" > <h3>END OF DIARY</h3></div>
	        </div>
	      
	    </div>
	</section>
	<footer></footer>
    
	 <script src="./views/booklet/jquery-2.1.0.min.js">  </script>
    
	   <script src="./views/booklet/jquery-ui-1.10.4.min.js">  </script>
    <script src="./views/booklet/jquery.easing.1.3.js"></script>
    <script src="./views/booklet/jquery.booklet.latest.js"></script>
	<script>
	    $(function () {		
	        $("#mybook").booklet();
	    });
    </script>
</body>
</html>