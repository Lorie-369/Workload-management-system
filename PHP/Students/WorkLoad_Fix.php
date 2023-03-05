<?php
//获取详细内容与修改申报工作量
$servername="localhost";
$username="root";
$userpassword="Sxq113884471.";
$conn=new mysqli($servername,$username,$userpassword);
mysqli_select_db($conn,'Working');
session_start();
$params=json_decode(urldecode($_POST['ajax']));
$ID=$_SESSION['ID'];
$AcName=$params['AcName'];
$AcTime=$params['AcTime'];
$sql="DELETE FROM Working_Workload WHERE AcName=$AcName and AcTime=$AcTime and ID=$ID";
mysqli_query($conn,$sql);
mysqli_close($conn);