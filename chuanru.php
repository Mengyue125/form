<?php
    $new_user = $_POST['new_user'];
    $new_pwd = $_POST['new_pwd'];
    echo $new_user;
    echo $new_pwd;
    //1.创建链接数据库
    //2.语法：mysqli_connect("域名","账号","密码","数据库")
    $con = mysqli_connect('169.254.128.1','ws08','E@m4a@gkJn9z','form');
    //var_dump($con); //链接成功返回object 失败bool(false)
    if($con){
        //2.设置编码格式
        mysqli_query($con,'set names utf8');
        //3.sql语句 插入语句
        //语法：$sql = "insert into 表名（字段1，字段2....） values(字段1值，字段2值....)"
        $sql = "insert into message(username,password) values ('$new_user','$new_pwd')";

        //4.发送sql语句 执行sql
        $result = mysqli_query($con,$sql);
        var_dump($result);
        if($result){
            $url = "http://localhost/form/login.html";
            echo "<script type='text/javascript'>";
            echo "alert('注册成功');";
            echo "window.location.href='$url'";
            echo "</script>";
            echo "跳转页面啦";
        }
    }else{
        echo "链接数据库失败";
    }

    //5.关闭数据库
    mysqli_close($con);
?>