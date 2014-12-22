<?php
$user = ["donkey", "carrot"];

$listActionHistory = $objActionHistory->listOfUser_action_history();

$num = min(5, count($listActionHistory));


$day = new DateTime();
?>
<!--
<script>
    var h = $(document).height();
    var w = $(document).width();

    var x = w / 1000.0;
    var y = h / 680.0;

    
    var zoom = 0;

    if (x > y) {
        zoom = x;
    }
    else
        zoom = y;
    
  //  alert(h + " " + w + " " + zoom);

    $("#body").css({"zoom": x});
</script>-->

<div id="mainpage_wrap" class="mainpage_wrap">
    <div id="mainpage_banner" class="mainpage_banner">
        <a href="?option=logout" style="text-align: right; width: 100%" class="white" >Logout </a>
    </div>
    <div id ="mainpage_content" class="mainpage_content">
        <table id ="mainpage_table" class="mainpage_table">
            <tr >
                <td id="mainpage_menu" class="mainpage_menu menu_font white sizexxl">
                    <a href="?option=status">Status</a><br/>
                    <a href="?option=timelines">Timeline</a><br/>
                    <a href="?option=notes">Notes</a><br/>
                    <a href="?option=diary_full">Diary</a><br/>
                </td>

                <td id="mainpage_paper_wrap" class="mainpage_paper_wrap">
                    <div id="mainpage_paper" class="mainpage_paper">
                        <div id="mainpage_paper_pen" class="mainpage_paper_pen">
                            <div id="paper_title" class="paper_title sizexl grey">
                                <u>Thương anh tha thiết</u>
                            </div>
                            <div id="paper_progress" class="paper_progress ">
                                <img src="lib/tag/fill_progress.png" style=" width: 83%; height: 100%" /> <span class="sizesmall grey" >100%</span>

                            </div>
                            <div id="paper_content" class="paper_content">
                                <?php
                                for ($i = 0; $i < $num; $i++) {
                                    ?>
                                    <div id="history_wrap" class="history_wrap">
                                        <div id="history_title" class="history_title  sizesmall"> 
                                            <?php
                                            // echo date time acton
                                            $day = date_create($listActionHistory[$i]["LOG_TIME"]);
                                            echo "Ngày " . date_format($day, 'd/m/Y');
                                            ?>
                                        </div>
                                        <div id="history_content" class="history_content sizesmall"  >
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
                                <?php } ?>
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