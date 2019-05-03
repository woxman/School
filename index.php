<?php
session_start();
$msg_log="";
if (isset($_REQUEST['Log-Out']))
{
    session_destroy();
}
require_once "Function/Function.php";
if (file_exists("Function/Config.php")) {
    if (file_exists("Install")) {
        Delete_Folder("Install");
    }
}else{
     header('Location: Install/Install.php');
}
if (isset($_POST['Admins_Submit']))
{
    $User=$_POST['Admins_User'];
    $Pass=$_POST['Admins_Pass'];
    $Log_A=Admin_Login($User,$Pass);
    if ($Log_A=="Login_True")
    {
        $_SESSION["Login"]="True";
    }else{
        $msg_log="مشخصات وارد شده درست نمیباشد!";
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="Theme/Freamwork/bootstrap.min.css">
    <script src="Theme/Freamwork/jquery.min.js"></script>
    <script src="Theme/Freamwork/bootstrap.min.js"></script>
    <script src="Theme/Style-Js/Script.js"></script>
    <link rel="stylesheet" href="Theme/Style-Js/Style.css">
    <title>پنل</title>
</head>
<body background="Contact/Image/Bg-1.jpg">
<?php
if (isset($_SESSION['Login']))
{
    echo(Panel_A());
}else{
    echo"
    <div align='center' id='L_Form'>
        <div id='Login_Form' align='center'>
            <div id='Header_Login'>ورود ادمین</div>
            <br>
            <img src='Contact/Image/Logo.png' alt='' id='Logo'>
            <br>
            <form action='#' method='post'>
                <div class='form-group'>
                    <label for='Admins_User' class='control-label'>نام کاربری</label>
                    <div class='col-sm-11'>
                       <input type='text' class='form-control' id='Admins_User'  name='Admins_User' required dir='ltr'>
                    </div>
                </div>
                <div class='form-group'>
                    <label for='Admins_Pass' class='control-label'>گذرواژه</label>
                    <div class='col-sm-11'>
                        <input type='password' class='form-control' id='Admins_Pass'  name='Admins_Pass'  required dir='ltr'>
                     </div>
                </div>
                <span id='msg_log'><b>$msg_log</b></span>
                <br>
                <input type='submit' value='ورود' class='btn btn-info' id='Admins_Submit' name='Admins_Submit'>
            </form>
        </div>
    </div>
    ";
}
?>
<!-----------------------------------MassageBox_Result------------------------->
<div id="Result_Box" class="alert-info"><p class="alert-link" id="Result_Tex"></p></div>
<!-----------------------------------MassageBox_Result------------------------->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" style="margin-left: 40%">((بروزرسانی))</h4>
                <button type="button" class="close" data-dismiss="modal" dir="rtl">&times;</button>
            </div>
            <div class="modal-body" align="right">
                <form action="" dir="rtl" method="post" id="Form3">

                    <label for="Name3">نام :</label>
                    <input type="text" id="Name3" name="Name3">

                    <br><br>

                    <label for="Family3">نام خانوادگی :</label>
                    <input type="text" id="Family3" name="Family3">

                    <br><br>

                    <label for="FatherName3">نام پدر :</label>
                    <input type="text" id="FatherName3" name="FatherName3">

                    <br><br>

                    <label for="Expertise3">رشته :</label>
                    <input type="text" id="Expertise3" name="Expertise3">

                    <br><br>

                    <label for="BirthDay3">تاریخ تولد :</label>
                    <input type="date" id="BirthDay3" name="BirthDay3">

                    <br><br>

                    <label for="Phone3">تلفن :</label>
                    <input type="text" id="Phone3" name="Phone3">

                    <br><br>

                    <label for="Address3">آدرس :</label>
                    <input type="text" id="Address3" name="Address3">


                    <input type="text" id="Change3" name="Change3" hidden>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">خروج</button>
                <input type="submit" class="btn btn-dark" value="تغییر" id="Send3" name="Send3">
                </form>
            </div>
        </div>
    </div>
<!----------------------------------------Modal_Single_Update------------------------------------->
<!--<div style="position: fixed;right: 46%;bottom: 0%"><a href="http://hekta.ir" style="text-decoration: none" target="_blank"><p style="color: antiquewhite;font-size: 20px">Power By Hekta</p></a></div>-->
<script>
    $(document).ready(function(){
        $(".myBtn").click(function(){
            $("#myModal").modal();
        });
    });
</script>
</body>
</html>
