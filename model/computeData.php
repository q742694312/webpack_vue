<?php

    header('Content-type:text/html;charset="utf8"');

    $a = $_POST['a'];
    $b = $_POST['b'];

    $c = $a + $b;

    //echo json_encode(array('c'=>$c));
    echo $c;