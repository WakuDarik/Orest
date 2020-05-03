@extends('admin/master')

@section('title', 'Заказы')
@section('content')

<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="grid">
                    <div class="item">#</div>
                    <div class="item">Имя</div>
                    <div class="item">Телефон</div>
                    <div class="item">Дата</div>
                    <div class="item">Сумма</div>
                    <div class="item">Действия</div>
                    @foreach ($orders as $order)
                    <div class="item">{{ $order->id }}</div>
                    <div class="item">{{ $order->name }}</div>
                    <div class="item">{{ $order->phone }}</div>
                    <div class="item">{{ $order->created_at }}</div>
                    <div class="item">{{ $order->getFullPrice() }}</div>
                    <div class="item"><a href="{{route('order-show', $order)}}"> Показать </a></div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection