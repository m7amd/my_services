<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>تسجيل الدخول</title>
  <link rel="stylesheet" href="./scss/main.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Noto+Kufi+Arabic:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
  <link rel="shortcut icon" href="./img/favicon.png" type="image/x-icon" />
</head>

<body>


  <?php

  session_start();

  $_SESSION["user"] = "";
  $_SESSION["usertype"] = "";

  date_default_timezone_set('Asia/Jerusalem');
  $date = date('Y-m-d');

  $_SESSION["date"] = $date;


  //import database
  include("connection.php");





  if ($_POST) {

    $email = $_POST['useremail'];
    $password = $_POST['userpassword'];

    $error = '<label for="promter" class="form-label"></label>';

    $result = $database->query("select * from webuser where email='$email'");
    if ($result->num_rows == 1) {
      $utype = $result->fetch_assoc()['usertype'];
      if ($utype == 'p') {
        $checker = $database->query("select * from patient where pemail='$email' and ppassword='$password'");

        if ($checker->num_rows == 1) {


          //   Admin dashbord
          $_SESSION['user'] = $email;
          header('location: admin/index.php');
        } else {
          $error = '<label for="promter" class="form-label" style="color:rgb(255, 62, 62);text-align:center;">Wrong credentials: Invalid email or password</label>';
        }
      } elseif ($utype == 'd') {
        $checker = $database->query("select * from doctor where email='$email' and password='$password'");
      } else {
        $error = '<label for="promter" class="form-label" style="color:rgb(255, 62, 62);text-align:center;">Wrong credentials: Invalid email or password</label>';
      }
    } else {
      $error = '<label for="promter" class="form-label" style="color:rgb(255, 62, 62);text-align:center;">We cant found any acount for this email.</label>';
    }
  } else {
    $error = '<label for="promter" class="form-label">&nbsp;</label>';
  }

  ?>

  <!-- Form  -->

  <div class="formm">
    <!-- Navbar  -->

    <nav class="navbar navbar-expand-lg navbar">
      <div class="container nav">
        <a class="navbar-brand" href="index.html"><img src="./img/logo-dark.png" width="200" height="70" draggable="false" alt="خدماتي" /></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse links" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.html">الرئيسية</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <form class="loginForm" style="margin-top: 170px">
      <h3 class="mb-5 text-center">تسجيل الدخول</h3>
      <div class="mb-4">
        <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="البريد الالكتروني" required />
      </div>
      <div class="mb-3">
        <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="كلمة السر" required />
      </div>
      <button type="submit" class="btn btn-primary">تسجيل</button>
    </form>

    <!-- Navbar  -->
  </div>

  <!-- Form  -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>