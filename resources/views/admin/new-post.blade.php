@extends('layouts.app')

@section('content')
<style>
    .nav-link {
        color: black;
    }
    nav svg {
        display: inline;
        margin-top: -2px;
    }
    .nav-tabs {
        border: none;
    }
    .tox-statusbar {
        display: none !important;
    }
    #post-container {
        width: 900px;
        margin: auto;
    }
    .title-wrapper {
        position: relative;
    }
    .word-counter {
        position: absolute;
        top: -20px;
        right: 0px;
        font-family: 'nunito';
    }
    button.disabled:hover {
        cursor: not-allowed;
    }
</style>



<div id="post-container">
    <h2 class="mb-4">Stwórz post</h2>
    <select class="form-control mb-4" id="select-category">
        <option selected>Wybierz kategorie</option>
        @foreach($categories as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endforeach
    </select>
    <nav>
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true"><x-bi-list/> Post</a>
            <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false"><x-bi-card-image/> Obrazy</a>
            <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false"><x-bi-link/> Linki</a>
        </div>
    </nav>
    <div class="tab-content mt-1" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
            <form action="{{ route('new_post.store') }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="title-wrapper">
                    <input type="text" class="form-control mb-2 post-title" placeholder="Tytuł" required maxlength="200">
                    <span class="word-counter">0/200</span>
                </div>
                <textarea class="description" name="description"></textarea>
                <button type="submit" class="btn btn-primary float-right mt-4 disabled" disabled>Dodaj post</button>
            </form>
        </div>
        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
            <form action="{{ route('new_post.store') }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="title-wrapper">
                    <input type="text" class="form-control mb-2 post-title" placeholder="Tytuł" required maxlength="200">
                    <span class="word-counter">0/200</span>
                </div>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="inputGroupFile01" accept="image/*">
                    <label class="custom-file-label" for="inputGroupFile01">Wybierz obraz</label>
                </div>
                <button type="submit" class="btn btn-primary float-right mt-4 disabled" disabled>Dodaj post</button>
            </form>
        </div>
        <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
            <form action="{{ route('new_post.store') }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="title-wrapper">
                    <input type="text" class="form-control mb-2 post-title" placeholder="Tytuł" required maxlength="200">
                    <span class="word-counter">0/200</span>
                </div>
                <textarea class="form-control" row="1" name="description" placeholer="URL"></textarea>
                <button type="submit" class="btn btn-primary float-right mt-4 disabled" disabled>Dodaj post</button>
            </form>
        </div>
    </div>
</div>



<script src="{{ asset('node_modules/tinymce/tinymce.js') }}"></script>
<script>
    tinymce.init({
        language : "pl",
        selector:'textarea.description',
        width: 900,
        height: 300
    });

    $('.post-title').on('keyup', function() {
        const max_length = 200;
        let title_length = $(this).val().length;
        $(this).next('span').html(title_length+'/'+max_length);
    })

    $('#select-category').change(function() {
        if($.isNumeric($(this).val())) {
            $('button[type="submit"].disabled').removeAttr('disabled');
            $('button[type="submit"].disabled').removeClass('disabled');
        } else {
            $('button[type="submit"]:not(.disabled)').attr('disabled', true);
            $('button[type="submit"]:not(.disabled)').addClass('disabled');
        }
    })
</script>
@endsection