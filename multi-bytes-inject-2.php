<?php
include_once("con.php");
if(!$_GET['userName']){
    die("please input GET method userName param");
}
$userName = mysqli_real_escape_string($con,$_GET['userName']);
#$encodeuserName = iconv("GBK","UTF-8",$userName);
$encodeuserName = iconv("UTF-8","GBK",$userName);
$sql = "select * from users where username = '{$encodeuserName}'";
echo $encodeuserName;
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