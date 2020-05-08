@extends('admin/master')

@section('title', 'Свойства')
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
</style>
<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="{{route('props.sort')}}" method="get">
                    @csrf
                    <legend> Групировать по категории</legend>
                    <select name="category" id="category">
                        @foreach ($categories as $categori)
                        <option value="{{$categori->id}}">{{$categori->name}}</option>
                        @endforeach
                    </select>
                    <button type="submit" class="btn">Групировать</button>
                </form>
                <div class="grid">
                    <div class="item">#</div>
                    <div class="item">Название</div>
                    <div class="item">Код</div>
                    <div class="item">Единицы измерения</div>
                    <div class="item">Действия</div>
                    <div class="item">Действия</div>
                    @foreach ($props as $prop)
                    <div class="item">{{ $prop->id }}</div>
                    <div class="item">{{ $prop->name }}</div>
                    <div class="item">{{ $prop->code }}</div>
                    <div class="item">{{ $prop->unit }}</div>
                    <div class="item"><a class="btn btn-success"
                            href="{{ route('props.edit', $prop) }}">Редактировать</a></div>
                    <div class="item">
                        <form method="POST" action="{{ route('props.destroy', $prop) }}">
                            @csrf
                            @method('DELETE')
                            <button class="btn" type="submit">УДАЛИТЬ</button>
                        </form>
                    </div>
                    @endforeach
                </div>
                <div class="bottom">
                    <a class="btn btn-success" href="{{ route('props.create') }}">Добавить свойство</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection