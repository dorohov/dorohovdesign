$(function(){var e="noname-browser",o=navigator.userAgent.toLowerCase();o.indexOf("msie")!=-1&&(e="msie"),o.indexOf("trident")!=-1&&(e="msie"),o.indexOf("konqueror")!=-1&&(e="konqueror"),o.indexOf("firefox")!=-1&&(e="firefox"),o.indexOf("safari")!=-1&&(e="safari"),o.indexOf("chrome")!=-1&&(e="chrome"),o.indexOf("chromium")!=-1&&(e="chromium"),o.indexOf("opera")!=-1&&(e="opera"),o.indexOf("yabrowser")!=-1&&(e="yabrowser"),$("html").eq(0).addClass(e)}),$(function(){$(document.body).on("keydown",function(e){e.stopPropagation(),$(document.body).trigger("fecss.keydown",[{alt:e.altKey,ctrl:e.ctrlKey,shift:e.shiftKey,meta:e.metaKey,key:e.which,liter:String.fromCharCode(e.which)}])})}),$(function(){moment.locale(window.navigator.userLanguage||window.navigator.language)});
$(document.body).on("click.fecss.go-to-top",".go-to-top",function(o){o.preventDefault(),$("html, body").animate({scrollTop:0},777)});
if($(".page-loader .close-loader").on("click",function(e){e.preventDefault(),$(".page-loader").removeClass("active")}),$(document.body).on("click.fecss",".page-loader.active ._czr__preloader-process-container ._czr__preloader-process-level",function(e){e.preventDefault(),$(".page-loader").data("window-can-close-it",!0).data("counter-can-close-it",!0).trigger("fecss.can-close-it")}),$(document.body).on("fecss.can-close-it",".page-loader",function(e){e.preventDefault(),$(this).data("counter-can-close-it")&&$(this).data("window-can-close-it")&&($(this).removeClass("active"),SS&&SS.set("page-loader__visit__"+window.location.pathname,1))}),$(window).load(function(e){$(".page-loader").data("window-can-close-it",!0).trigger("fecss.can-close-it"),$(".page-loader ._czr__preloader-process-container ._czr__preloader-process-level").data("fast-page-loading",!0)}),SS){var __ss_page=parseInt(SS.get("page-loader__visit__"+window.location.pathname));__ss_page&&$(".page-loader").data("window-can-close-it",!0).data("counter-can-close-it",!0).trigger("fecss.can-close-it")}$(function(){var e=$(".page-loader.active"),a=$("._czr__preloader-process-container ._czr__preloader-process-level",e).eq(0);if(a.size()){var t=0;a.css({width:t+"%"}).attr("data-pos",t);var o=setInterval(function(){var e=Math.random();e>.5&&t<99?(t++,$("._azbn__preloader-percent").text(t),a.data("fast-page-loading")&&(t+=5),a.css({width:t+"%"}).attr("data-pos",t)):t>98&&(clearInterval(o),$(".page-loader").data("counter-can-close-it",!0).trigger("fecss.can-close-it"))},42)}});
$("img").addClass("img-responsive"),$(".text-block ul").addClass("ul-site");var url=window.location.pathname;$('.navbar-nav a[href="'+url+'"]').parent().addClass("active"),$('._ppc__btn-block .btn-grey-light[href="'+url+'"]').addClass("active"),$("._ipc__slider-carousel .item").eq(0).addClass("active"),$(".text-block table").addClass("table table-bordered"),$(".text-block .table.table-bordered").parent().addClass("table-responsive"),$(".text-block img").parent().addClass("_tb__img"),$(".fancybox").fancybox({prevEffect:"none",nextEffect:"none"}),$(".fancybox-buttons").fancybox({openEffect:"none",closeEffect:"none",prevEffect:"none",nextEffect:"none",closeBtn:!1,helpers:{title:{type:"inside"},buttons:{}},afterLoad:function(){this.title=this.title}}),(device.mobile()||device.tablet())&&$("._fs__soc-block").clone().appendTo(".navbar-collapse"),$('#portfolio-filter option[value="'+url+'"]').attr("selected","selected"),$("#portfolio-filter").on("change",function(){if(""!=$(this).val()||"undefined"!=$(this).val())return window.location=$(this).val(),!1}),$("form.form-site").validationEngine("attach",{promptPosition:"bottomLeft",scroll:!1}),$("._picp__owl").owlCarousel({margin:0,loop:!0,items:1,navText:[],autoplay:!0,smartSpeed:500,autoplayTimeout:1e4,responsive:{0:{nav:!1,dots:!0},768:{nav:!0,dots:!1}}}),retinajs();var nsro=$(".navbar-site-right");nsro.hasClass("open")&&$(this).siblings(".navbar-site").toggleClass("visible"),$("._sbnb__owl").owlCarousel({margin:0,items:1,navText:[],nav:!1,dots:!0}),$("._sbtb__tablet-p-owl").owlCarousel({margin:0,items:1,navText:[],nav:!1,dots:!0}),$("._sbtb__tablet-l-owl").owlCarousel({margin:0,items:1,navText:[],nav:!1,dots:!0});


$(".news-item").hover(function(){$(this).addClass("onhover")},function(){$(this).removeClass("onhover")});
$(".portfolio-item").hover(function(){$(this).addClass("active")},function(){$(this).removeClass("active")}),$(".portfolio-item").on("click",function(){$(this).parent().toggleClass("active")});
$(function(){$(".need-appear .portfolio-item__preview").each(function(a){var e=$(this),r=e.attr("data-background-image"),i=new Image;i.onload=function(){},i.src=r}),$(".need-appear").appear().css({opacity:"0"}),$(".need-appear").on("appear",function(a,e){var r=$(this),i=r.find(".portfolio-item__preview");i.css({"background-image":"url("+i.attr("data-background-image")+")"}),r.css({opacity:"1"})}),$(window).trigger("scroll")});
$(document.body).on("click","._spc__tabs-nav ._spc__tabs-heading",{},function(a){a.preventDefault();var n=$(this),t=n.attr("data-page-url");t&&"undefined"!=typeof t&&"undefined"!=t&&$(document.body).trigger("azbn._spc__tabs-nav._spc__tabs-heading",[t,!0])});
!function(){setTimeout(function(){var e=$(".scroll-page__mouse");e.animate({opacity:0},777,function(){e.empty().remove()})},7e3)}();