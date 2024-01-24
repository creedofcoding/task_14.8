<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Spa Saloon | Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="./css/login_style.css">
</head>

<body>
  <section class="vh-100">
    <div class="container-fluid h-custom">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
          <form action="sign_in.php" method="post">
            <div class="form-outline mb-4">
              <label class="form-label" for="login_input">Login</label>
              <input type="text" name="login" id="login_input" class="form-control form-control-lg" placeholder="Введите логин" required/>
            </div>

            <div class="form-outline mb-4">
              <label class="form-label" for="password_input">Password</label>
              <input type="password" name="password" id="password_input" class="form-control form-control-lg" placeholder="Введите пароль" required/>
            </div>

            <div class="form-outline mb-4">
              <label class="form-label" for="bday_input">Birth date</label>
              <input type="date" name="datebirthday" id="bday_input" class="form-control form-control-lg" placeholder="Введите дату рождения" />
            </div>

            <input type="hidden" name="time_input" value=<?=time();?>>

            <?php
                if (isset($_SESSION['message'])){
                    echo '<p class="message">'.$_SESSION['message'].'</p>';
                }
                unset($_SESSION['message']);
            ?>
            <div class="text-center text-lg-start mt-4 pt-2">
              <button type="submit" class="btn btn-primary btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
              <!-- <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="register.php" class="link-danger">Register</a></p> -->
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
</body>

</html>