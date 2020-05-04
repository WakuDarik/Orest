@extends('layouts/master')

@section('title', 'Главная')
@section('content')
@dd($html)
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
                            {!! $html->where("loacte_code", 'baner')->content !!}
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
                        <h2>Приветствуем Вас на нашем сайте!</h2>
                        <p>Прокат инструмента в Киеве — выбор тех, кто предпочитает качественно выполнять поставленные
                            задачи при минимальных тратах времени и денег.<br><br>Ремонтные и строительные работы, с
                            применением <span class="wo fr-0 replaced" data-num="0">профессионального</span>
                            электроинструмента от ведущих мировых
                            производителей, стали доступными благодаря услугам проката от компании <span class="wo fr-1"
                                data-num="1">Будпрокат в Киеве</span>.<br><br>Внутренние и внешние
                            демонтажные работы становятся минимально <span class="wo fr-2"
                                data-num="2">трудозатратными</span> с использованием такого инструмента, как
                            электрический отбойный молоток, перфоратор. Для прорезания дверных и оконных проемов,
                            отверстий под сейфы, Вам потребуется аренда инструмента в Киеве - <span class="wo fr-3"
                                data-num="3">электрореза</span>, установки алмазного сверления.<br><br>Безопасную и
                            удобную работу на высоте обеспечит аренда лесов строительных, современных вышек и
                            подъемников. Если возникла необходимость быстрой и качественной <span
                                class="wo fr-4 replaced" data-num="4">уборки</span> помещения после ремонтных работ
                            - взять моющий пылесос в аренду от компании <span class="wo fr-5"
                                data-num="5">Будпрокат</span> будет хорошим решением.<br><br>Наша компания
                            постоянно старается расширять арендный парк строительного инструмента для различных работ и
                            радовать своих клиентов новым профессиональным оборудованием.<br><br>Вы всегда можете быть
                            уверены, что сотрудники <span class="wo fr-6" data-num="6">Будпрокат</span> предоставят Вам
                            квалифицированную консультацию по
                            прокату электрического инструмента и помогут подобрать нужную модель
                            оборудования. <span class="wo fr-7 replaced" data-num="7">При
                                выдаче</span> инструмента, его проверяют на работоспособность и проводят вводный
                            инструктаж по его использованию. Таким образом, вероятность возникновения проблем при
                            эксплуатации инструмента сведена к минимуму.<br><br>Мы ценим клиентов, которые выбирают
                            услуги аренда и прокат инструмента в Киеве от компании <span class="wo fr-8"
                                data-num="8">Будпрокат</span>. Специально для них существует разработанная система
                            скидок и выгодных предложений.</p>
                        <p>Если вы не нашли на нашем сайте подходящего инструмента - можно заказать прокат инструментов
                            в Киеве на сайте <a href="https://rentnow.com.ua/ru/kyiv">RentNow</a>. Еще больше
                            предложений по аренде инструментов и оборудования от ведущих арендодателей Киева.</p>
                        <h2>Ваши проблемы — наши решения!</h2>
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