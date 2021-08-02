 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="script/jquery.js"></script>
    <script src="script/myscript.js"></script>
</div>

      <ol class="breadcrumb <?php if($_SERVER['PHP_SELF'] =="/web-dev/index.php" || $_SERVER['PHP_SELF'] =="/web-dev/add.php" || $_SERVER['PHP_SELF'] =="/web-dev/delete.php" || $_SERVER['PHP_SELF'] =="/web-dev/finaldelete.php"){ echo "visible-lg visible-md visible-sm visible-xs"; } else{echo "hidden-lg hidden-md hidden-sm hidden-xs";} ?>">
        <li><a href="index.php"><?php if($_SERVER['PHP_SELF'] =="/web-dev/index.php") {echo "<span class='text-danger'>Home</span>";}else{echo "Home";}  ?></a></li>
        <li><a href="add.php"><?php if($_SERVER['PHP_SELF'] =="/web-dev/add.php") {echo "<span class='text-danger'>Add</span>";}else{echo "Add";}  ?></a></li>
        <li><a href="delete.php"><?php if($_SERVER['PHP_SELF'] =="/web-dev/delete.php") {echo "<span class='text-danger'>Delete</span>";}else{echo "Delete";}  ?></a></li>
      </ol>
      </div>
    </div>
    </main>

<footer class="text-center <?php if($_SERVER['PHP_SELF'] =="/web-dev/index.php"){echo "hidden-lg hidden-md hidden-sm hidden-xs"; } else{echo "visible-lg visible-md visible-sm visible-xs";} ?>" id="foo">
  <h4>AYD Media Solutions</h4>
  <p>Copyright 2021 &copy;</p>
    </footer>
</body>
</html>