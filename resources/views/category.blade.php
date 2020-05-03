@extends('layouts/master')

@section('title', 'Категория ' . $category->name)

@section('content')

<div class="container-fluid">
    <div class="col-md-12">
        <div class="row">
            <aside class="col-md-3 sidebar hidden-sm-down">
                <div class="kategory-sidebar item">
                    <h2 class="kategory-title"> <span>Все категории</span> </h2>
                    <ul class="kategorien-list">
                        @foreach($categories as $categor)
                        <li class="last">
                            @isset($categor)
                            <a class="last" href="{{ route('category', $categor->code) }}"
                                title="{{$categor->name}}">{{$categor->name}}</a>
                            @endisset
                        </li>
                        @endforeach
                    </ul>
                </div>
            </aside>
            <div class="col-md-9">
                <div class="title">
                    <h1>{{$category->name}}</h1>
                </div>
                <div class="wysiwyg no-border">
                    <div class="inner " style="margin-bottom: 20px;">
                        <div class="" style="padding: 10px 0px;float: left;width: 100%;margin: 0 0 10px 0;">
                            <p style="margin: 0;padding: 10px;">{{ $category->description}} </p>
                        </div>
                    </div>
                </div>
                {{-- <div class="info-banner-telegram">
                    <div class="info-banner-block-img"> <a href="zakazyivaj-arendu-ne-vyixodya-iz-doma.html"> <img
                                class="info-banner-block-img-desktop"
                                src="/tpl/images/desktop-banner-massenger_1.png.pagespeed.ce.s9AQLiFL8v.png"
                                data-src="/tpl/images/desktop-banner-massenger_1.png.pagespeed.ce.s9AQLiFL8v.png"
                                style="max-width: 100%;"> <img class="info-banner-block-img-mobile"
                                src="/tpl/images/desktop-banner-mobile.png.pagespeed.ce.kfoSz2Hu7k.png"
                                data-src="/tpl/images/desktop-banner-mobile.png.pagespeed.ce.kfoSz2Hu7k.png"
                                style="max-width: 100%;"> </a> </div>
                </div> --}}

                <section class="img-catalog">
                    <div class="product-list small-filter">
                        @foreach ($category->prods as $prod)
                        @include('layouts/card', compact('prod'))
                        @endforeach
                    </div>
                </section>
            </div>
            {{-- <div class="col-md-12">
                <div class="wysiwyg">
                    <div class="inner text-wrap">
                        <h2>Приветствуем Вас на нашем сайте!</h2>
                        <p>Прокат инструмента в Киеве — выбор тех, кто предпочитает качественно выполнять поставленные
                            задачи при минимальных тратах времени и денег.<br><br>Ремонтные и строительные работы, с
                            применением&nbsp;<span class="wo fr-0 replaced"
                                data-num="0">профессионального</span>&nbsp;электроинструмента от ведущих мировых
                            производителей, стали доступными благодаря услугам проката от компании&nbsp;<span
                                class="wo fr-1" data-num="1">Будпрокат в Киеве</span>.<br><br>Внутренние и внешние
                            демонтажные работы становятся минимально&nbsp;<span class="wo fr-2"
                                data-num="2">трудозатратными</span>&nbsp;с использованием такого инструмента, как
                            электрический отбойный молоток, перфоратор. Для прорезания дверных и оконных проемов,
                            отверстий под сейфы, Вам потребуется аренда инструмента в Киеве -&nbsp;<span class="wo fr-3"
                                data-num="3">электрореза</span>, установки алмазного сверления.<br><br>Безопасную и
                            удобную работу на высоте обеспечит аренда лесов строительных, современных вышек и
                            подъемников. Если возникла необходимость быстрой и качественной&nbsp;<span
                                class="wo fr-4 replaced" data-num="4">уборки</span>&nbsp;помещения после ремонтных работ
                            - взять моющий пылесос в аренду от компании&nbsp;<span class="wo fr-5"
                                data-num="5">Будпрокат</span>&nbsp;будет хорошим решением.<br><br>Наша компания
                            постоянно старается расширять арендный парк строительного инструмента для различных работ и
                            радовать своих клиентов новым профессиональным оборудованием.<br><br>Вы всегда можете быть
                            уверены, что сотрудники&nbsp;<span class="wo fr-6"
                                data-num="6">Будпрокат</span>&nbsp;предоставят Вам квалифицированную консультацию по
                            прокату электрического инструмента и помогут подобрать нужную модель
                            оборудования.&nbsp;<span class="wo fr-7 replaced" data-num="7">При
                                выдаче</span>&nbsp;инструмента, его проверяют на работоспособность и проводят вводный
                            инструктаж по его использованию. Таким образом, вероятность возникновения проблем при
                            эксплуатации инструмента сведена к минимуму.<br><br>Мы ценим клиентов, которые выбирают
                            услуги аренда и прокат инструмента в Киеве от компании&nbsp;<span class="wo fr-8"
                                data-num="8">Будпрокат</span>. Специально для них существует разработанная система
                            скидок и выгодных предложений.</p>
                        <p>Если вы не нашли на нашем сайте подходящего инструмента - можно заказать прокат инструментов
                            в Киеве на сайте <a href="https://rentnow.com.ua/ru/kyiv">RentNow</a>. Еще больше
                            предложений по аренде инструментов и оборудования от ведущих арендодателей Киева.</p>
                        <h2>Ваши проблемы — наши решения!</h2>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
    {{-- <div class="col-md-12">
            @foreach($prods as $prod)
            @include('layouts/card', compact('prod'))
            @endforeach
        </div> --}}
</div>
@endsection