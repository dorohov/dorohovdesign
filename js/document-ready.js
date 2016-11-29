'use strict';


window.onerror = function(error, url, lineNumber, column, errorObj) {
	console.log('Error FECSS: ' + url + ':' + lineNumber + ':' + column + ': ' + JSON.stringify(error) + '\n' + JSON.stringify(errorObj));
	return;
}


function fecss_ScreenJS(){var e=this;e.screen={w:0,h:0,type:"xs",orientation:"portrait"},e.__resizefunctions={xs:{default:[],portrait:[],landscape:[]},sm:{default:[],portrait:[],landscape:[]},md:{default:[],portrait:[],landscape:[]},lg:{default:[],portrait:[],landscape:[]}},e.isXS=function(){return e.screen.w<768},e.isSM=function(){return e.screen.w<992&&e.screen.w>767},e.isMD=function(){return e.screen.w<1200&&e.screen.w>991},e.isLG=function(){return e.screen.w>1199},e.screenIs=function(){var n="noname";return e.isXS()?n="xs":e.isSM()?n="sm":e.isMD()?n="md":e.isLG()&&(n="lg"),n},e.isPortrait=function(){return e.screen.h>e.screen.w},e.isLandscape=function(){return e.screen.w>e.screen.h},e.orientationIs=function(){var n="noname";return e.isPortrait()?n="portrait":e.isLandscape()&&(n="landscape"),n},e.is=function(n){return n==e.screenIs()||n==e.orientationIs()},e.onResize=function(n,r){if(n.type){var t=e.__resizefunctions[n.type];n.orientation?t[n.orientation].push(r):t.default.push(r)}},e.resizeCall=function(n){if(n.type){if(e.__resizefunctions[n.type].default)for(var r=0;r<e.__resizefunctions[n.type].default.length;r++){var t=e.__resizefunctions[n.type].default[r];t(n)}if(e.__resizefunctions[n.type][n.orientation])for(var r=0;r<e.__resizefunctions[n.type][n.orientation].length;r++){var t=e.__resizefunctions[n.type][n.orientation][r];t(n)}}},e.setScreen=function(){return e.screen.w=$(window).outerWidth(!0),e.screen.h=$(window).outerHeight(!0),e.screen.type=e.screenIs(),e.screen.orientation=e.orientationIs(),e.resizeCall(e.screen),console.log(e.screen),e.screen}}var screenJS=new fecss_ScreenJS;$(window).on("resize",function(){screenJS.setScreen()}),function(e){var n=jQuery.fn.addClass,r=jQuery.fn.removeClass,t=jQuery.fn.toggleClass;e.fn.addClass=function(){var r=n.apply(this,arguments);return e(this).trigger("changeClass",["add"]),r},e.fn.removeClass=function(){var n=r.apply(this,arguments);return e(this).trigger("changeClass",["remove"]),n},e.fn.toggleClass=function(){var n=t.apply(this,arguments);return e(this).trigger("changeClass",["toggle"]),n}}(jQuery);
!function(){"use strict";$(window).load(function(){$("[data-toggle-nav]").click(function(){var a=$(this).data("toggle-nav");$(a).toggleClass("open-sidebar")}),$("[data-collapse-nav]").click(function(){var a=$(this).data("collapse-nav");$(a).toggleClass("open-scroll-sidebar")})})}();
!function(){"use strict";$(window).load(function(){$("[data-toggle-rnav]").click(function(){var t=$(this).data("toggle-rnav");$(t).toggleClass("open"),$(".navbar-site").toggleClass("navbar-site-right-open")})})}();


$(function() {
	
	/*
	Создание триггеров на элементы, в основном, на body
	*/
	$(document.body).on("fecss.default",null,{},function(e){console.log("body trigger:fecss.default")}),$(document.body).on("fecss.init",null,{},function(e){console.log("body trigger:fecss.init");var o=(new Date).getTime();$(document.body).attr("data-created_at",o),$(document.body).trigger("fecss.nedb.visit.insert",[{href:window.location.href,referrer:document.referrer}])}),$(document.body).on("fecss.window.unload",null,{},function(e,o){console.log("body trigger:fecss.window.unload: "+JSON.stringify(o))}),$(document.body).on("fecss.ajax.success",null,{},function(e){console.log("body trigger:fecss.ajax.success")}),$(document.body).on("fecss.keydown",null,{},function(e,o){console.log("body trigger:fecss.keydown: "+JSON.stringify(o))}),$(document.body).on("DOMSubtreeModified",null,{},function(e,o){}),$(document.body).on("wheel mousewheel DOMMouseScroll MozMousePixelScroll",function(e){-e.originalEvent.deltaY||e.originalEvent.detail||e.originalEvent.wheelDelta});
$(document.body).on("click.fecss.page-loader.close-loader",".page-loader .close-loader",{},function(e){e.preventDefault(),console.log("body trigger:click.fecss.page-loader.close-loader"),$(".page-loader").removeClass("active")});
$(document.body).on("azbn._spc__tabs-nav._spc__tabs-heading",null,{},function(t,a,n){t.preventDefault(),1==n&&window.history.pushState({href:a},null,a)}),window.addEventListener("popstate",function(t){t.state&&t.state.target&&$(document.body).trigger("azbn._spc__tabs-nav._spc__tabs-heading",[window.location.pathname,t.state.target,!1])},!1),$(function(){var t=window.location.hash;$('._spc__tabs-nav ._spc__tabs-heading[href="'+t+'"]').trigger("click")});
	
	
	/*
	Событие смены класса body
	*/
	$(document.body).on('changeClass', null, {} ,function(event, event_action){
		// event_action = add || remove || toggle
		
		$(function(){console.log("body trigger:changeClass action:"+event_action)});
	});
	
	
	/*
	События смены класса у любого элемента
	*/
		
	
	
	/*
	Основная логика сайта
	*/
	$(function(){var e="noname-browser",o=navigator.userAgent.toLowerCase();o.indexOf("msie")!=-1&&(e="msie"),o.indexOf("trident")!=-1&&(e="msie"),o.indexOf("konqueror")!=-1&&(e="konqueror"),o.indexOf("firefox")!=-1&&(e="firefox"),o.indexOf("safari")!=-1&&(e="safari"),o.indexOf("chrome")!=-1&&(e="chrome"),o.indexOf("chromium")!=-1&&(e="chromium"),o.indexOf("opera")!=-1&&(e="opera"),o.indexOf("yabrowser")!=-1&&(e="yabrowser"),$("html").eq(0).addClass(e)}),$(function(){$(document.body).on("keydown",function(e){e.stopPropagation(),$(document.body).trigger("fecss.keydown",[{alt:e.altKey,ctrl:e.ctrlKey,shift:e.shiftKey,meta:e.metaKey,key:e.which,liter:String.fromCharCode(e.which)}])})}),$(function(){moment.locale(window.navigator.userLanguage||window.navigator.language)});
$(document.body).on("click.fecss.go-to-top",".go-to-top",function(o){o.preventDefault(),$("html, body").animate({scrollTop:0},777)});
if($(".page-loader .close-loader").on("click",function(e){e.preventDefault(),$(".page-loader").removeClass("active")}),$(document.body).on("click.fecss",".page-loader.active ._czr__preloader-process-container ._czr__preloader-process-level",function(e){e.preventDefault(),$(".page-loader").data("window-can-close-it",!0).data("counter-can-close-it",!0).trigger("fecss.can-close-it")}),$(document.body).on("fecss.can-close-it",".page-loader",function(e){e.preventDefault(),$(this).data("counter-can-close-it")&&$(this).data("window-can-close-it")&&($(this).removeClass("active"),SS&&SS.set("page-loader__visit__"+window.location.pathname,1))}),$(window).load(function(e){$(".page-loader").data("window-can-close-it",!0).trigger("fecss.can-close-it"),$(".page-loader ._czr__preloader-process-container ._czr__preloader-process-level").data("fast-page-loading",!0)}),SS){var __ss_page=parseInt(SS.get("page-loader__visit__"+window.location.pathname));__ss_page&&$(".page-loader").data("window-can-close-it",!0).data("counter-can-close-it",!0).trigger("fecss.can-close-it")}$(function(){var e=$(".page-loader.active"),a=$("._czr__preloader-process-container ._czr__preloader-process-level",e).eq(0);if(a.size()){var t=0;a.css({width:t+"%"}).attr("data-pos",t);var o=setInterval(function(){var e=Math.random();e>.5&&t<99?(t++,$("._azbn__preloader-percent").text(t),a.data("fast-page-loading")&&(t+=5),a.css({width:t+"%"}).attr("data-pos",t)):t>98&&(clearInterval(o),$(".page-loader").data("counter-can-close-it",!0).trigger("fecss.can-close-it"))},42)}});
$(document.body).on("click","._spc__tabs-nav ._spc__tabs-heading",{},function(a){a.preventDefault();var n=$(this),t=n.attr("data-page-url");t&&"undefined"!=typeof t&&"undefined"!=t&&$(document.body).trigger("azbn._spc__tabs-nav._spc__tabs-heading",[t,!0])});
$("img").addClass("img-responsive"),$(".text-block ul").addClass("ul-site");var url=window.location.pathname;$('.navbar-nav a[href="'+url+'"]').parent().addClass("active"),$('._ppc__btn-block .btn-grey-light[href="'+url+'"]').addClass("active"),$("._ipc__slider-carousel .item").eq(0).addClass("active"),$(".text-block table").addClass("table table-bordered"),$(".text-block .table.table-bordered").parent().addClass("table-responsive"),$(".text-block img").parent().addClass("_tb__img"),$(".fancybox").fancybox({prevEffect:"none",nextEffect:"none"}),$(".fancybox-buttons").fancybox({openEffect:"none",closeEffect:"none",prevEffect:"none",nextEffect:"none",closeBtn:!1,helpers:{title:{type:"inside"},buttons:{}},afterLoad:function(){this.title=this.title}}),(device.mobile()||device.tablet())&&$("._fs__soc-block").clone().appendTo(".navbar-collapse"),$('#portfolio-filter option[value="'+url+'"]').attr("selected","selected"),$("#portfolio-filter").on("change",function(){if(""!=$(this).val()||"undefined"!=$(this).val())return window.location=$(this).val(),!1}),$("form.form-site").validationEngine("attach",{promptPosition:"bottomLeft",scroll:!1}),$("._picp__owl").owlCarousel({margin:0,loop:!0,items:1,navText:[],autoplay:!0,smartSpeed:500,autoplayTimeout:1e4,responsive:{0:{nav:!1,dots:!0},768:{nav:!0,dots:!1}}}),retinajs();var nsro=$(".navbar-site-right");nsro.hasClass("open")&&$(this).siblings(".navbar-site").toggleClass("visible"),$("._sbnb__owl").owlCarousel({margin:0,items:1,navText:[],nav:!1,dots:!0}),$("._sbtb__tablet-p-owl").owlCarousel({margin:0,items:1,navText:[],nav:!1,dots:!0}),$("._sbtb__tablet-l-owl").owlCarousel({margin:0,items:1,navText:[],nav:!1,dots:!0});


$(".news-item").hover(function(){$(this).addClass("onhover")},function(){$(this).removeClass("onhover")});
$(".portfolio-item").hover(function(){$(this).addClass("active")},function(){$(this).removeClass("active")}),$(".portfolio-item").on("click",function(){$(this).parent().toggleClass("active")});
$(function(){$(".need-appear .portfolio-item__preview").each(function(a){var e=$(this),r=e.attr("data-background-image"),i=new Image;i.onload=function(){},i.src=r}),$(".need-appear").appear().css({opacity:"0"}),$(".need-appear").on("appear",function(a,e){var r=$(this),i=r.find(".portfolio-item__preview");i.css({"background-image":"url("+i.attr("data-background-image")+")"}),r.css({opacity:"1"})}),$(window).trigger("scroll")});
!function(){var e=$(".scroll-page__mouse");if(SS){var o=SS.get("scroll-page__mouse_viewed");o?e.empty().remove():SS.set("scroll-page__mouse_viewed",1)}}();
	
	
	/*
	Событие смены размера экрана, генерация этого события
	*/
	$(window).on('resize',function(event){
		$(function(){var s={xs:{min:0,max:768},sm:{min:767,max:992},md:{min:991,max:1200},lg:{min:1199,max:1e4}},w={xs:{min:0,max:361},sm:{min:360,max:769},md:{min:768,max:961},lg:{min:960,max:1e4}},i="window-width",d="window-height",h=$(window).outerWidth(!0),m=$(window).outerHeight(!0),a=$("html body").eq(0);h<s.xs.max&&(a.hasClass("window-width-sm")&&a.removeClass("window-width-sm"),a.hasClass("window-width-md")&&a.removeClass("window-width-md"),a.hasClass("window-width-lg")&&a.removeClass("window-width-lg"),i="window-width-xs"),h>s.sm.min&&h<s.sm.max&&(a.hasClass("window-width-xs")&&a.removeClass("window-width-xs"),a.hasClass("window-width-md")&&a.removeClass("window-width-md"),a.hasClass("window-width-lg")&&a.removeClass("window-width-lg"),i="window-width-sm"),h>s.md.min&&h<s.md.max&&(a.hasClass("window-width-xs")&&a.removeClass("window-width-xs"),a.hasClass("window-width-sm")&&a.removeClass("window-width-sm"),a.hasClass("window-width-lg")&&a.removeClass("window-width-lg"),i="window-width-md"),h>s.lg.min&&(a.hasClass("window-width-xs")&&a.removeClass("window-width-xs"),a.hasClass("window-width-sm")&&a.removeClass("window-width-sm"),a.hasClass("window-width-md")&&a.removeClass("window-width-md"),i="window-width-lg"),m<w.xs.max&&(a.hasClass("window-height-sm")&&a.removeClass("window-height-sm"),a.hasClass("window-height-md")&&a.removeClass("window-height-md"),a.hasClass("window-height-lg")&&a.removeClass("window-height-lg"),d="window-height-xs"),m>w.sm.min&&m<w.sm.max&&(a.hasClass("window-height-xs")&&a.removeClass("window-height-xs"),a.hasClass("window-height-md")&&a.removeClass("window-height-md"),a.hasClass("window-height-lg")&&a.removeClass("window-height-lg"),d="window-height-sm"),m>w.md.min&&m<w.md.max&&(a.hasClass("window-height-xs")&&a.removeClass("window-height-xs"),a.hasClass("window-height-sm")&&a.removeClass("window-height-sm"),a.hasClass("window-height-lg")&&a.removeClass("window-height-lg"),d="window-height-md"),m>w.lg.min&&(a.hasClass("window-height-xs")&&a.removeClass("window-height-xs"),a.hasClass("window-height-sm")&&a.removeClass("window-height-sm"),a.hasClass("window-height-md")&&a.removeClass("window-height-md"),d="window-height-lg"),$("html body").eq(0).addClass(i).addClass(d)});
var h_window=$(window).height(),w_window=$(window).width(),h_navbar=$(".navbar-site").outerHeight(!0),h_header=$(".header-site").outerHeight(!0),h_footer=$(".footer-site").outerHeight(!0),h_content_index=h_window-h_navbar,h_content=h_window-h_navbar-h_footer;(device.mobile()||device.tablet())&&($(".navbar").addClass("navbar-fixed-top"),$(".navbar-btn__cols").appendTo(".navbar-header__row")),device.mobile()?($(".content-site").removeAttr("style"),$("._nbr__scroller").removeClass("scroller")):($(".content-site").css("min-height",h_content_index),$(".index-page-content").css("height",h_content_index),$(".full-window").css("min-height",h_content_index)),$(".navbar-fixed-top").autoHidingNavbar(),$(".scroller").mCustomScrollbar();
	}).trigger('resize');
	
	
	/*
	Событие скроллинга экрана, генерация этого события
	*/
	$(window).on('scroll',function(event){
		$(function(){var a=$(document).scrollTop(),o=$(".go-to-top");o.hasClass("active")?a<200&&o.removeClass("active"):a>200&&o.addClass("active")});
var topPos=$(document).scrollTop(),snb=$(".navbar-site");snb.hasClass("scroll-sidebar")?topPos<100?snb.removeClass("scroll-sidebar"):snb.hasClass("open-scroll-sidebar")&&snb.removeClass("open-scroll-sidebar"):topPos>100&&snb.addClass("scroll-sidebar");
var topPosR=$(document).scrollTop(),snbr=$(".navbar-site-right");snbr.hasClass("scroll")?topPosR<100&&snbr.removeClass("scroll"):topPosR>100&&snbr.addClass("scroll");
	}).trigger('scroll');
	
	
	/*
	Событие ухода со страницы
	*/
	window.onbeforeunload = function(event) {
		//alert(event.target.URL);
		$('body').trigger('fecss.window.unload', [event]);
		return;//return false;
	}
	
	
	/*
	Событие инициализации fecss
	*/
	$(document.body).trigger('fecss.init');
	
	
});