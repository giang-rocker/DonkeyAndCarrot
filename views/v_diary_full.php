<?php
$color = ["blue", "green", "orange", "yellow", "pink"];
$user = ["donkey", "carrot"];
$i_color = 0;
$objDiary = new Tb_diary();
$listOfDiary = $objDiary->listOfTb_diary();
$num = count($listOfDiary);
?>
<!DOCTYPE html>
<html lang="en" class="no-js">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>Fullscreen Pageflip Layout with BookBlock</title>
        <meta name="description" content="Fullscreen Pageflip Layout with BookBlock" />
        <meta name="keywords" content="fullscreen pageflip, booklet, layout, bookblock, jquery plugin, flipboard layout, sidebar menu" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href=" css/jquery.jscrollpane.custom.css" />
        <link rel="stylesheet" type="text/css" href=" css/bookblock.css" />
        <link rel="stylesheet" type="text/css" href= "css/custom.css" />
        <script src="./views/js/modernizr.custom.79639.js"></script>
    </head>
    <script type="text/javascript">
          var h = $(document).height() * 0.8;
        bkLib.onDomLoaded(function () {
         //  nicEditors.allTextAreas();
             new nicEditor({maxHeight : h}).panelInstance('txtDIARY_CONTENT');
        });
    </script>
    <body style="background: url('./lib/login_bg.jpg')"  >
        <div id="container" class="container">	
            <div class="bb-custom-wrapper">
                <div id="bb-bookblock" class="bb-bookblock">
                    <div class="bb-item" id="item1">
                        <div class="content">
                            <div class="scroller">
                                <form method="POST" action ="">
                                    <h2  style="height: 20px" ><input name='txtDIARY_TITLE' style=" width: 100%; margin: auto; text-transform: uppercase" placeholder="SOME TITLE" /></h2>
                                    <p style="font-size: 20px">
                                        <textarea id="txtDIARY_CONTENT" name="txtDIARY_CONTENT" style="width: 100%;   resize: none;" rows="20"  ></textarea>
                                    </p>
                                    <div  style="width: 80%; text-align: right;">
                                        <button class="delete_button" type="reset"></button>
                                        <button name="action" value="Add" class="check_button"></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
<?php for ($i = 0; $i < $num; $i++) { ?>
                        <div class="bb-item" id="item1">
                            <div class="content">
                                <div class="scroller">
                                      <p style="text-align: right"><?php echo (($i + 1) . "/" . $num) ?> </p>
                                  
                                    <h2><?php echo $listOfDiary[$i]["DIARY_TITLE"] ?></h2>
                                    <p class="" style=" font-size: 25px" >  <?php
                                        // echo date
                                        $day = date_create($listOfDiary[$i]["DIARY_TIMESTAMP"]);
                                        echo date_format($day, 'd/m/Y');
                                        ?> </p>
                                    <div style="font-size: 20px"><?php echo $listOfDiary[$i]["DIARY_CONTENT"] ?></div>

                                </div>
                            </div>
                        </div>
<?php } ?>




                </div>

                <nav>
                    <span id="bb-nav-prev">&larr;</span>
                    <span id="bb-nav-next">&rarr;</span>
                </nav>

                <span id="tblcontents" class="menu-button">Table of Contents</span>

            </div>

        </div><!-- /container -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script src=" js/jquery.mousewheel.js"></script>
        <script src=" js/jquery.jscrollpane.min.js"></script>
        <script src=" js/jquerypp.custom.js"></script>
        <script src="js/jquery.bookblock.js"></script>
        <script src="js/page.js"></script>
        <script>
        $(function () {

            Page.init();

        });
        </script>
    </body>
</html>
