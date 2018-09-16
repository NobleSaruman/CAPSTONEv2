$(document).ready(function() {
    // Load Editor
    let comment_editor = new Quill('#comment', {
        modules: {
            toolbar: [
                ['bold', 'italic', 'underline'],
                [{ 'list': 'ordered'}, { 'list': 'bullet' }],
                ['image']
            ]
        },
        placeholder: 'Please type your comment here...',
        theme: 'snow'  // or 'bubble' (type of style)
    });

    $('#create_comment_form').submit(function() {
        $('#comment_input').val(comment_editor.container.firstChild.innerHTML);
    });
});
