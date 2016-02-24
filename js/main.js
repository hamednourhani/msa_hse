jQuery('document').ready(function($) {
    $(document).keyup(function (e) {
        if (e.keyCode == 27) { // escape key maps to keycode `27`
            $('.form-search-section').css('display', 'none');
        }
    });
    $('div.header-col-fluid').scrollToFixed({
        minWidth : '700',
        marginTop: 0,
        zIndex:1
    });
    $('#lang_sel_list').scrollToFixed({
        minWidth : '700',
        marginTop: 0,
        zIndex:2
    });
    $('.form-search-wrap'
    ).scrollToFixed({
        minWidth : '700',
        marginTop: 0,
        zIndex:3
    });
});