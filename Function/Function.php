<?php
//---------------------Connect Database--------------------------//
$db=mysqli_connect("localhost","root","","test");
if (!$db)
{
    die("Could Not Connect :".mysqli_errno());
}
mysqli_set_charset($db,"utf8");
//---------------------Connect Database--------------------------//

//---------------------Query Function--------------------------//
function Single_Insert($Name1,$Family1,$FatherName1,$Expertise1,$BirthDay1,$Phone1,$Address1)
{
    if ($Name1 != "" && $Family1 != "" && $FatherName1 != "" && $Expertise1 != "" && $BirthDay1 != "" && $Address1 != "")
    {
        global $db;
        $query= "INSERT INTO tables(Name, Family, FatherName, Expertise, BirthDay, Phone, Address) 
             VALUES('$Name1', '$Family1', '$FatherName1','$Expertise1','$BirthDay1','$Phone1','$Address1')";
        $result = mysqli_query($db, $query);
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
    $Name2 = Explode_Array($Name2);
    $Family2 = Explode_Array($Family2);
    $FatherName2 = Explode_Array($FatherName2);
    $Expertise2 = Explode_Array($Expertise2);
    $BirthDay2 = Explode_Array($BirthDay3);
    $Phone2 = Explode_Array($Phone2);
    $Address2 = Explode_Array($Address2);
    if (count($Name2) && count($Name2) == count($Name2) && count($Name2) == count($Name2) && count($Name2) == count($Address2))
    {
        global $db;
        for ($i=0;$i<count($Name2);$i++)
        {
            $query= "INSERT INTO tables(Name, Family, FatherName, Expertise, BirthDay, Phone, Address)
                 VALUES('$Name2[$i]', '$Family2[$i]', '$FatherName2[$i]','$Expertise2[$i]','$BirthDay2[$i]','$Phone2[$i]','$Address2[$i]')";
            $result = mysqli_query($db, $query);
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
    global $db;
    if ($Name3!= "")
    {
        $up1="UPDATE tables SET Name='$Name3' WHERE id='$Change3'";
        mysqli_query($db,$up1);
    }
    if ($Family3 != "")
    {
        $up2="UPDATE tables SET Family='$Family3' WHERE id='$Change3'";
        mysqli_query($db,$up2);
    }
    if ($FatherName3 != "")
    {
        $up3="UPDATE tables SET FatherName='$FatherName3' WHERE id='$Change3'";
        mysqli_query($db,$up3);
    }
    if ($Expertise3 != "")
    {
        $up4="UPDATE tables SET Expertise='$Expertise3' WHERE id='$Change3'";
        mysqli_query($db,$up4);
    }
    if ($BirthDay3 != "")
    {
        $up5="UPDATE tables SET BirthDay='$BirthDay3' WHERE id='$Change3'";
        mysqli_query($db,$up5);
    }
    if ($Phone3 != "")
    {
        $up6="UPDATE tables SET Phone='$Phone3' WHERE id='$Change3'";
        mysqli_query($db,$up6);
    }
    if ($Address3 != "")
    {
        $up7="UPDATE tables SET Address='$Address3' WHERE id='$Change3'";
        mysqli_query($db,$up7);
    }
    return("تمامی اطلاعات شما با موفقیت آپدیت شد");
}

function Single_Delete($di)
{
    global $db;
    $qt="DELETE FROM tables WHERE id='$di'";
    mysqli_query($db,$qt);
    return("آیتم انتخوابی با موفقیت پاک شد");
}

function Multi_Update($Now_Ex,$New_Ex)
{
    global $db;
    $qmu="UPDATE tables SET Expertise='$New_Ex' WHERE Expertise='$Now_Ex'";
    mysqli_query($db,$qmu);
    return("آیتم ها با موفقیت جایگزین شد");
}

function Multi_Delete($dg)
{
    global $db;
    $qgd="DELETE FROM tables WHERE Expertise='$dg'";
    mysqli_query($db,$qgd);
    return("گروه موردنظر با موفقیت پاک شد");
}

function Read_Data()
{
    global $db;
    $qr="SELECT * FROM tables";
    $rs1=mysqli_query($db, $qr);
    return($rs1);
}
function NE()
{
    global $db;
    $qr="SELECT distinct Expertise FROM tables";
    $rs2=mysqli_query($db, $qr);
    return($rs2);
}

function GD()
{
    global $db;
    $qr="SELECT distinct Expertise FROM tables";
    $rs3=mysqli_query($db, $qr);
    return($rs3);
}
//---------------------Query Function--------------------------//
?>