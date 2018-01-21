<?php
include_once("con.php");
if(!$_GET["userName"]){
    die("please input GET method userName param");
}
$encodeuserName = iconv("UTF-8", "gbk", $_GET['userName']);
$userName = mysqli_real_escape_string($con, $encodeuserName);
#$userName = $encodeuserName;
echo $userName;
$sql = "select * from users where username = '{$userName}'";

mysqli_query($con,"set NAMES gbk");
$result = mysqli_query($con,$sql);
if(!$result){
    die(mysqli_error($con));
}
while($row = mysqli_fetch_row($result)){
    printf("username : %s <br /> pass : %s",$row[0], $row[1]);
}
mysqli_free_result($result);
mysqli_close($con);
?>