<?php
/**
 * Created by PhpStorm.
 * User: life0
 * Date: 2018/11/5
 * Time: 14:23
 */
$url = $_POST['url'];
for($i=0; $i<=20; $i++){
//初始化curl
    $ch = curl_init();
//设置curl
    curl_setopt($ch, CURLOPT_URL, $url);
//curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_HEADER, 0);
//执行curl
    $curl_output = curl_exec($ch);
//if($curl_output === FALSE){
//    return "Error: ".curl_error($ch);
//}
//else{
//    return "success!";
//}
//释放curl
    curl_close($ch);
    //睡眠
    $sec = random_int(1, 5);
    sleep($sec);
}