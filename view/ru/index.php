<html>
  <head>
    <title>Test task</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
  </head>
  <body>
    <div id="header">
      <div id="tasks" class="col-md-10 col-md-offset-1">
        <h1><p class="text-center">Вход</p></h1>
        </br>

        <span class="style1 pull-right"><a href="?lang=en">EN</a> / <a href="?lang=ru">RU</a></span>

        <!-- Login/authorization -->
        <div id="login-form" class="content-section-a">
          <div class="container">
            <div class="row">

            <?php if(isset($err)) { ?>
              <div class="alert alert-danger">
              <i class="glyphicon glyphicon-warning-sign"></i> &nbsp; <?php echo $err; ?> !
              </div>
            <?php } ?>


            <form role="form" action="login.php" method="post" >
              <div class="col-md-6">
                <div class="form-group">
                  <label for="InputName">Имя пользователя</label>
                  <div class="input-group">
                    <input id="login" type="login" class="form-control" name="login" placeholder="Введите логин" required>
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
                  <div class="input-group">
                    <input type="submit" name="submit" id="submit" value="Войти" class="btn btn-primary">
                    <a class="btn btn-info pull-right" href="/register.php">Регистрация</a>
                  </div>
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