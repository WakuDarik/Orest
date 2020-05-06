@extends('layouts/master')

@section('title', 'Оренда інструментів у Львові і Львівській області | Всі категорії ')

@section('content')
<div class="container">
    <div class="com-md-12">
        <div class="kategory-list gray-over show">
            @foreach($categories as $category)
            <div class="item">
                <a href="{{ route('category', $category->code) }} ">
                    <div class="visual">
                        <img src="https://budprokat.kiev.ua//assets/cache_image/assets/templates/budprokat/images/akciya/Новое оборудование_1_160x120_793.jpg"
                            alt="Новое оборудование">
                    </div>
                    @isset($category)
                    <span>{{$category->name}}</span>
                    @endisset
                </a>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection