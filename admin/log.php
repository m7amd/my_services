<!DOCTYPE html>
<html lang="en" dir="rtl">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>قائمة المستخدمين</title>
    <link rel="stylesheet" href="../scss/log.css">
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
      integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Readex+Pro:wght@160..700&display=swap"
      rel="stylesheet"
    />
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
                <th scope="col">الاسم</th>
                <th scope="col">رقم الهوية</th>
                <th scope="col">الخدمة المستخدمة</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>mohammad khaseeb</td>
                <td>63345643</td>
                <td>تغيير عنوان</td>
              </tr>
              <tr>
                <td>mahmoud SAlameh</td>
                <td>456746546</td>
                <td>الحصول على شهادة ميلاد</td>
              </tr>
              <tr>
                <td>titi arrob camp</td>
                <td>232434321</td>
                <td>الحصول على الجواز الفلسطيني</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div></div>
      </div>
      <div class="dmode" onclick="toggleTheme()">
        <i class="fa-solid fa-moon moon" id="dark-Mode"></i>
      </div>
    </div>
    <script>  
      let getMode = localStorage.getItem("mode");
      if (getMode && getMode === "dark") {
        document.body.classList.toggle("theme");
      }
  
      function toggleTheme() {
        document.body.classList.toggle("theme");
        document.querySelector(".table").classList.toggle("table-dark");
  
        if (!document.body.classList.contains("theme")) {
          return localStorage.setItem("mode", "light");
        }
        localStorage.setItem("mode", "dark");
      }
    </script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
