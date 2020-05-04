@extends('layouts/master')

@section('title', 'Аренда инструментов во Львове и Львовской области | '. $prod->name)
@section('descr', 'Арендовать '.$prod->name.' на день по самым выгодным ценам во Львове и Львовской области.')
@section('content')

<div class="container-fluid">
    <div class="col-md-12">
        <div class="row">
            <h1 class="prod-title">Арендовать {{$prod->name}}</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="prod-single-cart">
                <div class="visual">
                    <div class="slick-slider">
                        <ul class="owl-carousel">
                            <li data-thumb="{{Storage::url($prod->iamge)}}" data-src="{{Storage::url($prod->iamge)}}">
                                <img src="{{Storage::url($prod->iamge)}}" alt="{{$prod->name}}"
                                    title="{{$prod->name}}" />
                            </li>
                            @isset($prod->images)
                            @foreach ($prod->images as $img)
                            <li data-thumb="{{Storage::url($img->iamge)}}" data-src="{{Storage::url($img->iamge)}}">
                                <img src="{{Storage::url($img->iamge)}}" alt="{{$prod->name}}" title="{{$prod->name}}">
                            </li>
                            @endforeach
                            @endisset
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-8">
            <div class="description">
                <div class="zakaz-info">
                    <div class="zakaz-block">
                        <div class="caption">
                            Заказывай <br>в аренду
                        </div>
                        <ul class="zakaz">
                            <li class="telegram"><a rel="nofollow" href="https://t.me/"><img
                                        src="{{Storage::url('ico/telegram.png')}}"
                                        alt="Аренда {{$prod->name}} в telegram"></a></li>
                            <li class="viber"><a rel="nofollow" href="viber://chat?number=%2B380969292020"><img
                                        src="{{Storage::url('ico/viber.png')}}"
                                        alt="Аренда {{$prod->name}} в вайбере"></a></li>
                        </ul>
                    </div>
                </div>
                <div class="product-info">
                    <p>Артикул: 00248</p>
                    <div class="price-wrap">
                        <div class="price-table">
                            <div class="item">
                                <div class="title">
                                    <i class="fa fa-clock-o" aria-hidden="true"></i>
                                    <span>На день</span> </div>
                                <div class="value">
                                    <span>{{$prod->rent1}}</span>
                                </div>
                            </div>
                            {{-- <div class="item">
                                <div class="title">
                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                    <span>1 - 2 дня</span> </div>
                                <div class="value">
                                    <span>{{$prod->rent2}}</span>
                        </div>
                    </div>
                    <div class="item">
                        <div class="title">
                            <i class="fa fa-calendar" aria-hidden="true"></i>
                            <span>3 - 6 дней</span> </div>
                        <div class="value">
                            <span>{{$prod->rent3}}</span>
                        </div>
                    </div>
                    <div class="item">
                        <div class="title">
                            <i class="fa fa-calendar" aria-hidden="true"></i>
                            <span>от 7 дней</span> </div>
                        <div class="value">
                            <span>{{$prod->rent4}}</span>
                        </div>
                    </div> --}}
                    <div class="item">
                        <div class="title">
                            <i class="fa fa-shield" aria-hidden="true"></i>
                            <span>Залог</span> </div>
                        <div class="value">
                            <span>{{$prod->price}}</span>
                        </div>
                    </div>
                </div>
                <div class="btns">
                    <a href="{{route('basket-add', $prod->id)}}"
                        data-title="Настольная циркулярная пила GTS 10 J Professional"
                        class="btn btn-red popup-toggle reserv-show"><span>Арендовать</span></a>
                    <a href="#" class="btn btn-success open-modal" data-modal="rent-now"><span>Арендовать
                            сейчас</span></a>
                </div>
            </div>
        </div>
        <div class="oneclick-block">
            <div class="oneclick-description">
                <div class="img">
                    <img class="" src="/tpl/images/oneclick.png" alt="">
                </div>
                <div class="descr">
                    <div class="caption">Арендовать в один клик</div>
                    <p>Укажите номер и менеджер перезвонит вам!</p>
                </div>
            </div>
            <div class="oneclick-form-block">
                <form action="{{route('one-click-order', $prod->id)}}" method="post" id="ajax_form_one_click"
                    class="ajax_form_one_click oneclick-form ajax_form">
                    <input type="text" name="phone" id="phone-one-click" value="" placeholder="+38(0__) ___-__-__">
                    <button type="submit">Отправить</button>
                    @csrf
                </form>
            </div>
        </div>
        <div class="tabs-section">
            <div class="tabs-titles">
                <div class="item active" data-tab="attr"><span>Характеристики</span></div>
                <div class="item" data-tab="descr"><span>Описание</span></div>
                {{-- <div class="item"><span>Инструкция</span></div> --}}
            </div>
            <div class="tabs-contents">
                <div class="item attr active">
                    @foreach ($prod->propsProds as $prop)
                    @if (!empty($prop->pivot->unit))
                    <div class="prop">
                        <div class="prop-name">
                            {{$prop->name}}
                        </div>
                        <div class="prop-value">
                            {{$prop->pivot->unit}}, {{$prop->unit}}
                        </div>
                    </div>
                    @endif
                    @endforeach
                </div>
                <div class="item descr">
                    {!! $prod->description !!}
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>

@endsection