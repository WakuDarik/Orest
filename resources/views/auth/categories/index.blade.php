@extends('admin/master')

@section('title', 'Заказы')
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
                    @foreach ($categories as $category)
                    <div class="item">{{ $category->id }}</div>
                    <div class="item">{{ $category->name }}</div>
                    <div class="item">{{ $category->code }}</div>
                    <div class="item"><a class="btn btn-success"
                            href="{{ route('categories.show', $category) }}">Открыть</a></div>
                    <div class="item"><a class="btn btn-success"
                            href="{{ route('categories.edit', $category) }}">Редактировать</a></div>
                    <div class="item">
                        <form method="POST" action="{{ route('categories.destroy', $category) }}">
                            @csrf
                            @method('DELETE')
                            <button class="btn" type="submit">УДАЛИТЬ</button>
                        </form>
                    </div>
                    @endforeach
                </div>
                <div class="bottom">
                    <a class="btn btn-success" href="{{ route('categories.create') }}">Добавить категорию</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection