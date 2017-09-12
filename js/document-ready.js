"use strict";function fecss_ScreenJS(){var e=this;e.screen={w:0,h:0,type:"xs",orientation:"portrait"},e.__resizefunctions={xs:{default:[],portrait:[],landscape:[]},sm:{default:[],portrait:[],landscape:[]},md:{default:[],portrait:[],landscape:[]},lg:{default:[],portrait:[],landscape:[]}},e.isXS=function(){return e.screen.w<768},e.isSM=function(){return e.screen.w<992&&e.screen.w>767},e.isMD=function(){return e.screen.w<1200&&e.screen.w>991},e.isLG=function(){return e.screen.w>1199},e.screenIs=function(){var o="noname";return e.isXS()?o="xs":e.isSM()?o="sm":e.isMD()?o="md":e.isLG()&&(o="lg"),o},e.isPortrait=function(){return e.screen.h>e.screen.w},e.isLandscape=function(){return e.screen.w>e.screen.h},e.orientationIs=function(){var o="noname";return e.isPortrait()?o="portrait":e.isLandscape()&&(o="landscape"),o},e.is=function(o){return o==e.screenIs()||o==e.orientationIs()},e.onResize=function(o,s){if(o.type){var t=e.__resizefunctions[o.type];o.orientation?t[o.orientation].push(s):t.default.push(s)}},e.resizeCall=function(o){if(o.type){if(e.__resizefunctions[o.type].default)for(var s=0;s<e.__resizefunctions[o.type].default.length;s++){var t=e.__resizefunctions[o.type].default[s];t(o)}if(e.__resizefunctions[o.type][o.orientation])for(var s=0;s<e.__resizefunctions[o.type][o.orientation].length;s++){var t=e.__resizefunctions[o.type][o.orientation][s];t(o)}}},e.setScreen=function(){return e.screen.w=$(window).outerWidth(!0),e.screen.h=$(window).outerHeight(!0),e.screen.type=e.screenIs(),e.screen.orientation=e.orientationIs(),e.resizeCall(e.screen),console.log(e.screen),e.screen}}window.onerror=function(e,o,s,t,a){console.log("Error FECSS: "+o+":"+s+":"+t+": "+JSON.stringify(e)+"\n"+JSON.stringify(a))};var screenJS=new fecss_ScreenJS;$(window).on("resize",function(){screenJS.setScreen()}),function(e){var o=jQuery.fn.addClass,s=jQuery.fn.removeClass,t=jQuery.fn.toggleClass;e.fn.addClass=function(){var s=o.apply(this,arguments);return e(this).trigger("changeClass",["add"]),s},e.fn.removeClass=function(){var o=s.apply(this,arguments);return e(this).trigger("changeClass",["remove"]),o},e.fn.toggleClass=function(){var o=t.apply(this,arguments);return e(this).trigger("changeClass",["toggle"]),o}}(jQuery),!function(){$(window).load(function(){$("[data-toggle-nav]").click(function(){var e=$(this).data("toggle-nav");$(e).toggleClass("open-sidebar")}),$("[data-collapse-nav]").click(function(){var e=$(this).data("collapse-nav");$(e).toggleClass("open-scroll-sidebar")})})}(),!function(){$(window).load(function(){$("[data-toggle-rnav]").click(function(){var e=$(this).data("toggle-rnav");$(e).toggleClass("open"),$(".navbar-site").toggleClass("navbar-site-right-open")})})}(),$(function(){if($(document.body).on("fecss.default",null,{},function(e){console.log("body trigger:fecss.default")}),$(document.body).on("fecss.init",null,{},function(e){console.log("body trigger:fecss.init");var o=(new Date).getTime();$(document.body).attr("data-created_at",o),$(document.body).trigger("fecss.nedb.visit.insert",[{href:window.location.href,referrer:document.referrer}])}),$(document.body).on("fecss.window.unload",null,{},function(e,o){console.log("body trigger:fecss.window.unload: "+JSON.stringify(o))}),$(document.body).on("fecss.ajax.success",null,{},function(e){console.log("body trigger:fecss.ajax.success")}),$(document.body).on("fecss.keydown",null,{},function(e,o){console.log("body trigger:fecss.keydown: "+JSON.stringify(o))}),$(document.body).on("DOMSubtreeModified",null,{},function(e,o){}),$(document.body).on("wheel mousewheel DOMMouseScroll MozMousePixelScroll",function(e){-e.originalEvent.deltaY||e.originalEvent.detail||e.originalEvent.wheelDelta}),$(document.body).on("click.fecss.page-loader.close-loader",".page-loader .close-loader",{},function(e){e.preventDefault(),console.log("body trigger:click.fecss.page-loader.close-loader"),$(".page-loader").removeClass("active")}),$(document.body).on("azbn._spc__tabs-nav._spc__tabs-heading",null,{},function(e,o,s){e.preventDefault(),1==s&&window.history.pushState({href:o},null,o)}),window.addEventListener("popstate",function(e){e.state&&e.state.target&&$(document.body).trigger("azbn._spc__tabs-nav._spc__tabs-heading",[window.location.pathname,e.state.target,!1])},!1),$(function(){var e=window.location.hash;$('._spc__tabs-nav ._spc__tabs-heading[href="'+e+'"]').trigger("click")}),$(document.body).on("changeClass",null,{},function(e,o){}),$(function(){var e="noname-browser",o=navigator.userAgent.toLowerCase();o.indexOf("msie")!=-1&&(e="msie"),o.indexOf("trident")!=-1&&(e="msie"),o.indexOf("konqueror")!=-1&&(e="konqueror"),o.indexOf("firefox")!=-1&&(e="firefox"),o.indexOf("safari")!=-1&&(e="safari"),o.indexOf("chrome")!=-1&&(e="chrome"),o.indexOf("chromium")!=-1&&(e="chromium"),o.indexOf("opera")!=-1&&(e="opera"),o.indexOf("yabrowser")!=-1&&(e="yabrowser"),$("html").eq(0).addClass(e)}),$(function(){$(document.body).on("keydown",function(e){e.stopPropagation(),$(document.body).trigger("fecss.keydown",[{alt:e.altKey,ctrl:e.ctrlKey,shift:e.shiftKey,meta:e.metaKey,key:e.which,liter:String.fromCharCode(e.which)}])})}),$(function(){moment.locale(window.navigator.userLanguage||window.navigator.language)}),$(document.body).on("click.fecss.go-to-top",".go-to-top",function(e){e.preventDefault(),$("html, body").animate({scrollTop:0},777)}),$(".page-loader .close-loader").on("click",function(e){e.preventDefault(),$(".page-loader").removeClass("active")}),$(document.body).on("click.fecss",".page-loader.active ._czr__preloader-process-container ._czr__preloader-process-level",function(e){e.preventDefault(),$(".page-loader").data("window-can-close-it",!0).data("counter-can-close-it",!0).trigger("fecss.can-close-it")}),$(document.body).on("fecss.can-close-it",".page-loader",function(e){e.preventDefault(),$(this).data("counter-can-close-it")&&$(this).data("window-can-close-it")&&($(this).removeClass("active"),SS&&SS.set("page-loader__visit__"+window.location.pathname,1))}),$(window).load(function(e){$(".page-loader").data("window-can-close-it",!0).trigger("fecss.can-close-it"),$(".page-loader ._czr__preloader-process-container ._czr__preloader-process-level").data("fast-page-loading",!0)}),SS){var e=parseInt(SS.get("page-loader__visit__"+window.location.pathname));e&&$(".page-loader").data("window-can-close-it",!0).data("counter-can-close-it",!0).trigger("fecss.can-close-it")}$(function(){var e=$(".page-loader.active"),o=$("._czr__preloader-process-container ._czr__preloader-process-level",e).eq(0);if(o.size()){var s=0;o.css({width:s+"%"}).attr("data-pos",s);var t=setInterval(function(){var e=Math.random();e>.5&&s<99?(s++,$("._azbn__preloader-percent").text(s),o.data("fast-page-loading")&&(s+=5),o.css({width:s+"%"}).attr("data-pos",s)):s>98&&(clearInterval(t),$(".page-loader").data("counter-can-close-it",!0).trigger("fecss.can-close-it"))},42)}}),$(document.body).on("click.fecss.scrollto",".scrollto",{},function(e){e.preventDefault(),console.log("body trigger:click.fecss.scrollto");var o=$(this),s=$(o.attr("href")).eq(0),t=parseInt(o.attr("data-scrollto-diff"))||0,a=parseInt(o.attr("data-scrollto-speed"))||777;$("html, body").animate({scrollTop:s.offset().top+t},a)}),$("img").addClass("img-responsive"),$(".text-block ul").addClass("ul-site");var o=window.location.href;$('.navbar-nav a[href="'+o+'"]').parent().addClass("active"),$('._ppc__btn-block .btn-grey-light[href="'+o+'"]').addClass("active"),$("._ipc__slider-carousel .item").eq(0).addClass("active"),$(".text-block table").addClass("table table-bordered"),$(".text-block .table.table-bordered").parent().addClass("table-responsive"),$(".text-block img").parent().addClass("_tb__img"),(device.mobile()||device.tablet())&&$("._fs__soc-block").clone().appendTo(".navbar-collapse"),$('#portfolio-filter option[value="'+o+'"]').attr("selected","selected"),$("#portfolio-filter").on("change",function(){if(""!=$(this).val()||"undefined"!=$(this).val())return window.location=$(this).val(),!1}),$("._apc__form-input[type='tel']").mask("+7 (999) 999-99-99",{placeholder:"+7 (___) ___-__-__"}),$("form.form-site").validationEngine("attach",{promptPosition:"bottomLeft"}),$("#modal-video").on("shown.bs.modal",function(e){$("._msv__video").get(0).play(),$("._apc__bg-video").get(0).pause()}),$("#modal-video").on("hidden.bs.modal",function(e){$("._msv__video").get(0).pause(),$("._apc__bg-video").get(0).play()}),retinajs(),$("._ipc__slider-carousel").carousel({interval:4500,pause:null});var s=$(".navbar-site-right");s.hasClass("open")&&$(this).siblings(".navbar-site").toggleClass("visible"),$(".news-item").hover(function(){$(this).addClass("onhover")},function(){$(this).removeClass("onhover")}),$(".portfolio-item").hover(function(){$(this).addClass("active")},function(){$(this).removeClass("active")}),$(".portfolio-item").on("click",function(){$(this).parent().toggleClass("active")}),$(function(){$(".need-appear .portfolio-item__preview").each(function(e){var o=$(this),s=o.attr("data-background-image"),t=new Image;t.onload=function(){},t.src=s}),$(".need-appear").appear().css({opacity:"0"}),$(".need-appear").on("appear",function(e,o){var s=$(this),t=s.find(".portfolio-item__preview");t.css({"background-image":"url("+t.attr("data-background-image")+")"}),s.css({opacity:"1"})}),$(window).trigger("scroll")}),$(document.body).on("click","._spc__tabs-nav ._spc__tabs-heading",{},function(e){e.preventDefault();var o=$(this),s=o.attr("data-page-url");s&&"undefined"!=typeof s&&"undefined"!=s&&$(document.body).trigger("azbn._spc__tabs-nav._spc__tabs-heading",[s,!0])}),$("._sipc__carousel .item").eq(0).addClass("active"),$("._sipc__carousel").carousel({pause:null}),!function(){var e=$(".scroll-page__mouse");if(SS){var o=SS.get("scroll-page__mouse_viewed");o?e.empty().remove():SS.set("scroll-page__mouse_viewed",1)}}(),$(window).on("resize",function(e){$(function(){var e={xs:{min:0,max:768},sm:{min:767,max:992},md:{min:991,max:1200},lg:{min:1199,max:1e4}},o={xs:{min:0,max:361},sm:{min:360,max:769},md:{min:768,max:961},lg:{min:960,max:1e4}},s="window-width",t="window-height",a=$(window).outerWidth(!0),n=$(window).outerHeight(!0),i=$("html body").eq(0);a<e.xs.max&&(i.hasClass("window-width-sm")&&i.removeClass("window-width-sm"),i.hasClass("window-width-md")&&i.removeClass("window-width-md"),i.hasClass("window-width-lg")&&i.removeClass("window-width-lg"),s="window-width-xs"),a>e.sm.min&&a<e.sm.max&&(i.hasClass("window-width-xs")&&i.removeClass("window-width-xs"),i.hasClass("window-width-md")&&i.removeClass("window-width-md"),i.hasClass("window-width-lg")&&i.removeClass("window-width-lg"),s="window-width-sm"),a>e.md.min&&a<e.md.max&&(i.hasClass("window-width-xs")&&i.removeClass("window-width-xs"),i.hasClass("window-width-sm")&&i.removeClass("window-width-sm"),i.hasClass("window-width-lg")&&i.removeClass("window-width-lg"),s="window-width-md"),a>e.lg.min&&(i.hasClass("window-width-xs")&&i.removeClass("window-width-xs"),i.hasClass("window-width-sm")&&i.removeClass("window-width-sm"),i.hasClass("window-width-md")&&i.removeClass("window-width-md"),s="window-width-lg"),n<o.xs.max&&(i.hasClass("window-height-sm")&&i.removeClass("window-height-sm"),i.hasClass("window-height-md")&&i.removeClass("window-height-md"),i.hasClass("window-height-lg")&&i.removeClass("window-height-lg"),t="window-height-xs"),n>o.sm.min&&n<o.sm.max&&(i.hasClass("window-height-xs")&&i.removeClass("window-height-xs"),i.hasClass("window-height-md")&&i.removeClass("window-height-md"),i.hasClass("window-height-lg")&&i.removeClass("window-height-lg"),t="window-height-sm"),n>o.md.min&&n<o.md.max&&(i.hasClass("window-height-xs")&&i.removeClass("window-height-xs"),i.hasClass("window-height-sm")&&i.removeClass("window-height-sm"),i.hasClass("window-height-lg")&&i.removeClass("window-height-lg"),t="window-height-md"),n>o.lg.min&&(i.hasClass("window-height-xs")&&i.removeClass("window-height-xs"),i.hasClass("window-height-sm")&&i.removeClass("window-height-sm"),i.hasClass("window-height-md")&&i.removeClass("window-height-md"),t="window-height-lg"),$("html body").eq(0).addClass(s).addClass(t)});var o=$(window).height(),s=($(window).width(),$(".navbar-site").outerHeight(!0)),t=($(".header-site").outerHeight(!0),$(".footer-site").outerHeight(!0),$("._bread__btn-project").outerHeight(!0)),a=o-s,n=o-t;(device.mobile()||device.tablet())&&($(".navbar").addClass("navbar-fixed-top"),$(".navbar-btn__cols").appendTo(".navbar-header__row")),device.mobile()?($(".content-site").removeAttr("style"),$("._nbr__scroller").removeClass("scroller")):($(".content-site").css("min-height",a),$(".full-window").css("min-height",a),$("._yarus__block-site").css("height",o),$("._yarus__block-footer").css("height",n),$("._yarus__block-header").css("height",a)),$(".navbar-fixed-top").autoHidingNavbar(),(device.mobile()||device.tablet())&&$("._sipc__heading").prependTo(".services-item-page-content .container-fluid"),device.mobile()&&$("._apc__bg-video").remove()}).trigger("resize"),$(window).on("scroll",function(e){$(function(){var e=$(document).scrollTop(),o=$(".go-to-top");o.hasClass("active")?e<200&&o.removeClass("active"):e>200&&o.addClass("active")});var o=$(document).scrollTop(),s=$(".navbar-site");s.hasClass("scroll-sidebar")?o<100?s.removeClass("scroll-sidebar"):s.hasClass("open-scroll-sidebar")&&s.removeClass("open-scroll-sidebar"):o>100&&s.addClass("scroll-sidebar");var t=$(document).scrollTop(),a=$(".navbar-site-right");a.hasClass("scroll")?t<100&&a.removeClass("scroll"):t>100&&a.addClass("scroll")}).trigger("scroll"),window.onbeforeunload=function(e){$("body").trigger("fecss.window.unload",[e])},$(document.body).trigger("fecss.init")});