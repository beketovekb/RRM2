AOS.init();

$(window).scroll(function() {
    $(".bg_gray").css("top", ($(this).scrollTop() / 10 * 5) + "px");
    $(".img_fback").css("top", ($(this).scrollTop() / 120 * 5) + "px");
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
    } else {
        $('.header_nav').css('background-color', 'white');
        $('.shadow_up').css('background', 'transparent');
        $('header nav ul a').css('color', 'black');
        $('.logo_light').css('opacity', '0');
        $('.logo_color').css('opacity', '1');
        $('header .soc path').css('fill', '#1e1e1e');
        $('.burger_line').css('background-color', 'black');
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

