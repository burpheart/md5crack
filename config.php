<?php
$mysql_servername="localhost";//mysql地址
$mysql_username="root";//msyql用户名
$mysql_userpass="root";//msyql密码
$con = mysql_connect("$mysql_servername","$mysql_username","$mysql_userpass");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
$foot="";//页脚版权
