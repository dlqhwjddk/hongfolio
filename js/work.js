$(document).ready(function(){
    //start
    
    
    function detail(){
        
        $.ajax({
            url : 'js/work/work_detail.json',
            type : 'GET',
            dataType : 'json',
            success : function(data){
                var wIdx = 0;
                var hash = location.hash.slice(1);
                wIdx = hash;
                console.log(wIdx);
                
                var listTag = '';
                function info(){
                    var color = data.work_detail[wIdx].work_color;
                    var colorSP = color.split(','), colorTag='';
                    for(var i in colorSP){
                        colorTag += "<span style=background:"+ colorSP[i] +"></span> ";
                    }
                    
                    listTag = "<div class='title'><span>"+data.work_detail[wIdx].title+"</span></div>"
                    listTag += "<section class='about_project'>"
                    listTag += "<h3>ABOUT PROJECT</h3>"
                    listTag += "<p><span>사이트명</span><span>"+data.work_detail[wIdx].work_name+"</span></p>"
                    listTag += "<p><span>작업기간</span><span>"+data.work_detail[wIdx].work_time+"</span></p>"
                    listTag += "<p><span>제작물</span><span>"+data.work_detail[wIdx].work_page+"</span></p>"
                    listTag += "<p><span>컨셉</span><span>"+data.work_detail[wIdx].work_concept+"</span></p>"
                    listTag += "<p><span>컬러</span>"+colorTag+"</p>"
                    listTag += "<p><span>폰트</span><span>"+data.work_detail[wIdx].work_font+"</span></p>"
                    listTag += "</section>"
                    listTag += "<section class='overview'>"
                    listTag += "<h3>OVERVIEW</h3>"
                    listTag += "<p>"+data.work_detail[wIdx].overview+"</p>"
                    listTag += "</section>"
                    listTag += "<a class='view' target='_blank' href='"+data.work_detail[wIdx].work_url+"'><span></span><span>VIEW</span></a>";
                                    
                    $(".photo_box img").attr("src",data.work_detail[wIdx].img_src);
                    $(".work_text").html(listTag); 
                }
                info();
                
                
                $(".indi a").on("click",function(e){
                    e.preventDefault();
                    if($(this).index()){
                       //next
                        wIdx++;
                    }else{
                        //prev
                        wIdx--;
                    }
                    info();
                })

                

            }
        });
    }
    detail();
    //end
});