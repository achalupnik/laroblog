$(document).ready(function() {
    $(window).resize(function() {
        var win = $(this);
        if (win.width() >= 1200) {
            $('#sideBarContainerMain').find('.animated').addClass('staticPosition');
            $('.positioned').hover(function() {
                $(this).find('.sideBarIcons').addClass('focused');

                $(this).find('ul').addClass('showUl');
                $(this).find('ul').removeClass('hideUl');
            }, function() {
                $(this).find('.sideBarIcons').removeClass('focused');

                $(this).find('ul').addClass('hideUl');
                $(this).find('ul').removeClass('showUl');
            });
        } else {
            $('#sideBarContainerMain').find('.animated').removeClass('staticPosition');
            $('.positioned').hover(function() {
                $(this).find('.animated').animate({
                     left: '60px'
                });
                $(this).find('.sideBarIcons').addClass('focused');
                $(this).find('.animated label').addClass('focused');

                $(this).find('ul').addClass('showUl');
                $(this).find('ul').removeClass('hideUl');
            }, function() {

                $(this).find('.animated').animate({
                     left: '-190px'
                });
                $(this).find('.sideBarIcons').removeClass('focused');
                $(this).find('.animated label').removeClass('focused');

                $(this).find('ul').addClass('hideUl');
                $(this).find('ul').removeClass('showUl');
            });
        }
    });
});