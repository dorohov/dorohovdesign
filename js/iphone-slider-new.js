$(function(){$(".iphone-slider").each(function(i){var e=$(this),n=e.find(".iphone-slider__container"),t=e.find(".iphone-slider__dots");t.empty(),n.find(".iphone-slider__item").each(function(i){var e=$(this);e.attr("data-item-index",i);var n=$("<li/>",{class:"iphone-slider__dot"}),d=$("<button/>",{class:"iphone-slider__dot-btn"}).attr("data-item-index",i);d.appendTo(n),n.appendTo(t)}),t.on("click",".iphone-slider__dot .iphone-slider__dot-btn",null,function(i){i.preventDefault();var n=$(this),t=n.closest("li"),d=n.attr("data-item-index")||0,r=e.find('.iphone-slider__item[data-item-index="'+d+'"]');n.closest("ul").find(".iphone-slider__dot").removeClass("is--active"),t.addClass("is--active"),e.find(".iphone-slider__item").removeClass("is--active"),r.addClass("is--active");var o=r.next(".iphone-slider__item");o.length?e.find(".iphone-slider__blurscreen .iphone-slider__blurscreen-inner").attr("style",o.attr("data-style")):e.find(".iphone-slider__blurscreen .iphone-slider__blurscreen-inner").attr("style",e.find(".iphone-slider__item").eq(0).attr("data-style"))}),$(document.body).on("click",".iphone-slider__btn.is--right",{},function(i){i.preventDefault();var e=t.find(".iphone-slider__dot.is--active"),n=e.next(".iphone-slider__dot");n.length?n.find(".iphone-slider__dot-btn").trigger("click"):t.find(".iphone-slider__dot").eq(0).find(".iphone-slider__dot-btn").trigger("click")}),$(document.body).on("click",".iphone-slider__btn.is--left",{},function(i){i.preventDefault();var e=t.find(".iphone-slider__dot.is--active"),n=e.prev(".iphone-slider__dot");n.length?n.find(".iphone-slider__dot-btn").trigger("click"):t.find(".iphone-slider__dot").eq(-1).find(".iphone-slider__dot-btn").trigger("click")}),t.find(".iphone-slider__dot").eq(0).find(".iphone-slider__dot-btn").trigger("click")})});