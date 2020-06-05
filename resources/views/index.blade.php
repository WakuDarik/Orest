@extends('layouts/master')

@section('title', $html->firstWhere("loacte_code", 'SEO')->title ? $html->firstWhere("loacte_code", 'SEO')->title :
'Оренда інструментів у Львові і Львівській області | Орендувати ')
@section('keywords', $html->firstWhere("loacte_code", 'SEO')->key_words ? $html->firstWhere("loacte_code",
'SEO')->key_words : 'Оренда інструментів, Інструмент у Львові і Львівській
області, Оренда ')
@section('descr',$html->firstWhere("loacte_code", 'SEO')->content ? $html->firstWhere("loacte_code", 'SEO')->content :
'Орендувати на день за найвигіднішими цінами у
Львові та Львівській області.')

@section('content')
<div class="container-fluid">
    <div class="col-md-12">
        <div class="row">
            <aside class="col-md-3 sidebar hidden-sm-down">
                <div class="kategory-sidebar item">
                    <h2 class="kategory-title"> <span>Каталог обладнання</span> </h2>
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
                            {!! $html->firstWhere("loacte_code", 'baner')->content !!}
                        </div>
                    </div>
                </div>

                <div class="title">
                    <h1>{{$html->firstWhere('loacte_code', 'index_h1')->title}}</h1>
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
                        {!! $html->firstWhere('loacte_code', 'bottom_descr')->content !!}
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