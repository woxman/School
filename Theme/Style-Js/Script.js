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
                    //$("Form1 ").reset();
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
                    //$("Form2 ").reset();
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
                    //$("Form3 ").reset();
                    Animate_Box();
                    Show_Data();
            }
        });
        return false;
    });

    $(".Delete").click(function(){
        var x=$(this).attr('id');
        $.ajax({
            type: 'post',
            url: 'Function/Routing.php',
            data: 'Delete='+x,
            success: function (data4) {
                $("#Result_Tex").text(data4);
                Animate_Box();
                Show_Data();
            }
        });
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
                //Reset New_Expertises
                Show_Data();
            }
        });
        return false;
    });

    $('#Form5').bind('submit', function () {
        var Group_Del=$("#Group_Delete").val();
        $.ajax({
            type: 'post',
            url: 'Function/Routing.php',
            data: 'Group_Delete='+Group_Del,
            success: function (data6) {
                $("#Result_Tex").text(data6);
                Animate_Box();
                Show_Data();
            }
        });
        return false;
    });
//-----------------------Form_Submit----------------------------
//-----------------------Function----------------------------
    function Animate_Box()
    {
        $("#Result_Box").css("animation","Result_Box 3s forwards");
        setTimeout(function(){$("#Result_Box").css("animation","Result_Box 2s alternate");}, 6000);
    }

    function Show_Data()
    {
/*        $.ajax({
            type: 'post',
            url: 'Function/Routing.php',
            data: 'TD=Tablee',
            success: function (data7) {
                $('#Table_Data').children().remove();
                $('#Table_Data').append(data7);
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
        return false;
    }
//-----------------------Function----------------------------
});