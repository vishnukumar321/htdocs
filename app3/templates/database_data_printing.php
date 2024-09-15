<?php
include "database.php";
$conn=database::get_conn();
if(isset($_POST['pre'])){
    $value=$_POST['pre'];
    if($value>0){
        $value=$value-2;
        if($value>0){
            $value=$value-2;

        }else{
           $value=0; 
        }
    }
    else{
        $value=0;
    }
}else if(isset($_POST['next'])){
    $value=$_POST['next'];
    $value=$value+2;

}else{
    $value=0;
}
$njan=false;
if(isset($_POST['njan'])){
    $input=$_POST['njan'];
    if($input>0){
        $value=$input-1;

    }
}
$sql="SELECT * FROM `signup` limit $value, 2;";
$result=$conn->query($sql);
if($result->num_rows==true){
    ?>
    <center>
    <form method="post" action="database_data_printing.php">
    <table  border="1">
    <tr>
        <button name="pre" value="<?php echo $value; ?>">pre</button>
        <input type="text" name="njan" placeholder="please enter id">
        <button>GO</button>
        <button name="next" value="<?php echo $value; ?>">next</button>
    </tr>
        <tr>
            <th>username</th>
            <th>email</th>
            <th>phone</th>
            <th>password</th>
        </tr>
    <?php
    while($row=$result->fetch_assoc()){?>
        
        <tr>
            <td><?php echo $row['username'] ;?></td>
            <td><?php echo $row['email'] ;?></td>
            <td><?php echo $row['phone'];?></td>
            <td><?php echo $row['password'] ;?></td>
        </tr>
        <?php

    }?>
    
    
    
    </table>
    </form>
    </center>
    <?php
    
}