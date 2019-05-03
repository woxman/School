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
    return("آیتم انتخوابی با موفقیت پاک شد");
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
    echo("    <a href='?Add'><div class='P_I'><i class=\"fal fa-tachometer-alt \" style='font-size: 24px; color: whitesmoke;'></i><span>&nbsp;افزودن دانش آموزان</span></div></a>");
    echo("    <a href='?Obligation'><div class='P_I'><i class=\"fal fa-user-graduate \" style='font-size: 24px; color: whitesmoke;'></i><span>&nbsp;&nbsp;افزودن تعهد</span></div></a>");
    echo("    <a href='?Criticism'><div class='P_I'><i class=\"fal fa-user-graduate \" style='font-size: 24px; color: whitesmoke;'></i><span>&nbsp;&nbsp;افزودن انتقاد</span></div></a>");
    echo("    <a href='?ss'><div class='P_I'><i class=\"fal fa-user-graduate \" style='font-size: 24px; color: whitesmoke;'></i><span>&nbsp;&nbsp;افزودن انتقاد</span></div></a>");
    echo("    <a href='?Edit'><div class='P_I'><i class=\"fal fa-user-graduate \" style='font-size: 24px; color: whitesmoke;'></i><span>&nbsp;&nbsp;ویرایش گروهی</span></div></a>");
    echo("  </ul>");
    echo("</nav>");
    echo("<main>");
    if (isset($_REQUEST['Add']))
    {
        echo("<form action='' method='post' class='Window1' id='Form1'>");
        echo("    <label for='Name1'>نام :</label>");
        echo("    <input type='text' id='Name1' name='Name1'>");
        echo("    <br><br>");
        echo("    <label for='Family1'>نام خانوادگی :</label>");
        echo("    <input type='text' id='Family1' name='Family1'>");
        echo("    <br><br>");
        echo("    <label for='FatherName1'>نام پدر :</label>");
        echo("    <input type='text' id='FatherName1' name='FatherName1'>");
        echo("    <br><br>");
        echo("    <label for='Expertise1'>رشته :</label>");
        echo("    <input type='text' id='Expertise1' name='Expertise1'>");
        echo("    <br><br>");
        echo("    <label for='BirthDay1'>تاریخ تولد :</label>");
        echo("    <input type='date' id='BirthDay1' name='BirthDay1' >");
        echo("    <br><br>");
        echo("    <label for='Phone1'>تلفن :</label>");
        echo("    <input type='text' id='Phone1' name='Phone1' dir='ltr'>");
        echo("    <br><br>");
        echo("    <label for='Address1'>آدرس :</label>");
        echo("    <input type='text' id='Address1' name='Address1'>");
        echo("    <br><br>");
        echo("    <input type='submit' value='ثبت' id='Send1' name='Send1' class='btn btn-primary'>");
        echo("</form>");
        echo("<br>");

        echo("<div style='width: 1000px;border-bottom: 1px solid black;margin-left: 285px'></div>");

        echo("<br>");
        echo("<form action='#' method='post' dir='rtl' class='Window2' id='Form2'>");
        echo("    <label for='Name2' id='lable1'>نام</label>");
        echo("    <label for='Family2' id='lable2'>نام خانوادگی</label>");
        echo("    <label for='FatherName2' id='lable3'>نام پدر</label>");
        echo("    <label for='Expertise2' id='lable4'>رشته</label>");
        echo("    <label for='Phone2' id='lable4'>نلفن</label>");
        echo("    <label for='BirthDay2' id='lable5'>تاریخ تولد</label>");
        echo("    <label for='Address2' id='lable6'>آدرس منزل</label>");
        echo("    <br>");
        echo("    <textarea name='Name2' id='Name2' cols='10' rows='20' class='textarea input-sm'></textarea>");
        echo("    <textarea name='Family2' id='Family2' cols='10' rows='20' class='textarea input-sm'></textarea>");
        echo("    <textarea name='FatherName2' id='FatherName2' cols='10' rows='20' class='textarea input-sm'></textarea>");
        echo("    <textarea name='Expertise2' id='Expertise2' cols='10' rows='20' class='textarea input-sm'></textarea>");
        echo("    <textarea name='Phone2' id='Phone2' cols='10' rows='20' class='textarea input-sm' dir='ltr'></textarea>");
        echo("    <textarea name='BirthDay2' id='BirthDay2' cols='10' rows='20' class='textarea input-sm' dir='ltr'></textarea>");
        echo("    <textarea name='Address2' id='Address2' cols='10' rows='20' class='textarea input-sm'></textarea>");
        echo("    <br>");
        echo("    <input type='submit' value='ثبت' id='Send2' name='Send2' class='btn btn-primary'>");
        echo("</form>");
    }elseif (isset($_REQUEST['Students'])) {
        A:
        $dbs_c=Connect_DB("Yes");
        global $DB_Table;
        echo("<div class='Window3'>");
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
        echo("            <tr id='Td_Table'>");
        $qr="SELECT * FROM "."$DB_Table"."_student";
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
        echo("<form method='post' class='Window1' id='Form4'>");
        echo("    <label for='Now_Expertises'>پارامتر فعلی:</label>");
        echo("    <select id='Now_Expertises'>");
        echo("    </select>");
        echo("    <br>");
        echo("    <label for='New_Expertises'>پارامتر جدید:</label>");
        echo("    <input type='text' id='New_Expertises' name='New_Expertises'>");
        echo("    <br>");
        echo("    <input type='submit' class='btn btn-info' value='تغییر' id='Send4' name='Send4'>");
        echo("</form>");

        echo("<form method='post' class='Window1' id='Form5'>");
        echo("    <label for='Group_Delete'>کدام گروه : </label>");
        echo("    <select id='Group_Delete'>");
        echo("    </select>");
        echo("    <br>");
        echo("    <input type='submit' class='btn btn-info' value='پاک کردن گروه' id='Send5' name='Send5'>");
        echo("</form>");
    }elseif (isset($_REQUEST['Status'])) {
        echo ("<p style='margin-left: 60%'>Vazeiat Koli Danesh Amoz</p>");
    }elseif(isset($_REQUEST['Obligation'])) {
        echo ("<p style='margin-left: 60%'>Darsi-Enzebati</p>");
    }elseif(isset($_REQUEST['Criticism'])) {
        echo ("<p style='margin-left: 60%'>Tashvigh-Tazakorat</p>");
    }elseif (isset($_REQUEST['ss'])){
        echo ("<p style='margin-left: 60%'>Gheibat-Takhir</p>");
    }else{
       goto A;
    }
    echo("</main>");
}

function Check_Database($Name_DB,$UserName_DB,$Password_DB,$Host_DB,$UserName_Admin,$Pssword_Admin,$Table_DB)
{
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
?>