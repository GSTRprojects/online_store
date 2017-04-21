/* BACKGROUND PHOTO CHANGE */
var activeProductBoxInterval = null;
var activeProductBoxImage = null;

function imgMiniSlider() {
    var nextImg = activeProductBoxImage.find('img.img-show')
            .removeClass('img-show')
            .next('img');

    if (nextImg.length > 0) {
        nextImg.addClass('img-show');
    } else {
        activeProductBoxImage.find('img').first().addClass('img-show');
    }
}
$(document).ready(function () {
    // PRODUCT IMAGE HANDLING
    $(".product-box .product-box-image").mouseenter(function () {
        activeProductBoxImage = $(this);
        if (activeProductBoxInterval != null) {
            clearInterval(activeProductBoxInterval);
        }
        activeProductBoxInterval = setInterval('imgMiniSlider();', 1000);
    }).mouseleave(function () {
        if ($(this).find('img.img-show').index() > 0) {
            $(this).find('img.img-show').removeClass('img-show');
            $(this).find('img').first().addClass('img-show');
        }
        clearInterval(activeProductBoxInterval);
    });


});
/* IMAGE CHANGE HANDLING END */


/* COOKIES */
function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
    var expires = "expires=" + d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function getCookie(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}



function scrolling(positionBasketMenu) {
    var positionScroll = parseInt($(document).scrollTop());
    // ATTACHING BASKET MENU
    if (positionScroll >= parseInt(positionBasketMenu.top)) {
        if (!$("#basket-menu").hasClass('navbar-fixed-top')) {
            $("#basket-menu").addClass('navbar-fixed-top');
        }
    } else {
        if ($("#basket-menu").hasClass('navbar-fixed-top')) {
            $("#basket-menu").removeClass('navbar-fixed-top');
        }
    }
}

$(document).ready(function () {

    isMobile = false;
    if ($(window).width() <= 768) {
        isMobile = true;
    }

//SCROLLING MENU
    $("#basket-menu").wrap("<div id='basket-menu-wrap'></div>");
    $("#basket-menu-wrap").height($("#basket-menu").outerHeight(true));
    var positionBasketMenu = $("#basket-menu").position();

    scrolling(positionBasketMenu);
    $(window).scroll(function () {
        scrolling(positionBasketMenu);
    });
    // SCROLLING MENU END

    // MOBILE MENU HANDLING
    if (isMobile === true) {
        $("#menu").addClass('mobile');

        $("#menu ul.undermenu-first > li > a, #menu.mobile ul.undermenu-first > li > a").click(function () {
            if ($(this).parent().hasClass('mobile-open')) {
                $(this).parent().removeClass('mobile-open');
            } else {
                $(this).parent().addClass('mobile-open');
            }

            return false;
        });
        // OPENING MOBILE MENU
        $("#menu-open").click(function () {

            if ($("#menu").hasClass('show')) {
                $("#menu").removeClass('show');
            } else {
                $("#menu").addClass('show');
            }
            return false;
        });
        // CLOSING MOBILE MENU
        $("#menu-close").click(function () {
            if ($("#menu").hasClass('show')) {
                $("#menu").removeClass('show');
            }
            return false;
        });
    }
    // MOBILE MENU HANDLING END

    //SLIDER PLUGIN
        $(function() {

            $('#mi-slider').catslider();

        });


    // ADDING PRODUCTS TO BASKET ANIMATION
    $('.btn-cart').on('click', function () {
        var cart = $('#basket .fa-shopping-basket');
        var imgtodrag = $(this).parents('.product-box').find(".product-box-image img").eq(0);
        if (imgtodrag) {
            var imgclone = imgtodrag.clone()
                    .offset({
                        top: imgtodrag.offset().top,
                        left: imgtodrag.offset().left
                    })
                    .css({
                        'opacity': '0.5',
                        'position': 'absolute',
                        'height': '150px',
                        'width': '150px',
                        'z-index': '10800'
                    })
                    .appendTo($('body'))
                    .animate({
                        'top': cart.offset().top + 10,
                        'left': cart.offset().left + 10,
                        'width': 75,
                        'height': 75
                    }, 1000, 'easeInOutExpo');

            setTimeout(function () {
                cart.effect("shake", {
                    times: 2
                }, 300);
            }, 1500);

            imgclone.animate({
                'width': 0,
                'height': 0
            }, function () {
                $(this).detach();
            });
        }
    });

    $('#cookiesAccept').click(function(){
        setCookie('cookies-accept', '1', 7);
        $(".cookies-info").hide();
        return false;
    });

    if(getCookie('cookies-accept')!='1'){
        $(".cookies-info").show();
    }

});
