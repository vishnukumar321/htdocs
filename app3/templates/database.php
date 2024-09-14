<?php
class database{
    public static $conn;
    public static function get_conn(){
        if(database::$conn==null){
            $sname="localhost";
            $uname="vishnukumar";
            $pass="Vishnu4610k";
            $db="vishnukumar_1";
            $conn= new mysqli($sname,$uname,$pass,$db);
            if($conn->connect_errno){
                die("connetion faild".$conn->connect_errno);
            }else{
                database::$conn=$conn;
                return database::$conn;
            }
        
        }else{
            return database::$conn;
        }
    }
}