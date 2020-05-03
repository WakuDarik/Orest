@extends('layouts/master')

@section('title', 'Корзина ')

@section('content')
<div class="container">
    <div class="starter-template">
        <h1>Корзина</h1>
        <p>Оформление заказа</p>
        <div class="panel">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Название</th>
                        <th>Кол-во</th>
                        <th>Цена</th>
                        <th>Стоимость</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($order->prods as $prod)
                    <tr>
                        <td>
                            <a href="{{ route('prod', [$prod->category->code, $prod->code]) }}">
                                <img height="56px" src="{{ Storage::url($prod->iamge) }}">
                                {{$prod->name}}
                            </a>
                        </td>
                        <td><span class="badge">{{$prod->pivot->count}}</span>
                            <div class="btn-group form-inline">
                                <form action="{{ route('basket-remove', $prod) }}" method="GET">
                                    <button type="submit" class=" btn-danger" href=""><span
                                            class="glyphicon glyphicon-minus" aria-hidden="true">-</span></button>
                                    @csrf
                                </form>
                                <form action="{{ route('basket-add', $prod) }}" method="GET">
                                    <button type="submit" class=" btn-success" href=""><span
                                            class="glyphicon glyphicon-plus" aria-hidden="true">+</span></button>
                                    @csrf
                                </form>
                            </div>
                        </td>
                        <td>{{$prod->rent1}}</td>
                        <td>{{$prod->getPriceForCount()}}</td>
                    </tr>
                    @endforeach

                    <tr>
                        <td colspan="3">Общая стоимость:</td>
                        <td>{{ $order->getFullPrice() }} ₽</td>
                    </tr>
                </tbody>
            </table>
            <br>
            <div class="btn-group pull-right" role="group">
                <a type="button" class="btn btn-success" href="{{ route('order') }}">Оформить
                    заказ</a>
            </div>
        </div>
    </div>
</div>
@endsection