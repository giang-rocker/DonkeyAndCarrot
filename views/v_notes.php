

<?php
$color = ["blue", "green", "orange", "yellow", "pink"];
$user = ["donkey", "carrot"];
$i_color = 0;
$listOfNote = $objNote->listOfTb_notes();
$num = count($listOfNote);

$day = new DateTime();
$indexEven = 1;
$indexOdd = 0;
?>

<div id ="note_page"  class="note_page"  style="  min-width: 100%;  width:  <?php echo ($num / 2 + 1) * 335 + 20 ?>px;">
    <div id="banner_note" class="banner_note">

    </div>

    <div id="main_note" class="main_note">
        <!-- content of notes    -->
        <table class="table_note" >
            <tr>
                <!-- BLANK NOTE -->
                <td class="note_detail note_<?php echo $color[$i_color % 5] ?>   " >
                    <form  method="post" name="form" action="">
                        <div id="carrot_avatar" class=" note_title carrot_avatar grey sizelarge">
                            <b style="color: black" > # <?php echo $num + 1; ?> </b> <br/>          
                            <?php
                            // echo date
                            echo date_format($day, 'd/m/Y');
                            ?>
                            <!-- HIDDEN INPUT USER & DATE -->
                            <input type="hidden" name="txtNOTE_DATE" value="<?php echo date_format($day, 'Y-m-d H-i-s'); ?>" />
                            <input type="hidden" name="txtUSER_ID" value="2" />
                        </div>
                        <div id="note_content" class="note_content sizelarge grey">
                            <textarea name="txtNOTE_CONTENT" class="bo-tron sizexl" style="background: transparent; 
                                      width: 100%; height: 100%; 
                                      margin: auto; resize: none;
                                      outline: none;
                                      -moz-appearance:none;"
                                      maxlength="118" rows="6" 
                                      placeholder="Em muốn nói với anh rằng ..."
                                      ></textarea> 
                        </div>
                        <div id="note_sign" class="note_sign sizexl grey">
                            <button class="delete_button" type="reset"></button>
                            <button name="add" value="addNewNote" class="check_button"></button>
                            Carrot
                        </div>
                    </form>
                </td>
                <?php
                $i_color++;
                for ($i = 0; $i < ($num - 1) / 2; $i ++) {
                    ?>
                    <td class="note_detail note_<?php echo $color[$i_color % 5] ?>   " >
                        <div id="carrot_avatar" class=" note_title <?php echo $user[$listOfNote[$indexEven]["USER_ID"] - 1]; ?>_avatar grey sizelarge">
                            <b style="color: black" > #<?php echo ($num - $indexEven); ?> </b> <br/>   
                            <?php
                            // echo date
                            $day = date_create($listOfNote[$indexEven]["NOTE_DATE"]);
                            echo date_format($day, 'd/m/Y   h:m:s');
                            ?>
                        </div>
                        <div id="note_content" class="note_content sizexl grey">
    <?php echo $listOfNote[$indexEven]["NOTE_CONTENT"]; ?>
                        </div>
                        <div id="note_sign" class="note_sign sizexl grey">
                            <form action="" method="POST">

                                <?php if ($listOfNote[$indexEven]["USER_ID"] == 2) { ?>
                                    <button name="delete" value ="<?php echo $listOfNote[$indexEven]["NOTE_ID"] ?>" class="delete_button" style="margin-right:40px;" type="sunmit"></button>
                                <?php } ?>                                      
                                <?php
                                // echo name
                                echo $objUser->getUsernameById($listOfNote[$indexEven]["USER_ID"]);
                                ?>
                            </form>   
                        </div>
                    </td>
                    <?php
                    $i_color++;
                    $indexEven+=2;
                }
                ?>
            </tr>
            <tr>
<?php 
$i_color+=2; $i_color %= 5;
for ($i = 0; $i < ($num) / 2; $i ++) { ?>
                    <td class="note_detail note_<?php echo $color[$i_color % 5] ?>   " >
                        <div id="carrot_avatar" class=" note_title <?php echo $user[$listOfNote[$indexOdd]["USER_ID"] - 1]; ?>_avatar grey sizelarge">
                            <b style="color: black" > #<?php echo ($num - $indexOdd); ?> </b> <br/>   
                            <?php
                            // echo date
                            $day = date_create($listOfNote[$indexOdd]["NOTE_DATE"]);
                              echo date_format($day, 'd/m/Y   H:m:s');    
                            ?>
                        </div>
                        <div id="note_content" class="note_content sizexl grey">
    <?php echo $listOfNote[$indexOdd]["NOTE_CONTENT"]; ?>
                        </div>
                        <div id="note_sign" class="note_sign sizexl grey">
                            <form action="" method="POST">
                                <?php if ($listOfNote[$indexOdd]["USER_ID"] == 2) { ?>
                                    <button name="delete" value ="<?php echo $listOfNote[$indexOdd]["NOTE_ID"] ?>" class="delete_button" style="margin-right:40px;" type="sunmit"></button>
                                <?php } ?>
                                <?php
                                // echo name
                                echo $objUser->getUsernameById($listOfNote[$indexOdd]["USER_ID"]);
                                ?>
                            </form>
                        </div>
                    </td>
                    <?php
                    $i_color++;
                    $indexOdd+=2;
                }
                ?>
            </tr> 
        </table>

    </div>

    <div id="footer_note" class="footer_note"></div>
</div>