$(function () {
    //黑色
    $("#black-1").click(function() {
        //alert("1111");
        var type= "xiaomi8";
        var contentVa = "64GB";
        var color="black";

        $.ajax({
            type: "post",
            url: "../../ZBY/demo_test_post.php",
            //url:"http://localhost/test/ZBY/demo_test_post.php",
            data: {
                "type": type,
                "shape": color,
                "content":  contentVa
            },
            success: function(msg) {
                var href = "../../ZGQ/gouwudai.php";
                href+="?pid=";
                href+=msg;
                window.location.href=href;
            }
        });
    });

    $("#black-2").click(function() {
        var type= "xiaomi8";
        var contentVa = "128GB";
        var color="black";

        $.ajax({
            type: "post",
            url: "../../ZBY/demo_test_post.php",
            data: {
                "type": type,
                "shape": color,
                "content":  contentVa
            },
            success: function(msg) {
                var href = "../../ZGQ/gouwudai.php";
                href+="?pid=";
                href+=msg;
                window.location.href=href;
            }
        });
    });

    $("#black-3").click(function() {
        var type= "xiaomi8";
        var contentVa = "256GB";
        var color="black";

        $.ajax({
            type: "post",
            url: "../../ZBY/demo_test_post.php",
            data: {
                "type": type,
                "shape": color,
                "content":  contentVa
            },
            success: function(msg) {
                var href = "../../ZGQ/gouwudai.php";
                href+="?pid=";
                href+=msg;
                window.location.href=href;
            }
        });
    });

    //白色
    $("#white-1").click(function() {
        var type= "xiaomi8";
        var contentVa = "64GB";
        var color="white";

        $.ajax({
            type: "post",
            url: "../../ZBY/demo_test_post.php",
            data: {
                "type": type,
                "shape": color,
                "content":  contentVa
            },
            success: function(msg) {
                var href = "../../ZGQ/gouwudai.php";
                href+="?pid=";
                href+=msg;
                window.location.href=href;
            }
        });
    });

    $("#white-2").click(function() {
        var type= "xiaomi8";
        var contentVa = "128GB";
        var color="white";

        $.ajax({
            type: "post",
            url: "../../ZBY/demo_test_post.php",
            data: {
                "type": type,
                "shape": color,
                "content":  contentVa
            },
            success: function(msg) {
                var href = "../../ZGQ/gouwudai.php";
                href+="?pid=";
                href+=msg;
                window.location.href=href;
            }
        });
    });

    $("#white-3").click(function() {
        var type= "xiaomi8";
        var contentVa = "256GB";
        var color="white";

        $.ajax({
            type: "post",
            url: "../../ZBY/demo_test_post.php",
            data: {
                "type": type,
                "shape": color,
                "content":  contentVa
            },
            success: function(msg) {
                var href = "../../ZGQ/gouwudai.php";
                href+="?pid=";
                href+=msg;
                window.location.href=href;
            }
        });
    });

    //金色
    $("#blonze-1").click(function() {
        var type= "xiaomi8";
        var contentVa = "64GB";
        var color="blonze";

        $.ajax({
            type: "post",
            url: "../../ZBY/demo_test_post.php",
            data: {
                "type": type,
                "shape": color,
                "content":  contentVa
            },
            success: function(msg) {
                var href = "../../ZGQ/gouwudai.php";
                href+="?pid=";
                href+=msg;
                window.location.href=href;
            }
        });
    });

    $("#blonze-2").click(function() {
        var type= "xiaomi8";
        var contentVa = "128GB";
        var color="blonze";

        $.ajax({
            type: "post",
            url: "../../ZBY/demo_test_post.php",
            data: {
                "type": type,
                "shape": color,
                "content":  contentVa
            },
            success: function(msg) {
                var href = "../../ZGQ/gouwudai.php";
                href+="?pid=";
                href+=msg;
                window.location.href=href;
            }
        });
    });

    $("#blonze-3").click(function() {
        var type= "xiaomi8";
        var contentVa = "256GB";
        var color="blonze";

        $.ajax({
            type: "post",
            url: "../../ZBY/demo_test_post.php",
            data: {
                "type": type,
                "shape": color,
                "content":  contentVa
            },
            success: function(msg) {
                var href = "../../ZGQ/gouwudai.php";
                href+="?pid=";
                href+=msg;
                window.location.href=href;
            }
        });
    });

    //蓝色
    $("#blue-1").click(function() {
        var type= "xiaomi8";
        var contentVa = "64GB";
        var color="blue";

        $.ajax({
            type: "post",
            url: "../../ZBY/demo_test_post.php",
            data: {
                "type": type,
                "shape": color,
                "content":  contentVa
            },
            success: function(msg) {
                var href = "../../ZGQ/gouwudai.php";
                href+="?pid=";
                href+=msg;
                window.location.href=href;
            }
        });
    });

    $("#blue-2").click(function() {
        var type= "xiaomi8";
        var contentVa = "128GB";
        var color="blue";

        $.ajax({
            type: "post",
            url: "../../ZBY/demo_test_post.php",
            data: {
                "type": type,
                "shape": color,
                "content":  contentVa
            },
            success: function(msg) {
                var href = "../../ZGQ/gouwudai.php";
                href+="?pid=";
                href+=msg;
                window.location.href=href;
            }
        });
    });

    $("#blue-3").click(function() {
        var type= "xiaomi8";
        var contentVa = "256GB";
        var color="blue";

        $.ajax({
            type: "post",
            url: "../../ZBY/demo_test_post.php",
            data: {
                "type": type,
                "shape": color,
                "content":  contentVa
            },
            success: function(msg) {
                var href = "../../ZGQ/gouwudai.php";
                href+="?pid=";
                href+=msg;
                window.location.href=href;
            }
        });
    });
}) ;
