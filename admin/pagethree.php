<!DOCTYPE html>
<html lang="en" dir="rtl">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>طلب الحصول على بطاقة الهوية</title>
    <link rel="stylesheet" href="../scss/p3.css">
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

    <section class="mt-5">
      <div class="container">
        <div class="head">
          <div class="logo">دولة فلسطين <br> وزارة الداخلية</div>
          <div class="pic"><img src="../img/Palestine_authority_logo.jpg" draggable="false" alt=""></div>
          <div class="logo-en">
            state of palestine <br> ministry of interior
          </div>
        </div>
        <hr>
        <div class="title text-center"><h2>طلب الحصول على بطاقة الهوية</h2></div>
        <form action="insert.php" method="post">
          <div class="flexx mt-4">
            1 <p>نوع الهوية</p>
            <div class="check">
              <input type="checkbox" name="اولى" id=""> اولى
              <input type="checkbox" name="باليه" id=""> باليه
              <input type="checkbox" name="مفقودة" id=""> مفقودة
              <input type="checkbox" name="تجديد" id=""> تجديد بسبب تغير الحاله الاجتماعية
            </div>
          </div>
          <hr>
          <div class="flex2 mt-4">
            2 <p>رقم الكونترول / البنكيس</p>
              <input type="text" name="" id=""> 
              <p>تملا بمعرفة الدائرة المختصة</p>
              <input type="text" name="" id=""> 
          </div>
          <hr>
          <div class="flex2 mt-4">
            
          </div>
          <hr>
          <div class="flex3">
            3 <p>رقم الهوية</p>
            <input type="text" name="nic">
            4 <p>الاسم الشخصي</p>
            <input type="text" name="full_name">
            5 <p>الاسم الاب</p>
            <input type="text" name="fathername">
          </div>
          <hr>
          <div class="flex4">
            6 <p>اسم الجد</p>
            <input type="text" name="">
            7 <p>الاسم العائلة</p>
            <input type="text" name="">
            8 <p></p>
            <input type="text" name="">
          </div>
          <hr>
          <div class="flex5">
            9 <p>اسم الام</p>
            <input type="text" name="">
            10 <p>الجنس</p>
            <input type="text" name="">
            11 <p>الديانة</p>
            <input type="text" name="">
          </div>
          <hr>
          <div class="flex5">
            12 <p>تاريخ الميلاد</p>
            <input type="date" name="">
            13 <p>ح/الاجتماعية</p>
            <input type="text" name="">
            14 <p>مكان الميلاد</p>
            <input type="text" name="">
          </div>
          <hr>
          <div class="flex5">
            15 <p>عنوان السكن الحالي</p>
            <input type="text" style="width: 400px;"> 
          </div>
          <hr>

          <div class="flex6">
            <div></div>
            <div></div>
            <div></div>
            <div>صورة ارشيف الطلب والختم</div>
            <div class="photo">
              <p>4 صور شخصية حديثة</p><br>
              <i class="fa-solid fa-arrow-right-long"></i>
            </div>
          </div>
          <p>اقر انا الموقع ادناه بصحة ما في هذا الطلب واتحمل المسؤولية الكامله عن اي خطا يظهر فيه</p>
          <div class="sicfour mt-4">
            <div>
              <p>____________________</p>
              <p>تاريخ التقديم</p>
            </div>
            <div>
              <p>____________________</p>
              <p>ختم وتوقيع الموظف المختص</p>
            </div>
            <div class="signn">
              <p class="sign">البصمة</p>
              <p>توقيع مقدم الطلب</p>
            </div>
          </div>
          <div class="sicfive mt-4">
            طابع <br> بقيمة () دنانير
          </div>
          
          <input type="hidden" name="page_title" id="page_title" value="">
          <div class="button mt-4">
            <button type="submit" onclick="window.print();">طباعة</button>
          </div>
        </form>
      </div>
    </section>
    <script>
      document.getElementById('page_title').value = document.title;
    </script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
