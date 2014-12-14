<?php
$color = ["blue", "green", "orange", "red"];
$i_color = 0;
 $listOfTimeline = $objTimeline->listOfTb_timelines();
 $num = count($listOfTimeline);
  
 $day = new DateTime();
$indexEven = 1;
$indexOdd = 0;
?> 
<div id="wrap_timeline" class="wrap_timeline" style="width:  <?php echo (($num+1) ) * 330 + 50 ?>px;">
    <table id="timeline_table" class="timeline_table">
        <tr>
            <?php for($i=0; $i < $num; $i+=2) { ?>
            <td id="timeline_content" class="timeline_content" >
                <div id="timeline_padding_top" class="timeline_padding_top"></div>
                <div id="timeline_content_location_<?php echo $color[$i_color % 4] ?>" class="timeline_content_location_<?php echo $color[$i_color % 4] ?>">
                    <?php echo mb_strtoupper($listOfTimeline[$i]["TIMELINE_LOCATION"],"UTF-8"); ?>
                </div>
                <div id="timeline_content_date_<?php echo $color[$i_color % 4] ?>" class="timeline_content_date_<?php echo $color[$i_color % 4] ?> ios_font">
                   <?php
                    $day = date_create($listOfTimeline[$i]["TIMELINE_DATE"]);
                    echo date_format($day, 'd/m/Y'); 
                   ?>
                </div>
                <div id="timeline_content_dotline_<?php echo $color[$i_color % 4] ?>" class="timeline_content_dotline_<?php echo $color[$i_color % 4] ?>">

                </div>
                <div id="timeline_content_main_<?php echo $color[$i_color % 4] ?>" class="timeline_content_main_<?php echo $color[$i_color % 4] ?>">
                    <div id="timeline_content_title" class="timeline_content_title" >
                    <?php
                    echo  mb_strtoupper ( ($listOfTimeline[$i]["TIMELINE_TITLE"]), 'UTF-8');
                    ?>
                    </div>
                    <div id="timeline_content_text" class="timeline_content_text" >
                           <?php echo mb_strtoupper($listOfTimeline[$i]["TIMELINE_LOCATION"],"UTF-8"); ?>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                        sed do eiusmod tempor incididunt ut labore et dolore magna 
                        aliqua. Ut enim ad minim veniam, quis nostrud exercitation 
                        ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                        Duis aute irure dolor in reprehenderit in voluptate velit esse 
                        cillum dolore eu fugiat nulla pariatur. </div>


                </div>

            </td>
            <!-- UP SIDE DOWN -->
            <?php if($i<$num) { ?>
            <td id="timeline_content" class="timeline_content" >

                <div id="timeline_content_main_<?php echo $color[($i_color+1) % 4] ?>" class="timeline_content_main_<?php echo $color[($i_color+1) % 4]; ?>">
                    <div id="timeline_content_title" class="timeline_content_title" >
                     <?php
                    echo  mb_strtoupper ( ($listOfTimeline[$i]["TIMELINE_TITLE"]), 'UTF-8');
                    ?>
                    </div>
                    <div id="timeline_content_text" class="timeline_content_text" >
                        SOMEWHERE 
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                        sed do eiusmod tempor incididunt ut labore et dolore magna 
                        aliqua. Ut enim ad minim veniam, quis nostrud exercitation 
                        ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                        Duis aute irure dolor in reprehenderit in voluptate velit esse 
                        cillum dolore eu fugiat nulla pariatur. </div>


                </div>

                <div id="timeline_content_dotline_<?php echo $color[($i_color+1) % 4] ?>" class="timeline_content_dotline_<?php echo $color[($i_color+1) % 4] ?> rotate_180">

                </div>
                <div id="timeline_content_date_<?php echo $color[($i_color+1) % 4] ?>" class="timeline_content_date_<?php echo $color[($i_color+1) % 4] ?> ios_font ">
                  <?php
                    $day = date_create($listOfTimeline[$i]["TIMELINE_DATE"]);
                    echo date_format($day, 'd/m/Y'); 
                   ?>
                </div>
                <div id="timeline_content_location_<?php echo $color[($i_color+1) % 4] ?>" class="timeline_content_location_<?php echo $color[($i_color+1) % 4]; ?> rotate_180">
                    <div class="rotate_180" >
                      <?php echo mb_strtoupper($listOfTimeline[$i]["TIMELINE_LOCATION"],"UTF-8"); ?>
                    </div>
                </div>

            </td>

            <?php
            }
            $i_color+=2;
            
            } ?>
        </tr>

    </table>


</div>