<?php  
//include database logins
require('include/database.php');

session_start();

// if(isset($_SESSION['username'])){
//  //echo $_SESSION['username']; 
// } else {  echo 
//     header('location:login.php');
// }

//make query
$sql = 'SELECT * FROM student_info';

//pass the query to the database
$result = mysqli_query($db_con, $sql);

//check check 
if($result){
   
} else {
    echo 'Query error';
}
//make result an associative array
$students = mysqli_fetch_all($result, MYSQLI_ASSOC);

//free result from associative array
mysqli_free_result($result);

//close the connection
mysqli_close($db_con);

?>
<?php require('include/header.php'); ?>
<div class="index-c">
<div class="panel panel-primary">
           <div class="panel-heading">
               <h3 class="panel-title">Student Records</h3>
           </div>
           <div class="panel-body">
<div class="table-responsive">
    <table class="table table-hover table-bordered">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Matriculation Number</th>
                <th>Department</th>
                <th>Faculty</th>
                <th>CGPA</th>
               <!-- <th>Delete</th> -->
            </tr>
        </thead>
        <tbody>
            <?php foreach($students as $student) {?>
                <tr>
              
                    <td><?php echo htmlspecialchars($student['id']); ?></td>
                    <td><?php echo htmlspecialchars($student['name']); ?></td>
                    <td><?php echo htmlspecialchars($student['mat_no']); ?></td>
                    <td><?php echo htmlspecialchars($student['dept']); ?></td>
                    <td><?php echo htmlspecialchars($student['faculty']); ?></td>
                    <td><?php echo htmlspecialchars($student['cgpa']); ?></td>
                    <!-- <td><a href="delete.php?id=<?php echo htmlspecialchars($student['id']); ?>"><span class="glyphicon glyphicon-remove text-warning"></span></a></td> -->
                 </tr>
                <?php  }?> 
        </tbody>
    </table>
</div>
</div>
           <div class="panel-footer">
               AYD Media 2021&copy;
           </div>
       </div>
       </div>
    

<?php require('include/footer.php'); ?>


