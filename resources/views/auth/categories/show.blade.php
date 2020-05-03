@extends('admin/master')

@section('title', 'Категория '.$category->name)
@section('content')

<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="grid">
                    <div class="item">#</div>
                    <div class="item">Название</div>
                    <div class="item">Код</div>
                    <div class="item">Описание</div>
                    <div class="item">Кол-во</div>
                    <div class="item">Действия</div>
                    <div class="item">{{ $category->id }}</div>
                    <div class="item">{{ $category->name }}</div>
                    <div class="item">{{ $category->code }}</div>
                    <div class="item">{{ $category->description }}</div>
                    <div class="item">{{ $category->prods->count() }}</div>
                    <div class="item">Действия</div>
                </div>
                <div class="bottom">
                    <a class="btn btn-success" href="{{ route('categories.create') }}">Добавить категорию</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection