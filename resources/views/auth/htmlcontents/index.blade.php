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

    .grid>div {
        max-height: 200px;
        overflow: auto;
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

                    @foreach ($texthtml as $testhtm)
                    <div class="item">{{ $testhtm->id }}</div>
                    <div class="item">{{ $testhtm->page }}</div>
                    <div class="item">{{ $testhtm->descr }}</div>
                    <div class="item">{{ $testhtm->title }}</div>
                    <div class="item">{{ $testhtm->content }}</div>
                    <div class="item"><a class="btn btn-success"
                            href="{{ route('texthtmls.edit', $testhtm) }}">Редактировать</a></div>
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