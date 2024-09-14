<?php
include_once "lib/load.php";
$signup=null;
if(isset($_POST['username']) and isset($_POST['email']) and isset($_POST['phone']) and isset($_POST['password'])){
  $uname=$_POST['username'];
  $email=$_POST['email'];
  $phone=$_POST['phone'];
  $pass=$_POST['password'];
  $result=user::signup($uname,$email,$phone,$pass);
  $signup =true;
}
if($signup){
  if($result){
     include $_SERVER['DOCUMENT_ROOT']."/myweb/main.php";
    
  }else{
    get_page("falsestatement");
    
  }

 }else{ 
  ?>
  <main class="form-signin w-100 m-auto">
<form method="post" action="signup.php" >
    <img class="mb-4" src="fuck.gif" alt="" width="72" height="57">
    <h1 class="h3 mb-3 fw-normal">sign in</h1>

    <div class="form-floating">
      <input type="text" name="username" class="form-control" id="floatingInput" placeholder="Username" required>
      <label for="floatingInput">Username</label>
    </div>
    <div class="form-floating">
      <input type="email" name="email" class="form-control" id="floatingInput" placeholder="Email" required>
      <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating">
      <input type="tel" name="phone" class="form-control" id="floatingPassword" placeholder="Phone No" required>
      <label for="floatingPassword">Phone No</label>
    </div>
    
    <div class="form-floating">
      <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password" required>
      <label for="floatingPassword">Password</label>
    </div>

    <div class="form-check text-start my-3">
      <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault" required>
      <label class="form-check-label" for="flexCheckDefault">
        Remember me
      </label>
    </div>
    <button class="btn btn-primary w-100 py-2" type="submit">Sign up</button>
    <p class="mt-5 mb-3 text-body-secondary">&copy; 2017–2024</p>
  </form>
</main>
 <?php
 }
?>
