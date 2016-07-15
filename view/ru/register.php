<html>
  <head>
    <title>Test task</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
  </head>
  <body>
    <div id="header">
      <div id="tasks" class="col-md-10 col-md-offset-1">
        <h1><p class="text-center">Регистрация</p></h1>
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

		                        <label for="login">Имя пользователя</label>
		                        <div class="input-group">
		                            <input id="login" type="text" class="form-control" name="login" placeholder="Введите логин" required>
		                            <span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span>
		                        </div>
		                    </div>

		                    <div class="form-group">

		                        <label for="email">Адрес электронной почты</label>
		                        <div class="input-group">
		                            <input id="email" type="email" class="form-control" name="email" placeholder="Укажите адрес электронной почты" required>
		                            <span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span>
		                        </div>
		                    </div>

		                    <div class="form-group">
		                        <label for="password">Пароль</label>

		                        <div class="input-group">
		                            <input id="password" type="password" class="form-control" name="password" placeholder="Введите пароль" required>
		                            <span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span>
		                        </div>
		                    </div>

		                    <div class="form-group">
								<label for="InputFile">Добавить аватар</label>
								<div class="input-group">
									<input name="img_path" type="file" id="avatar">
								</div>
							</div>

		                    <div class="form-group">
		                    	<button id="submit" type="submit" name="submit" class="btn btn-block btn-primary">
                 					<i class="glyphicon glyphicon-open-file"></i>&nbsp;Зарегистрировать
                				</button></br>
                				<label>Уже есть аккаунт? <a href="index.php">Войти</a></label>
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