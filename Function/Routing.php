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
if (isset($_POST['TD']))
{
    global $db;
    $res7=Read_Data();
    echo"<tr>
        <th>نام</th>
        <th>نام خانوادگی</th>
        <th>نام پدر</th>
        <th>رشته</th>
        <th>تاریخ تولد</th>
        <th>تلفن</th>
        <th>آدرس</th>
        <th colspan='2'>تغییرات</th>
        </tr>";
    while ($row=mysqli_fetch_array($res7))
    {
        echo "<tr>";
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

?>