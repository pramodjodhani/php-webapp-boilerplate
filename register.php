<?php include "header.php"; ?>
  <div class="row">
    <div class="col-md-6 col-md-offset-3 ">
      <h1 class="text-center">Register</h1>
      
      <div class="registration_form well">
      	<form action="doregister.php" method="post" id="registration_form_form">
      		<?php 
            if(isset($_GET["error"])) {
              if($_GET["error"] == "email_exists") {
                $msg = "Email already exists. Maybe <a href='login.php'>login?</a> "; 
              }
              echo "<p class='bg bg-warning'>$msg</p>";
            }
          ?>
          <div class="form-group">
            <label>Name:</label>
            <input type="text" name="name" class="form-control" placeholder="Username" required id="reg_name" value="<?php echo rget("name"); ?>">
          </div>
      		<div class="form-group">
      			<label>Email:</label>
            <input type="email" name="email" class="form-control" placeholder="Email" required id="reg_email"  value="<?php echo rget("email"); ?>">
          </div>
          <div class="form-group">
            <label>Pass:</label>
            <input type="password" name="password" class="form-control" placeholder="Password" required id="reg_pass">
          </div>
          <div class="form-group">
            <label>Confirm Password:</label>
      			<input type="password" name="cpassword" class="form-control" placeholder="Confirm Password" required id="reg_cpass">
      		</div>

      		<input type="submit" class="btn btn-primary" value="Register">

      	</form>


      </div>
      
    </div>
  </div>
<?php include "footer.php"; ?>
