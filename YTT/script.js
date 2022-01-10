
function openNav() {
  document.getElementById("myNav").style.height = "100%";
}

function closeNav() {
  document.getElementById("myNav").style.height = "0%";
}


var flip1 = document.getElementById("toggle-card");
flip1.onclick = function(){
    var className = document.getElementById("toggle-me");
    className.classList.toggle('flip-toggle');
}
var returnElement1 = document.getElementById("return-card");
returnElement1.onclick = function(){
    var className = document.getElementById("toggle-me");
    className.classList.toggle('flip-toggle');
}

var flip2 = document.getElementById("toggle-card-2");
flip2.onclick = function(){
    var className = document.getElementById("toggle-me-2");
    className.classList.toggle('flip-toggle');
}
var returnElement2 = document.getElementById("return-card-2");
returnElement2.onclick = function(){
    var className = document.getElementById("toggle-me-2");
    className.classList.toggle('flip-toggle');
}

var flip3 = document.getElementById("toggle-card-3");
flip3.onclick = function(){
    var className = document.getElementById("toggle-me-3");
    className.classList.toggle('flip-toggle');
}
var returnElement3 = document.getElementById("return-card-3");
returnElement3.onclick = function(){
    var className = document.getElementById("toggle-me-3");
    className.classList.toggle('flip-toggle');
}


window.addEventListener('resize', function(){
    var flip = document.getElementById("test").offsetHeight;
    $(".flip-box").css('height', flip + "px");
    $(".flip-box-back").css('height', flip + "px");

});
window.onload = function(){
    var flip = document.getElementById("test").offsetHeight;
    $(".flip-box").css('height', flip + "px");
    $(".flip-box-back").css('height', flip + "px");
}

const progressBar = document.querySelectorAll("#progress-bar");
const section = document.querySelector("section");

const animateProgressBar =() =>{
    let scrollDistance = section.getBoundingClientRect().top;
    let progressWidth = (scrollDistance / (section.getBoundingClientRect().height - document.documentElement.clientHeight)) * 100;
    let value = Math.floor(progressWidth)
    $("#progress-bar").css("width", value + 1 + "%");
};
window.addEventListener('scroll',animateProgressBar);