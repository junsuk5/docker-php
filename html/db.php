<?php 

$mysql_hostname = 'host.docker.internal';

$mysql_username = 'kim';

$mysql_password = 'json';

$mysql_database = 'myDB';

$mysql_port = '52000';

$mysql_charset = 'UTF8';

 

$connect = new mysqli($mysql_hostname, $mysql_username, $mysql_password, $mysql_database, $mysql_port, $mysql_charset);

 

if($connect->connect_errno){

    echo '[연결실패..] : '.$connect->connect_error.'';

}else{

    echo '[연결성공!]'.'<br>';

}

 

?>
