<?php 
 require('include/database.php');

 session_start();

if(isset($_SESSION['username'])){
 //echo $_SESSION['username']; 
} else {  echo 
    header('location:login.php');
}

 //check if the submit button has been pressed

if(isset($_POST['submit'])){
   
//store the user input in variables
$name = mysqli_real_escape_string($db_con, $_POST['name']);
$mat = mysqli_real_escape_string($db_con, $_POST['mat-no']);
$dept = mysqli_real_escape_string($db_con, $_POST['dept']);
$fac = mysqli_real_escape_string($db_con, $_POST['faculty']);
$cgpa = mysqli_real_escape_string($db_con, $_POST['cgpa']);

//make an sql query
$sql = "INSERT INTO student_info(name, mat_no, dept, faculty, cgpa) VALUES('$name', '$mat', '$dept', '$fac', '$cgpa')";

//pass the sql query to database
$added = mysqli_query($db_con, $sql);

//check if query is successful
if($added){
   header('location:index.php');
} else {
    echo 'Query error: ' . mysqli_error($db_con);
}

mysqli_close($db_con);

} 


?>

<?php require('include/header.php'); ?>

<div class="row">
<div class="col-md-2 col-sm-2 col-lg-2 col-xs-2"></div>

<div class="col-md-7 col-sm-7 col-lg-7 col-xs-8">
    <div class="well">

<form action="add.php" method="POST" class="form-horizontal text-justify" id="addform">

<div class="form-group">
<label for="name" class="control-label col-sm-3">Name</label>
<div class="input-group col-sm-9">
<span class="glyphicon glyphicon-user input-group-addon"></span>
<input type="text" name="name" class="form-control" id="name">
<span class="name_error text-danger error"></span>
</div>
</div>


<div class="form-group">
<label for="mat-no" class="control-label col-sm-3">Matric No</label>
<div class="input-group col-sm-9">
<span class="glyphicon glyphicon-pencil input-group-addon"></span>
<input type="text" name="mat-no" class="form-control" id="mat">
<span class="mat_error text-danger error"></span>
</div>
</div>

<div class="form-group">
<label for="dept" class="control-label col-sm-3">Department</label>
<div class="input-group col-sm-9">
<span class="glyphicon glyphicon-home input-group-addon"></span>
<input type="text" name="dept" class="form-control" id="dept">
<span class="dept_error text-danger error"></span>
</div>
</div>


<div class="form-group">
<label for="fac" class="control-label col-sm-3">Faculty</label>
<div class="input-group col-sm-9">
<span class="glyphicon glyphicon-home input-group-addon"></span>
<input type="text" name="faculty" class="form-control" id="fac">
<span class="fac_error text-danger error"></span>
</div>
</div>

<div class="form-group">
<label for="cgpa" class="control-label col-sm-3">CGPA</label>
<div class="input-group col-sm-9">
<span class="glyphicon glyphicon-heart input-group-addon"></span>
<input type="text" name="cgpa" class="form-control" id="cgpa">
<span class="cgpa_error text-danger error"></span>
</div>
</div>
<div class="form-group">
    <div class="input-group col-sm-offset-6 col-xs-offset-5">
    <input type="submit" name="submit" value="Add Student" class="btn btn-primary">
</div>
</div>
</form>
</div>
</div>
<div class="col-md-3 col-sm-3 col-lg-3 col-xs-2"></div>
</div>

<?php require('include/footer.php'); ?>