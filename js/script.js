AOS.init();

$(window).scroll(function() {
    $(".bg_gray").css("top", ($(this).scrollTop() / 15 * 5) + "px");
    // $(".img_fback").css("top", ($(this).scrollTop() / 120 * 5) + "px");
    $(".img_feed").css("top", ($(this).scrollTop() / 100 + 5) + "px");
    $(".robo1").css("bottom", ($(this).scrollTop() / 25 * 5) + "px");
    $(".robo2").css("bottom", ($(this).scrollTop() / 25 * 5) + "px");
});




function consoleBG() {
    if ($(window).scrollTop() == 0) {
        $('.header_nav').css('background-color', 'transparent');
        $('.shadow_up').css('background', 'linear-gradient( 180deg, #181824, transparent)');
        $('header nav>ul>a').css('color', 'white');
        $('.logo_light').css('opacity', '1');
        $('.logo_color').css('opacity', '0');
        $('header .soc path').css('fill', 'white');
        $('.burger_line').css('background-color', 'white');
        $('.lang-ru .flag').css('color', 'white');
        $('.language-dropdown .flag').css('color', 'white');
        $('.lang-list .flag').css('color', 'black');
        $('.lang-list .flag').css('box-shadow', '0 5px 5px #00000063');
    } else {
        $('.header_nav').css('background-color', 'white');
        $('.shadow_up').css('background', 'transparent');
        $('header nav ul a').css('color', '#1f1f1f');
        $('.logo_light').css('opacity', '0');
        $('.logo_color').css('opacity', '1');
        $('header .soc path').css('fill', '#1e1e1e');
        $('.burger_line').css('background-color', '#1f1f1f');
        $('.lang-ru .flag').css('color', '#1f1f1f');
        $('.language-dropdown .flag').css('color', '#1f1f1f');
        $('.lang-list .flag').css('color', 'black');
        $('.lang-list .flag').css('box-shadow', '0 5px 5px #00000063');
    }
}
consoleBG();

$(window).scroll(function() {
    consoleBG();
}); 

const anchors = document.querySelectorAll('a[href*="#"]')

for (let anchor of anchors) {
  anchor.addEventListener('click', function (e) {
    e.preventDefault()
    
    const blockID = anchor.getAttribute('href').substr(1)
    
    document.getElementById(blockID).scrollIntoView({
      behavior: 'smooth',
      block: 'start'
    })
  })
}


$(function() {
    $('.burger_menu').click(function() {
        $('.burger>ul').toggleClass('none');
    });
});




$(document).ready(function(){
    $(".lang-flag").click(function(){
      $(".language-dropdown").toggleClass("open");
    });
    $("ul.lang-list li").click(function(){
      $("ul.lang-list li").removeClass("selected");
      $(this).addClass("selected");
      if($(this).hasClass('lang-en')){
        $(".language-dropdown").find(".lang-flag").addClass("lang-en").removeClass("lang-kz").removeClass("lang-ru");
        $("#lang_selected").html("<p>EN</p>")
      }else if($(this).hasClass('lang-ru')){
        $(".language-dropdown").find(".lang-flag").addClass("lang-ru").removeClass("lang-kz").removeClass("lang-en");
      $("#lang_selected").html("<p>PT</p>")
      }else{
        $(".language-dropdown").find(".lang-flag").addClass("lang-kz").removeClass("lang-en").removeClass("lang-ru");
        $("#lang_selected").html("<p>ES</p>")
      }
      $(".language-dropdown").removeClass("open");
    });
  })

