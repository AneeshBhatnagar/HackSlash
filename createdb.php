<?php
$db = mysql_connect('localhost', '$mysql_user', '$mysql_password');
if (!$db)     
{
  echo 'Error connecting to the datebase.  Message returned: ' .
    mysql_error();
  die;
}
$link = mysql_select_db('$db_name');
if (!$link)
{
  echo 'Error selecting the datebase.  Message returned: ' . 
    mysql_error();
  die;
}
?>