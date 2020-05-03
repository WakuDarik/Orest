@extends('layouts/master')

@section('title', 'Контакты | Оренда инструментов во Львове и Львовской области')
@section('descr', 'Контакты')
@section('content')
<div class="container-fluid">
    <div class="col-md-12">
        <div class="row">
            <h1 class="page-title" style="width:100%">Наши контакты</h1>
            <div class="contact-map">
                <div class="info">
                    <span>Телефоны:</span>
                    <a href="tel:+380969292020">096 929 20 20</a>
                    <a href="tel:+380939292020">093 929 20 20</a>
                    <hr />
                    <div class="shudeule">
                        ПН -ПТ с 9:00 до 18:00<br>
                        Субота з 9:00 до 16:00<br>
                        Воскресене - выходной
                    </div>
                    <hr />
                    <div class="addres">
                        Адрес: Львовская область, с. Скнилов-Сокольники (объездная дорога возле заправки шел и гостиницы
                        Галиция)
                    </div>
                </div>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1803.4581455605448!2d23.943954830869224!3d49.78888859835206!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sru!2sua!4v1588430741026!5m2!1sru!2sua"
                    width="100%" height="600" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                    tabindex="0"></iframe>
            </div>

        </div>
    </div>

</div>
@endsection