<?php
include_once "lib/load.php";
$signup=false;
if (isset($_POST['username']) and isset($_POST['email']) and isset($_POST['phone']) and isset($_POST['password'])) {
    $uname = $_POST['username'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $pass = $_POST['password'];
    $result = user::signup($uname, $email, $phone, $pass);
    $signup = true;
}
if ($signup) {
    if ($result) {
        include $_SERVER['DOCUMENT_ROOT'] . "/app3/index.php";
    } else {
        print("please try again");
    }
} else {
?>
    <pre>
        <center>
        <form method="post" action="signup.php">
    <input name="username" type="text" placeholder="username" required>
    <input name="email" type="email" placeholder="email" required>
    <input name="phone" type="tel" placeholder="phone no" required>
    <input name="password" type="password" placeholder="password" required>
    <input type="submit">

</form>
        </center>
</pre><?php
    }
