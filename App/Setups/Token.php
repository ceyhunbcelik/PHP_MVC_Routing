<?php

if(!isset($_POST['_token'])){
    $_SESSION['_token'] = md5(time() . rand(0, 99999));
}