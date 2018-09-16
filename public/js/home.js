$(document).ready(function() {
    $('.post').click(function() {
        var post_id = $(this).data('id');

        window.location.href = '/post/' + post_id;
    });
});
