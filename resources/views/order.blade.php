@extends('layouts/master')

@section('title', 'Оренда інструментів у Львові і Львівській області | оформлення замовлення')

@section('content')
<div class="container">
    <div class="com-md-12">
        <div class="kategory-list gray-over show">
            <form action="{{ route('basket-confirm') }}" method="POST" class="getOrder">
                <legend>Оформлення замовлення<br /> Це замовлення надійде менеджеру.<br />Менеджер зв'яжеться з Вами для
                                         підтвердження замовлення.</legend>
                <input type="text" placeholder="І'мя" name="name">

                <input type="text" placeholder="Телефон" name="phone">

                <button type="submit" class="btn btn-success">Оформити замовлення</button>
                @csrf
            </form>
        </div>
    </div>
</div>
@endsection