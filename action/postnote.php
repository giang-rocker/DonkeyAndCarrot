<?php
include('./config/database.php');
$check = mysql_query("SELECT * FROM tb_setting");
if(isset($_POST['content']))
{
$content=mysql_real_escape_string($_POST['content']); 
 
mysql_query("insert into tb_setting(setting_passcode) values ('".$content."')  ");

$fetch= mysql_query("SELECT * FROM tb_setting order by setting_id desc");
$rows=mysql_fetch_array($fetch);
}

?>
<script>
</script>
