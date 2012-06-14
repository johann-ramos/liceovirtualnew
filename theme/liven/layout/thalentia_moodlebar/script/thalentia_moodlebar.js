$(document).ready(function(){
	
	$("span.downarr a").click(function() {
    $("#toolbar").slideUp("slow");
    $("#toolbarbut").fadeIn("fast");    
  });
  
  $("span.showbar a").click(function() {
    $("#toolbar").slideDown("slow");
    $("#toolbarbut").hide();    
  });
  
  $("ul#social li").hover(function() {
		$(this).find("div").fadeIn("slow").show(); 
    $(this).mouseleave(function () {
        $(this).find("div").fadeOut("fast");
    });
  });
  
  $(".menutit, span.downarr a, span.showbar a").click(function() {
   return false;                                         
	});
	
	$("span.menu_title a").click(function() {
		if($(".quickmenu").is(':hidden')){  
			$(".quickmenu").fadeIn("fast"); 
		}
		else if ($(".quickmenu").is(':visible')) { 
      $(".quickmenu").fadeOut("fast"); 
    }
	});
	
	$(document).click(function() {
			$(".quickmenu").fadeOut("fast");
			$(".quickmenu").css({'vivibility': 'hidden'});
	});
	$('.quickmenu').click(function(event) { 
		event.stopPropagation();  
	});

		
});