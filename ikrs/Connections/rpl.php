<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_rpl = "localhost";
$database_rpl = "rpl";
$username_rpl = "root";
$password_rpl = "";
$rpl = mysql_pconnect($hostname_rpl, $username_rpl, $password_rpl) or trigger_error(mysql_error(),E_USER_ERROR); 
?>