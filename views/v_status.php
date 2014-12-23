<div class="wrap_status">
    <div class="wrap_content">
        <div class="status_top"></div>
        <div class="status_progress">
            <table style="border: none;" >

                <tr>
                    <td> <img src="./lib/carrot_status.png" class="carrot_status" /></td> 

                    <td> <img src="./lib/donkey_status.png" class="donkey_status" /></td> 
                </tr>
                <tr>

                    <td class="status_progressbar">   <img src="./lib/orange_progress.png" width="<?php echo 315 * 0.8 ?>" height="30"/>

                    </td>

                    <td class="status_progressbar" style="text-align: right">   <img src="./lib/blue_progress.png" width="<?php echo 315 * 0.6 ?>" height="30" />


                    </td>
                </tr>

            </table>


        </div>

        <div class="status_action"> 
            <a href="index.php?option=status&action=blanktv"><img src="./lib/dctv.png"   class="icon_action"          /></a>
            <a href="index.php?option=status&action=hit"><img src="./lib/hit.png"   class="icon_action"          /></a>
            <a href="index.php?option=status&action=kick">   <img src="./lib/kick.png"      class="icon_action"         /></a>
            <a href="index.php?option=status&action=kiss">  <img src="./lib/kiss.png"       class="icon_action"        /></a>
            <a href="index.php?option=status&action=notavailable">  <img src="./lib/blank.png"     class="icon_action"          /></a>
        </div>
        <div class="status_tv"><img src="./lib/<?php 
        if (isset($_GET['action'])) {
            echo $_GET['action'];
            }
           else echo "blanktv";
        
        ?>.gif" /></div>
    </div>
</div>