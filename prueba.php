<?php
    //$md5 = md5('123456');

    //echo $md5;

    $pass = password_hash('123',PASSWORD_DEFAULT,['cost'=>12]);
    echo $pass;

?>