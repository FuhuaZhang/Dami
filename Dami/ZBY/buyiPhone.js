$(document).ready(function() {
  $(function() {
    $("#firstContent").animate(
      {
        opacity: "1"
      },
      "slow"
    );
  });

  $("#watchOpposite").click(function() {
    $("#silverPictureSecond").animate(
      {
        opacity: "0"
      },
      "normal"
    );
    $("#grayPictureSecond").animate(
      {
        opacity: "0"
      },
      "normal"
    );
    $("#silverPictureFirst").animate({ opacity: "0" }, "normal");
    $("#grayPictureFirst").animate(
      {
        opacity: "0"
      },
      "normal"
    );
    $("#silverPictureSecond").animate(
      {
        opacity: "1"
      },
      "normal"
    );
    $("#grayPictureSecond").animate(
      {
        opacity: "1"
      },
      "normal"
    );
  });

  $("#watchFront").click(function() {
    $("#silverPictureSecond").animate(
      {
        opacity: "0"
      },
      "normal"
    );
    $("#grayPictureSecond").animate(
      {
        opacity: "0"
      },
      "normal"
    );
    $("#silverPictureFirst").animate(
      {
        opacity: "0"
      },
      "normal"
    );
    $("#grayPictureFirst").animate(
      {
        opacity: "0"
      },
      "normal"
    );
    $("#silverPictureFirst").animate(
      {
        opacity: "1"
      },
      "normal"
    );
    $("#grayPictureFirst").animate(
      {
        opacity: "1"
      },
      "normal"
    );
  });

  $("#stwo").hover(
    function() {
      $(this).animate(
        {
          left: "-=30px"
        },
        "normal"
      );
    },
    function() {
      $(this).animate({
        left: "+=30px"
      });
    }
  );

  $("#gtwo").hover(
    function() {
      $(this).animate(
        {
          left: "-=30px"
        },
        "normal"
      );
    },
    function() {
      $(this).animate({
        left: "+=30px"
      });
    }
  );

  $("#sthree").hover(
    function() {
      $(this).animate(
        {
          left: "-=50px"
        },
        "normal"
      );
    },
    function() {
      $(this).animate({
        left: "+=50px"
      });
    }
  );

  $("#gthree").hover(
    function() {
      $(this).animate(
        {
          left: "-=50px"
        },
        "normal"
      );
    },
    function() {
      $(this).animate({
        left: "+=50px"
      });
    }
  );

  $("#");

  $("#contentFirst").hover(
    function() {
      $(this).css("borderColor", "black");
    },
    function() {
      $(this).css("borderColor", "#bbbbbb");
    }
  );

  $("#contentSecond").hover(
    function() {
      $(this).css("borderColor", "black");
    },
    function() {
      $(this).css("borderColor", "#bbbbbb");
    }
  );

  $("#choose").click(function() {
    $("#firstContent").css("z-index", "1");
    $("#firstContent").animate({
      opacity: "0"
    });
    $("#secondContent").css("z-index", "4");
    $("#secondContent").animate(
      {
        opacity: "1"
      },
      "slow"
    );
    $("#phoneBody")
      .text("iphone X")
      .css("color", "#0271ca");
    $("#phoneBody").removeAttr("disabled");
    $("#phoneBody").css("cursor", "pointer");
  });

  $("#stwo").click(function() {
    $("#firstContent").animate(
      {
        opacity: "0"
      },
      "slow"
    );
    $("#secondContent").css("z-index", "2");
    $("#secondContent").animate(
      {
        opacity: "0"
      },
      "slow"
    );
    $("#thirdContent").css("z-index", "4");
    $("#thirdContent").animate(
      {
        opacity: "1"
      },
      "slow"
    );
    $("#phoneShape")
      .text("银色")
      .css("color", "#0271ca");
    $("#phoneShape").removeAttr("disabled");
    $("#phoneShape").css("cursor", "pointer");
  });

  $("#gtwo").click(function() {
    $("#firstContent").animate(
      {
        opacity: "0"
      },
      "slow"
    );
    $("#secondContent").css("z-index", "2");
    $("#secondContent").animate(
      {
        opacity: "0"
      },
      "slow"
    );
    $("#thirdContent").css("z-index", "4");
    $("#thirdContent").animate(
      {
        opacity: "1"
      },
      "slow"
    );
    $("#phoneShape")
      .text("灰色")
      .css("color", "#0271ca");
    $("#phoneShape").removeAttr("disabled");
    $("#phoneShape").css("cursor", "pointer");
  });

  $("#sthree").click(function() {
    $("#firstContent").animate(
      {
        opacity: "0"
      },
      "slow"
    );
    $("#secondContent").css("z-index", "2");
    $("#secondContent").animate(
      {
        opacity: "0"
      },
      "slow"
    );
    $("#thirdContent").css("z-index", "4");
    $("#thirdContent").animate(
      {
        opacity: "1"
      },
      "slow"
    );
    $("#phoneShape")
      .text("银色")
      .css("color", "#0271ca");
    $("#phoneShape").removeAttr("disabled");
    $("#phoneShape").css("cursor", "pointer");
  });

  $("#gthree").click(function() {
    $("#firstContent").animate(
      {
        opacity: "0"
      },
      "slow"
    );
    $("#secondContent").css("z-index", "2");
    $("#secondContent").animate(
      {
        opacity: "0"
      },
      "slow"
    );
    $("#thirdContent").css("z-index", "4");
    $("#thirdContent").animate(
      {
        opacity: "1"
      },
      "slow"
    );
    $("#phoneShape")
      .text("灰色")
      .css("color", "#0271ca");
    $("#phoneShape").removeAttr("disabled");
    $("#phoneShape").css("cursor", "pointer");
  });

  $("#contentFirst").click(function() {
    $("#firstContent").animate(
      {
        opacity: "0"
      },
      "slow"
    );
    $("#secondContent").css("z-index", "2");
    $("#secondContent").animate(
      {
        opacity: "0"
      },
      "slow"
    );
    $("#thirdContent").css("z-index", "3");
    $("#thirdContent").animate(
      {
        opacity: "0"
      },
      "slow"
    );
    $("#fourthContent").css("z-index", "4");
    $("#fourthContent").animate(
      {
        opacity: "1"
      },
      "slow"
    );
    $("#phoneContent")
      .text("64GB")
      .css("color", "#0271ca");
    $("#phoneContent").removeAttr("disabled");
    $("#phoneContent").css("cursor", "pointer");
    if ($("#phoneShape").text() === "银色") {
      $("#finalChoice").attr(
        "src",
        "index/iphone-x-silver-select-2017_AV3.jpg"
      );
    } else if ($("#phoneShape").text === "灰色") {
      $("#finalChoice").attr("src", "index/iphone-x-gray-select-2017_AV3.jpg");
    }
    $("#fourthLiFirst").text($("#phoneBody").text());
    $("#fourthLiSecond").text($("#phoneShape").text());
    $("#fourthLiThird").text($("#phoneContent").text());
    $("#finalPrice").text("8316");
    $("#tax").text("1154");
  });

  $("#contentSecond").click(function() {
    $("#firstContent").animate(
      {
        opacity: "0"
      },
      "slow"
    );
    $("#secondContent").css("z-index", "2");
    $("#secondContent").animate(
      {
        opacity: "0"
      },
      "slow"
    );
    $("#thirdContent").css("z-index", "3");
    $("#thirdContent").animate(
      {
        opacity: "0"
      },
      "slow"
    );
    $("#fourthContent").css("z-index", "4");
    $("#fourthContent").animate(
      {
        opacity: "1"
      },
      "slow"
    );
    $("#phoneContent")
      .text("256GB")
      .css("color", "#0271ca");
    $("#phoneContent").attr("disabled", false);
    $("#phoneContent").css("cursor", "pointer");
    if ($("#phoneShape").text() === "银色") {
      $("#finalChoice").attr(
        "src",
        "index/iphone-x-silver-select-2017_AV3.jpg"
      );
    } else if ($("#phoneShape").text === "灰色") {
      $("#finalChoice").attr("src", "index/iphone-x-gray-select-2017_AV3.jpg");
    }
    $("#fourthLiFirst").text($("#phoneBody").text());
    $("#fourthLiSecond").text($("#phoneShape").text());
    $("#fourthLiThird").text($("#phoneContent").text());
    $("#finalPrice").text("9605");
    $("#tax").text("1331");
  });

  $("#phoneContent").click(function() {
    $("#phoneContent")
      .text("容量")
      .css("color", "#bbbbbb");
    $("#phoneContent").attr("disabled", true);
    $("#phoneContent").css("cursor", "default");
    $("#firstContent").animate(
      {
        opacity: "0"
      },
      "slow"
    );
    $("#secondContent").css("z-index", "2");
    $("#secondContent").animate(
      {
        opacity: "0"
      },
      "slow"
    );
    $("#thirdContent").css("z-index", "4");
    $("#thirdContent").animate(
      {
        opacity: "1"
      },
      "slow"
    );
    $("#fourthContent").css("z-index", "3");
    $("#fourthContent").animate(
      {
        opacity: "0"
      },
      "slow"
    );
  });

  $("#phoneShape").click(function() {
    $("#phoneShape")
      .text("外观")
      .css("color", "#bbbbbb");
    $("#phoneShape").attr("disabled", true);
    $("#phoneShape").css("cursor", "default");
    $("#phoneContent")
      .text("容量")
      .css("color", "#bbbbbb");
    $("#phoneContent").attr("disabled", true);
    $("#phoneContent").css("cursor", "default");
    $("#firstContent").animate(
      {
        opacity: "0"
      },
      "slow"
    );
    $("#secondContent").css("z-index", "4");
    $("#secondContent").animate(
      {
        opacity: "1"
      },
      "slow"
    );
    $("#thirdContent").css("z-index", "2");
    $("#thirdContent").animate(
      {
        opacity: "0"
      },
      "slow"
    );
    $("#fourthContent").css("z-index", "3");
    $("#fourthContent").animate(
      {
        opacity: "0"
      },
      "slow"
    );
  });

  $("#phoneBody").click(function() {
    $("#phoneBody")
      .text("机身")
      .css("color", "black");
    $("#phoneBody").attr("disabled", true);
    $("#phoneBody").css("cursor", "default");
    $("#phoneShape")
      .text("外观")
      .css("color", "#bbbbbb");
    $("#phoneShape").attr("disabled", true);
    $("#phoneShape").css("cursor", "default");
    $("#phoneContent")
      .text("容量")
      .css("color", "#bbbbbb");
    $("#phoneContent").attr("disabled", true);
    $("#phoneContent").css("cursor", "default");
    $("#firstContent").css("z-index", "4");
    $("#firstContent").animate(
      {
        opacity: "1"
      },
      "slow"
    );
    $("#secondContent").css("z-index", "1");
    $("#secondContent").animate(
      {
        opacity: "0"
      },
      "slow"
    );
    $("#thirdContent").css("z-index", "2");
    $("#thirdContent").animate(
      {
        opacity: "0"
      },
      "slow"
    );
    $("#fourthContent").css("z-index", "3");
    $("#fourthContent").animate(
      {
        opacity: "0"
      },
      "slow"
    );
  });

  $("#Add").click(function(e) {
    e.preventDefault();
    var type = "iPhone X";
    var shapeVa = $("#phoneShape").text();
    var contentVa = $("#phoneContent").text();
    var color=null;
    if(shapeVa==="银色")
    {
      color="silver";
    }
    else if(shapeVa==="灰色")
    {
      color="gray";
    }
    $.ajax({
      type: "post",
      url: "http://localhost/test/ZBY/demo_test_post.php",
      data: {
        "type" : type,
        "shape": color,
        "content":  contentVa,
      },
      success: function(msg) {
        console.log("Data Saved: " + msg);
        var href = "../ZGQ/gouwudai.php";
        href+="?pid=";
        href+=msg;
        window.location.href=href;
      },
      error: function (XMLHttpRequest, textStatus, errorThrown) {
        // 状态码
        console.log(XMLHttpRequest.status);
        // 状态
        console.log(XMLHttpRequest.readyState);
        // 错误信息   
        console.log(textStatus);
      }
    });
  });
});
