<?php
include_once "Function.php";
#-------------------Single_Insert--------------
if(isset($_POST['Name1'])) {
    $res1=Single_Insert($_POST['Name1'],$_POST['Family1'],$_POST['FatherName1'],$_POST['Expertise1'],$_POST['BirthDay1'],$_POST['Phone1'],$_POST['Address1']);
    echo($res1);
}
#-------------------Single_Insert--------------
#-------------------Multi_Insert--------------
if(isset($_POST['Name2'])) {
    $res2=Multi_Insert($_POST['Name2'],$_POST['Family2'],$_POST['FatherName2'],$_POST['Expertise2'],$_POST['BirthDay2'],$_POST['Phone2'],$_POST['Address2']);
    echo($res2);
}
#-------------------Multi_Insert--------------
#-------------------Single_Update--------------
if (isset($_POST['Name3']))
{
    $res3=Single_Update($_POST['Name3'],$_POST['Family3'],$_POST['FatherName3'],$_POST['Expertise3'],$_POST['BirthDay3'],$_POST['Phone3'],$_POST['Address3'],$_POST['Change3']);
    echo($res3);
}
#-------------------Single_Update--------------
#-------------------Delete--------------
if (isset($_POST['Delete']))
{
    $res4=Single_Delete($_POST['Delete']);
    echo($res4);
}
#-------------------Delete--------------
#-------------------Multi_Update--------------
if (isset($_POST['New_Ex']))
{
    $res5=Multi_Update($_POST['Now_Ex'],$_POST['New_Ex']);
    echo($res5);
}
#-------------------Multi_Update--------------
#-------------------Delete_Update--------------
if (isset($_POST['Group_Delete']))
{
    $res6=Multi_Delete($_POST['Group_Delete']);
    echo($res6);
}
#-------------------Delete_Update--------------
/*if (isset($_POST['TD']))
{
    global $db;
    $res7=Read_Data();
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
    while ($row=mysqli_fetch_array($res7))
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
}*/

if (isset($_POST['Student_Status1']))
{
    $id=$_POST['Student_Status1'];
    $dbs_c=Connect_DB("No");
    global $DB_Table;
    $qrss1="SELECT * FROM "."$DB_Table"."_Class_Obligation WHERE SubId='$id'";
    $res19=mysqli_query($dbs_c, $qrss1);
    S_S1($res19);
}

if (isset($_POST['Student_Status2']))
{
    $id=$_POST['Student_Status2'];
    $dbs_c=Connect_DB("No");
    global $DB_Table;
    $qrss2="SELECT * FROM "."$DB_Table"."_Discipline_Obligation WHERE SubId='$id'";
    $res20=mysqli_query($dbs_c, $qrss2);
    S_S2($res20);
}

if (isset($_POST['Student_Status3']))
{
    $id=$_POST['Student_Status3'];
    $dbs_c=Connect_DB("No");
    global $DB_Table;
    $qrss3="SELECT * FROM "."$DB_Table"."_Absenteeism WHERE SubId='$id'";
    $res20=mysqli_query($dbs_c, $qrss3);
    S_S1($res20);
}

if (isset($_POST['Student_Status5']))
{
    $id=$_POST['Student_Status5'];
    $dbs_c=Connect_DB("No");
    global $DB_Table;
    $qrss4="SELECT * FROM "."$DB_Table"."_Encouragement WHERE SubId='$id'";
    $res21=mysqli_query($dbs_c, $qrss4);
    S_S1($res21);
}

if (isset($_POST['Student_Status4']))
{
    $id=$_POST['Student_Status4'];
    $dbs_c=Connect_DB("No");
    global $DB_Table;
    $qrss4="SELECT * FROM "."$DB_Table"."_Delay WHERE SubId='$id'";
    $res21=mysqli_query($dbs_c, $qrss4);
    S_S3($res21);
}

if (isset($_POST['Student_Status6']))
{
    $id=$_POST['Student_Status6'];
    $dbs_c=Connect_DB("No");
    global $DB_Table;
    $qrss5="SELECT * FROM "."$DB_Table"."_Reminder WHERE SubId='$id'";
    $res22=mysqli_query($dbs_c, $qrss5);
    S_S1($res22);
}

if (isset($_POST['GD']))
{
    $res8=GD();
    while ($row=mysqli_fetch_array($res8))
    {
        echo"<option value='".$row['Expertise']."'>".$row['Expertise']."</option>";
    }
}

if (isset($_POST['NE']))
{
    $res9=NE();
    while ($row=mysqli_fetch_array($res9))
    {
        echo"<option value='".$row['Expertise']."'>".$row['Expertise']."</option>";
    }
}

if (isset($_POST['Name_DB']))
{
    $res10=Check_Database($_POST['Name_DB'],$_POST['UserName_DB'],$_POST['Password_DB'],$_POST['Host_DB'],$_POST['UserName_Admin'],$_POST['Password_Admin'],$_POST['Table_DB']);
    echo($res10);
}

if (isset($_POST['Class-List']))
{
    $res11=Get_Class_List();
    echo"<option selected><></option>";
    while ($row=mysqli_fetch_array($res11))
    {
        echo"<option value='".$row['Expertise']."'>".$row['Expertise']."</option>";
    }
}

if (isset($_POST['Student-List']))
{
    $res12=Get_Student_List($_POST['Student-List']);
    while ($row=mysqli_fetch_array($res12))
    {
        echo"<option value='".$row['id']."'>".$row['Name']." ".$row['Family']."</option>";
    }
}

if (isset($_POST['Student-List-3']))
{
    $res12=Get_Student_List($_POST['Student-List-3']);
    echo"<option><></option>";
    while ($row=mysqli_fetch_array($res12))
    {
        echo"<option value='".$row['id']."'>".$row['Name']." ".$row['Family']."</option>";
    }
}

if (isset($_POST['Day-Takhir']))
{
    $res13=Insert_Takhir($_POST['Student-List1'],$_POST['Day-Takhir'],$_POST['Date-Takhir'],$_POST['Hour-Takhir'],$_POST['Note-Takhir']);
    echo($res13);
}

if (isset($_POST['Day-Gheybat']))
{
    $res14=Insert_Gheybat($_POST['Student-List2'],$_POST['Day-Gheybat'],$_POST['Date-Gheybat'],$_POST['Note-Gheybat']);
    echo($res14);
}

if (isset($_POST['Day-Tashvigh']))
{
    $res15=Insert_Tashvigh($_POST['Student-List1'],$_POST['Day-Tashvigh'],$_POST['Date-Tashvigh'],$_POST['Note-Tashvigh']);
    echo($res15);
}

if (isset($_POST['Day-Tazakor']))
{
    $res16=Insert_Tazakor($_POST['Student-List2'],$_POST['Day-Tazakor'],$_POST['Date-Tazakor'],$_POST['Note-Tazakor']);
    echo($res16);
}

if (isset($_POST['Day-Darsi']))
{
    $res17=Insert_Darsi($_POST['Student-List1'],$_POST['Day-Darsi'],$_POST['Rust-Darsi'],$_POST['Date-Darsi'],$_POST['Note-Darsi']);
    echo($res17);
}

if (isset($_POST['Day-Enzebati']))
{
    $res18=Insert_Enzebati($_POST['Student-List2'],$_POST['Day-Enzebati'],$_POST['Rust-Enzebati'],$_POST['Date-Enzebati'],$_POST['Note-Enzebati']);
    echo($res18);
}
if (isset($_POST['Day-Record']))
{
    $res23=Insert_Record($_POST['Student-List1'],$_POST['Day-Record'],$_POST['Date-Record'],$_POST['Item-Record'],$_POST['Note-Record']);
    echo($res23);
}
if (isset($_POST['Get_Setting']))
{
    switch ($_POST['Get_Setting'])
    {
        case "0":
            $res19=Get_Setting("0");
            echo("document.getElementById(\"Td\").value = \"$res19\";");
        break;

        case "1":
            $res19=Get_Setting("1");
            echo("document.getElementById(\"Te\").value = \"$res19\";");
        break;

        case "2":
            $res19=Get_Setting("2");
            echo("document.getElementById(\"Tsh\").value = \"$res19\";");
        break;

        case "3":
            $res19=Get_Setting("3");
            echo("document.getElementById(\"Taz\").value = \"$res19\";");
        break;

        case "4":
            $res19=Get_Setting("4");
            echo("document.getElementById(\"Takh\").value = \"$res19\";");
        break;

        case "5":
            $res19=Get_Setting("5");
            echo("document.getElementById(\"Ghey\").value = \"$res19\";");
        break;
    }
}

if (isset($_POST['Td']))
{
    $res20=Insert_Setting($_POST['Td'],$_POST['Te'],$_POST['Tsh'],$_POST['Taz'],$_POST['Takh'],$_POST['Ghey']);
    echo($res20);
}

if (isset($_POST['Enzebat']))
{
    $res21=Get_Count_Data($_POST['Enzebat']);
    echo($res21);
}

if (isset($_POST['Rec_Show'])){
    $RecG=$_POST['Rec_Show'];
    $dbs_c=Connect_DB("No");
    global $DB_Table;
    $Recco="SELECT * FROM "."$DB_Table"."_Record WHERE SubId='$RecG'";
    $queryr=mysqli_query($dbs_c, $Recco);
    echo("<tr><td class='T_H_T'>روز</td><td class='T_H_T'>تاریخ</td><td class='T_H_T'>سابقه</td><td class='T_H_T'>یادداشت</td></tr>");
    while ($row=mysqli_fetch_array($queryr)){
        echo("<tr><td>".$row['Day']."</td><td>".$row['Date']."</td><td>".$row['Item']."</td><td>".$row['Note']."</td></tr>");
    }
}
if (isset($_POST['Enzebat-Class']))
{
    $Class=$_POST['Enzebat-Class'];
    $dbs_c=Connect_DB("No");
    global $DB_Table;
    $Takh="SELECT * FROM "."$DB_Table"."_student WHERE Expertise='$Class '";
    $query=mysqli_query($dbs_c, $Takh);
    $arr_Na_Fa=array();
    $arr_SubId=array();
    $arr_Score=array();
    while ($row=mysqli_fetch_array($query))
    {
        $Person=$row['Name']." ".$row['Family'];
        array_push($arr_Na_Fa,$Person);
        array_push($arr_SubId,$row['id']);
    }
    echo("<tr><td class='T_H_T'>نام و نام خانوادگی</td><td class='T_H_T'>انظباط</td></tr>");
    for ($i=0;$i<count($arr_SubId);$i++)
    {
        $Score=Get_Count_Data($arr_SubId[$i]);
        if ($Score>20){
            $Score=" ( دانش آموز کوشا ) +20";
        }
        echo("<tr><td>".$arr_Na_Fa[$i]."</td><td dir='ltr'>".$Score."</td></tr>");
    }
}
?>