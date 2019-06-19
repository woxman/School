<?php
if (file_exists("../Function/Config.php")){
    header('Location: ../Index.php');
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>نصب</title>
    <link rel="stylesheet" href="../Theme/Freamwork/bootstrap.min.css">
    <script src="../Theme/Freamwork/jquery.min.js"></script>
    <script src="../Theme/Style-Js/Script.js"></script>
    <link rel="stylesheet" href="../Theme/Style-Js/Style.css">
</head>
<body background="../Contact/Image/Bg-2.jpg">
<div id="Install_Window">
    <div id="Result_Box" class="alert-info"><p class="alert-link" id="Result_Tex"></p></div>
    <div align="center">نصب پندارا </div>
    <hr>
    <img src="../Contact/Image/Loading.gif" alt="" id="Loding_Image">
    <form action="" method="post" id="Form_Install">
        <div class="form-inline">
            <label for="Name_DB"><b>نام پایگاه داده : </b></label>
            <input type="text" class="form-control" id="Name_DB" name="Name_DB" dir="ltr" >
            <label><i>نام پایگاه داده‌ای که می‌خواهید برای پندارا استفاده کنید</i></label>
        </div>
        <br>
        <div class="form-inline">
            <label for="UserName_DB"><b>نام کاربری پایگاه داده : </b></label>
            <input type="text" class="form-control" id="UserName_DB" name="UserName_DB" dir="ltr" >
            <label><i>نام‌کاربری پایگاه‌داده‌ی شما</i></label>
        </div>
        <br>
        <div class="form-inline">
            <label for="Password_DB"><b>رمزعبور پایگاه داده : </b></label>
            <input type="text" class="form-control" id="Password_DB" name="Password_DB" dir="ltr" >
            <label><i>رمز پایگاه‌داده شما</i></label>
        </div>
        <br>
        <div class="form-inline">
            <label for="Host_DB"><b>میزبان پایگاه داده : </b></label>
            <input type="text" class="form-control" id="Host_DB" name="Host_DB" value="localhost" dir="ltr" >
            <label><i>اگر localhost کار نکرد ، باید این اطلاعات را از سرویس میزبانی خود بگیرید</i></label>
        </div>
        <br>
        <div class="form-inline">
            <label for="Table_DB"><b>پیشون جداول : </b></label>
            <input type="text" class="form-control" id="Table_DB" name="Table_DB" value="pen_1" dir="ltr" >
            <label><i>اگر می‌خواهید برای بار دوم نصب کنید ، این گزینه را تغییر دهید.</i></label>
        </div>
        <br>
        <div class="form-inline">
            <label for="UserName_Admin"><b>نام کاربری مدیر : </b></label>
            <input type="text" class="form-control" id="UserName_Admin" name="UserName_Admin" dir="ltr" >

            <label for="Password_Admin"><b>رمز عبور مدیر : </b></label>
            <input type="text" class="form-control" id="Password_Admin" name="Password_Admin" dir="ltr" >
        </div>
        <br><br>
        <div align="center">
            <input type="submit" value="نصب کن" class="btn btn-danger">
        </div>
    </form>
</div>
</body>
</html>