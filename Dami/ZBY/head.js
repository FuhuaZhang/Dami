// 显示头部登录用户名
$(function () {

    //判断是否通过url传递了参数userId
    var par = window.location.search;
    console.log(par); //result:substring(1, searchURL.length);
    par = par.substring(1, par.length);
    var userId = null;
    console.log(userId);
    if((par != null) && (par != "")){
        userId = par.split("&")[0].split("=")[1];
        $.ajax({
            type: "GET",
            url: "idToUserName.php",
            data:{"userId":userId},
            success: function (msg) {
                //                msg指的是php执行成功返回的数据echo

                console.log(msg);
                //msg = JSON.parse(msg);
                if(msg != null){
                    $("#user").html("账户&nbsp;"+msg);
                }
            }
        });
        $("#user").text("账户 "+userId);
    }
    $("#user").click(function () {
        if($("#user").text() == "登录"){
            $("#user").attr("href","../ZFH/login/login.html");
        }
        else{
            var str = "../ZFH/userInfo/userInfo.html?userId=";
            str += userId;
            $("#user").attr("href",str);
        }
    });
    $("#order").click(function () {
        if($("#user").text() == "登录"){
            alert("您没有登录，请先登录！");
            //$("#order").attr("href","../ZFH/login/login.html");
        }
        else{
            var str = "../ZFH/order/order.html?userId=";
            str += userId;
            $("#order").attr("href",str);
        }
    });
    $("#gouwudai").click(function () {
        if($("#user").text() == "登录"){
            alert("您没有登录，请先登录！");
            //$("#order").attr("href","../ZFH/login/login.html");
        }
        else{
            //var str = "../ZFH/order/order.html?userId=";
            //str += userId;
            var str = "../ZGQ/";
            $("#gouwudai").attr("href",str);
        }
    });

    $("#exit").click(function () {
        $.ajax({
            type: "GET",
            url: "exit.php",
            success: function (msg) {
                //                msg指的是php执行成功返回的数据echo

                console.log(msg);
                //msg = JSON.parse(msg);
                if(msg == null){
                    $("#user").attr("href","../ZFH/login/login.html");
                }
                else{
                    $("#user").attr("href","../ZFH/userInfo/userInfo.html");
                }
                $("#user").html("账户&nbsp;"+msg);
            }
        });
    });
    $("#exit").click(function () {
        $.ajax({
            type: "GET",
            url: "exit.php",
            success: function (msg) {
                //                msg指的是php执行成功返回的数据echo

                console.log(msg);
                //msg = JSON.parse(msg);
                if(msg == null){
                    $("#user").attr("href","../ZFH/login/login.html");
                }
                else{
                    $("#user").attr("href","../ZFH/userInfo/userInfo.html");
                }
                $("#user").html("账户&nbsp;"+msg);
            }
        });
    });
});
