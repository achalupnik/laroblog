@extends('layouts.app')


@section('content')
<style>
    #add-category-btn {
        display: flex;
        margin-bottom: 20px;
    }
    #add-category-btn svg {
        margin-right: 7px;
    }
    #m-error-message {
        display: none;
        text-align: center;
        font-size: 18px;
        margin-bottom: 10px;
    }
    #success-message,
    #error-message {
        display: none;
        font-size: 18px;
        width: 350px;
    }
</style>


<button id="add-category-btn" type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#m-add-category"><x-bi-plus-square style="height: 22px; width: 22px"/>Dodaj kategorię</button>

<div id="success-message" class="alert alert-success">Kategoria została zapisana</div>
<div id="error-message" class="alert alert-danger">Kategoria została zapisana</div>

<div id="table-container">
    @include('admin.categories-table')
</div>
{{ $categories->links() }}


<div class="modal fade" id="m-add-category" tabindex="-1" role="dialog" aria-labelledby="m-add-category-title" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Dodawanie nowej kategorii</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div id="m-error-message" class="alert alert-danger"></div>
                <label>Nazwa kategorii:</label>
                <input id="m-i-category-name" class="form-control" type="text">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Zamknij</button>
                <button id="m-b-add-category" type="button" class="btn btn-success">Dodaj kategorię</button>
            </div>
        </div>
    </div>
</div>


   
   <script>
        $('body #chkToggle2').bootstrapToggle();
        $('#m-add-category').on('shown.bs.modal', function () {
            $('#m-i-category-name').trigger('focus')
        })

        $('#m-b-add-category').click(function() {
            let category_name = $('#m-i-category-name').val();
            if(category_name.trim() == '') {
                $('#m-error-message').html('Nie możesz dodać kategorii bez nazwy');
                $('#m-error-message').show().delay(7000).fadeOut();
                return;
            }

            let CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
            $.ajax({
                url: "{{ route('addCategory') }}",
                dataType: 'JSON',
                type:'POST',
                data: {
                    _token: CSRF_TOKEN, 
                    category_name: category_name
                },
                success: function(data) {
                    if(data[0] == 'error') {
                        $('#m-error-message').html(data[1]);
                        $('#m-error-message').show().delay(7000).fadeOut();
                    } else {
                        $('#table-container').load('{{ url("admin/categories-table") }}')
                        $('#m-add-category').modal('hide');
                        $('#error-message').html(data[1]);
                        $('#success-message').show().delay(7000).fadeOut();
                    }
                }
            });
        })

        
    </script>
@endsection  