<?php
    //输入工资
$servername="localhost";
$username="root";
$userpassword="Sxq113884471.";
$conn=new mysqli($servername,$username,$userpassword);
mysqli_select_db($conn,'Working');
    session_start();
    $params=json_decode(urldecode($_POST['ajax']));
    $AcName=$_SESSION['AcName'];
    $AcTime=$_SESSION['AcTime'];
    $Salary=$params['Salary'];
    $Condition="审核中";               //更改状态审批中
    $sql="UPDATE Working_Workload SET Salary='$Salary' Workload_Condition='$Condition'WHERE AcName='$AcName' and AcTime='$AcTime'";
    mysqli_query($conn,$sql);
    mysqli_close($conn);