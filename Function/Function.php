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
        }else{
            return("مشکلی پیش آمد!");
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
        }else{
            return("مشکلی پیش آمد!");
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
    $r1=mysqli_query($dbs_c,$qt1);
    $r2=mysqli_query($dbs_c,$qt2);
    $r3=mysqli_query($dbs_c,$qt3);
    $r4=mysqli_query($dbs_c,$qt4);
    $r5=mysqli_query($dbs_c,$qt5);
    $r6=mysqli_query($dbs_c,$qt6);
    $r7=mysqli_query($dbs_c,$qt7);
    if ($r1 && $r2 && $r3 && $r4 && $r5 && $r6 && $r7)
    {
        return("آیتم انتخابی با موفقیت پاک شد");
    }else{
        return("مشکلی پیش آمد!");
    }
}

function Multi_Update($Now_Ex,$New_Ex)
{
    $dbs_c=Connect_DB("No");
    global $DB_Table;
    $qmu="UPDATE "."$DB_Table"."_student SET Expertise='$New_Ex' WHERE Expertise='$Now_Ex'";
    $mur=mysqli_query($dbs_c,$qmu);
    if ($mur){
        return("آیتم ها با موفقیت جایگزین شد");
    }else{
        return("مشکلی پیش آمد!");
    }
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
    $r1=mysqli_query($dbs_c,$qgd1);
    $r2=mysqli_query($dbs_c,$qgd2);
    $r3=mysqli_query($dbs_c,$qgd3);
    $r4=mysqli_query($dbs_c,$qgd4);
    $r5=mysqli_query($dbs_c,$qgd5);
    $r6=mysqli_query($dbs_c,$qgd6);
    $r7=mysqli_query($dbs_c,$qgd7);
    if ($r1 && $r2 && $r3 && $r4 && $r5 && $r6 && $r7)
    {
        return("گروه موردنظر با موفقیت پاک شد");
    }else{
        return("مشکلی پیش آمد!");
    }
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
            $Licens=time();
            $qra="INSERT INTO "."$DB_Table"."_admin(UserName, Password, Licens)
                 VALUES('$Admin', '$Admin_Pass', '$Licens')";
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

function Time_Trap($idletime){
    $dbs_c=Connect_DB("Yes");
    global $DB_Table;
    $qtt = "SELECT * FROM "."$DB_Table"."_admin WHERE id=2";
    $qttr=mysqli_query($dbs_c, $qtt);
    $row=mysqli_fetch_array($qttr);
    $Tstamp=$row['Licens'];
    if (time()-$Tstamp>$idletime){
        return(true);
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
        return("مشکلی پیش آمد!");
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
        return("مشکلی پیش آمد!");
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
        return("مشکلی پیش آمد!");
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
        return("مشکلی پیش آمد!");
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
        return("مشکلی پیش آمد!");
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
        return("مشکلی پیش آمد!");
    }
}

function Insert_Record($SubId,$Day,$Date,$Item,$Note)
{
    $dbs_c=Connect_DB("No");
    global $DB_Table;
    $qrirec="INSERT INTO "."$DB_Table"."_Record(Day, Date ,Item , Note, SubId)
             VALUES('$Day', '$Date', '$Item', '$Note', '$SubId')";
    $qrirecr=mysqli_query($dbs_c, $qrirec);
    if ($qrirecr)
    {
        return("سابقه با موفقیت ثبت شد");
    }else{
        return("مشکلی پیش آمد!");
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

function Get_Setting($r)
{
    $dbs_c=Connect_DB("No");
    global $DB_Table;
    switch ($r)
    {
        case "0":
            $Read="SELECT Valuee FROM "."$DB_Table"."_decrease_score WHERE Title='Td'";
        break;

        case "1":
            $Read="SELECT Valuee FROM "."$DB_Table"."_decrease_score WHERE Title='Te'";
        break;

        case "2":
            $Read="SELECT Valuee FROM "."$DB_Table"."_decrease_score WHERE Title='Tsh'";
        break;

        case "3":
            $Read="SELECT Valuee FROM "."$DB_Table"."_decrease_score WHERE Title='Taz'";
        break;

        case "4":
            $Read="SELECT Valuee FROM "."$DB_Table"."_decrease_score WHERE Title='Takh'";
        break;

        case "5":
            $Read="SELECT Valuee FROM "."$DB_Table"."_decrease_score WHERE Title='Ghey'";
        break;
    }
    $Readr=mysqli_query($dbs_c, $Read);
    while ($row=mysqli_fetch_array($Readr)) {
        $Lr=$row['Valuee'];
    }
    return($Lr);
}

function Insert_Setting($Td,$Te,$Tsh,$Taz,$Takh,$Ghey)
{
    $dbs_c=Connect_DB("No");
    global $DB_Table;
    $query1="UPDATE "."$DB_Table"."_decrease_score SET Valuee='$Td' WHERE Title='Td'";$result1 = mysqli_query($dbs_c, $query1);
    $query2="UPDATE "."$DB_Table"."_decrease_score SET Valuee='$Te' WHERE Title='Te'";$result2 = mysqli_query($dbs_c, $query2);
    $query3="UPDATE "."$DB_Table"."_decrease_score SET Valuee='$Tsh' WHERE Title='Tsh'";$result3 = mysqli_query($dbs_c, $query3);
    $query4="UPDATE "."$DB_Table"."_decrease_score SET Valuee='$Taz' WHERE Title='Taz'";$result4 = mysqli_query($dbs_c, $query4);
    $query5="UPDATE "."$DB_Table"."_decrease_score SET Valuee='$Takh' WHERE Title='Takh'";$result5 = mysqli_query($dbs_c, $query5);
    $query6="UPDATE "."$DB_Table"."_decrease_score SET Valuee='$Ghey' WHERE Title='Ghey'";$result6 = mysqli_query($dbs_c, $query6);

    if ($result1 && $result2 && $result3 && $result4 && $result5 && $result6)
    {
        return("تمامی فیلدها با موفقیت تغیر یافت");
    }else{
        return("مشکلی پیش آمد!");
    }
}

function Computing($Tdc,$Tec,$Tshc,$Tazc,$Takhc,$Gheyc)
{
    $dbs_c=Connect_DB("No");
    global $DB_Table;
    $qr1="SELECT Valuee FROM "."$DB_Table"."_decrease_score WHERE Title='Td'";
    $Tdv=mysqli_query($dbs_c, $qr1);
    $Tdv=mysqli_fetch_array($Tdv);
    $qr2="SELECT Valuee FROM "."$DB_Table"."_decrease_score WHERE Title='Te'";
    $Tev=mysqli_query($dbs_c, $qr2);
    $Tev=mysqli_fetch_array($Tev);
    $qr3="SELECT Valuee FROM "."$DB_Table"."_decrease_score WHERE Title='Tsh'";
    $Tshv=mysqli_query($dbs_c, $qr3);
    $Tshv=mysqli_fetch_array($Tshv);
    $qr4="SELECT Valuee FROM "."$DB_Table"."_decrease_score WHERE Title='Taz'";
    $Tazv=mysqli_query($dbs_c, $qr4);
    $Tazv=mysqli_fetch_array($Tazv);
    $qr5="SELECT Valuee FROM "."$DB_Table"."_decrease_score WHERE Title='Tkh'";
    $Takhv=mysqli_query($dbs_c, $qr5);
    $Takhv=mysqli_fetch_array($Takhv);
    $qr6="SELECT Valuee FROM "."$DB_Table"."_decrease_score WHERE Title='Ghey'";
    $Gheyv=mysqli_query($dbs_c, $qr6);
    $Gheyv=mysqli_fetch_array($Gheyv);

    $Tdv=$Tdv['Valuee']*$Tdc;
    $Tev=$Tev['Valuee']*$Tec;
    $Tshv=$Tshv['Valuee']*$Tshc;
    $Tazv=$Tazv['Valuee']*$Tazc;
    $Takhv=$Takhv['Valuee']*$Takhc;
    $Gheyv=$Gheyv['Valuee']*$Gheyc;
    $Proccess=20-($Tdv-$Tev-$Tazv-$Takhv-$Gheyv)+$Tshv;
    Return($Proccess);
}

function Get_Count_Data($id)
{
    $dbs_c=Connect_DB("No");
    global $DB_Table;
    $arr=array("_absenteeism","_class_obligation","_delay","_discipline_obligation","_encouragement","_reminder");
    $arrp=array();
    for ($i=0;$i<=5;$i++)
    {
        $Takh="SELECT COUNT(Day) as total FROM "."$DB_Table"."$arr[$i] WHERE SubId=$id";
        $Tdc=mysqli_query($dbs_c, $Takh);
        $Tdc=mysqli_fetch_assoc($Tdc);
        array_push($arrp,$Tdc);
    }
    $result=Computing($arrp[1]['total'],$arrp[3]['total'],$arrp[4]['total'],$arrp[5]['total'],$arrp[2]['total'],$arrp[0]['total']);
    return($result);
}
?>