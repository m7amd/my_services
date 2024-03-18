<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>لوحة التحكم</title>
  <link rel="stylesheet" href="../scss/hadmin.css"/>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Readex+Pro:wght@160..700&display=swap" rel="stylesheet" />
  <link rel="shortcut icon" href="../img/favicon.png" type="image/x-icon" />
</head>
<body>
  <section class="cppage">
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
      <div class="content">
        <div class="row row-gap-4">
          <div class="col-md-6 col-lg-4 mb-3 mb-sm-0">
            <a href="../admin/pageone.php" target="_plank">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">ابلاغ عن تغيير العنوان</h5>
                </div>
              </div>
            </a>
          </div>
          <div class="col-md-6 col-lg-4">
            <a href="../admin/pagetwo.php" target="_plank">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">طلب شهادة خلو من السوابق</h5>
                </div>
              </div>
            </a>
          </div>
          <div class="col-md-6 col-lg-4">
            <a href="../admin/pagethree.html" target="_plank">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">طلب الحصول على بطاقة هوية</h5>
                </div>
              </div>
            </a>
          </div>
          <div class="col-md-6 col-lg-4">
            <a href="../admin/pagefour.html" target="_plank">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">طلب استخراج شهادة ميلاد</h5>
                </div>
              </div>
            </a>
          </div>
          <div class="col-md-6 col-lg-4">
            <a href="../admin/pagefive.html" target="_plank">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">
                    طلب الحصول على جواز السفر الفلسطيني
                  </h5>
                  <p class="text-danger">* خاص بأهل غزة</p>
                </div>
              </div>
            </a>
          </div>
          <div class="col-md-6 col-lg-4">
            <a href="../admin/pagesix.html" target="_plank">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">بلاغ عن تغيير الحالة الاجتماعية</h5>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
      <div class="btns"></div>
    </div>
    <div class="dmode" onclick="toggleTheme()">
      <i class="fa-solid fa-moon moon" id="dark-Mode"></i>
    </div>
    <div class="dropdown logout">
      <button class="btn dropdown-toggle circle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
        <img src="../img/user.jpg" draggable="false" alt="" />
      </button>
      <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="../logingui.php">تسجيل الخروج</a></li>
      </ul>
    </div>
    <div class="time">
      <h1 id="currentTime"></h1>
    </div>
  </section>

  <script>
    let time = document.querySelector("#currentTime");
    setInterval(() => {
      let d = new Date();
      time.innerHTML = d.toLocaleTimeString();
    }, 1000);

    // Toggle Themes

    let getMode = localStorage.getItem("mode");
    if (getMode && getMode === "dark") {
      document.body.classList.toggle("theme");
    }

    function toggleTheme() {
      document.body.classList.toggle("theme");

      if (!document.body.classList.contains("theme")) {
        return localStorage.setItem("mode", "light");
      }
      localStorage.setItem("mode", "dark");
    }
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>