@extends('admin/master')
@section('title', 'Редактировать товар')
@section('title', 'Создать товар')
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
                    <h1>Редагувати текст {{ $texthtml->descr }}</h1>
                </div>
                <form method="POST" enctype="multipart/form-data" action="{{ route('texthtmls.update', $texthtml) }}">
                    @csrf
                    @method('PUT')

                    <div class="input-group row">
                        @if ($texthtml->loacte_code == 'SEO')
                        <label for="title" class="col-sm-2 col-form-label">title:</label>
                        @else
                        <label for="title" class="col-sm-2 col-form-label">Заголовок: </label>
                        @endif
                        <div class="col-sm-6">
                            @error('title')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <input type="text" class="form-control" name="title" id="title"
                                value="{{ old('title', isset($texthtml) ? $texthtml->title : null) }}">
                        </div>
                    </div>
                    @if($texthtml->loacte_code == 'SEO')
                    <div class="input-group row">
                        <label for="title" class="col-sm-2 col-form-label">meta ключові слова: </label>
                        <div class="col-sm-6">
                            @error('title')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <input type="text" class="form-control" name="key_words" id="key_words"
                                value="{{ old('key_words', isset($texthtml) ? $texthtml->key_words : null) }}">
                        </div>
                    </div>
                    @endif
                    <div class="input-group row">
                        @if ($texthtml->loacte_code == 'SEO')
                        <label for="content" class="col-sm-2 col-form-label">meta
                            description:</label>
                        <input type="text" class="form-control" name="content" id="content"
                            value="{{ old('content', isset($texthtml) ? $texthtml->content : null) }}">
                        @else
                        <label for="content" class="col-sm-2 col-form-label">Текст: </label>
                        <div class="col-sm-6">
                            <textarea name="content" class="form-control" id="content"
                                style="width: 100%">{{$texthtml->content}}</textarea>
                        </div>
                        @endif

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
    tinymce.init({selector:'textarea',plugins: "link",});
</script>

@endsection