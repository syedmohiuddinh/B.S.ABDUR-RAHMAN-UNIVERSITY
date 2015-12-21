<?php
$mysql_host='localhost';
$mysql_user='root';
$mysql_password='';

if(mysql_connect($mysql_host,$mysql_user,$mysql_password))
{
if(mysql_select_db('gym'))
{echo '';}
else
{die('db probs!!!');}

}
else
{
die('NO baby!');
}






?>