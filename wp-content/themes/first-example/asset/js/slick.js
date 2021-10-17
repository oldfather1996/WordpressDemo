    jQuery(document).ready(function($) {
        $('.slider_about').slick({
            dots: true,
            arrows: false
        });


    });
    jQuery(document).ready(function($) {
        var header = document.getElementById('header');
        var mobileMenu = document.getElementById('mobile-menu');
        var headerHeight = header.clientHeight;
        mobileMenu.onclick = function() {
            var isClose = header.clientHeight === headerHeight;
            if (isClose) {
                header.style.height = 'auto';
            } else {
                header.style.height = null;
            }
        }
    })