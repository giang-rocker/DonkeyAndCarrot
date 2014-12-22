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
<script>
      var h = $(document).height();
        var w = $(document).width();

        var padding = (h-600)/2;
        

        $("#diary_body").css({"margin": 200px});
</script>


<body class="diary_body" style="background: url('./lib/login_bg.jpg'); margin-top: 5%">

    <div class="col-lg-5 col-lg-offset-4  "   >
 
      
        <div class="exemples" style=" ">
            <div   style="background: transparent;"  ></div>
             
            <div   style="background: url('./lib/diary_bg.jpg'); margin-left: 0px;" class="ios_font blue sizexxl" ></div>
            <?php for ($i = 0; $i < $num; $i+=2) { ?>
                <div class='note_page'  >
                    <?php echo ($i+1)."/".$num ?><br/> 
                    <div class='sizelarge white' style=" text-decoration: underline " > <?php echo $listOfDiary[$i]["DIARY_TITLE"]  ?> </div>
                    <div class='note_page_content'>   <?php echo $listOfDiary[$i]["DIARY_CONTENT"] ?> </div>
                </div>
                <?php if (($i + 1) < $num) { ?>
                     <div class='note_page'  >
                       <?php echo ($i+2)."/".$num ?><br/> 
                    <div class='sizelarge white' style=" text-decoration: underline " >  <?php echo $listOfDiary[$i+1]["DIARY_TITLE"]  ?> </div>
                    <div class='note_page_content'>   <?php echo $listOfDiary[$i+1]["DIARY_CONTENT"] ?> </div>
                </div>
                <?php }
            }
            ?>

        <div   style="background: url('./lib/diary_bg.jpg'); margin-left: 0px;" class="ios_font blue sizexxl" ></div>
     
        </div>
        <div class=" " style="width: 600px;  text-align: center" ><a href="#" onclick="$('.exemples:eq(0)').trigger('previous');
        return false;">Previous</a> - <a href="#" onclick="javascript:$('.exemples:eq(0)').trigger('next');
                return false;"  >Next</a></div>
    </div>	

</body>
</html>