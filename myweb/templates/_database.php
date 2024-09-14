<?php
class database{
    public static $conn;
    public static function get_conn(){
        if(database::$conn==null){
            $sname="localhost";
            $uname="vishnukumar";
            $pass="Vishnu4610k";
            $dbname="vishnukumar_1";
            $conn= new mysqli($sname,$uname,$pass,$dbname);
            if($conn->connect_error){
                
                die("connection error");
            }else{
                
                database::$conn=$conn;
                return database::$conn;
            }
        }else{
            return database::$conn;
        }

    }
}