$(function(){

    //グローバルナビゲーション
    $(".btn-gnavi").on("click", function(){
        var rightVal = 0;
        if($(this).hasClass("open")) {
            rightVal = -300;
            $(this).removeClass("open");
        }
        else {
            $(this).addClass("open");
        }
        $(".menu-gnavi").stop().animate({
            right: rightVal
        }, 300);
    });


$(".contents").css("background-color", "white");

$(".contents").css("margin-top", "800px");

$(".contents").css("padding-top", "100px");

});
