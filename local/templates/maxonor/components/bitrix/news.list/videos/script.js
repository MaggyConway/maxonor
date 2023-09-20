$(document).ready(function() {
    $('.page_videos__item').on('click', function (e) {
        $(this).find('video').attr('controls', 'controls');
        $(this).removeClass('sleep');
    })
});