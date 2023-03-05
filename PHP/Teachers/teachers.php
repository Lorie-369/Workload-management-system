<?php
    //教师端获取须填意见的审核
session_start();
$servername="localhost";
$username="root";
$userpassword="Sxq113884471.";
$conn=new mysqli($servername,$username,$userpassword);
mysqli_select_db($conn,'Working');
    $sql="SELECT * FROM Working_Workload WHERE Condition='审核中'";
$query = mysql_query($sql);
$array = array();
while($rows=mysql_fetch_assoc($query)){
    $array[] = $rows;
}
mysqli_close($conn);
$response=json.encode($array);
echo $response;