<!-- https://github.com/gitbrent/bootstrap4-toggle#npm -->
<link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css" rel="stylesheet">  
<script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>


<table id="users_list_table" class="table w-100 table-striped">
    <thead>
        <tr>
            <th scope="col">Kategoria</th>
            <th scope="col">Widoczna</th>
            <th scope="col">Usuń</th>
        </tr>
    </thead>
    <tbody>
    @foreach($categories as $category)
        <tr id={{ $category->id }}>
            <td class="align-middle">{{ $category->name }}</td>
            <td class="align-middle m-toggle"><input id="chkToggle2" type="checkbox" data-toggle="toggle" data-size="sm" {{ $category->disabled?'':'checked' }}></td>
            <td><button class="btn btn-danger m-delete-category"><x-bi-trash style="height: 22px; width: 22px"/></button></td>
        </tr>
    @endforeach
    </tbody>
</table>


<script>
    $('.m-toggle input').change(function() {
        let toggle_state = $(this).is(':checked')?'1':'0';
        let category_id = $(this).closest('tr').attr('id');
        let CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        $.ajax({
            url: "{{ route('updateCategoryDisabledState') }}",
            dataType: 'JSON',
            type:'POST',
            data: {
                _token: CSRF_TOKEN,
                category_id: category_id,
                toggle_state: toggle_state
            }
        });
    })

    $('.m-delete-category').click(function() {
        let category_id = $(this).closest('tr').attr('id');
        let CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        $.ajax({
            url: "{{ route('deleteCategory') }}",
            dataType: 'JSON',
            type:'POST',
            data: {
                _token: CSRF_TOKEN,
                category_id: category_id
            },
            success: function(data) {
                if(data[0] == 'success') {
                    $('#table-container').load('{{ url("admin/categories-table") }}')
                    $('#success-message').html(data[1]);
                    $('#success-message').show().delay(7000).fadeOut();
                } else {
                    $('#error-message').html(data[1]);
                    $('#error-message').show().delay(7000).fadeOut();
                }
                $('#m-add-category').modal('hide');
                
            }
        })
    })

</script>