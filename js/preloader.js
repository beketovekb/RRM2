$(window).on('load', function() {
    $preloader = $('.preloader'),
        $loader = $preloader.find('.preloader');
    $loader.fadeOut();
    $preloader.delay(2000).fadeOut('slow');
});