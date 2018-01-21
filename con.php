<?php
$connectConf = array(
    'dbHost' => 'localhost',
    'dbName' => 'security',
    'dbUser' => 'root',
    'dbPass' => ''
);
$con = @new mysqli($connectConf['dbHost'],$connectConf['dbUser'],$connectConf['dbPass'],$connectConf['dbName']);
if($con->connect_error){
    die($con->error);
}
?>