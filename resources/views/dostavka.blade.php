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

                </div>
            </div>
        </div>
    </div>

</div>
@endsection