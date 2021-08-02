<?php 
session_start();

?>
<?php require('include/header.php'); ?>

<h3 class="text-center"><?php if(isset($_SESSION["username"])){echo strtoupper($_SESSION['username']) . " has successfully logged out";
unset($_SESSION["username"]);} else {
    echo "Please log-in";
}
    
    ?></h3

<?php require('include/footer.php'); ?>