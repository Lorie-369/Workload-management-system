<?php
    //新工作量填报功能
$servername="localhost";
$username="root";
$userpassword="Sxq113884471.";
$conn=new mysqli($servername,$username,$userpassword);
mysqli_select_db($conn,'Working');
    session_start();
    $params=json_decode(urldecode($_POST['ajax']));//选择提交工作量
        $Name=$_SESSION['Name'];
        $ID=$_SESSION['ID'];
        $AcName=$params['AcName'];
        $AcTime=$params['AcTime'];
        $Workload=$params['Workload'];
        $Condition="未审核";                   //更改状态为未审核
        $Time=date("Y-m-d",time());
        $sql=mysqli_query($conn,"select * form Working_User where ID = '$ID' and password = '$AcName'");
        $status=mysqli_query( $conn, $sql);
        if ($status){
            $error=json.encode("活动工作量已存在");
            echo  $error;
        }//检测工作量重复
        else{
        $sql="INSERT INTO Working".
            "(Name,ID,AcName,AcTime,Workload,Workload_Condition,Now)".
            "VALUES".
            "('$Name','$ID','$AcName','$AcTime','$Workload','$Condition','$Time')";
        mysqli_query( $conn, $sql );//插入工作量

        mysqli_close($conn);
        $response=json.encode('Done');
        echo $response;
        }