<?php
require 'asj.php';
  
$query="SELECT * FROM `trainee`"; 
if($is_query_run=mysql_query($query))
{
echo ">>TRAINEE DETAILS<<<br><BR><BR>";
while($query_execute=mysql_fetch_assoc($is_query_run))
{echo '<table border="1" style="width:300px"><tr><td>'.$query_execute['name'].'</td><td>'.$query_execute['dept'].'</td><td>'.$query_execute['availability'].'</td></tr></table>';

}

}
else
{
echo "queryeeee not executed";
}
?>