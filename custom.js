$(window).load(function(){
	
	$(".member-label,.member-avatar").click(function(){
		$(".member-block").removeClass('active');
		$(this).parent().parent().parent().addClass('active');
		
	});
	
	
	$(".product-links.green").click(function(){
		$(".more-data").removeClass("active");
		$(this).parents(".product-block").find(".more-data").slideDown();
		$(this).hide();
		$(this).siblings(".red").show();
	});
	
	$(".product-links.red").click(function(){
		$(".more-data").removeClass("active");
		$(this).parents(".product-block").find(".more-data").slideUp();
		$(this).hide();
		$(this).prev(".green").show();
	});
	
	var sideWidth = $(window).width() -1170;
	
	$(".side-enelarger").css("right",-sideWidth).css("width",sideWidth);
	
	$(".close-detail").click(function(){
		$(".member-block").removeClass('active');
	});
	$("form.search").hover(function(){
		$('.search-wrapper').stop(true, false).animate({left : "-200px",width: "300px"});
	},function(){
		$('.search-wrapper').stop(true, false).animate({left : "0px" ,width: "0px"});
		$('.search-wrapper').stop(true, false).animate({left : "20px" ,width: "0px"});
	});
	
	changeAnimation();
	$(".video-block, .img-wrapper, .board-block, .img-block, .v-gallery-block").each( function(){
					var imageUrl = $(this).find('img').attr("src");
                    $(this).find('img').css("visibility","hidden");
				    $(this).css('background-image', 'url(' + imageUrl + ')').css("background-repeat","no-repeat").css("background-size","cover").css("background-position","50% 50%");
				});
	$(".banner-slider-wrapper ul.slides > li").each( function(){
					var imageUrl = $(this).find('img.banner-img').attr("src");
                    $(this).find('img.banner-img').css("visibility","hidden");
		    
				    $(this).css('background-image', 'url(' + imageUrl + ')').css("background-repeat","no-repeat").css("background-size","cover").css("background-position","50% 50%");
				});
	
	//	$(".icoo").each(function(){
	//    var imageUrl = $(this).find('img').attr("src");
	//    $(this).find('img').hide();
	//	    if (imageUrl) {
	//			    $(this).css('background-image', 'url(' + imageUrl + ')').css("background-repeat","no-repeat").css("background-size","cover").css("background-position","50% 50%");
	//			    }
	//    });
	
	
	$(".video-block").hover(function(){
		$(this).stop(true,false).animate({height:"200px",top:"-30px"},{queue: false,duration:200});
		$(this).find(".tag-area").stop(true,false).animate({"bottom":"-30px"},{queue: false,duration: 200});
	},function(){
		$(this).find(".tag-area").stop(true,false).animate({"bottom":"-70px"},{queue: false,duration: 200});
		$(this).stop(true,false).animate({height:"200px",top:"0px"},{queue: false,duration: 200});
	});
	
	
	
	$(".v-gallery-block").hover(function(){
		
		$(this).find(".tag-area").stop(true,false).animate({"bottom":"0px"},{queue: false,duration: 200});
	},function(){
		$(this).find(".tag-area").stop(true,false).animate({"bottom":"-70px"},{queue: false,duration: 200});
	});
	
	/*$(".time-line-block").each(function(){});*/
	$(".time-line-block").appear(function(){
		$(this).css("visibility","visible");
		var para = $(this).parent();
		
		if($(this).parent().hasClass('left')){
			$(this).addClass('animated fadeInLeft');
		}
		else if($(this).parent().hasClass('right')){
			$(this).addClass('animated fadeInRight');
		}
	}, {accY: -70});

	$(".tab-link li > a").click(function(){
		$(".tab-link li").attr("id","");
		$(this).parent().attr("id","active");
		var clsName= $(this).attr('class').split(' ').pop();
		$(".advantage-tab .tab-content").removeClass("active");
		$(".advantage-tab #"+clsName+".tab-content").addClass("active");
	});
	
	$(".block-wrapper").click(function(){
		$(".person-info p").mCustomScrollbar('destroy');
		$(".block-wrapper").removeClass('active');
		$(".advisory-wrapper .owl-item").removeClass('active');
		$(this).addClass('active');
		$(this).parent().parent().addClass('active');
		$(".person-data-block").removeClass('active');
		var gtId = $(this).attr("id");
		$("#"+gtId+".person-data-block").addClass("active");
		$(".person-info p").mCustomScrollbar({
			setHeight:47
		});
		
	});
	
	$(".img-block").mouseenter(function(){
		$(".img-block").removeClass('active');
		$(this).addClass('active');
		$(".infra-info-wrapper .infra-info").removeClass('active');
		var gtId2 = $(this).attr("id");
		$("#"+gtId2+".infra-info").addClass("active");
		
		
	});
	
	$(".v-m-nav-wrapper.event a").click(function(){
		$(".v-m-nav-wrapper.event a").parent().removeClass('active');
		$(this).parent().addClass('active');
		$(".events-wrapper").removeClass('active');
		var gtId3 = $(this).attr("id");
		$("#"+gtId3+".events-wrapper").addClass("active");
		
		
	});

	$(".img-block").click(function(){
		$(".inline-info").slideUp();
		$(this).addClass('active');
	
		if($(window).width() < 767){
			$(this).next(".inline-info").slideDown();
		}
		
	});
	
	
	if($(window).width() > 767){
		if($('.splitted-container > .row > div:first-child').height() >$('.splitted-container > .row > div:nth-child(2)').height()){
			$('.splitted-container > .row > div:nth-child(2)').height($('.splitted-container > .row > div:first-child').height());
		}
		else{
			$('.splitted-container > .row > div:first-child').height($('.splitted-container > .row > div:nth-child(2)').height());
		}
		
		
		
		
		
	
	}
	else{
		if($('.nav-div').length >0 )
		$('.nav-div').each(function () {
			$(this).insertBefore($(this).prev('.content-div'));
			});
	}
	
});

$(window).resize(function(){
	changeAnimation();
if($(window).width() > 767){
		if($('.splitted-container > .row > div:first-child').height() >$('.splitted-container > .row > div:nth-child(2)').height()){
			$('.splitted-container > .row > div:nth-child(2)').height($('.splitted-container > .row > div:first-child').height());
		}
		else{
			$('.splitted-container > .row > div:first-child').height($('.splitted-container > .row > div:nth-child(2)').height());
		}
	}
	else{
		$('.splitted-container > .row > div:first-child').css("height",'auto');
		$('.splitted-container > .row > div:nth-child(2)').css("height",'auto');
	}
});
$(document).ready(function(){

	var listLength  = $(".year-list li").length;
	var eachLength  = (100/listLength) + "%";
 	$(".year-list li").css("width",eachLength);
	$(".year-list li span").click(function(){
		var thisId = $(this).attr('id');
	
		var yearpoint = $("#"+thisId+".year-block").offset().top;
		$('html,body').animate({scrollTop: yearpoint},400);
	});
	
	$("#featured-carousel,#search-results-carousel").owlCarousel({items:4,navigation:true, navigationText:false});
	$(".rq-block.rq-4.orange").click(function(){
		$(".search-resource").stop(true,false).slideToggle();
	});
	
	$(".infra-info-wrapper .infra-info").addClass('animated fadeInLeft');
  $('.slides').bxSlider({useCSS:false,auto:false,
					onSliderLoad:function(){
						
				$(".slides li").each( function(){
					$(".slides li *").show();
				});},
					onSlideBefore:function(){
						$(".slides li").each( function(){
					$(".slides li *").fadeOut();
				});},
					
					onSlideAfter:function(){
					$(".slides li").each( function(){
					$(".slides li *").show();
						$(".slides li img").css("display",'block').addClass('scale');
				});}
					
				    });
	//$(".bx-wrapper .bx-loading").hide();$(".slides li *").show();
	$("#partner-carousel").owlCarousel({
		items:4,
		itemsDesktop: [1199,4],
		itemsTablet: [1199,2],
		autoPlay:true
	});
		$("#customer-carousel").owlCarousel({
		items:5,
		itemsDesktop: [1199,5],
		itemsTablet: [1199,3],
		autoPlay:true
	});
	
	$("#video-carousel.webinars").owlCarousel({
		items:4,
		itemsDesktop: [1199,4],
		navigation:true,
		navigationText:false,
		itemsTablet: [1199,3]/*,*/
		/*0-30*/
	});
	$("#video-carousel.corporate").owlCarousel({
		items:4,
		itemsDesktop: [1199,4],
		navigation:true,
		navigationText:false,
		itemsTablet: [1199,3]/*,*/
		/*0-30*/
	});
	
	$("#board-scroller").owlCarousel({
		items:5,
		itemsDesktop: [1199,5],
		navigation:true,
		navigationText:false,
		itemsTablet: [1199,3]/*,*/
		/*0-30*/
	});
	
	
	$(".service-carousel").owlCarousel({
		items:4,
		navigation:true,
		navigationText:false,
		pagination:false
	});
	
	$("#file-upload").on('change',function(){
		$(".form-control.resume").attr('value',$(this).val());
	});
	$(".client-word-slider").owlCarousel({singleItem:true,pagination:true});
	$(".our-partner-slider").owlCarousel({singleItem:true,pagination:true});
	
	$(".testi-nav").click(function(){
		$(".testi-nav").removeClass('active');
		$(this).addClass('active');
		$(".words-block").hide();
		var blockId = $(this).attr('id');
		$(".words-block[id='"+blockId+"']").show();
	});
	$(".switch").click(function(){
		$(this).removeClass('active');
		$(".carousel-wrapper .owl-carousel").removeClass('active');
		var contentId = $(this).attr('id');
		$(".owl-carousel."+contentId).addClass('active');
		if($(this).hasClass('one')){
			$(".switch").removeClass('active');
			$(this).addClass('active');
			$('.switch-bg').removeClass('right');
			$('.switch-bg').addClass('left');
		}
		else{
			$(".switch").removeClass('active');
			$(this).addClass('active');
			$('.switch-bg').removeClass('left');
			$('.switch-bg').addClass('right');
		}
	});
	
	if( $(".person-info").length > 0){
	 	$(".person-info p").mCustomScrollbar({
			setHeight:47
		});
	}
	if( $(".image-scroller").length > 0){
	 	$(".image-scroller-wrapper").mCustomScrollbar({
			setHeight:47
		});
		
		
	}
	$(".infrastructure-info").mCustomScrollbar({
			setHeight:400
		});
	wheel();
	var highestBox = 0;
	  $('.featured-block').each(function(){  
            if($(this).height() > highestBox){  
                 highestBox = $(this).height();  
	    }
        $('.featured-block').height(highestBox);
    });    
	
	
});


function changeAnimation(){
	$(".sion-block").each(function(){
		var h1 = $(this).find('.text-wrapper').height();
		var h2 = $(this).find('.image-wrapper').height();
		if (h1 > h2){
			$(this).find(".text-wrapper, .image-wrapper").height(h1);
		}
		else{
			$(this).find(".text-wrapper, .image-wrapper").height(h2);
		}
	});
	if($(window).width() > 767 ){
		$(".contact-page .img-wrapper").height($(".contact-page .contact-detail").outerHeight());
	}
	
	if($(window).width() > 1170 ){
		$("section.banner .slides > li").css("padding-left", (($(window).width()-1170)/2)+15);
		$(".bx-wrapper .bx-pager").css("left",($(window).width()-1170)/2);
	}
	else if($(window).width() > 767 ){
		$("section.banner .slides > li").css("padding-left", (($(window).width()-$(".container").width())/2)+15);
		$(".bx-wrapper .bx-pager").css("left",($(window).width()-1170)/2);
		if($('.splitted-container > .row > div:first-child').height() >$('.splitted-container > .row > div:nth-child(1)').height()){
			$('.splitted-container > .row > div:nth-child(2)').height($('.splitted-container > .row > div:first-child').height());
		}
		else{
			$('.splitted-container > .row > div:first-child').height($('.splitted-container > .row > div:nth-child(1)').height());
		}
	}
	else{
		$("section.banner .slides > li").css("padding-left", "25px");
	}
}


function wheel(){
	
	$("ul.services-wheel li").load(function(){
		
	});
	
	var nvalue = 0;
	$('a.controls').click(function(){
		var directN = $(this).attr('class').split(' ').pop();
		$("ul.services-wheel li").each(function(){
			$(".service-list li").removeClass('active');
			var revArray = [5,4,3,2,1];
			/*var prevClass = $(this).prev().attr('class').split(' ').pop();*/
			var thsClass= $(this).attr('class').split(' ').pop();
			var lastChar = thsClass.slice(-1);
			var newNum= ((parseInt(lastChar))%5 + 1)
			var newNeg=  ((parseInt(lastChar)) - 1);
			
			if(newNeg == 0){
				newNeg = newNeg +5;
			}
			/*alert(newNeg);*/
			var NextClass= thsClass.slice(0,-1) + newNum;
			var prevClass= thsClass.slice(0,-1) + (Math.abs(newNeg));
			/*alert(prevClass);*/
			$(this).attr('title','');
			$(this).removeClass(thsClass);
			$(".block").hide();
			if( directN == "next"){
				$(this).addClass(NextClass);
				$(".pos-3").attr('title','active');
				$(".pos-3").each(function(){
					var firsCls = $(this).attr('class').split(' ')[0];
					/*alert(firsCls);*/
					$(".service-list li[title='"+firsCls+"']").addClass('active');
					$(".block[id='"+firsCls+"']").show();
				});
				
			}
			else if( directN == "prev"){
				$(this).addClass(prevClass);
				nvalue = nvalue +1 ;
				$(".pos-3").attr('title','active');
				$(".pos-3").each(function(){
					var firsCls = $(this).attr('class').split(' ')[0];
					/*alert(firsCls);*/
					$(".service-list li[title='"+firsCls+"']").addClass('active');
					$(".block[id='"+firsCls+"']").show();
				});
			}
		});
	});
	$("ul.services-wheel li").click(function(){
			var change = $(this).siblings(".pos-3").attr('class').split(' ')[0];
			$('.'+change).removeClass("pos-3");
			$('.'+change).attr('title','');
			$(".block").hide();
			
			var thispos = $(this).attr('class').split(' ')[1];
			var thisser = $(this).attr('class').split(' ')[0];
			$(this).addClass("pos-3");
			$(this).removeClass(thispos);
			$(".pos-3").attr('title','active');
			$(".block[id='"+thisser+"']").show();
			
			$(".service-list li.active").removeClass("active");
			$(".service-list li[title='"+thisser+"']").addClass('active');
			
			$('.'+change).addClass(thispos);
	});

}

$(window).scroll(function(e){
    var scrolled = $(window).scrollTop();
    
    if($(window).width() > 768){
        $(".intro-container").css({'background-position':'100% '+ (270-( scrolled * 0.2))  +'px'});
		/* $(".intro-container").css({'background-size':( scrolled * 0.07)  +'%'});*/
							
	 
       $(".intro-container > .img-wrapper").css('-webkit-transform','rotate('+(40 - (scrolled)*0.1)+'deg)'); 
       $(".intro-container > .img-wrapper").css('-moz-transform','rotate('+(40 - (scrolled)*0.1)+'deg)');
       $(".intro-container > .img-wrapper").css('transform','rotate('+(40 - (scrolled)*0.1)+'deg)');
   
    $(".intro-container > .img-wrapper").css({bottom:(0 + (scrolled)*0.4)});
//    $(".title").css({marginLeft:((scrolled)*0.4)});
    
    
    }
    
    
});

// Depency on Jquery + http://gsgd.co.uk/sandbox/jquery/easing/jquery.easing.1.3.js [Must Include]
 
/*if (window.addEventListener) window.addEventListener('DOMMouseScroll', wheel, false);
window.onmousewheel = document.onmousewheel = wheel;
 
function wheel(event) {
    var delta = 0;
    if (event.wheelDelta) delta = event.wheelDelta / 120;
    else if (event.detail) delta = -event.detail / 3;
 
    handle(delta);
    if (event.preventDefault) event.preventDefault();
    event.returnValue = false;
}
 
function handle(delta) {
    var time = 1000; // delay time
    var distance = 500; // delta point 
    // Dom where it will apply 
    $('html, body').stop().animate({
        scrollTop: $(window).scrollTop() - (distance * delta)
    }, time );
}*/
