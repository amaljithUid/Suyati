/*
( function ( $ ) {


  'use strict';

  // Basic

    $('.horizon-swiper.basic').horizonSwiper();


  // Full width

  $('.horizon-swiper.full-width').horizonSwiper();


  // Fix item width

  $('.horizon-swiper.fix-item-width').horizonSwiper( {
    showItems: 2
  } );


  // Without arrows

  $('.horizon-swiper.without-arrows').horizonSwiper( {
    showItems: 1,
    arrows: false,
    dots: true
  } );

} )( jQuery );

*/


$(function() {

    var menu = $("#nav-bar-filter"),
        subMenu = $(".subfilter"),
        more = $("#more-nav"),
        parent = $(".filter-wrapper"),
        ww = $(window).width(),
        smw = more.outerWidth();

    menu.children("li").each(function () {
        var w = $(this).outerWidth();
        if (w > smw) smw = w + 20;
        return smw
    });
   // more.css('width', smw);

    function contract() {
        var w = 0,
            outerWidth = parent.width() - smw - 50;
        for (i = 0; i < menu.children("li").size(); i++) {
            w += menu.children("li").eq(i).outerWidth();
            if (w > outerWidth) {
                menu.children("li").eq(i - 1).nextAll()
                    .detach()
                    .css('opacity', 0)
                    .prependTo(".subfilter")
                    .stop().animate({
                    'opacity': 1
                }, 300);
                break;
            }
        }
    }

    function expand() {
        var w = 0,
            outerWidth = parent.width() - smw - 20;
        menu.children("li").each(function () {
            w += $(this).outerWidth();
            return w;
        });
        for (i = 0; i < subMenu.children("li").size(); i++) {
            w += subMenu.children("li").eq(i).outerWidth();
            if (w > outerWidth) {
                var a = 0;
                while (a < i) {
                    subMenu.children("li").eq(a)
                        .css('opacity', 0)
                        .detach()
                        .appendTo("#nav-bar-filter")
                        .stop().animate({
                        'opacity': 1
                    }, 300);
                    a++;
                }
                break;
            }
        }
    }
    contract();

    $(window).on("resize", function (e) {
        ($(window).width() > ww) ? expand() : contract();
        ww = $(window).width();
    });





    $('a.hambergmenu').on('click',function(event){
        event.preventDefault();
        $(this).toggleClass('on');        
    });

    $('a.more-btn-page').on('click',function(event){
        event.preventDefault();
        $(this).toggleClass('active');        
    });



    var a = $("#position-div").text();
    $("#job-post").val(a)
}), $(window).load(function() {
    $(".head-banner").each(function() {
        var a = $(this).find("img").attr("src");
        $(this).find("img").hide(), a && $(this).css("background-image", "url(" + a + ")").css("background-repeat", "no-repeat").css("background-size", "cover").css("background-position", "50% 50%")
    }), $("#menu-header li.menu-item-depth-0 > a").addClass("mega-menu-toggle"), $("#menu-header li.menu-item-has-children > .menu-depth-1 .menu-item-depth-1").wrap('<div class="col-sm-4 col-xs-12"><div class="menu-block red"></div></div>'), $("#menu-header li.menu-item-has-children > .menu-depth-1").wrap('<div class="mega-menu"><div class="wrapper"><div class="row"></div></div></div>'), $(".sub-menu").removeClass("hidden"), $(window).width() < 767 ? ($("#menu-header li").append('<span class="expand"></span>'), $("#menu-header li.menu-item-has-children > a").addClass("dropdown-toggle"), $("#menu-header li.menu-item-depth-0>.expand").click(function() {
        $(this).parent().toggleClass("open"), $(this).parent().siblings(".open").children(".mega-menu").hide(), $(this).parent().siblings(".open").removeClass("open"), $(this).siblings(".mega-menu").slideToggle()
    }), $("li.menu-item-depth-1 .expand").click(function() {
        $(this).parent("li.menu-item-depth-1").toggleClass("opened"), $(this).parent().parent().parent().siblings().children().find(".menu-depth-2").hide(), $(this).parent().parent().parent().siblings().children().find(".opened").removeClass("opened"), $(this).siblings(".menu-depth-2").slideToggle()
    })) : $("#menu-header li.menu-item-depth-0").hover(function() {
        $(this).children(".mega-menu").show()
    }, function() {
        $(this).children(".mega-menu").hide()
    }), $("p:empty").remove(), $(".table-wrapper ul li").hide(), $(".table-wrapper ul").each(function() {
        $(this).find("li:lt(2)").show()
    }), $(".toggler_btn").click(function(a) {
        a.preventDefault(), $(this).closest(".table-wrapper").find("li:gt(1)").slideToggle(), $(this).find("i").toggleClass("toggler_btn_up")
    })
}), $(window).resize(function() {
    $(window).width() < 767 && ($("#menu-header li.menu-item-has-children").append('<span class="expand"></span>'), $("li.menu-item-depth-1 ").hover(function() {
        $(this).children(".menu-depth-2").stop(!0, !0).slideDown("fast")
    }, function() {
        $(this).children(".menu-depth-2").stop(!0, !0).slideUp("slow")
    }))
}), $(document).ready(function() {
	/*reny$(".microsite-content-section.cms-row-0").show();
	$("li.type-links0").addClass('active');
	$("li.type-links").click(function() {
		$(".microsite-content-section.cms-row").hide();
		console.log($(this).data('id'));
		var dataId = $(this).data('id');
		$(this).addClass('active');
		$(this).siblings().removeClass('active');
		$(this).parent().parent().siblings('#'+dataId).show();
	});*/
	var pathname = window.location.pathname.split("/");
	var filename = pathname[pathname.length-2];
    if(filename == 'technology') {
        $("li.bigdata").addClass("active");
        $("li.bigdata").parent().parent().siblings('#bigdata').show();
        $('div#bigdata').show();
        $('div.microsite-content-section#bigdata').siblings('.microsite-content-section').hide();
    }
    else if(filename == 'technology-cloud') {
        $("li.cloud").addClass("active");
        $("li.cloud").siblings().removeClass('active');
        $('div#bigdata').hide();
        $('div#cloud').show();
        $('div.microsite-content-section#cloud').siblings('.microsite-content-section').hide();
    }
    else if(filename == 'technology-microsoft') {
        $("li.microsoft-technologies").addClass("active");
        $("li.microsoft-technologies").parent().parent().siblings('#microsoft-technologies').show();
        $('div#bigdata').hide();
        $('div#microsoft-technologies').show();
        $('div.microsite-content-section#microsoft-technologies').siblings('.microsite-content-section').hide();
    }
    else if(filename == 'technology-mobile') {
        $("li.mobile").addClass("active");
        $("li.mobile").parent().parent().siblings('#mobile').show();
        $('div#bigdata').hide();
        $('div#mobile').show();
        $('div.microsite-content-section#mobile').siblings('.microsite-content-section').hide();
    }
    else if(filename == 'technology-open-source') {
        $("li.free-and-open-source-software").addClass("active");
        $("li.free-and-open-source-software").parent().parent().siblings('#free-and-open-source-software').show();
        $('div#bigdata').hide();
        $('div#free-and-open-source-software').show();
        $('div.microsite-content-section#free-and-open-source-software').siblings('.microsite-content-section').hide();
    }
	else if(filename == 'digital-marketing') {
        $("li.digital-marketing").addClass("active");
        $("li.digital-marketing").parent().parent().siblings('#digital-marketing').show();
    }
	else if(filename == 'publishing') {
        $("li.publishing").addClass("active");
        $("li.publishing").parent().parent().siblings('#publishing').show();
    }
	else if(filename == 'healthcare-solutions') {
        $("li.healthcare-solutions").addClass("active");
        $("li.healthcare-solutions").parent().parent().siblings('#healthcare-solutions').show();
    }
	else if(filename == 'manufacturing') {
        $("li.manufacturing").addClass("active");
        $("li.manufacturing").parent().parent().siblings('#manufacturing').show();
    }
	else if(filename == 'retail') {
        $("li.retail").addClass("active");
        $("li.retail").parent().parent().siblings('#retail').show();
    }
    else if(filename == 'service') {
        $("li.cms").addClass("active");
        $("li.cms").parent().parent().siblings('#cms').show();
        $('div#bigdata').hide();
        $('div#cms').show();
        $('div.microsite-content-section#cms').siblings('.microsite-content-section').hide();
    }
    else if(filename == 'services-crm') {
        $("li.crm").addClass("active");
        $("li.crm").parent().parent().siblings('#crm').show();
        $('div#bigdata').hide();
        $('div#crm').show();
        $('div.microsite-content-section#crm').siblings('.microsite-content-section').hide();
    }
    else if(filename == 'services-design') {
        $("li.design").addClass("active");
        $("li.design").parent().parent().siblings('#design').show();
        $('div#bigdata').hide();
        $('div#design').show();
        $('div.microsite-content-section#design').siblings('.microsite-content-section').hide();
    }
    else if(filename == 'services-ecommerce') {
        $("li.ecommerce").addClass("active");
        $("li.ecommerce").parent().parent().siblings('#ecommerce').show();
        $('div#bigdata').hide();
        $('div#ecommerce').show();
        $('div.microsite-content-section#ecommerce').siblings('.microsite-content-section').hide();
    }
    else if(filename == 'services-erp') {
        $("li.erp").addClass("active");
        $("li.erp").parent().parent().siblings('#erp').show();
        $('div#bigdata').hide();
        $('div#erp').show();
        $('div.microsite-content-section#erp').siblings('.microsite-content-section').hide();
    }
    else if(filename == 'services-qa') {
        $("li.qa").addClass("active");
        $("li.qa").parent().parent().siblings('#qa').show();
        $('div#bigdata').hide();
        $('div#qa').show();
        $('div.microsite-content-section#qa').siblings('.microsite-content-section').hide();
    }
    $(".bxslider").bxSlider({
        auto: !0,
        autoControls: !0,
        infiniteLoop: !1,
        pager: !1,
        controls: !0,
        nextSelector: "#slider-next",
        prevSelector: "#slider-prev",
        nextText: "Onward \u2192",
        prevText: "\u2190 Go back"
    }), $("#quote-slider").owlCarousel({
        singleItem: !0,
        autoPlay: !0
    }), $("#menu-about-us").addClass("sidebar-list"), $("#menu-about-us li a").append("<span></span>"), $(".img-block").fancybox({
        padding: 0
    }), $(".current-item").addClass("active"), $(".img-block").fancybox({
        padding: 0
    }), $(".breadcrumb .active").parent().prev().addClass("active"), $("#menu-about-us .current-menu-item").addClass("active"), $("#menu-resource").addClass("sidebar-list"), $("#menu-resource li a").append("<span></span>"), $("#menu-resource .current-menu-item").addClass("active"), $("#partner-carousel .owl-item div").width($("#partner-carousel .owl-item").width()), $(".video").click(function() {
        return $.fancybox({
            padding: 0,
            autoScale: !1,
            transitionIn: "none",
            transitionOut: "none",
            title: this.title,
            width: 640,
            height: 385,
            href: this.href.replace(new RegExp("watch\\?v=", "i"), "v/"),
            type: "swf",
            swf: {
                wmode: "transparent",
                allowfullscreen: "true"
            }
        }), !1
    }), $(".cms-row li").prepend('<i class="fa fa-check-circle"></i>&nbsp;'), $("select").selecter();
    $(this).find("#li_ui_li_gen_1415251559222_1-container .IN-right").text()
});
var sum = 0;
$(".ssb-share.defualt").each(function() {
    sum += parseFloat($(this).text()), console.log(sum);
    $(".count1").text(sum)
}), $(document).ready(function() {
    $(".blog-wrapper img").addClass("img-responsive"), $(".event-text img").addClass("img-responsive"), "" == $("#s").val() && $(".search-results").hide(), $(".s").on("change", function() {
        "" != this.value ? $(".search-results").show() : $(".search-results").hide()
    })
}), $("#resume").click(function() {
    $("#file-upload").click()
}), $("#resume").attr("readonly", "true"), $(document).ready(function() {
    $(".casestudeis-link").fancybox()
}), $(document).ready(function() {
    $(".download").fancybox()
}), $(document).ready(function() {
    $("#toggle-drm").click(function() {
        "10px" == $(".dreamforce").css("right") ? $(".dreamforce").animate({
            right: "-70px"
        }) : $(".dreamforce").animate({
            right: "10px"
        })
    })
});