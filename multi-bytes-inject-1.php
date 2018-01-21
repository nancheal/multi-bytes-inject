<?php
include_once("con.php");
if(!$_GET["userName"]){
    die("please input GET method userName param");
}
$userName = mysqli_real_escape_string($con,$_GET["userName"]);
$sql = "select * from users where username = '{$userName}'";
mysqli_query($con,"set NAMES gbk");
$result = mysqli_query($con,$sql);
if(!$result){
    die(mysqli_error($con));
}
while($row = mysqli_fetch_row($result)){
    printf("userName : %s <br /> pass : %s <br />",$row[1],$row[2]);
}
mysqli_free_result($result);
mysqli_close($con);
?>