function Midway(){var e=$(".midway-horizontal"),t=$(".midway-vertical");e.each(function(){$(this).css("marginLeft",-$(this).outerWidth()/2)});t.each(function(){$(this).css("marginTop",-$(this).outerHeight()/2)});e.css({display:"inline",position:"absolute",left:"50%"});t.css({display:"inline",position:"absolute",top:"50%"})}$(window).on("load",Midway);$(window).on("resize",Midway)
