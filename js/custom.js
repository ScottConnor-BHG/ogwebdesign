$(document).ready(function() {
    //code for sticky nav
    var stickyNavTop = $('.navbar').offset().top;  
    var stickyNavTopSmall = $('#small-nav').offset().top; 
    var stickyNav = function(){  
    var scrollTop = $(window).scrollTop();  
           
    if (scrollTop > stickyNavTop) {   
        $('.navbar').addClass('sticky');
        $('.navbar').css('position','fixed');

    } else {  
        $('.navbar').removeClass('sticky');   
        $('.navbar').css('position','relative');
    }  
    };
      
    stickyNav();  
  
      
    $(window).scroll(function() {  
        stickyNav();

    });






    document.getElementById('error').style.display="none";
    document.getElementById('success').style.display="none";
    //perform click action on navbar to show chosen tab
    $('body').on('click','.nav-link',function(){

      $(".nav-link").each(function(){
        if($(this).hasClass("active")){
          $(this).removeClass("active");
        }
      });
      $(this).addClass('active');
    });
    //perform click action for sidebar links
    $('body').on('click','.sidebar-link',function(){
      $(".sidebar-link").each(function(){
        if($(this).hasClass("active")){
          $(this).removeClass("active");
        }
      });
      $(this).addClass('active');

    });  
    //form validation and error messaging for contact form
    $('body').on('click','.btn',function(event){
      event.preventDefault();
      document.getElementById('error-msg').innerHTML = "";
      var error = [];
      var name =document.getElementById('name').value;
      var phone =document.getElementById('phone').value;
      var email =document.getElementById('email').value;
      var comment =document.getElementById('comment').value;
      if (name==""){
        error.push("Please fill out Full Name.");
      }
      if (phone==""){
        error.push("Please fill out Phone Number.");
      }
      if (email==""){
        error.push("Please fill out Email.");
      }
      if (comment==""){
        error.push("Please fill out Comment.");
      }
      if(error.length>0)
      {
        error.forEach(function(entry) {
        $('.error-msg').append('<p>'+entry+'</p>');
        });
        
        document.getElementById('success').style.display="none";
        document.getElementById('error').style.display="block";        
      }else
      {
        document.getElementById('error').style.display="none";
        document.getElementById('success').style.display="block";
        document.getElementById('name').value='';
        document.getElementById('phone').value='';
        document.getElementById('email').value='';
        document.getElementById('comment').value='';
      }

  });
});

$(document).ready(function(){
  $(".press-release").each(function(){

    if($(this).children("p").length > 1){
      $('<div><a href="#readmore" class="readmore">Read More&hellip;</a></div>').appendTo($(this));

      $(this).children("p").first().addClass('first-p');
      $(this).children("p").not('.first-p').hide();
      
      $(this).find('.readmore').click(function(){
        $(this).parent().siblings('p').not('.first-p').slideToggle(500);
        return false;
      });
    }

  });
});