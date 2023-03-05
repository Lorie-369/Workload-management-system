<?php
$servername="localhost";
$username="root";
$userpassword="Sxq113884471.";
$conn=new mysqli($servername,$username,$userpassword);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "连接成功";
$sql="CREATE DATABASE IF NOT EXISTS Working DEFAULT CHARSET utf8 COLLATE utf8_general_ci";//创建数据库
mysqli_query($conn,$sql );
mysqli_select_db($conn,'Working');
$sql="CREATE TABLE Working_Workload(
   Name VARCHAR(100),
   ID VARCHAR(12) NOT NULL,
   AcName VARCHAR(200) NOT NULL,
   AcTime DATE NOT NULL,
   Workload FLOAT NOT NULL,
   Salary SMALLINT NOT NULL,
   View TEXT,
   Workload_Condition VARCHAR(12) NOT NULL,
   Time DATE NOT NULL
   PRIMARY KEY 
)ENGINE=InnoDB DEFAULT CHARSET=utf8;";//创建数据表用以存储工作量信息
mysqli_query($conn,$sql);
if (mysqli_query($conn, $sql)) {
    echo "\n数据表创建成功";
} else {
    echo "\n创建数据表错误: " . mysqli_error($conn);
}
$sql="CREATE TABLE Message(
    messages TEXT NOT NULL,
    Time DATE NOT NULL
    PRIMARY KEY 
)ENGINE=InnoDB DEFAULT CHARSET=utf8;";//创建数据表用以存储消息
mysqli_query($conn,$sql);
if (mysqli_query($conn, $sql)) {
    echo "\n数据表创建成功";
} else {
    echo "\n创建数据表错误: " . mysqli_error($conn);
}