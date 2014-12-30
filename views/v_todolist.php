<?php
$color = ["blue", "green", "orange", "yellow", "red","pupple"];
$user = ["donkey", "carrot"];
$i_color = 0;
$listOfTodolist = $objTodolist->listOfTb_todolist();
$num = count($listOfTodolist);

$day = new DateTime();
$indexEven = 1;
$indexOdd = 0;
?>

<div class="wrap_todolist col-lg-12">

    <div class="todolist_content">
        <div class="todolist_top" style="text-align: right">  <img src="./lib/car.png" style="margin-right: 120px;" /> <img src="./lib/plane.png" /> </div>
        <div class="todolist_banner "></div>
        <table class="todolist_table" >
<!--            Blank to do list-->
             <tr class="todolist_detail" >
           
                    <td ><div class="todolist_check todolist_check_<?php echo $color[$i_color%6] ?> "  >
                         </div></td>
                         
                    <td >
                        <form method="POST" action=""><div class="sizelarger"  >
                            <input name="txtTODOLIST_TITLE" style="width: 380px; height: 30px; margin-left:10px" class="bo-tron"  maxlength="45"/>
                           <button name="add" value="addNewTaks" class="check_button"></button> 
                            
                        </div>
                        </form>
                    </td>
                    <td class="todolist_avatar"  > 
                   
                    </td>
                </tr>
        
            <?php
            $i_color++;
            for ($i = 0; $i < $num; $i++) {
                ?>
                <tr class="todolist_detail" >
                    <td ><div class="todolist_check todolist_check_<?php echo $color[$i_color%6] ?> "  > <?php if( $listOfTodolist[$i]["TODOLIST_DONE"] == 1) { ?> 
                              <form action="" method="POST"> 
                                  <input type="hidden" name="txtTODOLIST_ID" value="<?php echo $listOfTodolist[$i]["TODOLIST_ID"] ?>"/>
                                  <button type="submit" name ="done"  value="undone" style="background: transparent; border: 0px;  " >  <img src="./lib/blue-check-mark-md.png" width="45" /> 
                          </button> </form>
                            <?php } else { ?>
                            <form action="" method="POST"> 
                                <input type="hidden" name="txtTODOLIST_ID" value="<?php echo $listOfTodolist[$i]["TODOLIST_ID"] ?>"/>
                                <button type="submit" name ="done"  value="done" style="background: transparent; border: 0px; width: 30px;height: 40px;" >    </button> </form>
                            <?php } ?>
                        </div></td>
                    <td ><div class="todolist_title sizelarger bold todolist_title_<?php echo $color[$i_color%6] ?>"  ><?php echo $listOfTodolist[$i]["TODOLIST_TITLE"] ?></div> </td>
                    <td class="todolist_avatar"  >
                        <!--<img src="./lib/<?php echo $user[$listOfTodolist[$i]["USER_ID"]-1] ?>_status.png" height="50" />-->
                    </td>
                </tr>
            <?php
            $i_color++;
            
                    } ?> 

        </table>
        <div class="todolist_footer "></div>   
    </div>



</div>