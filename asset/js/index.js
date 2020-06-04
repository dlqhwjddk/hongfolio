$(function(){
//start
    
    if(sessionStorage.intro == 'on'){
        $('.intro').hide();
    }
    sessionStorage.intro = 'on';
  
    /*인트로 애니메이션 끝난 후*/
    setInterval(function(){
        $(".intro").slideUp();
    },4500);
    
//    $(".intro").addClass("active");

    /*액자 클릭 시 페이지이동*/
    $(".photo_frame").click(function(){
        location.href = "about.php";
    });


    function work(){
        $.ajax({
            url : "asset/js/main/work.json",
            type : 'GET',
            dataType : 'json',
            success : function(data){
                
                //console.log(data.work[0].data_name);
                var listTag = "";
                
                for(let i=0; i < data.work.length; i++){
                    listTag = "<li data-name='" + i + "' class='work_list " + data.work[i].class_count + "'>";
                    listTag += "<span class='num'>0" + (i+1) + "</span>"
                    listTag += "<div class='photo_box'>"
                    listTag += "<p></p>"
                    listTag += "<p></p>"
                    listTag += "<p class='first_p'>"
                    listTag += "<img src='asset/img/work" + (i+1) + ".jpg' alt=''>"
                    listTag += "</p>"
                    listTag += "</div>"
                    listTag += "<h3 class='work_name'>" + data.work[i].work_name + "</h3>"
                    listTag += "<small>" + data.work[i].work_detail + "</small>";

                    $(".wrap ul").append(listTag);
                }
                
                $(".work_list").click(function(){
                    location.href = "work.html#"+$(this).data('name');
                });

                slide();
            }
        });
    }
    work();
    
    //slide
    function slide(){
        var move=0, delta, sIdx = 0, bleen=true;
        var itemLen = $('.wrap ul li').length;
        var slideItem = $('.wrap ul').html();
        console.log(itemLen)
        $('.wrap ul').prepend(slideItem);
        $('.wrap ul').append(slideItem);
        
        var addItemLen = $('.wrap ul li').length;
        var init = (44 * addItemLen) / 3;
        $('.wrap ul li').each(function(i){
           $(this).css({
               left:44 * i + '%'
           });
        });
        $('.wrap ul').css({left:-init+'%'});
        
        
        $(window).on('mousewheel DOMMouseScroll', function(e){
            delta = e.originalEvent.wheelDelta;
            if(bleen){
                bleen=false;
                if(delta < 0){
                    //down
                    sIdx++;
                }else{
                    //up
                    sIdx--;                    
                }
                slideAni();
            }
        });
        
        var dX,mX,dragEnt;
        $(window).on({
            mouseup :function(){
                bleen2=true;
            },
            mousedown :function(e){
                dX = e.pageX;
                dragEnt = 'down';
            },
            mousemove :function(e){
                mX = e.pageX;
                if(dragEnt=='down'){
                    dX < mX ? aa(0) : aa(1);
                }
                
                
                
                //aa();
                function aa(m){
                    if(bleen2){
                       bleen2=false;
                        m==0 ? sIdx-- : sIdx++;
                        slideAni();
                    }
                }
                
            } 
        });
        
        function slideAni(){
            move = (-44 * sIdx)-init + '%';
            $('.wrap ul').animate({
                left:move
            },function(){
                bleen=true;
                if(sIdx == itemLen || sIdx == -itemLen){
                    $('.wrap ul').css({left:-init+'%'});
                    sIdx = 0;
                }
            })
        }
    }
    
//end        
});
        
        
        
        