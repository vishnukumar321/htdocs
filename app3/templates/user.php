<?php
include_once "lib/load.php";
class user
{
    public static function signup($uname, $email, $phone, $pass)
    {
        $conn = database::get_conn();
        $sql = "INSERT INTO `signup` (`username`, `email`, `phone`, `password`, `blocked`, `active`)
VALUES ('$uname', '$email', '$phone', '$pass', NULL, NULL);";
        if ($conn->query($sql) === true) {
            return true;
        } else {
            return false;
        }
    }
    public static function login($email,$pass){
        $conn=database::get_conn();
        $sql="SELECT * FROM `signup` WHERE `email` = '$email';";
        $result=$conn->query($sql);
        if($result->num_rows==true){
            $row=$result->fetch_assoc();
            if($row["password"]==$pass){
                return true;
            }else{
                return false;
            }
        }else{
            return false;
        }

    }
}
