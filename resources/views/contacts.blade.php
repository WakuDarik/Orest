@extends('layouts/master')

@section('title', 'Оренда інструментів у Львові і Львівській області | Контакти')
@section('descr', 'Контакти')
@section('content')
<div class="container-fluid">
    <div class="col-md-12">
        <div class="row">
            <h1 class="page-title" style="width:100%">{!! $html->firstWhere("loacte_code", 'contacts')->title !!}
            </h1>
            <div class="info">
                {!! $html->firstWhere("loacte_code", 'contacts')->content !!}
            </div>
            <div class="contact-map">
                {{-- <div class="info">
                    {!! $html->firstWhere("loacte_code", 'contacts')->content !!}
                </div> --}}
                {{-- <iframe
                    src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1803.4581455605448!2d23.943954830869224!3d49.78888859835206!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sru!2sua!4v1588430741026!5m2!1sru!2sua"
                    width="100%" height="600" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                    tabindex="0"></iframe> --}}
            </div>

        </div>
    </div>

</div>
@endsection