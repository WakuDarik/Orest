@extends('admin/master')
@isset($category)
@section('title', 'Редактировать категорию '.$category->name)
@else
@section('title', 'Создать категорию')
@endisset
@section('content')

<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    @isset($category) <h1>Редактировать катеогрию {{ $category->name }}</h1> @else <h1>Добавить
                        катеогрию</h1> @endisset
                </div>
                <form method="POST" enctype="multipart/form-data" @isset($category)
                    action="{{ route('categories.update', $category) }}" @else action="{{ route('categories.store') }}"
                    @endisset>
                    @csrf
                    @isset($category)
                    @method('PUT')
                    @endisset

                    <div class="input-group row">
                        <label for="">Название</label>
                        <input type="text" name="name"
                            value="{{ old('name', isset($category) ? $category->name  : null) }}">
                    </div>

                    <div class="input-group row"><label for="">Описание</label><textarea name="description" id=""
                            cols="30" rows="10">{{ old('description', isset($category) ? $category->description  : null) }}
                            </textarea>
                    </div>

                    <div class="input-group row">
                        <label for="">meta Заголовок</label>
                        <input type="text" name="meta_t"
                            value="{{ old('meta_t', isset($category) ? $category->meta_t  : null) }}">
                    </div>
                    <div class="input-group row">
                        <label for="">Заголовок H1</label>
                        <input type="text" name="H1" value="{{ old('H1', isset($category) ? $category->H1  : null) }}">
                    </div>
                    <div class="input-group row">
                        <label for="">meta Ключи (через запятую)</label>
                        <input type="text" name="meta_k"
                            value="{{ old('meta_k', isset($category) ? $category->meta_k  : null) }}">
                    </div>

                    <div class="input-group row"><label for="">meta Описание</label><textarea name="meta_d" id=""
                            cols="30" rows="10">{{ old('meta_d', isset($category) ? $category->meta_d  : null) }}
                        </textarea>
                    </div>
                    <div class="input-group row"><label>Картинка<input type="file" name="iamge"></label>
                    </div>
                    <button type="submit">Добавить</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection