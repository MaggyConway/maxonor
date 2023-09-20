$(document).ready(function () {
    $('.color_selection--inner > img[data-key="0"]').addClass('show');

    $('.color_selection .tabs > li').on('click', function(e) {
        let key = $(this).attr('data-key');
        $('.color_selection--inner > img').removeClass('show');
        $('.color_selection--inner > img[data-key="'+key+'"]').addClass('show');
        // console.log(key);
    });
});
