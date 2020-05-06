@extends('layouts/master')

@section('title', 'Оренда інструментів у Львові і Львівській області | Доставка від 100 грн.')
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