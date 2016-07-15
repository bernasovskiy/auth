<html>
  <head>
    <title>Test task</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
  </head>
  <body>
    <div id="header">
      <div id="tasks" class="col-md-10 col-md-offset-1">
        <h1><p class="text-center">Register</p></h1>
        </br>

        <span class="style1 pull-right"><a href="?lang=en">EN</a> / <a href="?lang=ru">RU</a></span>

		<div id="register-form" class="content-section-a">
		    <div class="container">
		        <div class="row">

		        	<?php if(isset($err)) { ?>
					<div class="alert alert-danger">
						<i class="glyphicon glyphicon-warning-sign"></i> &nbsp; <?php echo $err; ?> !
					</div>
					<?php } ?>

		            <form role="form" action="register.php" method="post" enctype="multipart/form-data" >
		                <div class="col-md-6">
		                    <div class="form-group">

		                        <label for="login">Login</label>
		                        <div class="input-group">
		                            <input id="login" type="text" class="form-control" name="login" placeholder="Please enter your login" required title="Name is required">
		                            <span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span>
		                        </div>
		                    </div>

		                    <div class="form-group">

		                        <label for="email">E-Mail Address</label>
		                        <div class="input-group">
		                            <input id="email" type="email" class="form-control" name="email" placeholder="Please enter your email" required title="E-mail is required">
		                            <span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span>
		                        </div>
		                    </div>

		                    <div class="form-group">
		                        <label for="password">Password</label>

		                        <div class="input-group">
		                            <input id="password" type="password" class="form-control" name="password" placeholder="Please enter your password" required title="Password is required">
		                            <span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span>
		                        </div>
		                    </div>

		                    <div class="form-group">
								<label for="InputFile">Add avatar</label>
								<div class="input-group">
									<input name="img_path" type="file" id="avatar">
								</div>
							</div>

		                    <div class="form-group">
		                    	<button id="submit" type="submit" name="submit" class="btn btn-block btn-primary">
                 					<i class="glyphicon glyphicon-open-file"></i>&nbsp;Register
                				</button></br>
                				<label>Have an account? <a href="index.php">Sign In</a></label>
		                    </div>
		                </div>
		            </form>
		        </div>
		    </div>
		</div>

		<footer>
          <p class="text-center">&copy; Bernasovskiy, 2016</p>
        </footer>

      </div>
    </div>
  </body>
</html>