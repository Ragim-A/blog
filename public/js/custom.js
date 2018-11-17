
// $(".status").on('switchChange.bootstrapSwitch', function (event, state) {
//     console.log(event);
//     console.log(state);
//     $.ajax({
//         data:{'status':state, "id":$(this).data('id')},
//         type:"POST",
//         url:$(this).data('url'),
//
//         success: function (url) {
//
//         }
//     })
// })

$(document).ready(function () {
    $('#status').click(function () {
        var value = $(this).val(),
            id = $(this).data('id');

        console.log(id);
        $.ajax({
            type: 'POST',
            url: '{{ route('admin.writer.change') }}',
            dataType: "json",
            data: {
            value: value,
                id:id,
        },
        success:function(response) {
            console.log(response)
        }
    })
    })
})