<?php   




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Lounge</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/myown.css">
</head>
<style>

    body {
        /* max-width:1200px; */
        margin:0 auto;
    }
    footer {
        position: absolute;
        bottom: 0;
        left: 35%;
        right:35%;
    }
    .well {
        background:rgba(177, 178, 179, 0.412);
    }
    header {
            position:absolute;
            width: 100%;
            top: 0;
            z-index: 100;
            
        }
        main {
            z-index: -100;
            margin-top: 50px;
        }
    .container-fluid {
        margin-left:10px;
        margin-right:10px;
    }
    .navbar-toggle {
        
    }
</style>
<body>
<header>
   <nav class="navbar navbar-default navbar-inverse">
       <div class="container-fluid">
       <div class="navbar-header">

                <a href="" class="navbar-brand"><?php if(isset($_SESSION['username'])){echo htmlspecialchars(strtoupper($_SESSION['username']));}else{
                        echo "";
                    } ?></a>
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                <li><a href="index.php">Home</a></li>
                    <li><a href="add.php">Add</a></li>
                    <li><a href="delete.php">Delete</a></li>
                    <li><a href="login.php">Log-in</a></li>
                    <li><a href="logout.php">Log-out</a></li>
                </ul>
                    <form action="" class="navbar-form navbar-right" role="search">
                    <div class="form-group">
                    <input type="text" class="form-control" placeholder="search">
                    </div>
                    <button class="btn btn-default" type="submit">Submit</button>
                </form>
                </div>
                </div>
            </nav>
            </header>
            <main class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
   