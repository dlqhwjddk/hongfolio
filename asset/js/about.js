$(function(){
    
    
    /*타이틀문구 슬라이드*/
    function titleSlide(num){
        var slideW = $(".title span").eq(num).innerWidth();
        var cloneTitle = $(".title span").eq(num).html();
        var i=0;

        $(".title span").eq(num).append(cloneTitle);

        setInterval(function(){
            slideW >= i ? i++ : i = 0;
            $(".title span").eq(num).css({
                marginLeft : -i + "px"
            })
        }, 15);       
    }
    titleSlide(0);
    titleSlide(1);
    titleSlide(2);
    
    /*스킬리스트 슬라이드*/
    var bb = true;
    $(window).on('scroll',function(e){
        var skTop = $('.skill').offset().top - $(window).height();
        if(skTop < $(this).scrollTop() && bb){
            bb = false;
//            console.log('a');
            skillFun();    
        }
    });
    function skillFun(){
        function skillAni1(num){
            var cloneSkill = $(".line1").eq(num).html();
            var i=0;
            $(".line1").eq(num).append(cloneSkill);

            $('.line1').eq(num).find('li').each(function(i){
                $(this).css({
                    left: (20 * i)-10 +'%'
                })
            });

            var sTop,lTop,zIdx=0;
            $(window).on('scroll',function(e){
                sTop = $(this).scrollTop();
                sTop > lTop ? zIdx+=10 : zIdx-=10;
                skill(); 
                lTop = sTop;
            });
            function skill(){
                $(".line1").eq(num).css({
                        left : -zIdx + "px"
                });
            }

        }
        skillAni1(0);
        skillAni1(1);    

        function skillAni2(num){

            var cloneSkill = $(".line2").html();
            var i=0;
            $(".line2").prepend(cloneSkill);

            $('.line2 li').each(function(i){
                $(this).css({
                    left: (20 * i)-76 +'%'
                })
            });

            var sTop,lTop,zIdx=0;
            $(window).on('scroll',function(e){
                sTop = $(this).scrollTop();
                sTop > lTop ? zIdx+=10 : zIdx-=10;
                skill2(); 
                lTop = sTop;
            });
            function skill2(){
                $(".line2").css({
                        left : zIdx + "px"
                });
            }

        }
        skillAni2();
    }

    $('.top_box a').on('click', function(e) {
        e.preventDefault();
        $('html').animate({
            scrollTop: 0
        })
    });
    $(".menu").eq(1).on("click", function(e){
  
        e.preventDefault();
        $("html").animate({
            scrollTop: 3334
        });
    });

});

function goBack(){
    window.history.back();
}