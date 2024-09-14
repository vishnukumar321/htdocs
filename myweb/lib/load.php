<?php
include_once "templates/user.php";
include_once "templates/_database.php";
function get_page($name){
    include $_SERVER['DOCUMENT_ROOT']."/myweb/templates/$name.php";

}
?>