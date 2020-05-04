@extends('layouts/master')

@section('title', 'Аренда инструментов во Львове и Львовской области | Доставка от 100 грн.')
@section('content')
<div class="container-fluid">
    <div class="col-md-12">
        <div class="row">
            <h1 class="page-title" style="width:100%">{!! $html->firstWhere("loacte_code", 'dostavka')->title !!}</h1>
            <div class="delivery-form">
                <div class="contact-form">
                    {!! $html->firstWhere("loacte_code", 'dostavka')->content !!}
                    {{-- <h3>Доставка от 100 грн</h3>
                    <form class="ajax_form radio-time" method="POST" action="{{route('delivery')}}"> --}}
                    <fieldset>
                        <div class="item">
                            <div class="check-list">
                                <div class="check-item">
                                    <label>
                                        <input type="radio" name="time" checked="checked" value="На сегодня - 100 грн">
                                        <div>На<br> сьогодні</div>
                                    </label>
                                </div>
                                <div class="check-item">
                                    <label>
                                        <input type="radio" name="time" value="На завтра - 100 грн">
                                        <div>На<br> завтра</div>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="item name">
                            <label>
                                <input type="text" name="name" required="required" value="">
                                <span class="item_label">Фамилия и имя</span>
                            </label>
                        </div>
                        <div class="item phone">
                            <label>
                                <input type="text" id="phone" placeholder="+38(0__) ___-__-__" name="phone"
                                    required="required" value="">
                                <span class="item_label">Мобильный телефон</span>
                            </label>
                        </div>
                        <input type="submit" name="formContact" value="Отправить" class="btn btn-red">
                    </fieldset>
                    @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection