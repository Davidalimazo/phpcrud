<?php  

$db_arr = array('host'=>'localhost', 'username'=>'aydmedia', 'password'=>'12345', 'db_name'=>'student_database');


//connect to database
$db_con = mysqli_connect($db_arr['host'], $db_arr['username'], $db_arr['password'], $db_arr['db_name']);

//check database connection
if($db_con){
    
} else {
    echo 'Connection error: ' . mysqli_connect_error();
}
?>