<?php
$color = ["blue", "green", "orange", "red"];
$i_color = 0;
 $listOfTimeline = $objTimeline->listOfTb_timelines();
 $num = count($listOfTimeline);
  
 $day = new DateTime();
$indexEven = 1;
$indexOdd = 0;
?> 
<div id="wrap_timeline" class="wrap_timeline" style="width:  <?php echo (($num) ) * 330 + (2*350) ?>px;">
    <table id="timeline_table" class="timeline_table">
        <tr>
            <!-- FIST COL TIMELINE -->
            <td style="" > 
                <div class="timeline_conner">TIMELINE</div>
            </td>
             <!-- FIST COL TIMELINE -->
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
                           <?php echo $listOfTimeline[$i]["TIMELINE_CONTENT"] ; ?>
                        </div>

                    
                </div>

            </td>
            <!-- UP SIDE DOWN -->
            <?php if(($i+1)<$num) { ?>
            <td id="timeline_content" class="timeline_content" >

                <div id="timeline_content_main_<?php echo $color[($i_color+1) % 4] ?>" class="timeline_content_main_<?php echo $color[($i_color+1) % 4]; ?>">
                    <div id="timeline_content_title" class="timeline_content_title" >
                     <?php
                    echo  mb_strtoupper ( ($listOfTimeline[$i+1]["TIMELINE_TITLE"]), 'UTF-8');
                    ?>
                    </div>
                    <div id="timeline_content_text" class="timeline_content_text" >
                         <?php echo $listOfTimeline[$i+1]["TIMELINE_CONTENT"] ; ?>
                    </div>


                </div>

                <div id="timeline_content_dotline_<?php echo $color[($i_color+1) % 4] ?>" class="timeline_content_dotline_<?php echo $color[($i_color+1) % 4] ?> rotate_180">

                </div>
                <div id="timeline_content_date_<?php echo $color[($i_color+1) % 4] ?>" class="timeline_content_date_<?php echo $color[($i_color+1) % 4] ?> ios_font ">
                  <?php
                    $day = date_create($listOfTimeline[$i+1]["TIMELINE_DATE"]);
                    echo date_format($day, 'd/m/Y'); 
                   ?>
                </div>
                <div id="timeline_content_location_<?php echo $color[($i_color+1) % 4] ?>" class="timeline_content_location_<?php echo $color[($i_color+1) % 4]; ?> rotate_180">
                    <div class="rotate_180" >
                      <?php echo mb_strtoupper($listOfTimeline[$i+1]["TIMELINE_LOCATION"],"UTF-8"); ?>
                    </div>
                </div>

            </td>

            <?php
            }
            $i_color+=2;
            
            } ?>
            
            <!-- LAST COL TIMELINE -->
            <td style="" > 
                <div class="timeline_conner rotate_180"></div>
            </td>
             <!-- LAST COL TIMELINE -->
        </tr>

    </table>


</div>