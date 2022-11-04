<?php
    $username = $_POST['username'];
    $password = $_POST['password'];
    $con = mysqli_connect('169.254.128.1','ws08','E@m4a@gkJn9z','form');
    if($con){
        mysqli_query($con,'set names utf8');
        //sql语句 查询 输入的账号和密码
        $sql = "select * from message where username = '$username' and password='$password' ";
        $res = mysqli_query($con,$sql);
//        var_dump($res);
        if($res->num_rows>0){
            echo "登陆成功";
        }else{
            echo "账号或者密码错误";
        }
    }
?>