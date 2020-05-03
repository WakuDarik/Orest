@extends('layouts/master')

@section('title', 'Аренда инструментов во Львове и Львовской области | Оформление заказа')

@section('content')
<div class="container">
    <div class="com-md-12">
        <div class="kategory-list gray-over show">
            <form action="{{ route('basket-confirm') }}" method="POST" class="getOrder">
                <legend>Оформление заказа<br /> Данний заказ поступит менеджеру.<br />Менеджер свяжется с Вами для
                    подтверждения заказа.</legend>
                <input type="text" placeholder="Имя" name="name">

                <input type="text" placeholder="Телефон" name="phone">

                <button type="submit" class="btn btn-success">Оформить заказ</button>
                @csrf
            </form>
        </div>
    </div>
</div>
@endsection