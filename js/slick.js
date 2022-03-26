$('.responsive').slick({
    dots: true,
    infinite: false,
    speed: 300,
    slidesToShow: 4,
    slidesToScroll: 4,
    autoplay: true,
    autoplaySpeed: 2000,
    infinite: true,
    speed: 600,
    cssEase: 'linear',
    arrows:true,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3,
          infinite: true,
          dots: true
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ]
  });

  $('.one-time').slick({
    dots: true,
    infinite: true,
    speed: 800,
    slidesToShow: 1,
    adaptiveHeight: true,
    autoplay: true,
    autoplaySpeed: 3000,
    arrows:false
  });

  $('.variable-width').slick({
    dots: false,
    infinite: true,
    speed: 800,
    arrows: false,
    speed: 300,
    slidesToShow: 5,
    autoplay: true,
    autoplaySpeed: 3000,
    variableWidth: true
  });
          
  $(document).ready(function(){
    $( '#my-slider' ).sliderPro({
        orientation: "vertical",
         thumbnailsPosition: "bottom",
    });
});