<?php
$color = ["blue", "green", "orange", "red"];
$i_color = 0;
$listOfTimeline = $objTimeline->listOfTb_timelines();
$num = count($listOfTimeline);

$day = new DateTime();
$indexEven = 1;
$indexOdd = 0;
?> 

    
<div id="wrap_timeline" class="wrap_timeline" style=" min-width: 100%; width:  <?php echo (($num + 1) ) * 330 + (2 * 380) ?>px;">
    <table id="timeline_table" class="timeline_table">
        <tr>
            <!-- FIST COL TIMELINE -->
            <td style="" > 
                <div class="timeline_conner">TIMELINE</div>
            </td>
            <!-- FIST COL TIMELINE -->
            <!-- BLANK TIMELINE -->
            <td id="timeline_content" class="timeline_content" >
                <form action="" method="POST">
                    <div id="timeline_content_main_<?php echo $color[($i_color ) % 4] ?>" class="timeline_content_main_<?php echo $color[($i_color ) % 4]; ?>">
                        <div id="timeline_content_title" class="timeline_content_title sizexl bold" >
                            <input name="txtTIMELINE_TITLE" class="input_timeline_title bo-tron white" placeholder="Tiêu đề" />
                        </div>
                        <div id="timeline_content_text" class="timeline_content_text sizelarge" >
                            <textarea name="txtTIMELINE_CONTENT" class="input_timeline_content bo-tron white " placeholder="Sự kiện .." ></textarea>
                            <div id="note_sign" class="timeline_submit">
                                <button class="delete_button" type="reset"></button>
                                <button name="action" value="Add" class="check_button"></button>

                            </div>
                        </div>
                    </div>
                    <div id="timeline_content_dotline_<?php echo $color[($i_color ) % 4] ?>" class="timeline_content_dotline_<?php echo $color[($i_color + 1) % 4] ?> rotate_180">
                    </div>
                    <div id="timeline_content_date_<?php echo $color[($i_color ) % 4] ?>" class=" timeline_content_date timeline_content_date_<?php echo $color[($i_color ) % 4] ?> ios_font sizexxl ">
                        <div class="input_timeline_date bo-tron timeline_content_date_<?php echo $color[($i_color ) % 4] ?>" >
                            <input name="txtTIMELINE_DATE" class="input_timeline_d " placeholder="00" maxlength="2" />/<input name="txtTIMELINE_MONTH" class="input_timeline_d" placeholder ="00" maxlength="2"/>/<input name="txtTIMELINE_YEAR" class="input_timeline_d" placeholder="2014" maxlength="4"/>
                        </div>
                    </div>
                    <div id="timeline_content_location_<?php echo $color[($i_color ) % 4] ?>" class=" timeline_content_location_<?php echo $color[($i_color ) % 4]; ?> rotate_180">
                        <div class="rotate_180" >
                            <input   name="txtTIMELINE_LOCATION" class="input_timeline_location bo-tron bold"  maxlength="30"/>
                        </div>
                    </div>
                </form>
            </td>
            <!-- BLANK TIMELINE -->

            <?php
            $i_color++;
            for ($i = 0; $i < $num; $i+=2) { ?>
                <td id="timeline_content" class="timeline_content" >
                    <div id="timeline_padding_top" class="timeline_padding_top"></div>
                    <div id="timeline_content_location_<?php echo $color[$i_color % 4] ?>" class="timeline_content_location_<?php echo $color[$i_color % 4] ?> bold">
                        <div class="timeline_content_location"> <?php echo mb_strtoupper($listOfTimeline[$i]["TIMELINE_LOCATION"], "UTF-8"); ?> </div>
                    </div>
                    <div id="timeline_content_date_<?php echo $color[$i_color % 4] ?>" class=" timeline_content_date timeline_content_date_<?php echo $color[$i_color % 4] ?> ios_font sizexxl">
                        <?php
                        $day = date_create($listOfTimeline[$i]["TIMELINE_DATE"]);
                        echo date_format($day, 'd/m/Y');
                        ?>
                    </div>
                    <div id="timeline_content_dotline_<?php echo $color[$i_color % 4] ?>" class="timeline_content_dotline_<?php echo $color[$i_color % 4] ?>">

                    </div>
                    <div id="timeline_content_main_<?php echo $color[$i_color % 4] ?>" class="timeline_content_main_<?php echo $color[$i_color % 4] ?>">
                        <div id="timeline_content_title" class="timeline_content_title sizexl bold" >
                            <?php
                            echo mb_strtoupper(($listOfTimeline[$i]["TIMELINE_TITLE"]), 'UTF-8');
                            ?>
                        </div>
                        <div id="timeline_content_text" class="timeline_content_text sizelarge " >
                            <?php echo $listOfTimeline[$i]["TIMELINE_CONTENT"]; ?>
                        </div>


                    </div>

                </td>
                <!-- UP SIDE DOWN -->
                <?php if (($i + 1) < $num) { ?>
                    <td id="timeline_content" class="timeline_content" >

                        <div id="timeline_content_main_<?php echo $color[($i_color + 1) % 4] ?>" class="timeline_content_main_<?php echo $color[($i_color + 1) % 4]; ?>">
                            <div id="timeline_content_title" class="timeline_content_title sizexl bold" >
                                <?php
                                echo mb_strtoupper(($listOfTimeline[$i + 1]["TIMELINE_TITLE"]), 'UTF-8');
                                ?>
                            </div>
                            <div id="timeline_content_text" class="timeline_content_text sizelarge" >
                                <?php echo $listOfTimeline[$i + 1]["TIMELINE_CONTENT"]; ?>
                            </div>


                        </div>

                        <div id="timeline_content_dotline_<?php echo $color[($i_color + 1) % 4] ?>" class="timeline_content_dotline_<?php echo $color[($i_color + 1) % 4] ?> rotate_180">

                        </div>
                        <div id="timeline_content_date_<?php echo $color[($i_color + 1) % 4] ?>" class=" timeline_content_date timeline_content_date_<?php echo $color[($i_color + 1) % 4] ?> ios_font sizexxl ">
                            <?php
                            $day = date_create($listOfTimeline[$i + 1]["TIMELINE_DATE"]);
                            echo date_format($day, 'd/m/Y');
                            ?>
                        </div>
                        <div id="timeline_content_location_<?php echo $color[($i_color + 1) % 4] ?>" class="bold timeline_content_location_<?php echo $color[($i_color + 1) % 4]; ?> rotate_180">
                            <div class="rotate_180" >
                                <p class="timeline_content_location"   >   <?php echo mb_strtoupper($listOfTimeline[$i + 1]["TIMELINE_LOCATION"], "UTF-8"); ?> </p>
                            </div>
                        </div>

                    </td>

                    <?php
                }
                $i_color+=2;
            }
            ?>

            <!-- LAST COL TIMELINE -->
            <td style="" > 
                <div class="timeline_conner rotate_180"></div>
            </td>
            <!-- LAST COL TIMELINE -->
        </tr>

    </table>


</div>