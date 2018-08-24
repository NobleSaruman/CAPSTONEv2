$(document).ready(function() {
    // Load Editor
    let issue_editor = new Quill('#description', {
        modules: {
            toolbar: [
                ['bold', 'italic', 'underline'],
                [{ 'list': 'ordered'}, { 'list': 'bullet' }],
                ['image']
            ]
        },
        placeholder: 'Please describe the issue here...',
        theme: 'snow'  // or 'bubble' (type of style)
    });

    $('#create_post_form').submit(function() {
        $('#description_input').val(issue_editor.container.firstChild.innerHTML);
    });
});
