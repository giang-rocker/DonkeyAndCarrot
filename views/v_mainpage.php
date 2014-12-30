<script>
(function($) {
    $.fn.blink = function(options) {
        var defaults = {
            delay: 500
        };
        var options = $.extend(defaults, options);

        return this.each(function() {
            var obj = $(this);
            setInterval(function() {
                if ($(obj).css("visibility") == "visible") {
                    $(obj).css('visibility', 'hidden');
                }
                else {
                    $(obj).css('visibility', 'visible');
                }
            }, options.delay);
        });
    }
}(jQuery)) 

/////////////////////////////////////////////
///////////////////////////////////////////// 
/////////////////////////////////////////////

$(document).ready(function() {
    $('.blink_second').blink(); // default is 500ms blink interval.
    $('.blink').blink({
        delay: 300
    }); // causes a 100ms blink interval.
    $('.blink_third').blink({
        delay: 1500
    }); // causes a 1500ms blink interval.     
});
</script>

<?php
$user = ["donkey", "carrot"];

$listActionHistory = $objActionHistory->listOfUser_action_history();

$num = min(5, count($listActionHistory));


$day = new DateTime();

$CarrotPoint = $objActionHistory->getPointByID(2);
$maxPoint = 500;
$prop = min(1, ($maxPoint+$CarrotPoint)/500);

?>

<script>
    var vx = 50;
    var vy = 50;
    var currentx =0 ;
    var currenty =0;
    
    $(document).ready(function(){
    animateIMG();
    
});

function makeNewPosition(){
    
    // Get viewport dimensions (remove the dimension of the div)
    var h =  $(window).height() - 100;
    var w = $(window).width() - 100;
    
    var nh = Math.floor(Math.random()* 10)+ 10  ;
    var nw =  Math.floor(Math.random()* 10) + 10 ;

  
        return [nh,nw];    
    
}

function animateIMG(){
   // var newq = makeNewPosition();
    var h =  $(window).height() ;
    var w = $(window).width() ;
 
    var nh = Math.floor(Math.random()* 30)   ;
    var nw =  Math.floor(Math.random()* 30)  ;
   
   if (currentx < 100 ) vx =nh; if (currentx > w-100)  vx = -nh;
   if (currenty < 100 ) vy =nw; if (currenty > h-100)  vy = -nw;
   
  currentx+=vx;
  currenty+=vy;
   
   
    $('.flying_mess').animate({ top: (currenty), left: (currentx) }, function(){
      animateIMG();        
    });
   
};


</script>

<?php 
$countUnread = $objNote->countUnreadNote();
?>

<div id="mainpage_wrap" class="mainpage_wrap col-lg-12">
    <div  class="flying_mess"    > <a href="index.php?option=notes&action=read"> <?php if ($countUnread>0) { ?><b class="bold  sizexxl blink" > * </b> <?php } ?> <b><?php echo $countUnread ?> new note(s)</b><br/>  <img src="./lib/notif.gif" /></a></div>
    <div id="mainpage_banner" class="mainpage_banner">
        <a href="?option=logout" style="text-align: right; width: 100%;" class="white sizemedium" >Logout </a>
    </div>
    <div id ="mainpage_content" class="mainpage_content">
        <table id ="mainpage_table" class="mainpage_table">
            <tr >
                <td id="mainpage_menu" class="mainpage_menu menu_font white sizexxl">
                    <a href="?option=status">Status</a><br/>
                    <a href="?option=timelines">Timeline</a><br/>
                    <a href="?option=notes">Notes</a><br/>
                      <a href="?option=todolist">To Do List</a><br/>
                    <a href="?option=diary_full">Diary</a><br/>
                </td>

                <td id="mainpage_paper_wrap" class="mainpage_paper_wrap">
                    <div id="mainpage_paper" class="mainpage_paper">
                        <div id="mainpage_paper_pen" class="mainpage_paper_pen">
                            <div id="paper_title" class="paper_title sizexxl bold grey">
                                <u>Thương anh tha thiết</u>
                            </div>
                            <div id="paper_progress" class="paper_progress ">
                                <img src="lib/tag/fill_progress.png" style=" width: <?php echo 83 *$prop ."%" ?>; height: 100%" /> <span class="sizemedium bold" ><?php echo $prop*100 ."%"; ?> </span>

                            </div>
                            <div id="paper_content" class="paper_content">
                                <?php
                                for ($i = 0; $i < $num; $i++) {
                                    if ($listActionHistory[$i]!=NULL) {
                                    ?>
                                    <div id="history_wrap" class="history_wrap">
                                        <div id="history_title" class="history_title  sizemedium bold"> 
                                            <?php
                                            // echo date time acton
                                            $day = date_create($listActionHistory[$i]["LOG_TIME"]);
                                            echo "Ngày " . date_format($day, 'd/m/Y');
                                            ?>
                                        </div>
                                        <div id="history_content" class="history_content sizemedium bold"  >
                                            <?php
                                            $action = new Action_history();
                                            $action = $objAction->getActionById($listActionHistory[$i]["ACTION_ID"]);
                                            echo $objUser->getUsernameById($listActionHistory[$i]["USER_ID_ACTION"])
                                            . " đã " . $action["ACTION_TITLE"] . " " .
                                            $objUser->getUsernameById($listActionHistory[$i]["USER_ID_VICTIM"]) . " một cái " .
                                            $action["ACTION_DESC"] . "<br/>" .
                                            $listActionHistory[$i]["LOG_COMMENT"];
                                            ?>
                                        </div>

                                    </div>
                                <?php 
                                    }
                                    } ?>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>  
        </table>
    </div>

    <div id="mainpage_lastnews" class="mainpage_lastnews">

    </div>

    <div id ="mainpage_footer" class="mainpage_footer">
    </div>    

</div>