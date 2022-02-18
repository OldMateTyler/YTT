
if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
function validate(e){
  
  if(document.getElementById("name").value == ""){
    $("#name").addClass("form-invalid");
  }
  else{
    $("#name").removeClass("form-invalid");
  }
  if(document.getElementById("email").value == "" && emailIsValid(document.getElementById("email").value) == false){
    $("#email").addClass("form-invalid");
  }
  else{
    $("#email").removeClass("form-invalid");
  }
  if(document.getElementById("message").value == ""){
      $("#message").addClass("form-invalid");
  }
  else{
    $("#message").removeClass("form-invalid");
  }
  if(document.getElementById("subject").value == ""){
    $("#subject").addClass("form-invalid");
}
else{
  $("#subject").removeClass("form-invalid");
}
  if(document.getElementById("name").value != "" && document.getElementById("email").value != "" && document.getElementById("message").value != "" && document.getElementById("subject").value != "" && emailIsValid(document.getElementById("email").value) == true){
    e.preventDefault();
    var myModal = new bootstrap.Modal(document.getElementById('myModal'));
    myModal.show();
    var formData = $("#form1").serialize();
    document.getElementById("name").value = "";
    document.getElementById("email").value = "";
    document.getElementById("subject").value = "";
    document.getElementById("message").value = "";
    
    $.ajax({
      url:"index.php",
      method: "POST",
      data:formData,
      error:function(){
        alert("unable to send data to php")
      }
    })
  }
  else{
    e.preventDefault();
  }
  function emailIsValid (email) {
    return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)
  }
}
function openNav(){
    document.getElementById("myNav").style.height = "100%";
      $("body").css("overflow-y",'hidden');
      $("html").css("overflow-y",'hidden');
      $("body").css("pointer-events",'none');
      $("#myNav").css("pointer-events",'auto');
      $('.hidden').css('visibility','hidden');
  }
  function closeNav(){
    document.getElementById("myNav").style.height = "0%";
    $("body").css("overflow-y",'auto');
    $("html").css("overflow-y",'auto');
    $("body").css("pointer-events",'auto');
    setTimeout(displayCarousel, 500);
  
    function displayCarousel(){
      $('.hidden').css('visibility','initial');
    }
    
  }

  var flip1 = document.getElementById("toggle-card");
  flip1.onclick = function(){
      var className = document.getElementById("toggle-me");
      className.classList.toggle('flip-toggle');
  };
  var returnElement1 = document.getElementById("return-card");
  returnElement1.onclick = function(){
      var className = document.getElementById("toggle-me");
      className.classList.toggle('flip-toggle');
  };
  
  var flip2 = document.getElementById("toggle-card-2");
  flip2.onclick = function(){
      var className = document.getElementById("toggle-me-2");
      className.classList.toggle('flip-toggle');
  };
  var returnElement2 = document.getElementById("return-card-2");
  returnElement2.onclick = function(){
      var className = document.getElementById("toggle-me-2");
      className.classList.toggle('flip-toggle');
  };
  
  var flip3 = document.getElementById("toggle-card-3");
  flip3.onclick = function(){
      var className = document.getElementById("toggle-me-3");
      className.classList.toggle('flip-toggle');
  };
  var returnElement3 = document.getElementById("return-card-3");
  returnElement3.onclick = function(){
      var className = document.getElementById("toggle-me-3");
      className.classList.toggle('flip-toggle');
  };

  var flip1 = document.getElementById("toggle-card-c");
  flip1.onclick = function(){
      var className = document.getElementById("toggle-me-c");
      className.classList.toggle('flip-toggle');
  };
  var returnElement1 = document.getElementById("return-card-c");
  returnElement1.onclick = function(){
      var className = document.getElementById("toggle-me-c");
      className.classList.toggle('flip-toggle');
  };
  
  var flip2 = document.getElementById("toggle-card-2-c");
  flip2.onclick = function(){
      var className = document.getElementById("toggle-me-2-c");
      className.classList.toggle('flip-toggle');
  };
  var returnElement2 = document.getElementById("return-card-2-c");
  returnElement2.onclick = function(){
      var className = document.getElementById("toggle-me-2-c");
      className.classList.toggle('flip-toggle');
  };
  
  var flip3 = document.getElementById("toggle-card-3-c");
  flip3.onclick = function(){
      var className = document.getElementById("toggle-me-3-c");
      className.classList.toggle('flip-toggle');
  };
  var returnElement3 = document.getElementById("return-card-3-c");
  returnElement3.onclick = function(){
      var className = document.getElementById("toggle-me-3-c");
      className.classList.toggle('flip-toggle');
  };
  window.onload = function(){
    var flip = document.getElementById("event-card-1").offsetHeight;
    $(".flip-box").css('height', flip + "px");
    $(".flip-box-back").css('height', flip + "px");

    var flip1 = document.getElementById("event-card-2").offsetHeight;
    $(".flip-box").css('height', flip1 + "px");
    $(".flip-box-back").css('height', flip1 + "px");

    var flip2 = document.getElementById("event-card-3").offsetHeight;
    $(".flip-box").css('height', flip2 + "px");
    $(".flip-box-back").css('height', flip2 + "px");

    var flip3 = document.getElementById("event-card-car-1").offsetHeight;
    var flip4 = document.getElementById("event-card-car-2").offsetHeight;
    var flip5 = document.getElementById("event-card-car-3").offsetHeight;

    $(".flip-box-2").css('height', Math.max(flip3,flip4,flip5) + "px");
    $(".flip-box-back-2").css('height', Math.max(flip3,flip4,flip5) + "px");
  }; 

  (function () {
    var win = jQuery(window),
        prev_width = win.width(),
        prev_height = win.height();
    win.on('resize', function () {
        var width = win.width(),
            height = win.height();

        if (width !== prev_width) {
            win.trigger('hresize');
        }
        if (height !== prev_height) {
            win.trigger('vresize');
        }

        prev_width = width;
        prev_height = height;
    });
})();
  
$(window).on('hresize', function () {
  var flip = document.getElementById("event-card-1").offsetHeight;
  $(".flip-box").css('height', flip + "px");
  $(".flip-box-back").css('height', flip + "px");

  var flip1 = document.getElementById("event-card-2").offsetHeight;
  $(".flip-box").css('height', flip1 + "px");
  $(".flip-box-back").css('height', flip1 + "px");

  var flip2 = document.getElementById("event-card-3").offsetHeight;
  $(".flip-box").css('height', flip2 + "px");
  $(".flip-box-back").css('height', flip2 + "px");

  var flip3 = document.getElementById("event-card-car-1").offsetHeight;
  var flip4 = document.getElementById("event-card-car-2").offsetHeight;
  var flip5 = document.getElementById("event-card-car-3").offsetHeight;

  $(".flip-box-2").css('height', Math.max(flip3,flip4,flip5) + "px");
  $(".flip-box-back-2").css('height', Math.max(flip3,flip4,flip5) + "px");
});
  const progressBar = document.querySelectorAll("#progress-bar");
  const section = document.querySelector("section");
  
  const animateProgressBar = function(){
      let scrollDistance = section.getBoundingClientRect().top;
      let progressWidth = (scrollDistance / (section.getBoundingClientRect().height - document.documentElement.clientHeight)) * 100;
      $("#progress-bar").css("width", progressWidth +"%");
  };
  window.addEventListener('scroll',animateProgressBar);
  $(document).ready(function(){
    animateProgressBar();
  })
  var win = $(window);
  
  var allMods = $(".module");
  
  allMods.each(function(i, el) {
    var el = $(el);
    if (el.visible(true)) {
      el.addClass("already-visible"); 
    } 
  });
  
  win.scroll(function(event) {
    
    allMods.each(function(i, el) {
      var el = $(el);
      if (el.visible(true)) {
        el.addClass("come-in");
      } 
    });
    
  });
  $(document).ready(function(){
      var titleText = $(".title-entrance");
        titleText.each(function(i,el){
            var el = $(el);
            el.addClass('entrance-animation');
        })
  })
  $(".fa-angle-up").on('click',function(e){
    const value = e.target;
    value.classList.toggle("fa-angle-up");
    value.classList.toggle("fa-angle-down");
  });
  $(".fa-angle-down").on('click',function(e){
    const value = e.target;
    value.classList.toggle("fa-angle-down");
    value.classList.toggle("fa-angle-up");
  });
  /*
  $('body').css('padding-top', $('.navbar').outerHeight() + 'px')

if ($('.navbar').length > 0) { // check if element exists
    var last_scroll_top = 0;
    $(window).on('scroll', function() {
        scroll_top = $(this).scrollTop();
        if(scroll_top < last_scroll_top) {
            $('.navbar').removeClass('scrolled-down').addClass('scrolled-up');
        }
        else {
            $('.navbar').removeClass('scrolled-up').addClass('scrolled-down');
        }
        last_scroll_top = scroll_top;
    });
}
*/