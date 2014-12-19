<?php
include ('../../../../models/m_diary.php');
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
		
		<!-- jQuery -->
		<script src="../jquery.min.js"></script>
		
		<!--  Flippage -->
		<script src="../jquery.flippage.min.js"></script>
		<link href="../jquery.flippage.css" type="text/css" rel="stylesheet" />
		
		<style>
			body > div {
				display: block;
				margin-left: 50px;
				margin-top: 50px;
			}

			
			.exemples > div {
				background-color: white;
			}
		</style>
		<script>
			(function($){
				$(document).ready(function(){
					$('.exemples:eq(0)').flippage({
						width: 1200,
						height: 800
					});
					
					$('.exemples:eq(1)').flippage({
						width: 300,
						height: 150
					});
				});
			})(jQuery);
		</script>
	</head>
	<body>
		 
		<div>
			 
                        <div class="exemples" style=" ">
                            <div   style=" background:transparent" class="ios_font blue sizexxl" />DIARY</div>
                           
                            <div   style=" background: url('../../../../lib/diary_bg.jpg'); margin-left: 0px;" class="ios_font blue sizexxl" /></div>
                            <?php for($i =0; $i<$num; $i+=2) { ?>
                        <div   style="border:  1px solid #018dff;  background: url('../../../../lib/notepad_page_T.png'); margin-left: 0px; " />Page <?php echo $i+1 ?><br/>
                             <?php echo $listOfDiary[$i]["DIARY_CONTENT"] ?> 
                        </div>
                        <?php if(($i+1)<$num) {?>
                        <div   style="border:  1px solid #018dff; background: url('../../../../lib/notepad_page_T.png');margin-left: -250px; " />Page <?php echo $i+2 ?><br/>
                        <?php echo $listOfDiary[$i+1]["DIARY_CONTENT"] ?> 
                        </div>
                            <?php } } ?>
				 
                            <div   style=" background:transparent" class="ios_font blue sizexxl text-center"  />END OF DIARY</div>
			</div>
                    <div style="width: 100%; text-align: center" ><a href="#" onclick="$('.exemples:eq(0)').trigger('previous'); return false;">Previous</a> - <a href="#" onclick="javascript:$('.exemples:eq(0)').trigger('next'); return false;"  >Next</a></div>
		</div>	
		 
	</body>
</html>