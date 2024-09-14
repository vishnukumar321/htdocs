<?php
include_once "templates/user.php";
include_once "templates/database.php";

function get_page($name){
    include $_SERVER['DOCUMENT_ROOT']."/app3/templates/$name.php";
}