@extends('admin/master')

@section('title', 'Заказы')
@section('content')

<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="grid">
                    <div class="item">#</div>
                    <div class="item">Ім'я</div>
                    <div class="item">Телефон</div>
                    <div class="item">Дата</div>
                    <div class="item">Сума</div>
                    <div class="item">Дія</div>
                    <div class="item">Дія</div>

                    @foreach ($orders as $order)
                    <div class="item">{{ $order->id }}</div>
                    <div class="item">{{ $order->name }}</div>
                    <div class="item">{{ $order->phone }}</div>
                    <div class="item">{{ $order->created_at }}</div>
                    <div class="item">{{ $order->getFullPrice() }}</div>
                    <div class="item"><a href="{{route('order-show', $order)}}"> Показать </a></div>
                    <div class="item">
                        <form method="POST" action="{{ route('order-delete', $order)) }}">
                            @csrf
                            @method('DELETE')
                            <button class="btn" type="submit">ВИДАЛИТИ</button>
                        </form>
                    </div>

                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection