<?php
include_once "lib/load.php";
class user{
    public $conn=null;
    public static function signup($uname,$email,$phone,$pass){
        $conn=database::get_conn();
        $pass=password_hash($pass,PASSWORD_BCRYPT);
        $sql="INSERT INTO `signup` (`username`, `email`, `phone`, `password`, `blocked`, `active`)
             VALUES ('$uname', '$email', '$phone', '$pass', '0', '1');";
        if($conn->query($sql)===true){

            return true;
        }else{
            return false;
        }
    }
}

?>