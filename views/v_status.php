<?php
$user = ["donkey", "carrot"];

$listActionHistory = $objActionHistory->listOfUser_action_history();

$num = min(2, count($listActionHistory));


$day = new DateTime();

$CarrotPoint = $objActionHistory->getPointByID(2);
$maxPoint = 500;

$prop = min(1, ($maxPoint+$CarrotPoint)/500);

?>
<div class="wrap_status">
    <div class="wrap_content">
        <div class="status_top"></div>
        <div class="status_progress">
            <table style="border: none;" >

                <tr>
                    <td> <img src="./lib/carrot_status.png" class="carrot_status" style=" left: <?php echo $prop*100-15 ?>%" /></td> 

                    <td> <img src="./lib/donkey_status.png" class="donkey_status" style=" left: <?php echo -7 ?>%" /></td> 
                </tr>
                <tr>

                    <td class="status_progressbar white" > <div class="prop_progress"> <?php echo  $prop*100 ."%" ;?> </div>  <img src="./lib/orange_progress.png" width="<?php echo 315 * $prop; ?>" height="30"  />

                    </td>

                    <td class="status_progressbar white" style="text-align: right">  <div class="prop_progress"> <?php echo   100 ."%" ;?> </div> <img src="./lib/blue_progress.png" width="<?php echo 315 * 1 ?>" height="30" />


                    </td>
                </tr>

            </table>


        </div>

        <div class="status_action"> 
            <a href="index.php?option=status&action=blanktv"><img src="./lib/dctv.png"   class="icon_action"          /></a>
            <a href="index.php?option=status&action=hit&id=1"><img src="./lib/hit.png"   class="icon_action"          /></a>
            <a href="index.php?option=status&action=kick&id=2">   <img src="./lib/kick.png"      class="icon_action"         /></a>
            <a href="index.php?option=status&action=kiss&id=4">  <img src="./lib/kiss.png"       class="icon_action"        /></a>
            <a href="index.php?option=status&action=notavailable">  <img src="./lib/blank.png"     class="icon_action"          /></a>
        </div>
        <div class="status_reason " > <input name="reason" placeholder="Some reason ..." class="bo-tron" style="width: 100%"/> </div>
        <div class="status_tv"><img src="./lib/<?php 
        if (isset($_GET['action'])) {
            echo $_GET['action'];
            }
           else echo "blanktv";
        
        ?>.gif" /></div>
        
        <div class="action_log" >
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