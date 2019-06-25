<?php
function Panel_A()
{
    echo("<nav class='menu' tabindex='0'>
            <div class='smartphone-menu-trigger'></div>
            <header class='avatar'>
                    <img src='Contact/Image/Admin.png' /><br><br>
                    <div class='btn btn-warning'><a href='?Log-Out'>خروج</a></div>
            </header>
            <ul>
               <div class='btn-group dropright'>
                	<button type='button' class='P_I btn  dropdown-toggle' data-toggle='dropdown' aria-haspopup='true' aria-expanded='true'> گزارش گیری  </button>
	                <br>
		            <div class='dropdown-menu'>
   		                <a class='dropdown-item' href='?Status1'>وضعیت کلی دانش آموز</a>
    	  	            <a class='dropdown-item' href='?Status2'>نمره انظباط کلاسی</a>
    	  	            <a class='dropdown-item' href='?Records'>سوابق دانش آموز ( مسابقات،فرهنگی و... ) </a>
		            </div>
               </div>
               <div class='btn-group dropright'>
                	<button type='button' class='P_I btn  dropdown-toggle' data-toggle='dropdown' aria-haspopup='true' aria-expanded='true'> دانش آموز  </button>
	                <br>
		            <div class='dropdown-menu'>
    	  	            <a class='dropdown-item' href='?Students'>لیست دانش آموزان</a>
     	 	            <a class='dropdown-item' href='?Adds'>افزودن تکی دانش آموز</a>
     	 	            <a class='dropdown-item' href='?Addg'>افزودن گروهی دانش آموز</a>
		            </div>
               </div>
               <div class='btn-group dropright'>
                	<button type='button' class='P_I btn  dropdown-toggle' data-toggle='dropdown' aria-haspopup='true' aria-expanded='true'> تعریف وضعیت</button>
	                <br>
		            <div class='dropdown-menu'>
   		                <a class='dropdown-item' href='?AddRec'>افزودن سوابق ( مسابقات،فرهنگی و... ) </a>
   		                <a class='dropdown-item' href='?Td'>افزودن تعهد درسی</a>
   		                <a class='dropdown-item' href='?Te'>افزودن تعهد انظباطی</a>
    	  	            <a class='dropdown-item' href='?Tash'>افزودن تشویق</a>
    	  	            <a class='dropdown-item' href='?Taz'>افزودن تذکر</a>
     	 	            <a class='dropdown-item' href='?Takh'>افزودن تاخیر</a>
     	 	            <a class='dropdown-item' href='?Ghey'>افزودن غیبت</a>
     	 	            <a class='dropdown-item' href='?Ghey'>افزودن غیبت</a>
		            </div>
                </div>
               <div class='btn-group dropright'>
                	<button type='button' class='P_I btn  dropdown-toggle' data-toggle='dropdown' aria-haspopup='true' aria-expanded='true'> دستورات کنترلی</button>
	                <br>
                    <div class='dropdown-menu'>
                            <a class='dropdown-item' href='?UpG'> آپدیت گروهی ( کلاسی ) </a>
                            <a class='dropdown-item' href='?DelG'>پاک کردن گروهی ( کلاسی ) </a>
                            <a class='dropdown-item' href='?Score'>تنظیم کاهش نمره</a>
                        </div>
                    </div>
                </div>

            </ul>
        </nav>
        <main>");
    if (isset($_REQUEST['Adds']))
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
        <br>";
    }elseif (isset($_REQUEST['Addg'])) {
        echo"<form action='#' method='post' dir='rtl' class='Window2' id='Form2'>
            <label for='Name2' id='lable1'>نام</label>
            <label for='Family2' id='lable2'>نام خانوادگی</label>
            <label for='FatherName2' id='lable3'>نام پدر</label>
            <label for='Expertise2' id='lable4'>رشته</label>
            <label for='Phone2' id='lable4'>نلفن</label>
            <label for='BirthDay2' id='lable5'>تاریخ تولد</label>
            <label for='Address2' id='lable6'>آدرس منزل</label>
            <br>
            <div class='form-inline'>
                <textarea name='Name2' id='Name2' cols='12' rows='20' class='textarea input-sm form-control col'></textarea>
                <textarea name='Family2' id='Family2' cols='12' rows='20' class='textarea input-sm form-control col'></textarea>
                <textarea name='FatherName2' id='FatherName2' cols='12' rows='20' class='textarea input-sm form-control col'></textarea>
                <textarea name='Expertise2' id='Expertise2' cols='12' rows='20' class='textarea input-sm form-control col' placeholder='دوازدهم کامپیوتر' ></textarea>
                <textarea name='Phone2' id='Phone2' cols='12' rows='20' class='textarea input-sm form-control col' dir='ltr' placeholder='09184899437'></textarea>
                <textarea name='BirthDay2' id='BirthDay2' cols='12' rows='20' class='textarea input-sm form-control col' dir='ltr' placeholder='1397/12/21'></textarea>
                <textarea name='Address2' id='Address2' cols='12' rows='20' class='textarea input-sm form-control col' placeholder='ساوه - مطهری'></textarea>
            </div>
            <br>
            <div dir='rtl'>نکته : هر فرد با Enter و رفتن به خط بعدی از یکدیگیر جدا میشود و حتما باید تمام فیلدها برابر و پر شوند.</div><center><input type='submit' value='افزودن گروه' id='Send2' name='Send2' class='btn btn-info'></center>
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
    }elseif (isset($_REQUEST['UpG'])) {
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
        </form>";
    }elseif (isset($_REQUEST['DelG'])) {
        echo"<form method='post' class='Window1' id='Form5'>
            <div class='row'>
                <label for='Group_Delete' class='col-sm-4'>کدام گروه : </label>
                <select id='Group_Delete' class='custom-select col-sm-5'></select>
            </div>
            <br>
            <center><input type='submit' class='btn btn-info' value='پاک کردن گروه' id='Send5' name='Send5'></center>
        </form>";
    }elseif (isset($_REQUEST['Status1'])) {
        echo"
            <div id='Print1'>
                <div class='Window3' dir='rtl'>
                    <div class='row'>
                        <div id='Header_None_Print1' class='col-sm-10'>
                            <label for='Class-List3' class='col-sm-2'>کلاس : </label>
                            <select id='Class-List3' class='Class-List custom-select col-sm-3'></select>
                            <label for='Student-List3' class='col-sm-3'>دانش آموز : </label>
                            <select id='Student-List3' name='Student-List1' class='custom-select col-sm-3 Student_Name'></select>                      
                        </div>
                        <br>
                        <div class='col-sm-12' align='center'><br><button class='btn btn-secondary' id='Print_Status_Btn1' style='display: none'>پرینت وضعیت</button></div>
                        <br>
                        <div align='left' class='col-sm-6'>نمره انظباط :</div>
                        <br>
                        <div align='right' class='Nomre_Enzebat col-sm-6'></div><br>
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
            </div>                
        ";
    }elseif(isset($_REQUEST['Status2'])){
        echo "<div id='Print2'>
                <div class='Window1'>
                    <div class='row' id='Header_None_Print2'>
                        <label for='Class-List1' class='col-sm-4'>کلاس : </label>
                        <select id='Class-List1' class='Class-List custom-select col-sm-6 Enzebat-Class'></select>
                        <div class='col-sm-2'></div>
                        <br>
                    </div>
                    <div class='col-sm-12' align='center'><br><button class='btn btn-secondary' id='Print_Status_Btn2' style='display: none'>پرینت انظباط کلاس</button></div>
                    <br>
                    <table id='Return_Enzebats' class='table table-striped table-bordered' style='text-align: center'></table>
                </div>
              </div>";
    }elseif(isset($_REQUEST['Score'])){
        echo "
        <div class='Window1'>
            <div align='center'><< فرم تنظیم کاهش نمره برای هر بخش >></div><br>
            <form action='' method='post' id='Form_Setting'>                                                 
                <div class='row'>
                    <label for='Td' class='col-sm-4'>تعهد درسی : </label>
                    <input type='text' id='Td' name='Td' dir='ltr' class='form-control col-sm-5 u-0' required>
                </div>
                <br>
                <div class='row'>
                    <label for='Te' class='col-sm-4'>تعهد انظباطی : </label>
                    <input type='text' id='Te' name='Te' dir='ltr' class='form-control col-sm-5 u-1' required>
                </div>
                <br>
                <div class='row'>
                    <label for='Tsh' class='col-sm-4'>تشویق : </label>
                    <input type='text' id='Tsh' name='Tsh' dir='ltr' class='form-control col-sm-5 u-2' required>
                </div>
                <br>
                <div class='row'>
                    <label for='Taz' class='col-sm-4'>تذکر : </label>
                    <input type='text' id='Taz' name='Taz' dir='ltr' class='form-control col-sm-5 u-3' required>
                </div>
                <br>
                <div class='row'>
                    <label for='Takh' class='col-sm-4'>تاخیر : </label>
                    <input type='text' id='Takh' name='Takh' dir='ltr' class='form-control col-sm-5 u-4' required>
                </div>
                <br>
                <div class='row'>
                    <label for='Ghey' class='col-sm-4'>غیبت : </label>
                    <input type='text' id='Ghey' name='Ghey' dir='ltr' class='form-control col-sm-5 u-5' required>
                </div>                          
                <br>
                <center><input type='submit' id='Submit-Setting' name='Submit-Setting' value=' ثبت تغییرات' class='btn btn-info'></center>
            </form>
        </div>";
    }elseif(isset($_REQUEST['Td'])){
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
        </div>";
    }elseif(isset($_REQUEST['Te'])){
        echo"<div class='Window1'>
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
    }elseif(isset($_REQUEST['Tash'])) {
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
        </div>";
    }elseif(isset($_REQUEST['Taz'])) {
        echo"<div class='Window1'>
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
    }elseif (isset($_REQUEST['Takh'])){
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
        </div>";
    }elseif (isset($_REQUEST['Ghey'])){
        echo"<div class='Window1'>
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
    }elseif (isset($_REQUEST['AddRec'])){
        echo"
        <div class='Window1'>
            <div align='center'><< فرم  سوابق >></div><br>
            <form action='' method='post' id='Record-Form'>
                <div class='row'>
                    <label for='Class-List1' class='col-sm-2'>کلاس : </label>
                    <select id='Class-List1' class='Class-List custom-select col-sm-3'></select>
                    <label for='Student-List1' class='col-sm-3'>دانش آموز : </label>
                    <select id='Student-List1' name='Student-List1' class='custom-select col-sm-3' required></select>
                </div>
                <br>
                <div class='row'>
                    <label for='Day-Record' class='col-sm-3'>روز : </label>
                    <select id='Day-Record' name='Day-Record' class='custom-select col-sm-5' required>
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
                    <label for='Date-Record' class='col-sm-3'>تاریخ : </label>
                    <input type='text' id='Date-Record' name='Date-Record' class='form-control col-sm-5 usage' dir='ltr' required>
                </div>
                <br>
                <div class='row'>
                    <label class='col-sm-3'>سوابق : </label>
                      <input type='radio' name='Item-Record' value='فرهنگی'> &nbsp;فرهنگی &nbsp;|&nbsp; <br>
                      <input type='radio' name='Item-Record' value='آموزشی'> &nbsp;آموزشی &nbsp;|&nbsp; <br>
                      <input type='radio' name='Item-Record' value='ورزشی'> &nbsp;ورزشی &nbsp;|&nbsp; <br>
                      <input type='radio' name='Item-Record' value='مسابقات'> &nbsp;مسابقات &nbsp;&nbsp; <br>
                      
                </div>
                <br>
                <div class='row'>
                    <label for='Note-Record' class='col-sm-3'>ملاحضات : </label>
                    <textarea name='Note-Record' id='Note-Record' cols='30' rows='2' style='resize: none' class='form-control col-sm-7' required></textarea>
                </div>
                <br>
                <center><input type='submit' id='Submit-Record' name='Submit-Record' value='ثبت' class='btn btn-info'></center>
            </form>
        </div>";
    }elseif (isset($_REQUEST['Records'])){
        echo "<div id='Print2'>
                <div class='Window1'>
                <div class='row' id='Header_None_Print2'>
                    <label for='Class-List3' class='col-sm-2'>کلاس : </label>
                    <select id='Class-List3' class='Class-List custom-select col-sm-3'></select>
                    <label for='Student-List3' class='col-sm-3'>دانش آموز : </label>
                    <select id='Student-List3' name='Student-List1' class='custom-select col-sm-3 Student_Name Class-List-Rec'></select>    
                </div>
                    <br>
                    <table id='Return_Records' class='table table-striped table-bordered' style='text-align: center'></table>
                </div>
              </div>";
    }else{
        goto A;
    }
    echo("</main>");
}
