$(function() {
      $("div.eclazy").lazyload({effect: "fadeIn"});
}); 
$(".ec-qqtis").click(function(){
  $(".ec-qqtis-zd").hide(400);
});
 $("#tanchu").click(function() {
    $(".ec-playssites").addClass("ec-xianshi-active");
})
$("#ecqx").click(function() {
    $(".ec-playssites").removeClass("ec-xianshi-active");
})
$(".ec-playgg-x").click(function(){
  $(".ec-playgg").hide(400);
});
/*播放页简介调出*/
$(".ec-playnam-tcjj").click(function() {
	$("#ecdiv1").hide()
	$("#ecdiv2").show()

})
$("#ecgbjx").click(function() {
	$("#ecdiv2").hide()
    $("#ecdiv1").show()

})
$(".ec-playpfrqx").click(function() {
	$("#ecdiv1").hide()
    $("#ecdiv3").show()

})
$("#ecgbjx2").click(function() {
	$("#ecdiv3").hide()
    $("#ecdiv1").show()

})
$("#xiazai").click(function() {
	$("#ecdiv1").hide()
    $("#ecdiv4").show()

})
$("#ecgbjx3").click(function() {
	$("#ecdiv4").hide()
    $("#ecdiv1").show()

})
/*选集切换*/
 $(function(){
	$("#tagContent #ectag").eq(0).show();
    $("#tag li").click(
        function(){
            $(this).addClass("fed-text-green").siblings().removeClass("fed-text-green");
            index = $("#tag li").index(this);
            $("#tagContent #ectag").eq(index).fadeIn(800).siblings().hide();
        } 
    )
});
$(document).ready(function(){
$("#qhpy").click(function(){
$(".ec-sites-inner").slideToggle("slow");
});
});
/*动态公告*/
    $(function(){
	    var num=0;	
		setInterval(function(){
			num++;
			if(num==4){
				$('.ec-newshezi').css({'top':'0rem'});
						
				num=1;
			}
			$('.ec-newshezi').stop().animate({'top':-0.5*num+'rem'},200)
		},2000)
    })
/*头部切换*/
    var oDiv = document.getElementById("comiis_head");   
    var H = 0;    
    var Y = oDiv;            
    while(Y){    
        H += Y.offsetTop;     
        Y = Y.offsetParent;    
    }    
    window.onscroll = function(){    
        var S = document.body.scrollTop || document.documentElement.scrollTop;    
        if(S > H){  
		    $('#comiis_head').addClass('highlight');  
        }else{
			$('#comiis_head').removeClass('highlight');
        }    
    }; 	
/*换一换*/
		var changeindex=1;
		var clickindex=2;
		$(".changeone li").each(function(index,element){      
			if(index/2<changeindex){

				element.className="change"+changeindex;
			}else{
				changeindex++;
				element.className="change"+changeindex;
			}
		})
		$(".change1").siblings().css("display","none");
		$(".change1").show();
		$(".huan").click(function(){
			if(clickindex<=changeindex){
				$(".change"+clickindex).siblings().css("display","none");
				$(".change"+clickindex).show();
				clickindex++;
			}else{
				clickindex=1;
				$(".change"+clickindex).siblings().css("display","none");
				$(".change"+clickindex).show();
			}

		});
/*搜索展开收起*/
$(function(){
$(".nex_Seachbtns").click(function(){
  $("#ecso").slideUp(500);
});
 
$("#sowd").click(function(){
  $("#ecso").slideDown(500);　　
});
});		
/*幻灯片插件*/
     var arr = [];
     var swiper = new Swiper('.swiper-container1', {

	  loop: true,
      autoplay: {
         disableOnInteraction: false,
      },
      pagination: {
        el: '.swiper-pagination',
      },
      on: {
        slideChangeTransitionStart: function(){
	      $(".swiper-container1").css("background",arr[this.activeIndex]);
        },
      }, 
    });
	$(".swiper-color").each(function(){
        arr.push($(this).attr("edata-color"));
    });
    $(".swiper-container1").css("background",arr[1]);
        var swiper2 = new Swiper('.swiper-container2', {
            spaceBetween: 20,
            slidesPerView:'auto',
            freeMode: true
        });
        var swiper3 = new Swiper('.swiper-container3', {
            slidesPerView:'auto',
            freeMode: true,
			observer:true,
            observeParents:true
        });
        var swiper4 = new Swiper('.swiper-container4', {

            slidesPerView:'auto',
            freeMode: true
        });
        var swiper5 = new Swiper('.swiper-container5', {

            slidesPerView:'auto',
            freeMode: true
        });
        var swiper6 = new Swiper('.swiper-container6', {

            slidesPerView:'auto',
            freeMode: true,
			observer:true
        });
/*返回顶部*/
  $(function(){
	$(window).scroll(function(){
		var _top = $(window).scrollTop();
		if(_top>300){
			$('.qdxw_top').fadeIn(600);
		}else{
			$('.qdxw_top').fadeOut(600);
		}
	});
	$(".qdxw_top").click(function(){
		$("html,body").animate({scrollTop:0},500);
	});
});	
