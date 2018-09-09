<?php include "header.php";
if(is_user_logged_in()) {
  header("location: members.php");
  exit;
}
?>
  <div class="row">
    <div class="col-md-6 col-md-offset-3 ">
      <div class="well">
        
        <h1 class="mt-5 text-center">Login</h1>
      
        <div class="login_form">
          <form action="checklogin.php" method="post">
            <?php 
              if(isset($_GET["incorrectpass"])) {
                echo "<p class='bg bg-warning'>Incorrect credentials</p>";
              }
            ?>
            <div class="form-group">
              <label for="username">Username:</label>
              <input type="text" id="username" name="username" class="form-control" placeholder="Username">
            </div>
            <div class="form-group">
              <label for="password">Pass:</label>
              <input type="password" id="password" name="password" class="form-control" placeholder="Password">
            </div>

            
            <input type="submit" class="btn btn-primary" value="Login">

          </form>


        </div>

      </div>
      
    </div>
  </div>
<?php include "footer.php"; ?>
