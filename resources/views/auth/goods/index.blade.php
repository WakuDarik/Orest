@extends('admin/master')

@section('title', 'Товары')
@section('content')
<style>
    .grid {
        grid-template-columns: repeat(8, auto);
    }

    .grid>div:nth-child(-n+8) {
        height: auto;
        background: #6e1600;
        color: #fff;
        border-top: 1px solid #fff;
        border-bottom: 1px solid #fff;
    }
</style>
<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="grid">
                    <div class="item">#</div>
                    <div class="item">Название</div>
                    <div class="item">Код</div>
                    <div class="item">Категория</div>
                    <div class="item">Цена</div>
                    <div class="item">Действия</div>
                    <div class="item">Действия</div>
                    <div class="item">Действия</div>
                    @foreach ($goods as $good)
                    <div class="item">{{ $good->id }}</div>
                    <div class="item">{{ $good->name }}</div>
                    <div class="item">{{ $good->code }}</div>
                    <div class="item">{{ $good->category->name }}</div>
                    <div class="item">{{ $good->price }}</div>

                    <div class="item"><a class="btn btn-success" href="{{ route('goods.show', $good) }}">Открыть</a>
                    </div>

                    <div class="item"><a class="btn btn-success"
                            href="{{ route('goods.edit', $good) }}">Редактировать</a></div>

                    <div class="item">
                        <form method="POST" action="{{ route('goods.destroy', $good) }}">
                            @csrf
                            @method('DELETE')
                            <button class="btn" type="submit">УДАЛИТЬ</button>
                        </form>
                    </div>
                    @endforeach
                </div>
                <div class="bottom">
                    <a class="btn btn-success" href="{{ route('goods.create') }}">Добавить новый товар</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection