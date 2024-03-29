<!DOCTYPE html>



<html lang="en" dir="rtl">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>تسجيل الدخول</title>
  <link rel="stylesheet" href="./scss/main.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Readex+Pro:wght@160..700&display=swap" rel="stylesheet">
  <link rel="shortcut icon" href="./img/favicon.png" type="image/x-icon" />
  <style>
    @media (min-width: 1400px) {
  nav {
    margin-bottom: 170px !important;
  }
}
  </style>
</head>
<body>
  <?php
  session_start();

  // Check if the alert message session variable is set
  if (isset($_SESSION['alert_message'])) {
    // Echo JavaScript code to display the alert message
    echo "<script>alert('" . $_SESSION['alert_message'] . "');</script>";
    // Unset the session variable to clear it
    unset($_SESSION['alert_message']);
  }
  ?>


  <!-- Form  -->

  <div class="formm">
    <!-- Navbar  -->

    <nav class="navbar navbar-expand-lg" style="margin-bottom: 50px;">
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

    <form action="./login.php" method="POST" class="loginForm">
      <h3 class="mb-5 text-center">تسجيل الدخول</h3>
      <div class="mb-4">
        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="البريد الالكتروني" required />
      </div>
      <div class="mb-3">
        <input type="password" class="form-control" name="password" id="password" placeholder="كلمة السر" required />
      </div>
      <button type="submit" class="btn btn-primary">تسجيل</button>
    </form>

    <!-- Navbar  -->
  </div>

  <!-- Form  -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>


</body>

</html>