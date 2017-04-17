<?php

    header('Content-type:text/html;charset="utf8"');

    $userList = array(
        array('id'=>1, 'uname'=>'张三', 'email'=>'1@qq.com'),
        array('id'=>2, 'uname'=>'李四', 'email'=>'2@qq.com'),
        array('id'=>3, 'uname'=>'王五', 'email'=>'3@qq.com'),
        array('id'=>4, 'uname'=>'赵六', 'email'=>'4@qq.com')
    );

    echo json_encode($userList);