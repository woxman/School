<?php
$db=mysqli_connect("localhost","root","","test");
mysqli_set_charset($db,"utf8");
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
    <title>Document</title>
</head>
<body>

<!-----------------------------------MassageBox_Result------------------------->
<div id="Result_Box" class="alert-info"><p class="alert-link" id="Result_Tex"></p></div>
<!-----------------------------------MassageBox_Result------------------------->
<!-----------------------------------Single_Insert------------------------->
    <form action="" method="post" class="Window1" id="Form1">
        <label for="Name1">نام :</label>
        <input type="text" id="Name1" name="Name1">

        <br><br>
        <label for="Family1">نام خانوادگی :</label>
        <input type="text" id="Family1" name="Family1">

        <br><br>

        <label for="FatherName1">نام پدر :</label>
        <input type="text" id="FatherName1" name="FatherName1">

        <br><br>

        <label for="Expertise1">رشته :</label>
        <input type="text" id="Expertise1" name="Expertise1">

        <br><br>

        <label for="BirthDay1">تاریخ تولد :</label>
        <input type="date" id="BirthDay1" name="BirthDay1" >

        <br><br>

        <label for="Phone1">تلفن :</label>
        <input type="text" id="Phone1" name="Phone1" dir="ltr">

        <br><br>

        <label for="Address1">آدرس :</label>
        <input type="text" id="Address1" name="Address1">

        <br><br>
        <input type="submit" value="ثبت" id="Send1" name="Send1" class="btn btn-primary">
    </form>
    <br>
<!-----------------------------------Single_Insert------------------------->
<!-----------------------------------Multi_Insert------------------------->
    <form action="#" method="post" dir="rtl" class="Window2" id="Form2">

        <label for="Name2" id="lable1">نام</label>
        <label for="Family2" id="lable2">نام خانوادگی</label>
        <label for="FatherName2" id="lable3">نام پدر</label>
        <label for="Expertise2" id="lable4">رشته</label>
        <label for="Phone2" id="lable4">نلفن</label>
        <label for="BirthDay2" id="lable5">تاریخ تولد</label>
        <label for="Address2" id="lable6">آدرس منزل</label>
        <br>
        <textarea name="Name2" id="Name2" cols="10" rows="20" class="textarea input-sm"></textarea>
        <textarea name="Family2" id="Family2" cols="10" rows="20" class="textarea input-sm"></textarea>
        <textarea name="FatherName2" id="FatherName2" cols="10" rows="20" class="textarea input-sm"></textarea>
        <textarea name="Expertise2" id="Expertise2" cols="10" rows="20" class="textarea input-sm"></textarea>
        <textarea name="Phone2" id="Phone2" cols="10" rows="20" class="textarea input-sm" dir="ltr"></textarea>
        <textarea name="BirthDay2" id="BirthDay2" cols="10" rows="20" class="textarea input-sm" dir="ltr"></textarea>
        <textarea name="Address2" id="Address2" cols="10" rows="20" class="textarea input-sm"></textarea>
        <br>
        <input type="submit" value="ثبت" id="Send2" name="Send2" class="btn btn-primary">
    </form>
    <br>
<!-----------------------------------Multi_Insert------------------------->
<!-----------------------------------Show_Data------------------------->
    <div class="Window3">
            <table class='table table-striped table-bordered' style='text-align: center' dir='rtl' id="Table_Data">
                <tr>
                    <th>نام</th>
                    <th>نام خانوادگی</th>
                    <th>نام پدر</th>
                    <th>رشته</th>
                    <th>تاریخ تولد</th>
                    <th>تلفن</th>
                    <th>آدرس</th>
                    <th colspan='2'>تغییرات</th>
                </tr>
                <tr id="Td_Table">
                    <?php
                        global $db;
                        $qr="SELECT * FROM tables";
                        $rs1=mysqli_query($db, $qr);
                        while ($row=mysqli_fetch_array($rs1))
                        {
                            echo "<td>".$row['Name']."</td>";
                            echo "<td>".$row['Family']."</td>";
                            echo "<td>".$row['FatherName']."</td>";
                            echo "<td>".$row['Expertise']."</td>";
                            echo "<td>".$row['BirthDay']."</td>";
                            echo "<td>".$row['Phone']."</td>";
                            echo "<td>".$row['Address']."</td>";
                            echo "<td>"."<button type='button' class='btn Delete' id='".$row['id']."'>Delete</button>"."</td>";
                            echo "<td>"."<button type='button' class='btn myBtn Update' id='".$row['id']."'>Update</button>"."</td>";
                            echo "</tr>";
                        }
                    ?>

                </tr>
            </table>
    </div>
    <br>
<!-----------------------------------Show_Data---------------------------------------------->
<!----------------------------------------Multi_Update------------------------------------->
    <form method="post" class="Window1" id="Form4">
        <label for="Now_Expertises">پارامتر فعلی:</label>
        <select id="Now_Expertises">

        </select>
        <br>
        <label for="New_Expertises">پارامتر جدید:</label>
        <input type="text" id="New_Expertises" name="New_Expertises">
        <br>
        <input type="submit" class="btn btn-info" value="تغییر" id="Send4" name="Send4">
    </form>
    <br>
<!----------------------------------------Multi_Update------------------------------------->
<!----------------------------------------Multi_Delete------------------------------------->
    <form method="post" class="Window1" id="Form5">
        <label for="Group_Delete">کدام گروه : </label>
        <select id="Group_Delete">

        </select>
        <br>
        <input type="submit" class="btn btn-info" value="پاک کردن گروه" id="Send5" name="Send5">
    </form>
<!----------------------------------------Multi_Delete------------------------------------->
<!-----------------------------------Modal_Single_Update---------------------------------------------->
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
