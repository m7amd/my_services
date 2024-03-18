<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>قائمة المستخدمين</title>
  <link rel="stylesheet" href="../scss/log.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Readex+Pro:wght@160..700&display=swap" rel="stylesheet" />
  <link rel="shortcut icon" href="../img/favicon.png" type="image/x-icon" />
</head>

<body>

  <div class="logpage">
    <div class="gridd">
      <div class="links">
        <div class="logo">
          <img src="../img/logo-dark.png" width="200" height="70" draggable="false" alt="" />
        </div>
        <ul>
          <a href="index.php">الرئيسية</a>
          <a href="log.php">قائمة المستخدمين</a>
        </ul>
      </div>
      <div class="content pd-5">
        <table class="table">
          <thead class="thead-dark">
            <tr>
              <th scope="col">#</th>
              <th scope="col">الاسم</th>
              <th scope="col">رقم الهوية</th>
              <th scope="col">الخدمة المستخدمة</th>
            </tr>
          </thead>
          <?php

          // Database Connection 
          include('../connection.php');

          $sql = 'SELECT * from log';
          $result = $database->query($sql);
          if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
              echo "<tr><td>" . $row["id"] . "</td><td>" . $row["full_name"] . "</td><td>".$row["nic"]. "</td><td>".$row["service_name"]. "</td></tr>";
            }
            echo "</table>";
          } else {
            echo "0 Result Found";
          }
          $database->close();
          ?>
      </div>
      <div></div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>