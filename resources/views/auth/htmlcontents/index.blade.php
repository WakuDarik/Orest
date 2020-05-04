@extends('admin/master')

@section('title', 'Товары')
@section('content')
<style>
    .grid {
        grid-template-columns: repeat(6, auto);
    }

    .grid>div:nth-child(-n+6) {
        height: auto;
        background: #6e1600;
        color: #fff;
        border-top: 1px solid #fff;
        border-bottom: 1px solid #fff;
    }

    .grid>div:nth-child(6n+6) {
        overflow: auto;
        max-height: 200px;
    }
</style>
<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="grid">
                    <div class="item">#</div>
                    <div class="item">Страница на сайте</div>
                    <div class="item">Подробнее</div>
                    <div class="item">Заголовок</div>
                    <div class="item">Текст</div>
                    <div class="item">Действия</div>
                    {{-- <div class="item">Действия</div>
                    <div class="item">Действия</div> --}}
                    @foreach ($htmlcontents as $htmlcon)
                    <div class="item">{{ $htmlcon->id }}</div>
                    <div class="item">{{ $htmlcon->page }}</div>
                    <div class="item">{{ $htmlcon->descr }}</div>
                    <div class="item">{{ $htmlcon->title }}</div>
                    <div class="item">{{ $htmlcon->content }}</div>

                    {{-- <div class="item"><a class="btn btn-success" href="{{ route('goods.show', $good) }}">Открыть</a>
                </div> --}}

                <div class="item"><a class="btn btn-success" href="{{ route('index') }}">Редактировать</a></div>

                {{-- <div class="item">
                        <form method="POST" action="{{ route('goods.destroy', $good) }}">
                @csrf
                @method('DELETE')
                <button class="btn" type="submit">УДАЛИТЬ</button>
                </form>
            </div> --}}
            @endforeach
        </div>
        {{-- <div class="bottom">
                    <a class="btn btn-success" href="{{ route('goods.create') }}">Добавить новый товар</a>
    </div> --}}
</div>
</div>
</div>
</div>
@endsection