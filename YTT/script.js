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

  var flip1c = document.getElementById("toggle-card-c");
  flip1c.onclick = function(){
      var className = document.getElementById("toggle-me-c");
      className.classList.toggle('flip-toggle');
  };
  var returnElement1c = document.getElementById("return-card-c");
  returnElement1c.onclick = function(){
      var className = document.getElementById("toggle-me-c");
      className.classList.toggle('flip-toggle');
  };
  
  var flip2c = document.getElementById("toggle-card-2-c");
  flip2c.onclick = function(){
      var className = document.getElementById("toggle-me-2-c");
      className.classList.toggle('flip-toggle');
  };
  var returnElement2c = document.getElementById("return-card-2-c");
  returnElement2c.onclick = function(){
      var className = document.getElementById("toggle-me-2-c");
      className.classList.toggle('flip-toggle');
  };
  
  var flip3c = document.getElementById("toggle-card-3-c");
  flip3c.onclick = function(){
      var className = document.getElementById("toggle-me-3-c");
      className.classList.toggle('flip-toggle');
  };
  var returnElement3c = document.getElementById("return-card-3-c");
  returnElement3c.onclick = function(){
      var className = document.getElementById("toggle-me-3-c");
      className.classList.toggle('flip-toggle');
  };
  
  
  window.addEventListener('resize', function(){
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
  
  const progressBar = document.querySelectorAll("#progress-bar");
  const section = document.querySelector("section");
  
  const animateProgressBar = function(){
      let scrollDistance = section.getBoundingClientRect().top;
      let progressWidth = (scrollDistance / (section.getBoundingClientRect().height - document.documentElement.clientHeight)) * 100;
      $("#progress-bar").css("width", progressWidth +"%");
  };
  window.addEventListener('scroll',animateProgressBar);
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