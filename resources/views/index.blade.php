@extends('layouts/master')

@section('title', 'Главная')
@section('content')
@dd($html->get())
<div class="container-fluid">
    <div class="col-md-12">
        <div class="row">
            <aside class="col-md-3 sidebar hidden-sm-down">
                <div class="kategory-sidebar item">
                    <h2 class="kategory-title"> <span>Каталог оборудования</span> </h2>
                    <ul class="kategorien-list">
                        @foreach($categories as $category)
                        <li class="last">
                            @isset($category)
                            <a class="last" href="{{ route('category', $category->code) }}"
                                title="{{$category->name}}">{{$category->name}}</a>
                            @endisset
                        </li>
                        @endforeach
                    </ul>
                </div>
            </aside>
            <div class=" col-sm-12 col-md-9">
                <div class="wysiwyg no-border">
                    <div class="inner " style="margin-bottom: 20px;">
                        <div class=""
                            style="background: #ef0001;color: #fff;padding: 10px 0px;text-align: center;float: left;width: 100%;margin: 0 0 10px 0;">
                            {!! $html->where("loacte_code", 'baner')->first()->content !!}
                        </div>
                    </div>
                </div>

                <div class="title">
                    <h1>Прокат инструмента в Киеве</h1>
                </div>
                <section class="img-catalog">
                    <div class="kategory-list gray-over show">
                        @foreach($categories as $category)
                        <div class="item">
                            <a href="{{ route('category', $category->code) }} ">
                                <div class="visual">
                                    <img src="{{Storage::url($category->iamge)}}" alt="Новое оборудование">
                                </div>
                                @isset($category)
                                <span>{{$category->name}}</span>
                                @endisset
                            </a>
                        </div>
                        @endforeach
                    </div>
                </section>
            </div>
            <div class="col-md-12">
                <div class="wysiwyg">
                    <div class=" text-wrap">
                        {!! $html->where("loacte_code", 'baner')->first()->content !!}
                    </div>
                    </span>
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="col-md-12">
            @foreach($prods as $prod)
            @include('layouts/card', compact('prod'))
            @endforeach
        </div> --}}
</div>
@endsection