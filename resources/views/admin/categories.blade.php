@extends('layouts.app')


@section('content')
<link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css" rel="stylesheet">  
<script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>

<link rel="stylesheet" href="{{ asset('css/categories.css') }}">
<link rel="stylesheet" href="{{ asset('css/loader-animation.css') }}">


@if(Session::has('success_message'))
    <div id="success-message" class="alert alert-success">{{ Session::get('success_message') }}</div>
@endif
@if(Session::has('error_message'))
    <div id="error-message" class="alert alert-danger">{{ Session::get('error_message') }}</div>
@endif

<button id="add-category-btn" type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#m-add-category"><x-bi-plus-square/>Dodaj kategorię</button>

<div id="table-container">
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
                <td id="t-category-name" class="align-middle">{{ $category->name }}</td>
                <td class="align-middle m-toggle"><input id="chkToggle2" type="checkbox" data-toggle="toggle" data-size="sm" {{ $category->disabled?'':'checked' }}></td>
                <td>
                    <form action="{{ route('categories.destroy', $category->id) }}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        {{ method_field('delete') }}
                        <button type="button" class="btn btn-danger t-delete-category"><x-bi-trash/></button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
{{ $categories->links() }}


<div class="modal fade" id="m-add-category" tabindex="-1" role="dialog" aria-labelledby="m-add-category-title" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <form action="{{ route('categories.store') }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Dodawanie nowej kategorii</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                        <label>Nazwa kategorii:</label>
                        <input id="m-i-category-name" name="category_name" class="form-control" type="text" required>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" data-dismiss="modal">Zamknij</button>
                    <button id="m-b-add-category" type="submit" class="btn btn-success">Dodaj kategorię</button>
                </div>
            </form>
        </div>
    </div>
</div>


<div class="modal fade" id="m-confirm" tabindex="-1" role="dialog" aria-labelledby="m-add-category-title" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title w-100 text-center" id="exampleModalLongTitle">Czy na pewno chcesz usunąć tą kategorię?</h5>
            </div>
            <div class="modal-body text-center">
                <input id="m-category-id" type="hidden" name="id">
                <button class="btn btn-secondary" data-dismiss="modal">Zamknij</button>
                <button id="m-b-delete-category" class="btn btn-danger ml-2">Usuń kategorię</button>
            </div>
        </div>
    </div>
</div>

<div class="loader-wrapper d-none">
    <span class="loader"><span class="loader-inner"></span></span>
</div>

   
<script>
    $( document ).ready(function() {
        var deleting_category;
        
        $('.t-delete-category').click(function() {
            deleting_category = $(this).closest('form');
            $('#m-confirm').modal('show');
        })
        
        $('#m-b-delete-category').click(function() {
            $(deleting_category).submit();
        })

        $('body #chkToggle2').bootstrapToggle();
        $('#m-add-category').on('shown.bs.modal', function () {
            $('#m-i-category-name').trigger('focus')
        })

        $('.m-toggle input').change(function() {
            let toggle_state = $(this).is(':checked')?'0':'1';
            let category_id = $(this).closest('tr').attr('id');
            let CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
            $.ajax({
                url: "{{ route('categories.update', '') }}"+'/'+category_id,
                dataType: 'JSON',
                type:'PATCH',
                data: {
                    _token: CSRF_TOKEN,
                    disabled: toggle_state
                }
            });
        })

        $('#success-message').delay(10000).fadeOut();
        $('#error-message').delay(10000).fadeOut();

        $('form').on('submit', function() {
            $('.modal').hide();
            $('.loader-wrapper').removeClass('d-none');
        })
    });
</script>

@endsection  