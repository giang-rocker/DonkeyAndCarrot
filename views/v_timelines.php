<?php
$color = ["blue", "green", "orange", "yellow"];
$i_color = 0;
 $listOfTimeline = $objTimeline->listOfTb_timelines();
 $num = count($listOfTimeline);
  
 $day = new DateTime();
  
?> 
<div id ="timeline_wrap" class="timeline_wrap">
<div id="banner_timeline" class="banner_timeline"> </div>

<div id ="left_col" class="left_col" >
</div>

<div id ="main_col" class="main_col" >
    <!-- EVENTS -->
    <?php
    
    for ($i = 0; $i < $num; $i+=2) {
        ?>
    <!-- rigt direction -->
        <div id="timeline_event" class="timeline_event ">
            <div id ="timelined_date" class="timeline_date ios_font sizexl grey">
            <?php
            // echo date
            // echo date
               $day = date_create($listOfTimeline[$i]["TIMELINE_DATE"]);
               echo date_format($day, 'd/m/Y'); 
            ?>
            </div>
            <table class="right_direction" >
                <tr>
                    <td class=" cirle_tag cirle_<?php echo $color[$i_color % 4] ?> white ios_font sizelarge" >First Met<br/>
                    <?php
                    //echo location
                    echo strtoupper ( $listOfTimeline[$i]["TIMELINE_LOCATION"]);
                    ?>
                    </td>  
                    <td class="narrow_tag narrow_<?php echo $color[$i_color % 4] ?> " ></td> 
                    <td class="rectangle_tag rectangle_<?php echo $color[$i_color % 4] ?>  white ios_font" >
                 <u>
                 <?php
                 // echo title of timeline
                  echo  mb_strtoupper ( ($listOfTimeline[$i]["TIMELINE_TITLE"]), 'UTF-8');
                 ?>
                 </u> <br/>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                sed do eiusmod tempor incididunt ut labore et dolore magna 
                aliqua. Ut enim ad minim
                </td> 
    </tr>
            </table>
        </div>
    <?php if ( $i+1 < $num ) {?>
    <!-- left direction -->
        <div id="timeline_event" class="timeline_event ">
            <div id ="timelined_date" class="timeline_date  ios_font sizexl grey">
             <?php
            // echo date
            // echo date
             if ($listOfTimeline[$i+1]["TIMELINE_DATE"]=="0000-00-00") {
                 echo "NOT AVAILABLE";
             }
             $day = date_create($listOfTimeline[$i+1]["TIMELINE_DATE"]);
             
             
               echo date_format($day, 'd/m/Y'); 
            ?>
            </div>

            <table class="left_direction" >
                <tr>
                    <td class="rectangle_tag rectangle_<?php echo $color[($i_color + 1) % 4] ?>  white" >
                <u>
                   <?php
                 // echo title of timeline
                  echo  mb_strtoupper ( ($listOfTimeline[$i+1]["TIMELINE_TITLE"]), 'UTF-8');
                 ?>
             
                </u> <br/>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                sed do eiusmod tempor incididunt ut labore et dolore magna 
                aliqua. Ut enim ad minim
                </td> 
                <td class="narrow_tag narrow_<?php echo $color[($i_color + 1) % 4] ?> rotate_180" ></td> 
                <td class=" cirle_tag cirle_<?php echo $color[($i_color + 1) % 4] ?> white ios_font sizelarge" > First Met<br/>
                  <?php
                    //echo location
                    echo strtoupper ( $listOfTimeline[$i+1]["TIMELINE_LOCATION"]);
                    ?>
                </td> 
                 </tr>

            </table>



        </div>

        <?php 
        }
        $i_color+=2;
    }
    ?>
     
</div>

<div id ="right_col" class="right_col" >
</div>
</div>