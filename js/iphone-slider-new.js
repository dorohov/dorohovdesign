$(function(){var l=function(e){return(e=e||0)<10&&(e="0"+e),e};$(".iphone-slider").each(function(e){var s=$(this),i=s.find(".iphone-slider__container"),n=s.find(".iphone-slider__dots"),t=parseInt(s.attr("data-interval-ms"))||0;n.empty(),i.find(".iphone-slider__item").each(function(e){$(this).attr("data-item-index",e);var i=$("<li/>",{class:"iphone-slider__dot"});$("<button/>",{class:"iphone-slider__dot-btn"}).attr("data-item-index",e).appendTo(i),i.appendTo(n)}),s.find(".iphone-slider__count-item_amount").length&&s.find(".iphone-slider__count-item_amount").html(l(n.find(".iphone-slider__dot").length)),n.on("click",".iphone-slider__dot .iphone-slider__dot-btn",null,function(e){e.preventDefault();var i=$(this),n=i.closest("li"),t=parseInt(i.attr("data-item-index")||0);s.find(".iphone-slider__count-item_number").length&&s.find(".iphone-slider__count-item_number").html(l(t+1));var d=s.find('.iphone-slider__item[data-item-index="'+t+'"]');i.closest("ul").find(".iphone-slider__dot").removeClass("is--active"),n.addClass("is--active"),s.find(".iphone-slider__item").removeClass("is--active"),d.addClass("is--active");var r=d.next(".iphone-slider__item");r.length?(s.find(".iphone-slider__blurscreen .iphone-slider__blurscreen-inner").attr("style",r.attr("data-style")),s.find(".iphone-slider__blurscreen .iphone-slider__blurscreen-inner").html(r.attr("data-text"))):(s.find(".iphone-slider__blurscreen .iphone-slider__blurscreen-inner").attr("style",s.find(".iphone-slider__item").eq(0).attr("data-style")),s.find(".iphone-slider__blurscreen .iphone-slider__blurscreen-inner").html(s.find(".iphone-slider__item").eq(0).attr("data-text")))}),s.find(".iphone-slider__btn.is--right").on("click",function(e){e.preventDefault();var i=n.find(".iphone-slider__dot.is--active").next(".iphone-slider__dot");i.length?i.find(".iphone-slider__dot-btn").trigger("click"):n.find(".iphone-slider__dot").eq(0).find(".iphone-slider__dot-btn").trigger("click")}),s.find(".iphone-slider__btn.is--left").on("click",function(e){e.preventDefault();var i=n.find(".iphone-slider__dot.is--active").prev(".iphone-slider__dot");i.length?i.find(".iphone-slider__dot-btn").trigger("click"):n.find(".iphone-slider__dot").eq(-1).find(".iphone-slider__dot-btn").trigger("click")}),s.find(".iphone-slider__btn.is--left, .iphone-slider__btn.is--right, .iphone-slider__dots").on("mouseover",function(e){s.data("interval-pause",1)}),s.find(".iphone-slider__btn.is--left, .iphone-slider__btn.is--right, .iphone-slider__dots").on("mouseout",function(e){s.data("interval-pause",0)}),n.find(".iphone-slider__dot").eq(0).find(".iphone-slider__dot-btn").trigger("click"),0<t&&setInterval(function(){parseInt(s.data("interval-pause"))||0||s.find(".iphone-slider__btn.is--right").trigger("click")},t)})});