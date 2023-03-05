<?php
//教师端审批操作
session_start();
$servername="localhost";
$username="root";
$userpassword="Sxq113884471.";
$conn=new mysqli($servername,$username,$userpassword);
mysqli_select_db($conn,'Working');
$params=json_decode(urldecode($_POST['ajax']));
if ($params['Condition']){    //选择了审批通过
    $View=$params['View'];       //获取意见
    $ID=$_SESSION['ID'];
    $AcName=$_SESSION['AcName'];
    $AcTime=$_SESSION['AcTime'];
    $Condition="审核通过";               //更改审批状态
    $sql="UPDATE Working_Workload SET View='$View' Workload_Condition='$Condition' WHERE ID='$ID' and AcName='$AcName' and AcTime='$AcTime'";
    mysqli_query($conn,$sql);   //将更改应用到数据库中
}
if (!$params['Condition']){    //选择了审批未通过
    $View=$params['View'];       //获取意见
    $ID=$_SESSION['ID'];
    $AcName=$_SESSION['AcName'];
    $AcTime=$_SESSION['AcTime'];
    $Condition="审核未通过";               //更改审批状态
    $sql="UPDATE Working_Workload SET View='$View' Workload_Condition='$Condition' WHERE ID='$ID' and AcName='$AcName' and AcTime='$AcTime'";
    mysqli_query($conn,$sql);   //将更改应用到数据库中
}
mysqli_close($conn);