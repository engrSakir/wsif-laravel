
$(document).ready(function(){
    $(".logout-btn").click(function (){
        Swal.fire({
            title: 'Are you sure?',
            text: "You can login again in this system!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, logout it!'
        }).then((result) => {
            if (result.value) {
                $.ajax({
                    method: 'POST',
                    url: "/logout",
                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                    success: function (response) {
                        if (response.type == 'success'){
                            Swal.fire(
                                'Thank you !',
                                response.message,
                                response.type
                            )
                            location.replace( response.url);
                        }else{
                            Swal.fire(
                                'Sorry !',
                                response.message,
                                response.type
                            )
                        }
                    },
                    error: function (xhr) {
                        var errorMessage = '<div class="card bg-danger">\n' +
                            '                        <div class="card-body text-center p-5">\n' +
                            '                            <span class="text-white">';
                        $.each(xhr.responseJSON.errors, function(key,value) {
                            errorMessage +=(''+value+'<br>');
                        });
                        errorMessage +='</span>\n' +
                            '                        </div>\n' +
                            '                    </div>';
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            footer: errorMessage
                        })
                    },
                })
            }
        })
    });

    // select all check box
    $('.select-all').click(function(event) {
        var checkboxes = document.querySelectorAll('input[type="checkbox"]');
        for (var checkbox of checkboxes) {
            checkbox.checked = true;
        }
    });

    // un select all check box
    $('.un-select-all').click(function(event) {
        var checkboxes = document.querySelectorAll('input[type="checkbox"]');
        for (var checkbox of checkboxes) {
            checkbox.checked = false;
        }
    });

    $('.delete-btn').click(function(event) {
        let url = $(this).val();
        if (!url){
            Swal.fire(
                'Wrong!',
                'Empty URL',
                'warning'
            )
        }else{
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        method: 'DELETE',
                        url: url,
                        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                        success: function (data) {
                            if (data.type == 'success'){
                                Swal.fire(
                                    'Deleted!',
                                    'Your file has been deleted. '+data.message,
                                    'success'
                                )
                                if(data.url){
                                    setTimeout(function() {
                                        location.replace(data.url);
                                    }, 800);//
                                }else{
                                    setTimeout(function() {
                                        location.reload();
                                    }, 800);//
                                }
                            }else{
                                Swal.fire(
                                    'Wrong!',
                                    'Something going wrong. '+data.message,
                                    'warning'
                                )
                            }
                        },
                    })
                }
            })
        }
    });
});
