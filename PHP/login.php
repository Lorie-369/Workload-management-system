<?php
//登录界面核对信息
session_start();
    $userid=json_decode($_POST['user']);
    $password=json_decode($_POST['password']);
    $dataR = array('u'=>$userid,'p'=>$password);
    $table = curl_init();
    $headerArray =array("Content-type:application/json;charset='utf-8'","Accept:application/json");
    curl_setopt($table, CURLOPT_URL, "https://sduonline.cn/isduapi/api/auth/login/system");
    curl_setopt($table, CURLOPT_HEADER, $headerArray);
    curl_setopt($table, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like 
	Gecko) Chrome/59.0.3071.115 Safari/537.36");
    curl_setopt($table, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($table, CURLOPT_SSL_VERIFYHOST, FALSE);
    curl_setopt($table, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($table, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($table, CURLOPT_POST, 1);
    curl_setopt($table, CURLOPT_POSTFIELDS, $dataR);
    $tableput = curl_exec($table);
    if ($tableput.message=='') {
        date_default_timezone_set('PRC');//设置默认时区
        $_SESSION['ID'] = $userid;
        $response=json_encode($tableput);
        echo $response;
    }