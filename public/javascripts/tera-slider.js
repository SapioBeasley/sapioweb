!function(s){"use strict";function i(){t.each(function(){var i=s(this).find("li.slide").length,e=s(this).width(),a=s(this).find("ul.slides"),t=parseInt(a.find(".active").attr("data-index"));a.width(e*i),a.css("margin-left",-e*t+"px"),s(this).find("li.slide").width(100/i+"%"),s(this).find("li.slide").height(s(this).height())})}function e(e,a){var t,l=e.width(),r=e.find("ul.slides"),n=e.find("li").length,h=e.find(".active"),c=parseInt(h.attr("data-index"));a?"right"==a?t=n-1==c?0:c+1:"left"==a&&(t=0==c?n-1:c-1):t=d.x>l/2?n-1==c?0:c+1:0==c?n-1:c-1,r.find("li").removeClass("active"),r.find("[data-index="+t+"]").addClass("active"),r.find(".active").hasClass("dark")?s("body").addClass("dark-slide"):s("body").removeClass("dark-slide"),r.css("margin-left","-"+l*t+"px"),setTimeout(i,0)}var a,t=s(".slider"),d={x:-1},l="right";s(window).resize(function(){i()}),t.mousemove(function(i){var e=s(this);e.hasClass("multi-slides")&&(d.x=i.pageX,d.x>s(window).width()/2?(e.css("cursor","url(images/tera-slider/slide-right-dark.png), e-resize"),s("body").hasClass("dark-slide")&&e.css("cursor","url(images/tera-slider/slide-right.png), e-resize")):(e.css("cursor","url(images/tera-slider/slide-left-dark.png), w-resize"),s("body").hasClass("dark-slide")&&e.css("cursor","url(images/tera-slider/slide-left.png), w-resize")))}),t.each(function(){var t=0,d=s(this);s(this).find("li.slide").each(function(){s(this).attr("data-index",t),t>0&&d.addClass("multi-slides"),0==t&&s(this).addClass("active"),t++});var r=s(this).find(".active");r.hasClass("dark")&&s("body").addClass("dark-slide"),i(),d.hasClass("auto-slide")&&(a=setInterval(function(){e(d,l)},4500))}),s("body").on("tap",".slider",function(){e(s(this));var i=s(this);i.hasClass("auto-slide")&&(clearInterval(a),a=setInterval(function(){e(i,l)},4500))})}(jQuery);