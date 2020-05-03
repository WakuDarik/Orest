@extends('admin/master')

@section('title', 'Заказы '. $order->id)
@section('content')
<style>
    .grid {
        grid-template-columns: repeat(4, auto);
    }

    .grid>div:nth-child(-n+4) {
        height: auto;
        background: #6e1600;
        color: #fff;
        border-top: 1px solid #fff;
        border-bottom: 1px solid #fff;
    }

    .grid>div:nth-child(5) {
        padding: 8px;
        border-bottom: 1px solid black;
        align-items: center;
        display: flex;
        background: initial;
        color: black;
    }

    .grid>div:nth-child(6) {
        padding: 8px;
        background: initial;
        color: black;   
        border-bottom: 1px solid black;
        align-items: center;
        display: flex;

    }
</style>
<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Заказ №{{$order->id}}</h1>
                <p>Заказчик <b>{{$order->name}}</b></p>
                <p>Номер телефона <b>{{$order->phone}}</b></p>

            </div>
            <div class="col-md-12">
                <div class="grid">
                    <div class="item">Название</div>
                    <div class="item">Цена</div>
                    <div class="item">Кол-во</div>
                    <div class="item">Стоимость</div>
                    @foreach ($order->prods as $prod)
                    <div class="item">{{ $prod->name }}</div>
                    <div class="item">{{ $prod->rent1 }}</div>
                    <div class="item">{{ $prod->pivot->count }}</div>
                    <div class="item">{{ $prod->getPriceForCount() }}</div>
                    @endforeach
                </div>
                <p>Всего: <b>{{$order->getFullPrice()}}</b></p>
            </div>
        </div>
    </div>
</div>
@endsection