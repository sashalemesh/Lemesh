(function ($) {
    $('#feedback').submit(function (event) {
        event.preventDefault();

        var formData = $(this).serializeArray();
        console.log(formData);

        $.ajax({
            url: '/ajax.php',
            method: 'get',
            data: formData,
            dataType:'html',
            success: function (response) {
                $('#list').html(response);
            },
            error: function (error){
                console.log(error);
            }
        });
    });
})(jQuery);