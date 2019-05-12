$(document).ready(function(){
    var i;
    Show_Data();
//-----------------------Form_Submit----------------------------
    $('#Form1').bind('submit', function () {
        $.ajax({
            type: 'post',
            url: 'Function/Routing.php',
            data: $('#Form1').serialize(),
            success: function (data1) {
                if (data1==""){
                    $("#Result_Tex").text("لطفا تمامی فیلدها را وارد نمایید");
                    Animate_Box();
                }else{
                    $("#Result_Tex").text(data1);
                    document.getElementById("Form1").reset();
                    Animate_Box();
                    Show_Data();
                }
            }
        });
        return false;
    });

    $('#Form2').bind('submit', function () {
        $.ajax({
            type: 'post',
            url: 'Function/Routing.php',
            data: $('#Form2').serialize(),
            success: function (data2) {
                if (data2==" "){
                    $("#Result_Tex").text("لطفا تمامی فیلدهارا کامل کنید/باید پارامترها کامل باشد");
                    Animate_Box();
                }else{
                    $("#Result_Tex").text(data2);
                    document.getElementById("Form2").reset()
                    Animate_Box();
                    Show_Data();
                }
            }
        });
        return false;
    });

    $('.Update').on("click",function () {
        i=$(this).attr('id');
        $('#Change3').val(i);
    });

    $('#Form3').bind('submit', function () {
        $.ajax({
            type: 'post',
            url: 'Function/Routing.php',
            data: $('#Form3').serialize(),
            success: function (data3) {
                    $('#myModal').modal('hide');
                    $("#Result_Tex").text(data3);
                    Animate_Box();
                    setTimeout(function(){Refreshing();}, 3000);
            }
        });
        return false;
    });

    $(".Delete").click(function(){
        if(confirm("آیا از اجرای این دستور اطمینان دارید؟"+"\n"+"تمامی داده های مربوط به این شخص پاک خواد شد!!"))
        {
            var x=$(this).attr('id');
            $.ajax({
                type: 'post',
                url: 'Function/Routing.php',
                data: 'Delete='+x,
                success: function (data4) {
                    $("#Result_Tex").text(data4);
                    Animate_Box();
                    setTimeout(function(){Refreshing();}, 3000);
                }
            });
        }
        return false;
    });

    $('#Form4').bind('submit', function () {
        var Now_Ex=$("#Now_Expertises").val();
        var New_Ex=$("#New_Expertises").val();
        $.ajax({
            type: 'post',
            url: 'Function/Routing.php',
            data: 'New_Ex='+New_Ex+'&'+'Now_Ex='+Now_Ex,
            success: function (data5) {
                $("#Result_Tex").text(data5);
                Animate_Box();
                $("#Result_Tex").text(data5);
                document.getElementById("Form4").reset();
                Show_Data();
            }
        });
        return false;
    });

    $('#Form5').bind('submit', function () {
        if(confirm("آیا از اجرای این دستور اطمینان دارید؟"+"\n"+"تمامی داده های مربوط به این اشخاص پاک خواد شد!!"))
         {
            var Group_Del=$("#Group_Delete").val();
            $.ajax({
                type: 'post',
                url: 'Function/Routing.php',
                data: 'Group_Delete='+Group_Del,
                success: function (data6) {
                    $("#Result_Tex").text(data6);
                    document.getElementById("Form5").reset();
                    Animate_Box();
                    Show_Data();
                }
            });
        }
        return false;
    });

    $('#Form_Install').bind('submit', function () {
        $('#Loding_Image').css("display","block");
        setTimeout(function()
        {
            $.ajax({
                type: 'post',
                url: '../Function/Routing.php',
                data: $('#Form_Install').serialize(),
                success: function (insdata)
                {
                    if (insdata=="SucsessFul")
                    {
                        $('#Loding_Image').css("display","none");
                        $("#Result_Tex").text("پندارا با موفقیت نصب شد");
                        Animate_Box();
                        setTimeout(function(){location.replace("../Index.php")}, 4000);
                    }else{
                        $('#Loding_Image').css("display","none");
                        $("#Result_Tex").text(insdata);
                        Animate_Box();
                    }
                }
            });
        }, 2000);
        return false;
    });

    $('#Form6').bind('submit', function () {
        $.ajax({
            type: 'post',
            url: 'Function/Routing.php',
            data: $('#Form6').serialize(),
            success: function (Th) {
                $("#Result_Tex").text(Th);
                document.getElementById("Form6").reset();
                Animate_Box();
                Show_Data();
            }
        });
        return false;
    });

    $('#Form7').bind('submit', function () {
        $.ajax({
            type: 'post',
            url: 'Function/Routing.php',
            data: $('#Form7').serialize(),
            success: function (Gh) {
                $("#Result_Tex").text(Gh);
                document.getElementById("Form7").reset();
                Animate_Box();
                Show_Data();
            }
        });
        return false;
    });

    $('#Form8').bind('submit', function () {
        $.ajax({
            type: 'post',
            url: 'Function/Routing.php',
            data: $('#Form8').serialize(),
            success: function (TSH) {
                $("#Result_Tex").text(TSH);
                document.getElementById("Form8").reset();
                Animate_Box();
                Show_Data();
            }
        });
        return false;
    });

    $('#Form9').bind('submit', function () {
        $.ajax({
            type: 'post',
            url: 'Function/Routing.php',
            data: $('#Form9').serialize(),
            success: function (TKH) {
                $("#Result_Tex").text(TKH);
                document.getElementById("Form9").reset();
                Animate_Box();
                Show_Data();
            }
        });
        return false;
    });

    $('#Form10').bind('submit', function () {
        $.ajax({
            type: 'post',
            url: 'Function/Routing.php',
            data: $('#Form10').serialize(),
            success: function (DR) {
                $("#Result_Tex").text(DR);
                document.getElementById("Form10").reset();
                Animate_Box();
                Show_Data();
            }
        });
        return false;
    });

    $('#Form11').bind('submit', function () {
        $.ajax({
            type: 'post',
            url: 'Function/Routing.php',
            data: $('#Form11').serialize(),
            success: function (EN) {
                $("#Result_Tex").text(EN);
                document.getElementById("Form11").reset();
                Animate_Box();
                Show_Data();
            }
        });
        return false;
    });

    $('#Class-List1').on("change",function () {
        var Group_School=$("#Class-List1").val();
        $.ajax({
            type: 'post',
            url: 'Function/Routing.php',
            data: 'Student-List='+Group_School,
            success: function (data11) {
                $('#Student-List1').children().remove();
                $('#Student-List1').append(data11);
            }
        });
    });

    $('#Class-List2').on("change",function () {
        var Group_School=$("#Class-List2").val();
        $.ajax({
            type: 'post',
            url: 'Function/Routing.php',
            data: 'Student-List='+Group_School,
            success: function (data12) {
                $('#Student-List2').children().remove();
                $('#Student-List2').append(data12);
            }
        });
    });

    $('#Class-List3').on("change",function () {
        var Group_School=$("#Class-List3").val();
        $.ajax({
            type: 'post',
            url: 'Function/Routing.php',
            data: 'Student-List-3='+Group_School,
            success: function (data13) {
                $('#Student-List3').children().remove();
                $('#Student-List3').append(data13);
            }
        });
    });

/*---------------------------Show Status----------------------------*/
    $('.Student_Name').on("change",function () {
        var Student_Name=$(".Student_Name").val();
        $.ajax({
            type: 'post',
            url: 'Function/Routing.php',
            data: 'Student_Status1='+Student_Name,
            success: function (data14) {
                $('.Tahodat_D').children().remove();
                $('.Tahodat_D').append(data14);
            }
        });
    });

    $('.Student_Name').on("change",function () {
        var Student_Name=$(".Student_Name").val();
        $.ajax({
            type: 'post',
            url: 'Function/Routing.php',
            data: 'Student_Status2='+Student_Name,
            success: function (data15) {
                $('.Tahodat_E').children().remove();
                $('.Tahodat_E').append(data15);
            }
        });
    });

    $('.Student_Name').on("change",function () {
        var Student_Name=$(".Student_Name").val();
        $.ajax({
            type: 'post',
            url: 'Function/Routing.php',
            data: 'Student_Status3='+Student_Name,
            success: function (data16) {
                $('.Gheybatha').children().remove();
                $('.Gheybatha').append(data16);
            }
        });
    });

    $('.Student_Name').on("change",function () {
        var Student_Name=$(".Student_Name").val();
        $.ajax({
            type: 'post',
            url: 'Function/Routing.php',
            data: 'Student_Status4='+Student_Name,
            success: function (data17) {
                $('.Takhirat').children().remove();
                $('.Takhirat').append(data17);
            }
        });
    });

    $('.Student_Name').on("change",function () {
        var Student_Name=$(".Student_Name").val();
        $.ajax({
            type: 'post',
            url: 'Function/Routing.php',
            data: 'Student_Status5='+Student_Name,
            success: function (data18) {
                $('.Tashvighat').children().remove();
                $('.Tashvighat').append(data18);
            }
        });
    });

    $('.Student_Name').on("change",function () {
        var Student_Name=$(".Student_Name").val();
        $.ajax({
            type: 'post',
            url: 'Function/Routing.php',
            data: 'Student_Status6='+Student_Name,
            success: function (data19) {
                $('.Tazakorat').children().remove();
                $('.Tazakorat').append(data19);
            }
        });
    });

/*---------------------------Show Status----------------------------*/

//-----------------------Form_Submit----------------------------
//-----------------------Function----------------------------
    function Animate_Box()
    {
        $("#Result_Box").css("animation","Result_Box 3s forwards");
        setTimeout(function(){$("#Result_Box").css("animation","Result_Box 2s alternate");}, 6000);
    }

    function Show_Data()
    {
       /* $.ajax({
            type: 'post',
            url: 'Function/Routing.php',
            data: 'TD=Tablee',
            success: function (data7) {
                $('#Td_Table').children().remove();
                $('#Td_Table').append(data7);
                alert(data7)
            }
        });*/

        $.ajax({
            type: 'post',
            url: ' Function/Routing.php',
            data: 'GD=Group_Delete',
            success: function (data8) {
                $('#Group_Delete').children().remove();
                $('#Group_Delete').append(data8);
            }
        });

        $.ajax({
            type: 'post',
            url: 'Function/Routing.php',
            data: 'NE=Now_Expertises',
            success: function (data9) {
                $('#Now_Expertises').children().remove();
                $('#Now_Expertises').append(data9);
            }
        });

        $.ajax({
            type: 'post',
            url: 'Function/Routing.php',
            data: 'Class-List=Show',
            success: function (data10) {
                $('.Class-List').children().remove();
                $('.Class-List').append(data10);
            }
        });

        return false;
    }

    function Refreshing() {
        var url = window.location.href;
        if (url.indexOf('?') > -1){
            url += '&param=1'
        }else{
            url += '?param=1'
        }
        window.location.href = url;
    }
//-----------------------Function----------------------------
});