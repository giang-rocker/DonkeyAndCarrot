<?php
$color = ["blue", "green", "orange", "yellow", "pink"];
$user = ["donkey", "carrot"];
$i_color = 0;
$objDiary = new Tb_diary();
$listOfDiary = $objDiary->listOfTb_diary();
$num = count($listOfDiary);
?>


<head>
   
    <title>Diary</title>



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


 
 

<body class="diary_body" style="background: url('./lib/login_bg.jpg'); margin-top: 5%">

    <div class="col-lg-5 col-lg-offset-4  "   >


        <div class="exemples" style=" ">
            <div   style="background: transparent;"  ></div>

            <div   style="background: url('./lib/diary_bg.jpg'); margin-left: 0px;" class="ios_font blue sizexxl" ></div>
                <?php for ($i = 0; $i < $num; $i+=2) { ?>
                <div class='diary_page'  >
    <?php echo ($i + 1) . "/" . $num ?><br/> 
                    <h1><div class='white' style=" text-decoration: underline " > <?php echo $listOfDiary[$i]["DIARY_TITLE"] ?> </div></h1>

                    <div>    <?php
                        // echo date
                        $day = date_create($listOfDiary[$i]["DIARY_TIMESTAMP"]);
                        echo date_format($day, 'd/m/Y');
                        ?>  </div>
                    <div class='note_page_content'>   <?php echo $listOfDiary[$i]["DIARY_CONTENT"] ?> </div>
                </div>

                    <?php if (($i + 1) < $num) { ?>
                    <div class='diary_page'  >
        <?php echo ($i + 2) . "/" . $num ?><br/> 
                        <h1>  <div class=' white' style=" text-decoration: underline " >  <?php echo $listOfDiary[$i + 1]["DIARY_TITLE"] ?> </div></h1>
                        <div class=>      <?php
                            // echo date
                            $day = date_create($listOfDiary[$i + 1]["DIARY_TIMESTAMP"]);
                            echo date_format($day, 'd/m/Y');
                            ?>  </div>
                        <div class='note_page_content'>   <?php echo $listOfDiary[$i + 1]["DIARY_CONTENT"] ?> </div>
                    </div>
                <?php
                }
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