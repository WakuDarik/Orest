@extends('admin/master')
@isset($htmlcon)
@section('title', 'Редактировать товар '.$htmlcon->descr)
@else

@section('title', 'Создать товар')
@endisset
@section('content')
<style>
    .more_img img {
        max-width: 250px;
    }

    .tox .tox-editor-container,
    .tox.tox-tinymce {
        width: 920px !important;
        height: 500px !important;
    }
</style>
<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    @isset($htmlcon) <h1>Редактировать товар {{ $htmlcon->name }}</h1> @else <h1>Добавить
                        товар</h1> @endisset
                </div>
                <form method="POST" enctype="multipart/form-data" @isset($htmlcon)
                    action="{{ route('goods.update', $htmlcon) }}" @else action="{{ route('goods.store') }}" @endisset>
                    @csrf
                    @isset($htmlcon)
                    @method('PUT')
                    @endisset

                    <div class="input-group row">
                        <label for="title" class="col-sm-2 col-form-label">Заголовок: </label>
                        <div class="col-sm-6">
                            @error('title')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <input type="text" class="form-control" name="title" id="title"
                                value="{{ old('title', isset($htmlcon) ? $htmlcon->title : null) }}">
                        </div>
                    </div>

                    <div class="input-group row">
                        <label for="content" class="col-sm-2 col-form-label">Текст
                        </label>
                        <div class="col-sm-6">
                            <textarea name="content" class="form-control" id="content" style="width: 100%">@isset($htmlcon) {{ $htmlcon->content }} @endisset
                            </textarea>
                        </div>
                    </div>
                    <button type="submit">Добавить</button>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script>
    tinymce.init({selector:'textarea',plugins: "image imagetools"});
</script>

@endsection