<?php

$color = ["blue", "green", "orange", "yellow", "pink"];
$user = ["donkey", "carrot"];
$i_color = 0;
$objDiary = new Tb_diary();
$listOfDiary = $objDiary->listOfTb_diary();
$num = count($listOfDiary);
?>


<head>
    <meta charset=utf-8>
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <title>FlipPage</title>

    

    <style>
        body > div {
            display: block;
            width: 100%;
            margin-left: 50px;
            margin-top: 50px;
          
        }


        .exemples > div {
        
        }
    </style>
    <script>
        (function ($) {
            $(document).ready(function () {
                $('.exemples:eq(0)').flippage({
                    width: 600,
                    height: 500
                });

                $('.exemples:eq(1)').flippage({
                    width: 300,
                    height: 150
                });
            });
        })(jQuery);
    </script>
</head>


<script type="text/javascript">
	bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
</script>



<body style="background: url('./lib/login_bg.jpg');">

    <div class="col-lg-6 col-lg-offset-3 "   >
 
      
        <div class="exemples" style=" ">
            <div   style="background: transparent;"  ></div>
            <div class="white"  >
                
                       <textarea name="area1" style="background: url('../lib/notepad_page.png'); width: 100%; height: 400px;  " >asdas</textarea>
         <div id="note_sign" class="timeline_submit">
                        <button class="delete_button" type="reset"></button>
                        <button name="action" value="Add" class="check_button"></button>
                    </div>
            </div>
            <div   style="background: url('./lib/diary_bg.jpg'); margin-left: 0px;" class="ios_font blue sizexxl" ></div>
            <?php for ($i = 0; $i < $num; $i+=2) { ?>
                <div class='note_page'  >
                    <?php echo ($i+1) ?><br/> 
                    <div class='sizexl' style="color: blue; height: 27px;" > <?php echo $listOfDiary[$i]["DIARY_TITLE"]  ?> </div>
                    <div class='note_page_content'>   <?php echo $listOfDiary[$i]["DIARY_CONTENT"] ?> </div>
                </div>
                <?php if (($i + 1) < $num) { ?>
                     <div class='note_page'  >
                     <?php echo ($i+2) ?><br/> 
                    <div class='sizexl' style="color: blue; height: 27px;" > <?php echo $listOfDiary[$i+1]["DIARY_TITLE"]  ?> </div>
                    <div class='note_page_content'>   <?php echo $listOfDiary[$i+1]["DIARY_CONTENT"] ?> </div>
                </div>
                <?php }
            }
            ?>

        <div   style="background: url('./lib/diary_bg.jpg'); margin-left: 0px;" class="ios_font blue sizexxl" ></div>
     
        </div>
        <div style="width: 100%; text-align: center" ><a href="#" onclick="$('.exemples:eq(0)').trigger('previous');
        return false;">Previous</a> - <a href="#" onclick="javascript:$('.exemples:eq(0)').trigger('next');
                return false;"  >Next</a></div>
    </div>	

</body>
</html>