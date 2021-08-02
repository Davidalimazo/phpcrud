<?php 
 require('include/database.php');

 if(isset($_POST['submit'])){

    session_start();

 $user = mysqli_real_escape_string($db_con, $_POST['username']);
 $pass = mysqli_real_escape_string($db_con, $_POST['password']);

 

 $sql = "SELECT * FROM `student_admin` WHERE username = '$user' AND password = '$pass'";

 $_SESSION["username"] = $user; 

 if(empty($_SESSION["username"])){
 unset($_SESSION["username"]);
 }
 $result = mysqli_query($db_con, $sql);


 $login = mysqli_fetch_assoc($result);
 mysqli_free_result($result);
 
 if(empty($login)){
    
    unset($_SESSION['username']);
 }else {
     header('location:index.php');
 }


//  print_r($login);

 mysqli_close($db_con);
}
// echo $_SESSION['username'];

?>

<?php require('include/header.php'); ?>
<div><h3><?php if(isset($_POST['submit'])){
    if(empty($login)){
    echo "<em style = 'color: red'>login details incorrect</em>";} else {
        echo '';
    }
}
    ?></h3>
</div>
<div class="row">
<div class="col-md-2 col-sm-2 col-lg-2 col-xs-2"></div>

<div class="col-md-7 col-sm-7 col-lg-7 col-xs-8">
    <div class="well">
<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST" class="form-horizontal" id="login-form">

<div class="form-group">
<label for="username" class="control-label col-sm-3">Username</label>
<div class="input-group col-sm-9">
<span class="glyphicon glyphicon-user input-group-addon"></span>
<input type="text" class="form-control" name="username" id="user-name">
<span><em class="username-error text-danger"></em></span>
</div>
</div>
<div class="form-group">
<label for="password" class="control-label col-sm-3">Password</label>
<div class="input-group col-sm-9">
<span class="glyphicon input-group-addon glyphicon-circle-arrow-right"></span>
<input type="password" class="form-control" name="password" id="pass-word">
<span><em class="password-error text-danger"></em></span>
</div>
</div>
<div class="form-group">
<div class="input-group col-sm-offset-6 col-xs-offset-5">
    <button class="btn btn-success" type="submit" name="submit">Submit <span class="glyphicon glyphicon-log-in"></span></button>
</div>
</div>
</form>
</div>
</div>
<div class="col-md-3 col-sm-3 col-xs-2"></div>
</div>

<?php require('include/footer.php'); ?>

