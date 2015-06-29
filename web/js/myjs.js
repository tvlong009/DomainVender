var numperslide=0;
$(function(){

    $('.bs-wizard-step a').click(function(event) {
        $('.bs-wizard-step').removeClass('active_process');
        $(this).parent('.bs-wizard-step').addClass('active_process');
    });

    var count = $("#domain_tail li").length;
    //Slide show 
    var countslide=1;
    if($(window).width() < 991){
        numperslide = 3;
        if(count <= numperslide)
         {
            $('.arrow_group').hide();

         }
         else{
            $('.arrow_group').show();
         }   
          $("#domain_tail li").css('display','none');
        $("#domain_tail li:first-child").css('display','inline-block');
        $("#domain_tail li:nth-child(2)").css('display','inline-block');
        $("#domain_tail li:nth-child(3)").css('display','inline-block');
    }
    if($(window).width() > 991){
        numperslide = 12; 
           if(count <= numperslide){
            $('.arrow_group').hide();

         }
         else{
            $('.arrow_group').show();
         } 
        $("#domain_tail li").css('display','none');
     $("#domain_tail li:first-child").css('display','inline-block');
        for(var i = 2; i < numperslide+1 ;i++){  
        $("#domain_tail li:nth-child(" + i + ")").css('display','inline-block');
        }  
    }
    
    
    function countSlide(numperslide){
         
        var slidenum=0;
        if(count > numperslide){
            //text
            var result = count % numperslide;
            if(result == 0){
                slidenum = parseInt(count / numperslide);
            }else{
                slidenum = parseInt(count / numperslide) + 1;
            }
        }
        return slidenum;
    }

    $('.right_arrow').click(function(event) {
        var slidenum = countSlide(numperslide);
        if(numperslide == 3){
                if(countslide < slidenum){
            countslide++;
         if(countslide >= slidenum){
            countslide = slidenum;
         }  
         var first = countslide * numperslide -2;
            var second = first + 1;
            var third = second + 1;
          $("#domain_tail li").css('display','none');
            
            $("#domain_tail li:nth-child(" + first + ")").css('display','inline-block');
             $("#domain_tail li:nth-child(" + second + ")").css('display','inline-block');
             $("#domain_tail li:nth-child(" + third + ")").css('display','inline-block');
            
        }
        }else if(numperslide == 12){
            if(countslide < slidenum){
            countslide++;
            if(countslide >= slidenum){
            countslide = slidenum;
            }
             var first = countslide * numperslide - 11;

            $("#domain_tail li").css('display','none');
            for(var i = 0; i < numperslide ;i++){
               
                $("#domain_tail li:nth-child(" + first + ")").css('display','inline-block');
                first++;
            }
        }
        }
    
    });

     $('.left_arrow').click(function(event) {
        var slidenum = countSlide(numperslide);
            
        if(numperslide == 3){
        if(countslide <= slidenum && countslide > 0){
            countslide--;
            if(countslide <= 0){
            countslide = 1;
            }  
            var first = countslide * numperslide - 2;
            var second = first + 1;
            var third = second + 1;
          $("#domain_tail li").css('display','none');
        
            $("#domain_tail li:nth-child(" + first + ")").css('display','inline-block');
             $("#domain_tail li:nth-child(" + second + ")").css('display','inline-block');
             $("#domain_tail li:nth-child(" + third + ")").css('display','inline-block');
            
        }
        }else if(numperslide == 12){
             if(countslide <= slidenum && countslide > 0){
            countslide--;
            if(countslide <= 0){
            countslide = 1;
            }  
             var first = countslide * numperslide - 11;

            $("#domain_tail li").css('display','none');
            for(var i = 0; i < numperslide ;i++){
               
                $("#domain_tail li:nth-child(" + first + ")").css('display','inline-block');
                first++;
            }
        }
        }
    });

   //Scroll to top

      $('.scrollup').click(function () {
          $("html, body").animate({
              scrollTop: 0
          }, 600);
          return false;
      });

//Domain pages
 $('.item_suggestion').click(function(event) {
        
         $(this).find('li').addClass('active_cost_list');
    });
  $('.item_suggestion').dblclick(function(event) {
        
         $(this).find('li').removeClass('active_cost_list');
    });
 $('.item_similar').click(function(event) {
    
         $(this).find('li').addClass('active_cost_list');
    });
$('.item_similar').dblclick(function(event) {
    
         $(this).find('li').removeClass('active_cost_list');
    });

	//Add class active for the navbar components
 $('.nav.navbar-nav a').click(function(event) {
 	$('.nav.navbar-nav a').removeClass('active');
 	$('.nav.navbar-nav span').removeClass('active');
 	$(this).addClass('active');
 	
 });

//Add class actvie for login and register form
$('.login').click(function(event) {
	$('.nav.navbar-nav a').removeClass('active');
	$('.Login_Register span').addClass('active');

	$('#register-dp').hide();
	$('#login-dp').show();
});
$('.register').click(function(event) {
	$('.nav.navbar-nav a').removeClass('active');
	$('.Login_Register span').addClass('active');
	$('#login-dp').hide();
	$('#register-dp').show();
});

	
});

//event on click outside
$(document).click( function(){
    $('#login-dp').hide();
    $('#register-dp').hide();

    //Detach Screen at first load
    if($(window).width() < 1090){
    	$('.login').attr('data-toggle', 'modal');
    	$('.login').attr('data-target', '#LoginForm');
    	$('.register').attr('data-toggle', 'modal');
    	$('.register').attr('data-target', '#LoginForm');

	}
	if($(window).width() >= 1090){
		$('.login').attr('data-toggle', 'dropdown');
    	$('.login').attr('data-target', '#login-dp');
    	$('.register').attr('data-toggle', 'dropdown');
    	$('.register').attr('data-target', '#register-dp');
		
	}
});

// Detach Screen when browser resize
window.onresize = function(event) {
    var count = $("#domain_tail li").length;
if($(window).width() < 991){
    numperslide = 3;
		$('.login').attr('data-toggle', 'modal');
    	$('.login').attr('data-target', '#LoginForm');
    	$('.register').attr('data-toggle', 'modal');
    	$('.register').attr('data-target', '#LoginForm');
        $("#domain_tail li").css('display','none');

        $("#domain_tail li:first-child").show();
        $("#domain_tail li:nth-child(2)").show();
        $("#domain_tail li:nth-child(3)").show();
        
           if(count <= numperslide){
            $('.arrow_group').css('display','none');
         }else{
            $('.arrow_group').css('display','inline');
         }
}
if($(window).width() > 991){
	$('.login').attr('data-toggle', 'dropdown');
    $('.login').attr('data-target', '#login-dp');
    $('.register').attr('data-toggle', 'dropdown');
    $('.register').attr('data-target', '#register-dp');

     numperslide = 12;
     $("#domain_tail li:first-child").show();
        for(var i = 2; i < numperslide+1 ;i++){  
        $("#domain_tail li:nth-child(" + i + ")").show();
        }

          if(count <= numperslide){
            $('.arrow_group').css('display','none');
         }else{
            $('.arrow_group').css('display','inline');
         }
 }

//End Domain pages

// Cart Page

// end Cart page
}
