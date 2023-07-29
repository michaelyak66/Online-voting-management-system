
<?php include 'includes/header.php'; ?>
<body class="hold-transition login-page">
<div class="login-box">
  	<div class="login-logo">
  		<b>Sign Up</b>
  	</div>
  
  	<div class="login-box-body">
    	<p class="login-box-msg">Sign up to start your session</p>

    	<form class="form-horizontal" method="POST" action="add.php" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="firstname" class="col-sm-3 control-label">Fullname</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" placeholder="Michael Mamman" id="firstname" name="firstname" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="lastname" class="col-sm-3 control-label">Matric.No</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" placeholder="VUG/CSC/16/0000" id="lastname" name="lastname" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="col-sm-3 control-label">Password</label>

                    <div class="col-sm-9">
                      <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="photo" class="col-sm-3 control-label">Photo</label>

                    <div class="col-sm-9">
                      <input type="file" id="photo" name="photo">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
            <a href="index.php">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-sign-in"></i> Login</button>
            </a>
              <button type="submit" class="btn btn-primary btn-flat" name="addd"><i class="fa fa-save"></i> Signup</button>
              </form>
  	</div>
  	<?php
  		if(isset($_SESSION['error'])){
  			echo "
  				<div class='callout callout-danger text-center mt20'>
			  		<p>".$_SESSION['error']."</p> 
			  	</div>
  			";
  			unset($_SESSION['error']);
  		}
  	?>
</div>
	
<?php include 'includes/scripts.php' ?>
</body>
</html>


     