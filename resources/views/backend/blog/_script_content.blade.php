<script>
    function showModifierEditModal(content_id) {
        var url = '{{ route("admin.blog.content.edit",":content_id") }}';
        var action = url.replace(':content_id', content_id);

        $.ajax({
            url: action,
            cache: false,
            type: 'GET',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (data) {
                $('#editTitle').val(data.title);
                $('#edit_content_id').val(data.id);
                $('#editModifierModal').modal('show');
            },
            error: function () {
                swal({
                    position: 'top-end',
                    icon: 'error',
                    title: 'Something went wrong!',
                    timer: 1500
                })
            }
        });
    };

</script>
