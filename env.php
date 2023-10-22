<?php

// kết nối db

const DBNAME = "trasua_toco";
const DBUSER = "root";
const DBPASS = "";
const DBCHARSET = "utf8";
const DBHOST = "127.0.0.1";
const BASE_URL = "http://localhost/trasua_toco/";


function redirect($key,$msg,$route) {
    $_SESSION[$key] = $msg;
    switch ($key) {
        case 'success':
            unset($_SESSION['errors']);
        break;
        case 'errors':
            unset($_SESSION['success']);
        break;
    }
    header('location:'.BASE_URL.$route."?msg=".$key);die;
}