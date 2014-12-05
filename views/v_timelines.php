<script>
  $(function () {
    $('#myTab a:last').tab('show')
  })
</script>
<div id="banner_timeline" class="banner_timeline"> </div>

<div id ="left_col" class="left_col" >
</div>

<div id ="main_col" class="main_col" >
    <!-- EVENTS -->
    <?php
    $color = ["blue", "green", "orange", "yellow"];
    $i_color = 0;
    for ($i = 0; $i < 5; $i++) {
        ?>
        <div id="timeline_event" class="timeline_event ">
            <div id ="timelined_date" class="timeline_date ios_font sizexl grey">29-07-2014</div>
            <table class="right_direction" >
                <tr>
                    <td class=" cirle_tag cirle_<?php echo $color[$i_color % 4] ?> white ios_font sizelarge" >First Met<br/>CAN THO</td>  
                    <td class="narrow_tag narrow_<?php echo $color[$i_color % 4] ?> " ></td> 
                    <td class="rectangle_tag rectangle_<?php echo $color[$i_color % 4] ?>  white ios_font" >
                 <u>FIRST MET</u> <br/>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                sed do eiusmod tempor incididunt ut labore et dolore magna 
                aliqua. Ut enim ad minim
                </td> 
    </tr>
            </table>
        </div>


        <div id="timeline_event" class="timeline_event ">
            <div id ="timelined_date" class="timeline_date  ios_font sizexl grey">29-07-2014</div>

            <table class="left_direction" >
                <tr>
                    <td class="rectangle_tag rectangle_<?php echo $color[($i_color + 1) % 4] ?>  white" >
                <u>FIRST MET</u> <br/>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                sed do eiusmod tempor incididunt ut labore et dolore magna 
                aliqua. Ut enim ad minim
                </td> 
                <td class="narrow_tag narrow_<?php echo $color[($i_color + 1) % 4] ?> rotate_180" ></td> 
                <td class=" cirle_tag cirle_<?php echo $color[($i_color + 1) % 4] ?> white ios_font sizelarge" > First Met<br/>CAN THO</td> 
                 </tr>

            </table>



        </div>

        <?php $i_color+=2;
    }
    ?>
     
</div>

<div id ="right_col" class="right_col" >
</div>
