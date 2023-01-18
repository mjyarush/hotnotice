$(document).ready(function() {
    $('body').prepend($('#hideBlock'));
    $('#hideOrderBlock' ).parent().prepend($('#hideOrderBlock'));
    $('footer' ).prepend($('#hideBlockFooter'));
    $('#hideBTN').click(function () {
        $('#hideBlock').hide();
        $.cookie('HotnoticeHideBanner', 'Yes', {expires: 1, path: '/'});
    });
    if ($.cookie('HotnoticeHideBanner') == 'Yes') {
    }else{
        $('#hideBlock').show();
    };
    $('#hideCatBTN').click(function () {
        $('#hideCatBlock').hide();
        $.cookie('HotnoticeHideCatBlock', 'Yes', {expires: 1, path: '/'});
    });
    if ($.cookie('HotnoticeHideCatBlock') == 'Yes') {
    }else{
        $('#hideCatBlock').show();
    };
    $('#hideFooterBTN').click(function () {
        $('#hideBlockFooter').hide();
        $.cookie('HotnoticeHideFooterBanner', 'Yes', {expires: 1, path: '/'});
    });
    if ($.cookie('HotnoticeHideFooterBanner') == 'Yes') {
    }else{
        $('#hideBlockFooter').show();
    };
    $('#hideOrderBTN').click(function () {
        $('#hideOrderBlock').hide();
        $.cookie('HotnoticeHideOrderBanner', 'Yes', {expires: 1, path: '/'});
    });
    if ($.cookie('HotnoticeHideOrderBanner') == 'Yes') {
    }else{
        $('#hideOrderBlock').show();
    };
    $('#hideMainBTN').click(function () {
        $('#hideMainBlock').hide();
        $.cookie('HotnoticeHideMainBanner', 'Yes', {expires: 1, path: '/'});
    });
    if ($.cookie('HotnoticeHideMainBanner') == 'Yes') {
    }else{
        $('#hideMainBlock').show();
    };
});