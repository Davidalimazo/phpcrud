<?php 
session_start();

if(isset($_SESSION['username'])){
// echo $_SESSION['username']; 
} else {  echo 
    header('location:login.php');
}
//include database connection
 require('include/database.php'); 


 //check if the delete button has been pressed
 if(isset($_POST['confirm'])){
     
    //store the input name as an id to pass to sql
    $delete = mysqli_real_escape_string($db_con, $_POST['delete']);

    //make a delete sql query
    $sql = "DELETE FROM student_info WHERE id = $delete";

    //pass the query to the database
    $deleted = mysqli_query($db_con, $sql);

    //redirect to index page after deleting
    if($deleted){
                header('location:index.php');
    }

        mysqli_close($db_con);
 }

 //check if the id of the particular student record is set
if(isset($_GET['id'])){
    
//store the id in a variable to be used to make query
$id = mysqli_real_escape_string($db_con, $_GET['id']);

//make sql query to select the student record
$sql = "SELECT * FROM student_info WHERE id = $id";

//pass the query to the database
$result = mysqli_query($db_con, $sql);

//get the result in an associative array
$student = mysqli_fetch_assoc($result);

//free the result from the associative array
mysqli_free_result($result);

//close the connection
mysqli_close($db_con);

// print_r($student);

}

?>
<?php require('include/header.php'); ?>
<?php if($student) { ?>
<h3>Delete Student Record of <?php echo htmlspecialchars($student['name']); ?></h3>
<h4>Matriculation Number <?php echo htmlspecialchars($student['mat_no']); ?></h4>
<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
<input type="hidden" name="delete" value="<?php echo htmlspecialchars($student['id']); ?>"> 
<input type="submit" name="confirm" value="Confirm" class="btn btn-danger">
</form>
<?php } else { ?>
<h3>
    No such student Record exist
</h3>

    <?php } ?> 
<?php require('include/footer.php'); ?>