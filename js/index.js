$(function(){
    //start
    
    /*인트로 애니메이션 끝난 후*/
    setInterval(function(){
        $(".intro").slideUp();
    },4500);
    
    /*액자 클릭 시 페이지이동*/
    $(".photo_frame").click(function(){
        location.href = "about.html";
    });
    
    /*스크롤 시 ul 슬라이드*/
    $("body").mousewheel(function(){
        console.log($("ul"))
    });
    
    

    /*작업물 클릭 시 페이지 이동*/
    $(".work_list").click(function(){
        location.href = "work.html";
    });
    //end
});