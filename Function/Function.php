<?php
//---------------------Connect Database--------------------------//
function Connect_DB($Home)
{
    if ($Home=="No") {
        require_once "Config.php";
    }else{
        require_once "Function/Config.php";
    }

    global $DB_Host;
    global $DB_Name;
    global $DB_User;
    global $DB_Pass;
    global $DB_Table;
    $dbs=mysqli_connect($DB_Host,$DB_User,$DB_Pass,$DB_Name);
    mysqli_set_charset($dbs,"utf8");
    return($dbs);
}
//---------------------Connect Database--------------------------//
//---------------------Query Function--------------------------//
function Single_Insert($Name1,$Family1,$FatherName1,$Expertise1,$BirthDay1,$Phone1,$Address1)
{
    $dbs_c=Connect_DB("No");
    global $DB_Table;
    if ($Name1 != "" && $Family1 != "" && $FatherName1 != "" && $Expertise1 != "" && $BirthDay1 != "" && $Address1 != "")
    {
        $query= "INSERT INTO "."$DB_Table"."_student(Name, Family, FatherName, Expertise, BirthDay, Phone, Address) 
             VALUES('$Name1', '$Family1', '$FatherName1','$Expertise1','$BirthDay1','$Phone1','$Address1')";
        $result = mysqli_query($dbs_c, $query);
        if ($result)
        {
            return("تمامی اطلاعات شما با موفقیت ثبت شد");
        }
    }else{
        return("لطفا تمامی فیلدها را وارد نمایید");
    }
}

function Multi_Insert($Name2,$Family2,$FatherName2,$Expertise2,$BirthDay3,$Phone2,$Address2)
{
    $dbs_c=Connect_DB("No");
    global $DB_Table;
    $Name2 = Explode_Array($Name2);
    $Family2 = Explode_Array($Family2);
    $FatherName2 = Explode_Array($FatherName2);
    $Expertise2 = Explode_Array($Expertise2);
    $BirthDay2 = Explode_Array($BirthDay3);
    $Phone2 = Explode_Array($Phone2);
    $Address2 = Explode_Array($Address2);
    if (count($Name2) && count($Name2) == count($Name2) && count($Name2) == count($Name2) && count($Name2) == count($Address2))
    {
        for ($i=0;$i<count($Name2);$i++)
        {
            $query= "INSERT INTO "."$DB_Table"."_student(Name, Family, FatherName, Expertise, BirthDay, Phone, Address)
                 VALUES('$Name2[$i]', '$Family2[$i]', '$FatherName2[$i]','$Expertise2[$i]','$BirthDay2[$i]','$Phone2[$i]','$Address2[$i]')";
            $result = mysqli_query($dbs_c, $query);
        }
        if ($result)
        {
            return("تمامی اطلاعات شما با موفقیت ثبت شد");
        }
    }else{
        return("لطفا تمامی فیلدهارا کامل کنید/باید پارامترها کامل باشد");
    }
}

function Explode_Array($Text)
{
    $textAr = explode("\n", $Text);
    $textAr = array_filter($textAr, 'trim'); // remove any extra \r characters left behind
    $Push=array();
    foreach ($textAr as $Key => $line) {
        //array_push($Push,$line);
        $Push[$Key]=$line;
    }
    return $Push;
}

function Single_Update($Name3,$Family3,$FatherName3,$Expertise3,$BirthDay3,$Phone3,$Address3,$Change3)
{
    $dbs_c=Connect_DB("No");
    global $DB_Table;
    if ($Name3!= "")
    {
        $up1="UPDATE "."$DB_Table"."_student SET Name='$Name3' WHERE id='$Change3'";
        mysqli_query($dbs_c,$up1);
    }
    if ($Family3 != "")
    {
        $up2="UPDATE "."$DB_Table"."_student SET Family='$Family3' WHERE id='$Change3'";
        mysqli_query($dbs_c,$up2);
    }
    if ($FatherName3 != "")
    {
        $up3="UPDATE "."$DB_Table"."_student SET FatherName='$FatherName3' WHERE id='$Change3'";
        mysqli_query($dbs_c,$up3);
    }
    if ($Expertise3 != "")
    {
        $up4="UPDATE "."$DB_Table"."_student Expertise='$Expertise3' WHERE id='$Change3'";
        mysqli_query($dbs_c,$up4);
    }
    if ($BirthDay3 != "")
    {
        $up5="UPDATE "."$DB_Table"."_student SET BirthDay='$BirthDay3' WHERE id='$Change3'";
        mysqli_query($dbs_c,$up5);
    }
    if ($Phone3 != "")
    {
        $up6="UPDATE "."$DB_Table"."_student SET Phone='$Phone3' WHERE id='$Change3'";
        mysqli_query($dbs_c,$up6);
    }
    if ($Address3 != "")
    {
        $up7="UPDATE "."$DB_Table"."_student SET Address='$Address3' WHERE id='$Change3'";
        mysqli_query($dbs_c,$up7);
    }
    return("تمامی اطلاعات شما با موفقیت آپدیت شد");
}

function Single_Delete($di)
{
    $dbs_c=Connect_DB("No");
    global $DB_Table;
    $qt1="DELETE FROM "."$DB_Table"."_student WHERE id='$di'";
    $qt2="DELETE FROM "."$DB_Table"."_class_obligation WHERE id='$di'";
    $qt3="DELETE FROM "."$DB_Table"."_discipline_obligation WHERE id='$di'";
    $qt4="DELETE FROM "."$DB_Table"."_absenteeism WHERE id='$di'";
    $qt5="DELETE FROM "."$DB_Table"."_delay WHERE id='$di'";
    $qt6="DELETE FROM "."$DB_Table"."_encouragement WHERE id='$di'";
    $qt7="DELETE FROM "."$DB_Table"."_reminder WHERE id='$di'";
    mysqli_query($dbs_c,$qt1);
    mysqli_query($dbs_c,$qt2);
    mysqli_query($dbs_c,$qt3);
    mysqli_query($dbs_c,$qt4);
    mysqli_query($dbs_c,$qt5);
    mysqli_query($dbs_c,$qt6);
    mysqli_query($dbs_c,$qt7);
    return("آیتم انتخابی با موفقیت پاک شد");
}

function Multi_Update($Now_Ex,$New_Ex)
{
    $dbs_c=Connect_DB("No");
    global $DB_Table;
    $qmu="UPDATE "."$DB_Table"."_student SET Expertise='$New_Ex' WHERE Expertise='$Now_Ex'";
    mysqli_query($dbs_c,$qmu);
    return("آیتم ها با موفقیت جایگزین شد");
}

function Multi_Delete($dg)
{
    $dbs_c=Connect_DB("No");
    global $DB_Table;
    $qgd1="DELETE FROM "."$DB_Table"."_student WHERE Expertise='$dg'";
    $qgd2="DELETE FROM "."$DB_Table"."_class_obligation WHERE Expertise='$dg'";
    $qgd3="DELETE FROM "."$DB_Table"."_discipline_obligation WHERE Expertise='$dg'";
    $qgd4="DELETE FROM "."$DB_Table"."_absenteeism WHERE Expertise='$dg'";
    $qgd5="DELETE FROM "."$DB_Table"."_delay WHERE Expertise='$dg'";
    $qgd6="DELETE FROM "."$DB_Table"."_encouragement WHERE Expertise='$dg'";
    $qgd7="DELETE FROM "."$DB_Table"."_reminder WHERE Expertise='$dg'";
    mysqli_query($dbs_c,$qgd1);
    mysqli_query($dbs_c,$qgd2);
    mysqli_query($dbs_c,$qgd3);
    mysqli_query($dbs_c,$qgd4);
    mysqli_query($dbs_c,$qgd5);
    mysqli_query($dbs_c,$qgd6);
    mysqli_query($dbs_c,$qgd7);
    return("گروه موردنظر با موفقیت پاک شد");
}

function Read_Data()
{
    $dbs_c=Connect_DB("No");
    global $DB_Table;
    $qr="SELECT * FROM "."$DB_Table"."_student";
    $rs1=mysqli_query($dbs_c, $qr);
    return($rs1);
}
function NE()
{
    $dbs_c=Connect_DB("No");
    global $DB_Table;
    $qr="SELECT distinct Expertise FROM "."$DB_Table"."_student";
    $rs2=mysqli_query($dbs_c, $qr);
    return($rs2);
}

function GD()
{
    $dbs_c=Connect_DB("No");
    global $DB_Table;
    $qr="SELECT distinct Expertise FROM "."$DB_Table"."_student";
    $rs3=mysqli_query($dbs_c, $qr);
    return($rs3);
}
//---------------------Query Function--------------------------//
function Panel_A()
{
    echo("  <nav class='menu' tabindex='0'>");
    echo("	<div class='smartphone-menu-trigger'></div>");
    echo("  <header class='avatar'>");
    echo("		<img src='Contact/Image/Admin.png' /><br><br>");
    echo("		<div class='btn btn-warning'><a href='?Log-Out'>خروج</a></div>");
    echo("  </header>");
    echo("	<ul>");
    echo("    <a href='?Students'><div class='P_I'><i class=\"fal fa-user-tie \" style='font-size: 24px; color: whitesmoke;'></i><span>&nbsp;&nbsp;لیست دانش آموزان</span></div></a>");
    echo("    <a href='?Status'><div class='P_I'><i class=\"fal fa-user-cog \" style='font-size: 24px; color: whitesmoke;'></i><span>&nbsp;وضعیت دانش آموزان</span></div></a>");
    echo("    <a href='?Add'><div class='P_I'><i class=\"fal fa-tachometer-alt \" style='font-size: 24px; color: whitesmoke;'></i><span>&nbsp;افزودن دانش آموز</span></div></a>");
    echo("    <a href='?Obligation'><div class='P_I'><i class=\"fal fa-user-graduate \" style='font-size: 24px; color: whitesmoke;'></i><span>&nbsp;&nbsp;افزودن تعهد</span></div></a>");
    echo("    <a href='?Criticism'><div class='P_I'><i class=\"fal fa-user-graduate \" style='font-size: 24px; color: whitesmoke;'></i><span>&nbsp;&nbsp;افزودن انتقاد</span></div></a>");
    echo("    <a href='?Reminder'><div class='P_I'><i class=\"fal fa-user-graduate \" style='font-size: 24px; color: whitesmoke;'></i><span>&nbsp;&nbsp;افزودن تذکر</span></div></a>");
    echo("    <a href='?Edit'><div class='P_I'><i class=\"fal fa-user-graduate \" style='font-size: 24px; color: whitesmoke;'></i><span>&nbsp;&nbsp;تغییرات گروهی</span></div></a>");
    echo("  </ul>");
    echo("</nav>");
    echo("<main>");
    if (isset($_REQUEST['Add']))
    {
        echo"
        <form action='' method='post' class='Window1' id='Form1' style='margin-bottom: 0px'>
            <div class='row'>
                <label for='Name1' class='col-sm-4'>نام :</label>
                <input type='text' id='Name1' name='Name1' class='form-control col-sm-6'>
            </div>
            <br>
            <div class='row'>
                <label for='Family1' class='col-sm-4'>نام خانوادگی :</label>
                <input type='text' id='Family1' name='Family1' class='form-control col-sm-6'>
            </div>
            <br>
            <div class='row'>
                <label for='FatherName1' class='col-sm-4'>نام پدر :</label>
                <input type='text' id='FatherName1' name='FatherName1' class='form-control col-sm-6'>
            </div>
            <br>
            <div class='row'>
                <label for='Expertise1' class='col-sm-4'>رشته :</label>
                <input type='text' id='Expertise1' name='Expertise1' class='form-control col-sm-6'>
            </div>
            <br>
            <div class='row'>
                <label for='BirthDay1' class='col-sm-4'>تاریخ تولد :</label>
                <input type='text' id='BirthDay1' name='BirthDay1' class='form-control col-sm-6 usage' dir='ltr' >
            </div>
            <br>
            <div class='row'>
                <label for='Phone1' class='col-sm-4'>تلفن :</label>
                <input type='text' id='Phone1' name='Phone1' dir='ltr' class='form-control col-sm-6'>
            </div>
            <br>
            <div class='row'>
                <label for='Address1' class='col-sm-4'>آدرس :</label>
                <input type='text' id='Address1' name='Address1' class='form-control col-sm-6'>
            </div>
            <br>
            <center><input type='submit' value='افزودن شخص' id='Send1' name='Send1' class='btn btn-info'></center>
        </form>
        <br>
        <div style='width: 1000px;border-bottom: 1px solid #6c757d;margin-left: 285px'></div>
        <br>
        <form action='#' method='post' dir='rtl' class='Window2' id='Form2'>
            <label for='Name2' id='lable1'>نام</label>
            <label for='Family2' id='lable2'>نام خانوادگی</label>
            <label for='FatherName2' id='lable3'>نام پدر</label>
            <label for='Expertise2' id='lable4'>رشته</label>
            <label for='Phone2' id='lable4'>نلفن</label>
            <label for='BirthDay2' id='lable5'>تاریخ تولد</label>
            <label for='Address2' id='lable6'>آدرس منزل</label>
            <br>
            <div class='form-inline'>
                <textarea name='Name2' id='Name2' cols='10' rows='20' class='textarea input-sm form-control col'></textarea>
                <textarea name='Family2' id='Family2' cols='10' rows='20' class='textarea input-sm form-control col'></textarea>
                <textarea name='FatherName2' id='FatherName2' cols='10' rows='20' class='textarea input-sm form-control col'></textarea>
                <textarea name='Expertise2' id='Expertise2' cols='10' rows='20' class='textarea input-sm form-control col' placeholder='دوازدهم کامپیوتر'></textarea>
                <textarea name='Phone2' id='Phone2' cols='10' rows='20' class='textarea input-sm form-control col' dir='ltr' placeholder='09184899437'></textarea>
                <textarea name='BirthDay2' id='BirthDay2' cols='10' rows='20' class='textarea input-sm form-control col' dir='ltr' placeholder='1397/12/21'></textarea>
                <textarea name='Address2' id='Address2' cols='10' rows='20' class='textarea input-sm form-control col' placeholder='ساوه - مطهری'></textarea>
            </div>
            <br>
            <center><input type='submit' value='افزودن گروه' id='Send2' name='Send2' class='btn btn-info'></center>
        </form><br>";
    }elseif (isset($_REQUEST['Students'])) {
        A:
        $dbs_c=Connect_DB("Yes");
        global $DB_Table;
        echo("<div class='Window3' id='Td_Table'>");
        echo("        <table class='table table-striped table-bordered' style='text-align: center' dir='rtl' id='Table_Data'>");
        echo("            <tr>");
        echo("                <th>نام</th>");
        echo("                <th>نام خانوادگی</th>");
        echo("                <th>نام پدر</th>");
        echo("                <th>رشته</th>");
        echo("                <th>تاریخ تولد</th>");
        echo("                <th>تلفن</th>");
        echo("                <th>آدرس</th>");
        echo("                <th colspan='2'>تغییرات</th>");
        echo("            </tr>");
        echo("            <tr>");
        $qr="SELECT * FROM "."$DB_Table"."_student ORDER BY Expertise";
        $rs1=mysqli_query($dbs_c, $qr);
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
        echo("            </tr>");
        echo("        </table>");
        echo("</div>");
    }elseif (isset($_REQUEST['Edit'])) {
        echo"<form method='post' class='Window1' id='Form4'>
            <div class='row'>
                <label for='Now_Expertises' class='col-sm-4'>پارامتر فعلی :</label>
                <select id='Now_Expertises' class='custom-select col-sm-5'></select>
            </div>
            <br>
            <div class='row'>
                <label for='New_Expertises' class='col-sm-4'>پارامتر جدید :</label>
                <input type='text' id='New_Expertises' name='New_Expertises' class='form-control col-sm-5' required>
            </div>
            <br>
            <center><input type='submit' class='btn btn-info' value='تغییر گروه' id='Send4' name='Send4'></center>
        </form>
        <form method='post' class='Window1' id='Form5'>
            <div class='row'>
                <label for='Group_Delete' class='col-sm-4'>کدام گروه : </label>
                <select id='Group_Delete' class='custom-select col-sm-5'></select>
            </div>
            <br>
            <center><input type='submit' class='btn btn-info' value='پاک کردن گروه' id='Send5' name='Send5'></center>
        </form>";
    }elseif (isset($_REQUEST['Status'])) {
        echo"
            <div class='Window3' dir='rtl'>
                <div class='row'>
                    <label for='Class-List3' class='col-sm-2'>کلاس : </label>
                    <select id='Class-List3' class='Class-List custom-select col-sm-3'></select>
                    <label for='Student-List3' class='col-sm-3'>دانش آموز : </label>
                    <select id='Student-List3' name='Student-List1' class='custom-select col-sm-3 Student_Name'></select>
                    <br>
                    <div class='col-sm-12'><hr></div>
                    <br>
                    <div align='center' class='col-sm-12'><<  لیست تعهدات درسی >></div>
                    <br>
                    <div class='Tahodat_D col-sm-12'></div><br>
                    <div class='col-sm-12'><hr></div>
                    <br>
                    <div align='center' class='col-sm-12'><<  لیست تعهدات انظباطی >></div>
                    <br>
                    <div class='Tahodat_E col-sm-12'></div><br>
                    <div class='col-sm-12'><hr></div>
                    <br>
                    <div align='center' class='col-sm-12'><<  لیست غیبت ها >></div>
                    <br>
                    <div class='Gheybatha col-sm-12'></div><br>
                    <div class='col-sm-12'><hr></div>
                    <br>
                    <div align='center' class='col-sm-12'><<  لیست تاخیر ها >></div>
                    <br>
                    <div class='Takhirat col-sm-12'></div>
                    <br>
                    <div class='col-sm-12'><hr></div>
                    <br>
                    <div align='center' class='col-sm-12'><<  لیست تشویق ها >></div>
                    <br>
                    <div class='Tashvighat col-sm-12'></div>
                    <br>
                    <div class='col-sm-12'><hr></div>
                    <br>
                    <div align='center' class='col-sm-12'><<  لیست تذکر ها >></div>
                    <br>
                    <div class='Tazakorat col-sm-12'></div> 
                </div>
            </div>
        ";
    }elseif(isset($_REQUEST['Obligation'])) {
        echo "
        <div class='Window1'>
            <div align='center'><< فرم  تعهد درسی >></div><br>
            <form action='' id='Form10'>
                <div class='row'>
                    <label for='Class-List1' class='col-sm-2'>کلاس : </label>
                    <select id='Class-List1' class='Class-List custom-select col-sm-3'></select>
                    <label for='Student-List1' class='col-sm-3'>دانش آموز : </label>
                    <select id='Student-List1' name='Student-List1' class='custom-select col-sm-3' required></select>
                </div>
                <br>
                <div class='row'>
                    <label for='Day-Darsi' class='col-sm-3'>روز : </label>
                    <select id='Day-Darsi' name='Day-Darsi' class='custom-select col-sm-5'  required>
                        <option value='شنبه'>شنبه</option>
                        <option value='یکشنبه'>یکشنبه</option>
                        <option value='دوشنبه'>دوشنبه</option>
                        <option value='سه شنبه'>سه شنبه</option>
                        <option value='چهارشنبه'>چهارشنبه</option>
                        <option value='پنجشنبه'>پنجشنبه</option>
                        <option value='جمعه'>جمعه</option>
                    </select>
                </div>
                <br>
                <div class='row'>
                    <label for='Rust-Darsi' class='col-sm-3'>زنگ چندم : </label>
                    <select name='Rust-Darsi' id='Rust-Darsi' class='custom-select col-sm-5' required>
                        <option value='اول'>اول</option>
                        <option value='دوم'>دوم</option>
                        <option value='سوم'>سوم</option>
                        <option value='چهارم'>چهارم</option>                    
                    </select>
                </div>
                <br>
                <div class='row'>
                    <label for='Date-Darsi' class='col-sm-3'>تاریخ : </label>
                    <input type='text' id='Date-Darsi' name='Date-Darsi' dir='ltr' class='form-control col-sm-5 usage' required>
                </div>
                <br>
                <div class='row'>
                    <label for='Note-Darsi' class='col-sm-3'>ملاحضات : </label>
                    <textarea name='Note-Darsi' id='Note-Darsi' cols='30' rows='2' style='resize: none;' class='form-control col-sm-7' required></textarea>
                </div>
                <br>
                <center><input type='submit' id='Submit-Darsi' name='Submit-Darsi' value='ثبت' class='btn btn-info'></center>
            </form>
        </div>
        <div class='Window1'>
            <div align='center'><< فرم  تعهد انظباظی >></div><br>
            <form action='' id='Form11'>
                <div class='row'>
                    <label for='Class-List2' class='col-sm-2'>کلاس : </label>
                    <select id='Class-List2' class='Class-List custom-select col-sm-3'></select>
                    <label for='Student-List2' class='col-sm-3'>دانش آموز : </label>
                    <select id='Student-List2' name='Student-List2' class='custom-select col-sm-3' required></select>
                </div>
                <br>
                <div class='row'>
                    <label for='Day-Enzebati' class='col-sm-3'>روز : </label>
                    <select id='Day-Enzebati' name='Day-Enzebati' class='custom-select col-sm-5' required>
                        <option value='شنبه'>شنبه</option>
                        <option value='یکشنبه'>یکشنبه</option>
                        <option value='دوشنبه'>دوشنبه</option>
                        <option value='سه شنبه'>سه شنبه</option>
                        <option value='چهارشنبه'>چهارشنبه</option>
                        <option value='پنجشنبه'>پنجشنبه</option>
                        <option value='جمعه'>جمعه</option>
                    </select>
                </div>
                <br>
                <div class='row'>
                    <label for='Rust-Enzebati' class='col-sm-3'>زنگ چندم : </label>
                    <select name='Rust-Enzebati' id='Rust-Enzebati' class='custom-select col-sm-5' required>
                        <option value='اول'>اول</option>
                        <option value='دوم'>دوم</option>
                        <option value='سوم'>سوم</option>
                        <option value='چهارم'>چهارم</option>                    
                    </select>                
                </div>
                <br>
                <div class='row'>
                    <label for='Date-Enzebati' class='col-sm-3'>تاریخ : </label>
                    <input type='text' id='Date-Enzebati' class='form-control col-sm-5 usage' name='Date-Enzebati' dir='ltr' required>
                </div>
                <br>
                <div class='row'>
                    <label for='Note-Enzebati' class='col-sm-3'>ملاحضات : </label>
                    <textarea name='Note-Enzebati' id='Note-Enzebati' cols='30' rows='2' style='resize: none;' class='form-control col-sm-7' required></textarea>
                </div>
                <br>
                <center><input type='submit' id='Submit-Enzebati' name='Submit-Enzebati' value='ثبت' class='btn btn-info'></center>
            </form>
        </div>";
    }elseif(isset($_REQUEST['Criticism'])) {
        echo "
        <div class='Window1'>
            <div align='center'><< فرم  تشویق >></div><br>
            <form action='' id='Form8'>
                <div class='row'>
                    <label for='Class-List1' class='col-sm-2'>کلاس : </label>
                    <select id='Class-List1' class='Class-List custom-select col-sm-3'></select>
                    <label for='Student-List1' class='col-sm-3'>دانش آموز : </label>
                    <select id='Student-List1' name='Student-List1' class='custom-select col-sm-3' required></select>                
                </div>
                <br>
                <div class='row'>
                    <label for='Day-Tashvigh' class='col-sm-3'>روز : </label>
                    <select id='Day-Tashvigh' name='Day-Tashvigh' class='custom-select col-sm-5' required>
                        <option value='شنبه'>شنبه</option>
                        <option value='یکشنبه'>یکشنبه</option>
                        <option value='دوشنبه'>دوشنبه</option>
                        <option value='سه شنبه'>سه شنبه</option>
                        <option value='چهارشنبه'>چهارشنبه</option>
                        <option value='پنجشنبه'>پنجشنبه</option>
                        <option value='جمعه'>جمعه</option>
                    </select>
                </div>
                <br>
                <div class='row'>
                    <label for='Date-Tashvigh' class='col-sm-3'>تاریخ : </label>
                    <input type='text' id='Date-Tashvigh' name='Date-Tashvigh' class='form-control col-sm-5 usage' dir='ltr' required>
                </div>
                <br>
                <div class='row'>
                    <label for='Note-Tashvigh' class='col-sm-3'>ملاحضات : </label>
                    <textarea name='Note-Tashvigh' id='Note-Tashvigh' cols='30' rows='2' style='resize: none' class='form-control col-sm-7' required></textarea>
                </div>
                <br>
                <center><input type='submit' id='Submit-Tashvigh' name='Submit-Tashvigh' value='ثبت' class='btn btn-info'></center>
            </form>
        </div>
        <div class='Window1'>
            <div align='center'><< فرم  تذکر >></div><br>
            <form action='' id='Form9'>
                <div class='row'>
                    <label for='Class-List2' class='col-sm-2'>کلاس : </label>
                    <select id='Class-List2' class='Class-List custom-select col-sm-3'></select>
                    <label for='Student-List2' class='col-sm-3'>دانش آموز : </label>
                    <select id='Student-List2' name='Student-List2' class='custom-select col-sm-3' required></select>
                </div>
                <br>
                <div class='row'>
                    <label for='Day-Tazakor' class='col-sm-3'>روز : </label>
                    <select id='Day-Tazakor' name='Day-Tazakor' class='custom-select col-sm-5' required>
                        <option value='شنبه'>شنبه</option>
                        <option value='یکشنبه'>یکشنبه</option>
                        <option value='دوشنبه'>دوشنبه</option>
                        <option value='سه شنبه'>سه شنبه</option>
                        <option value='چهارشنبه'>چهارشنبه</option>
                        <option value='پنجشنبه'>پنجشنبه</option>
                        <option value='جمعه'>جمعه</option>
                    </select>
                </div>
                <br>
                <div class='row'>
                    <label for='Date-Tazakor' class='col-sm-3'>تاریخ : </label>
                    <input type='text' id='Date-Tazakor' name='Date-Tazakor' class='form-control col-sm-5 usage' dir='ltr' required>
                </div>
                <br>
                <div class='row'>
                    <label for='Note-Tazakor' class='col-sm-3'>ملاحضات : </label>
                    <textarea name='Note-Tazakor' id='Note-Tazakor' cols='30' rows='2' style='resize: none' class='form-control col-sm-7' required></textarea>
                </div>
                <br>
                <center><input type='submit' id='Submit-Tazakor' name='Submit-Tazakor' value='ثبت' class='btn btn-info'></center>
            </form>
        </div>";
    }elseif (isset($_REQUEST['Reminder'])){
        echo"
        <div class='Window1'>
            <div align='center'><< فرم  تاخیر >></div><br>
            <form action='' method='post' id='Form6'>
                <div class='row'>
                    <label for='Class-List1' class='col-sm-2'>کلاس : </label>
                    <select id='Class-List1' class='Class-List custom-select col-sm-3'></select>
                    <label for='Student-List1' class='col-sm-3'>دانش آموز : </label>
                    <select id='Student-List1' name='Student-List1' class='custom-select col-sm-3' required></select>
                </div>
                <br>
                <div class='row'>
                    <label for='Day-Takhir' class='col-sm-3'>روز : </label>
                    <select id='Day-Takhir' name='Day-Takhir' class='custom-select col-sm-5' required>
                    <option value='شنبه'>شنبه</option>
                    <option value='یکشنبه'>یکشنبه</option>
                    <option value='دوشنبه'>دوشنبه</option>
                    <option value='سه شنبه'>سه شنبه</option>
                    <option value='چهارشنبه'>چهارشنبه</option>
                    <option value='پنجشنبه'>پنجشنبه</option>
                    <option value='جمعه'>جمعه</option>
                    </select>
                </div>
                <br>
                <div class='row'>
                    <label for='Date-Takhir' class='col-sm-3'>تاریخ : </label>
                    <input type='text' id='Date-Takhir' name='Date-Takhir' class='form-control col-sm-5 usage' dir='ltr' required>
                </div>
                <br>
                <div class='row'>
                    <label for='Hour-Takhir' class='col-sm-3'>چند ساعت : </label>
                    <input type='number' id='Hour-Takhir' name='Hour-Takhir' class='form-control col-sm-5' min='0' max='6' required>
                </div>
                <br>
                <div class='row'>
                    <label for='Note-Takhir' class='col-sm-3'>ملاحضات : </label>
                    <textarea name='Note-Takhir' id='Note-Takhir' cols='30' rows='2' style='resize: none' class='form-control col-sm-7' required></textarea>
                </div>
                <br>
                <center><input type='submit' id='Submit-Takhir' name='Submit-Takhir' value='ثبت' class='btn btn-info'></center>
            </form>
        </div>
        <div class='Window1'>
            <div align='center'><< فرم  غیبت >></div><br>
            <form action='' id='Form7'>
                <div class='row'>
                <label for='Class-List2' class='col-sm-2'>کلاس : </label>
                <select id='Class-List2' class='Class-List custom-select col-sm-3'></select>
                <label for='Student-List2' class='col-sm-3'>دانش آموز : </label>
                <select id='Student-List2' name='Student-List2' class='custom-select col-sm-3' required></select>                
                </div>
                <br>
                <div class='row'>
                    <label for='Day-Gheybat' class='col-sm-3'>روز : </label>
                    <select id='Day-Gheybat' name='Day-Gheybat' class='custom-select col-sm-5' required>
                        <option value='شنبه'>شنبه</option>
                        <option value='یکشنبه'>یکشنبه</option>
                        <option value='دوشنبه'>دوشنبه</option>
                        <option value='سه شنبه'>سه شنبه</option>
                        <option value='چهارشنبه'>چهارشنبه</option>
                        <option value='پنجشنبه'>پنجشنبه</option>
                        <option value='جمعه'>جمعه</option>
                    </select>                
                </div>
                <br>
                <div class='row'>
                    <label for='Date-Gheybat' class='col-sm-3'>تاریخ : </label>
                    <input type='text' id='Date-Gheybat' name='Date-Gheybat' class='form-control col-sm-5 usage' dir='ltr' required>
                </div>
                <br>
                <div class='row'>
                    <label for='Note-Gheybat' class='col-sm-3'>ملاحضات : </label>
                    <textarea name='Note-Gheybat' id='Note-Gheybat' cols='30' rows='2' style='resize: none' class='form-control col-sm-7' required></textarea>
                </div>
                <br>
                <center><input type='submit' id='Submit-Gheybat' name='Submit-Gheybat' value='ثبت' class='btn btn-info'></center>
            </form>
        </div>";
    }else{
       goto A;
    }
    echo("</main>");
}

function Check_Database($Name_DB,$UserName_DB,$Password_DB,$Host_DB,$UserName_Admin,$Pssword_Admin,$Table_DB)
{
    error_reporting(0);
    $Host=$Host_DB;
    $User=$UserName_DB;
    $Pass=$Password_DB;
    $Name=$Name_DB;
    $Admin=$UserName_Admin;
    $Admin_Pass=Get_Hash($Pssword_Admin);
    $id="1";
    $dbs1=mysqli_connect($Host,$User,$Pass,$Name);
    if ($dbs1)
    {
        if ($Admin != "" && $Admin_Pass != "") {
            Replay_Contact($Table_DB);
            Create_Config_File($Host,$Name,$User,$Pass,$Table_DB);
            $dbs_c=Connect_DB("No");
            global $DB_Table;
            Import_DB();
            $qra="INSERT INTO "."$DB_Table"."_admin(UserName, Password)
                 VALUES('$Admin', '$Admin_Pass')";
            mysqli_query($dbs_c, $qra);
            return("SucsessFul");
        }else{
            return("لطفا مشخصات ورود مدیریت را کامل کنید");
        }
    }else{
        return("اطلاعات وارد شده نادرس میباشد!");
    }

}

function Get_Hash($str)
{
    $salt="Hekta";
    $hash=hash('sha256',$salt.$str);
    return($hash);
}

function Replay_Contact($Replay)
{
    $fname = "../Install/DB&TB_Creater.sql";
    $fhandle = fopen($fname,"r");
    $content = fread($fhandle,filesize($fname));
    $content = str_replace("new", "$Replay", $content);
    $fhandle = fopen($fname,"w");
    fwrite($fhandle,$content);
    fclose($fhandle);
    return($Replay);
}

function Create_Config_File($Host,$Name,$User,$Pass,$Table)
{
    $myfile = fopen("Config.php", "w") or die("Unable to open file!");
    $txt = "<?php\n";
    fwrite($myfile, $txt);
    $txt = "//Database Connect Information\n\n\n";
    fwrite($myfile, $txt);
    $txt = 'global $DB_Host;'."\n";
    fwrite($myfile, $txt);
    $txt = '$DB_Host='."\"$Host\";\t\t\t\t//------Database Host-----\n\n";
    fwrite($myfile, $txt);
    $txt = 'global $DB_Name;'."\n";
    fwrite($myfile, $txt);
    $txt = '$DB_Name='."\"$Name\";\t\t\t\t//------Database Name-----\n\n";
    fwrite($myfile, $txt);
    $txt = 'global $DB_User;'."\n";
    fwrite($myfile, $txt);
    $txt = '$DB_User='."\"$User\";\t\t\t\t//------Database UserName-----\n\n";
    fwrite($myfile, $txt);
    $txt = 'global $DB_Pass;'."\n";
    fwrite($myfile, $txt);
    $txt = '$DB_Pass='."\"$Pass\";\t\t\t\t//------Database Password-----\n\n";
    fwrite($myfile, $txt);
    $txt = 'global $DB_Table;'."\n";
    fwrite($myfile, $txt);
    $txt = '$DB_Table='."\"$Table\";\t\t\t\t//------Database Password-----\n\n\n";
    fwrite($myfile, $txt);
    $txt = "?>";
    fwrite($myfile, $txt);
    fclose($myfile);
}

function Import_DB()
{
    $db_c=Connect_DB("No");

    $query = '';
    $sqlScript = file('../Install/DB&TB_Creater.sql');
    foreach ($sqlScript as $line)
    {

        $startWith = substr(trim($line), 0 ,2);
        $endWith = substr(trim($line), -1 ,1);

        if (empty($line) || $startWith == '--' || $startWith == '/*' || $startWith == '//')
        {
            continue;
        }

        $query = $query . $line;
        if ($endWith == ';')
        {
            mysqli_query($db_c,$query) or die('<div class="error-response sql-import-response">Problem in executing the SQL query <b>' . $query. '</b></div>');
            $query= '';
        }
    }
}

function Delete_Folder($path){
    if (is_dir($path) === true) {
        $files = array_diff(scandir($path), array('.', '..'));
        foreach ($files as $file)
            Delete_Folder(realpath($path) . '/' . $file);

        return rmdir($path);
    } else if (is_file($path) === true)
        return unlink($path);

    return false;
}

function Admin_Login($u,$p)
{
    $user=$u;
    $pass=Get_Hash($p);
    $dbs_c=Connect_DB("Yes");
    global $DB_Table;
    $sql = "SELECT * FROM "."$DB_Table"."_admin WHERE id=2";
    $rsl=mysqli_query($dbs_c, $sql);
    $row=mysqli_fetch_array($rsl);
    if ($user==$row['UserName'] and $pass==$row['Password'])
    {
        return("Login_True");
    }else{
        return("Login_False");
    }
}

function Get_Class_List()
{
    $dbs_c=Connect_DB("No");
    global $DB_Table;
    $qrsl="SELECT distinct Expertise FROM "."$DB_Table"."_student";
    $qrsl_r=mysqli_query($dbs_c, $qrsl);
    return($qrsl_r);
}

function Get_Student_List($wh)
{
    $dbs_c=Connect_DB("No");
    global $DB_Table;
    $qrss="SELECT * FROM "."$DB_Table"."_student WHERE Expertise='$wh'";
    $qrsl_rr=mysqli_query($dbs_c, $qrss);
    return($qrsl_rr);
}

function Insert_Takhir($SubId,$Day,$Date,$Hour,$Note)
{
    $dbs_c=Connect_DB("No");
    global $DB_Table;
    $qrit="INSERT INTO "."$DB_Table"."_delay(Day, Date, Hour, Note ,SubId)
             VALUES('$Day', '$Date', '$Hour', '$Note', '$SubId')";
    $qritr=mysqli_query($dbs_c, $qrit);
    if ($qritr)
    {
        return("تاخیر با موفقیت ثبت شد");
    }else{
        return("ناموفق!");
    }
}

function Insert_Gheybat($SubId,$Day,$Date,$Note)
{
    $dbs_c=Connect_DB("No");
    global $DB_Table;
    $qrigh="INSERT INTO "."$DB_Table"."_Absenteeism(Day, Date, Note, SubId)
             VALUES('$Day', '$Date', '$Note', '$SubId')";
    $qrighr=mysqli_query($dbs_c, $qrigh);
    if ($qrighr)
    {
        return("غیبت با موفقیت ثبت شد");
    }else{
        return("ناموفق!");
    }
}

function Insert_Tashvigh($SubId,$Day,$Date,$Note)
{
    $dbs_c=Connect_DB("No");
    global $DB_Table;
    $qritsh="INSERT INTO "."$DB_Table"."_Encouragement(Day, Date, Note ,SubId)
             VALUES('$Day', '$Date', '$Note', '$SubId')";
    $qritshr=mysqli_query($dbs_c, $qritsh);
    if ($qritshr)
    {
        return("تشویق با موفقیت ثبت شد");
    }else{
        return("ناموفق!");
    }
}

function Insert_Tazakor($SubId,$Day,$Date,$Note)
{
    $dbs_c=Connect_DB("No");
    global $DB_Table;
    $qritz="INSERT INTO "."$DB_Table"."_Reminder(Day, Date, Note, SubId)
             VALUES('$Day', '$Date', '$Note', '$SubId')";
    $qritrz=mysqli_query($dbs_c, $qritz);
    if ($qritrz)
    {
        return("تذکر با موفقیت ثبت شد");
    }else{
        return("ناموفق!");
    }
}

function Insert_Darsi($SubId,$Day,$Rust,$Date,$Note)
{
    $dbs_c=Connect_DB("No");
    global $DB_Table;
    $qrid="INSERT INTO "."$DB_Table"."_Class_Obligation(Day, Rust, Date, Note, SubId)
             VALUES('$Day', '$Rust', '$Date', '$Note', '$SubId')";
    $qridr=mysqli_query($dbs_c, $qrid);
    if ($qridr)
    {
        return("تعهد درسی با موفقیت ثبت شد");
    }else{
        return("ناموفق!");
    }
}

function Insert_Enzebati($SubId,$Day,$Rust,$Date,$Note)
{
    $dbs_c=Connect_DB("No");
    global $DB_Table;
    $qrien="INSERT INTO "."$DB_Table"."_Discipline_Obligation(Day, Rust, Date, Note, SubId)
             VALUES('$Day', '$Rust', '$Date', '$Note', '$SubId')";
    $qrienr=mysqli_query($dbs_c, $qrien);
    if ($qrienr)
    {
        return("تعهد انظباطی با موفقیت ثبت شد");
    }else{
        return("ناموفق!");
    }
}

function Login_Time($idletime)
{
    if (isset($_SESSION['timestamp']))
    {
        if (time()-$_SESSION['timestamp']>$idletime){
            session_destroy();
            header('location:Index.php');
        }
    }
}

function S_S2($ros)
{
    echo"<table class='table table-striped table-bordered' style='text-align: center'>";
    echo"<tr>
            <td class='T_H_T'>روز</td>
            <td class='T_H_T'>تاریخ</td>
            <td class='T_H_T'>زنگ چندم</td>
            <td class='T_H_T'>ملاحضات</td>
         </tr>";
    while ($row=mysqli_fetch_array($ros))
    {
        echo"<tr>";
        echo "<td>".$row['Day']."</td>";
        echo "<td>".$row['Date']."</td>";
        echo "<td>".$row['Rust']."</td>";
        echo "<td>".$row['Note']."</td>";
        echo "</tr>";
    }
    echo "</table>";

}

function S_S1($ros)
{
    echo"<table class='table table-striped table-bordered' style='text-align: center'>";
    echo"<tr>
            <td class='T_H_T'>روز</td>
            <td class='T_H_T'>تاریخ</td>
            <td class='T_H_T'>ملاحضات</td>
         </tr>";
    while ($row=mysqli_fetch_array($ros))
    {
        echo"<tr>";
        echo "<td>".$row['Day']."</td>";
        echo "<td>".$row['Date']."</td>";
        echo "<td>".$row['Note']."</td>";
        echo "</tr>";
    }
    echo "</table>";

}

function S_S3($ros)
{
    echo"<table class='table table-striped table-bordered' style='text-align: center'>";
    echo"<tr>
            <td class='T_H_T'>روز</td>
            <td class='T_H_T'>تاریخ</td>
            <td class='T_H_T'>چند ساعت</td>
            <td class='T_H_T'>ملاحضات</td>
         </tr>";
    while ($row=mysqli_fetch_array($ros))
    {
        echo"<tr>";
        echo "<td>".$row['Day']."</td>";
        echo "<td>".$row['Date']."</td>";
        echo "<td>".$row['Hour']."</td>";
        echo "<td>".$row['Note']."</td>";
        echo "</tr>";
    }
    echo "</table>";

}
?>