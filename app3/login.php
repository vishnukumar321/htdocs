<?php
include_once "lib/load.php";
$login=false;
if (isset($_POST['email']) and isset($_POST['password'])) {
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $result = user::login($email,$pass);
    $login = true;
}
if ($login) {
    if ($result) {
        include $_SERVER['DOCUMENT_ROOT'] . "/app3/index.php";
    } else {
        print("please try again");
    }
} else {
?>
    <pre>
        <center>
        <form method="post" action="login.php">
    <input name="email" type="email" placeholder="email" required>
    <input name="password" type="password" placeholder="password" required>
    <input type="submit">

</form>
        </center>
</pre><?php
    }
