$(document).ready(function() {
    $('.form-vv').submit(function(event) {
        event.preventDefault();
        console.log($('#cat_id').val());
        $.ajax({
            type: $(this).attr('method'),
            url: $(this).attr('action'),
            data: {
                'category_id': $('#cat_id').val(),
                'order_by': $('#order_by').val()
            },
            contentType: false,
            cache: false,
            processData: FormData,
            success: (data) => {
                $('.articles').html(data)
            }
        });
    });
});
