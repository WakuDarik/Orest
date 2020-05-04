<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <meta name="description" content="@yield('descr')">
    <link rel="apple-touch-icon" sizes="180x180" href="{{Storage::url('apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{Storage::url('favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{Storage::url('favicon-16x16.png')}}">
    <link rel="manifest" href="{{Storage::url('site.webmanifest')}}">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    @if(Request::route()->getName() == "prod")
    <link rel="stylesheet" href="/css/lightslider.min.css">
    @endif
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/touch-sideswipe.css">

    <style>
        * {
            box-sizing: border-box;
        }

        html,
        body {
            margin: 0;
            padding: 0;
        }
    </style>
</head>

<body>

    <header>
        <div class="container-fluid">
            <nav class="nav-container row">
                <div class="col-md-4 hidden-sm-down">
                    <div class="nav-left">
                        <a href="/" class="logo">
                            <img src="{{Storage::url('ico/logo-new.png')}}" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-md-8 col-center hidden-sm-down">
                    <a href="{{route('contacts')}}" class="phone-show">
                        <div class="svg-round">
                            <svg class="bi bi-house-door-fill" width="1em" height="1em" viewBox="0 0 16 16"
                                fill="#193867" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M6.5 10.995V14.5a.5.5 0 01-.5.5H2a.5.5 0 01-.5-.5v-7a.5.5 0 01.146-.354l6-6a.5.5 0 01.708 0l6 6a.5.5 0 01.146.354v7a.5.5 0 01-.5.5h-4a.5.5 0 01-.5-.5V11c0-.25-.25-.5-.5-.5H7c-.25 0-.5.25-.5.495z" />
                                <path fill-rule="evenodd" d="M13 2.5V6l-2-2V2.5a.5.5 0 01.5-.5h1a.5.5 0 01.5.5z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                        <span class="value">Львівська олб.<br />Скнилов-Сокольники</span>
                    </a>
                    <div class="header-link">
                        <ul class="zakaz">
                            <li class="telegram"><a rel="nofollow" href="https://t.me/"
                                    alt="Аренда Второй товар в telegram"><img src="{{Storage::url('ico/telegram.png')}}"
                                        alt="Аренда Второй товар в вайбере"></a></li>
                            <li class="viber"><a rel="nofollow" href="viber://chat?number=%2B380969292020"><img
                                        src="{{Storage::url('ico/viber.png')}}" alt="Аренда Второй товар в вайбере"></a>
                            </li>
                        </ul>
                    </div>
                    <div class="toggle-menu-wrap">
                        <div class="phone fright">
                            <a href="tel:+38 (096) 929 20 20">+38 (096) 929 20 20 </a>
                            <a href="tel:+38 (093) 929 20 20">+38 (093) 929 20 20 </a>
                        </div>
                        <a class="bascket" href="{{ route('basket') }}">
                            <svg class="bi bi-bucket-fill" height="auto" width="2em" viewBox="0 0 16 16"
                                fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M8 1.5A4.5 4.5 0 003.5 6h-1a5.5 5.5 0 1111 0h-1A4.5 4.5 0 008 1.5z"
                                    clip-rule="evenodd" />
                                <path fill-rule="evenodd"
                                    d="M1.61 5.687A.5.5 0 012 5.5h12a.5.5 0 01.488.608l-1.826 8.217a1.5 1.5 0 01-1.464 1.175H4.802a1.5 1.5 0 01-1.464-1.175L1.512 6.108a.5.5 0 01.098-.42z"
                                    clip-rule="evenodd" />
                            </svg>
                        </a>

                        {{-- <div class="menu-lang">
                            <div class="menu-lang__link">РУС</div>
                            <ul class="menu-lang__list">
                                <li class="lang-item lang-item-3 lang-item-uk lang-item-first"><a lang="uk"
                                        hreflang="uk" href="/ua/">УКР</a>
                            </ul>
                        </div> --}}
                        <div class="toggle-menu mb">
                            <span class="first"></span>
                            <span class="second"></span>
                            <span class="throuth"></span>
                        </div>
                    </div>

                </div>
                <div class="main-navigation">
                    <div class="phone-row hidden-md-up">
                        <ul class="zakaz">
                            <li class="telegram"><a rel="nofollow" href="https://t.me/"
                                    alt="Аренда Второй товар в telegram"><img src="{{Storage::url('ico/telegram.png')}}"
                                        alt="Аренда Второй товар в вайбере"></a></li>
                            <li class="viber"><a rel="nofollow" href="viber://chat?number=%2B380969292020"><img
                                        src="{{Storage::url('ico/viber.png')}}" alt="Аренда Второй товар в вайбере"></a>
                            </li>
                            <li class="phone">
                                <a class="phone open-modal" data-modal="rent-now" href="">
                                    <svg class="bi bi-phone" width="1em" height="1em" viewBox="0 0 16 16"
                                        fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M11 1H5a1 1 0 00-1 1v12a1 1 0 001 1h6a1 1 0 001-1V2a1 1 0 00-1-1zM5 0a2 2 0 00-2 2v12a2 2 0 002 2h6a2 2 0 002-2V2a2 2 0 00-2-2H5z"
                                            clip-rule="evenodd" />
                                        <path fill-rule="evenodd" d="M8 14a1 1 0 100-2 1 1 0 000 2z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </a>
                            </li>
                            <li class="bascket">
                                <a class="bascket" href="{{ route('basket') }}">
                                    <svg class="bi bi-bucket-fill" height="auto" width="2em" viewBox="0 0 16 16"
                                        fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M8 1.5A4.5 4.5 0 003.5 6h-1a5.5 5.5 0 1111 0h-1A4.5 4.5 0 008 1.5z"
                                            clip-rule="evenodd" />
                                        <path fill-rule="evenodd"
                                            d="M1.61 5.687A.5.5 0 012 5.5h12a.5.5 0 01.488.608l-1.826 8.217a1.5 1.5 0 01-1.464 1.175H4.802a1.5 1.5 0 01-1.464-1.175L1.512 6.108a.5.5 0 01.098-.42z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <nav class="flex phone-w100">
                        <div id="touchSideSwipe" class="header-middle hidden-menu touch-side-swipe">
                            <div class="hidden-md-up">
                                <a href="/" class="logo ">
                                    <img src="{{Storage::url('ico/logo-new.png')}}" alt="">
                                </a>
                                <h3 class="kategory-title"> <span>Каталог обладнання</span> </h3>
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

                            <div class="left-nav">
                                {{-- <a href="/gallery/">Продажа</a> --}}
                                {{-- <a href="{{route('ysloviya-arendi')}}">Условия аренды</a> --}}
                                <a href="{{route('dostavka')}}">Доставка</a>
                                {{-- <a href="{{ route('category', 'lesa-i-vyshki-tury') }}">Аренда лесов</a> --}}
                                <form method="POST" id="search">@csrf <input autocomplete="off" type="search" name="q"
                                        placeholder="Я ищу">
                                    <div class="q-result"></div>
                                </form>
                            </div>
                            <div class="right-nav">

                                {{-- <a href="{{route('oplata')}}">Оплата</a> --}}
                                {{-- <a href="/services/">Акции</a> --}}
                                <a href="{{route('contacts')}}">Контакти</a>
                            </div>
                        </div>

                        {{-- @guest
                        <a href="{{ route('login') }}"> Войти </a>
                        <a href="{{ route('register') }}"> Регистрация </a>
                        @endguest --}}
                        @auth
                        <a href="{{ route('home') }}"> Панель админа </a>
                        <a href="{{ route('get-logout') }}"> Выйти </a>
                        @endauth
                    </nav>
                </div>
            </nav>
        </div>
    </header>
    @if (session()->has('succsess'))
    <p class="flesh alert alert-success">{{ session()->get('succsess') }}</p>
    @endif

    @yield('content')

    <footer id="footer"> <i class="car-delivery"><a href="dostavka.html"></a></i>
        <div class="inner"> <span class="copy">Прокат інструментів у Львові (будівельна техніка, садова техніка,
                клінінгова техніка) ©2020</span>
            <nav>
                {{-- <a href="{{route('ysloviya-arendi')}}">Условия аренды</a> --}}
                <a href="{{route('dostavka')}}">Доставка</a>
                {{-- <a href="{{route('oplata')}}">Оплата</a> --}}
                <a href="{{route('contacts')}}">Контакти</a>
            </nav>
        </div>
    </footer>
</body>
<div class="rent-now modal">
    <div class="wrap">
        <div class="close modal-close">x</div>
        <a class="reno_phone" href="tel:+380969292020">+38 096 929 20 20</a>
        <a class="reno_phone" href="tel:+380939292020">+38 093 929 20 20</a>
    </div>
</div>
<script src="/js/touch-sideswipe.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

@if(Request::route()->getName() == "prod")
<script src="/js/lightslider.min.js"></script>
<script>
    $(document).ready(function() {
        $(".owl-carousel").lightSlider({
            gallery:true,
            item:1,
            auto: 1,
            loop:true,
            thumbItem: 4,
            slideMargin:0,
            enableDrag: false,
            currentPagerPosition:'left',
            onSliderLoad: function(el) {
                el.lightGallery({
                    selector: '.owl-carousel .lslide'
                });
            }   
        });
    });
        $(function() {
            $('.tabs-titles .item').on('click', function(e){
                let open = $(this).data('tab');
                $(this).hasClass('active') ? null : $('.tabs-titles .item').removeClass('active'), $(this).addClass('active'), 
                                                    $('.tabs-contents .item').removeClass('active'), $(`.${open}`).addClass('active') ;
                                                })
        })
</script>
@endif

<script type="text/javascript">
    var config = {
        elementID: 'touchSideSwipe',
        elementWidth: 320, //px
        elementMaxWidth: 0.8, // *100%
        sideHookWidth: 44, //px
        moveSpeed: 0.2, //sec
        opacityBackground: 0.8,
        shiftForStart: 50, // px
        windowMaxWidth: 991.99, // px
    }
    var touchSideSwipe = new TouchSideSwipe(config);
    let form = $('#search');
    form.submit(function (e) {
        e.preventDefault();
        search()
    });
    $('input[type="search"]').keypress(function(){
        search()
    })

    $('input[type="search"]').on('change', search);

    $('input[type=search]').on('search', function () {
        search()
    });

    // $("input[type=search]").keyup(function(e) {
    //     switch (e.keyCode) {
    //         case 8: 
    //             search();
    //         case 27: 
    //             search();
    //         default:
    //             return false;
    //     }
    // });

    function search(){
        console.log($('input[type="search"]').val().length)
        if($('input[type="search"]').val().length < 3){
            $('.q-result').html('');
        }else{
            $.ajax({
           type: "POST",
           url: `{{ route('search') }}`,
           data: form.serialize(), 
           headers: {
                'X-CSRF-Token': form.children("input[name=_token]").val(),
            },
           success: function(data)
           {
            let startHtml = '';
            let productsHtml = data.reduce(function(htmlAccumulator, el) {
            let divHtml = `<a href="${el.link}">${el.name} | Цена ${el.rent1} </a>`;
                return htmlAccumulator + divHtml;
            }, startHtml);
            $('.q-result').html(productsHtml);
               console.log(data); // show response from the php script.
           }
         });
        }
    }

    $('.open-modal').on('click', function(e){
        e.preventDefault();
        let modal = $(this).data('modal');
       $(`.${modal}`).css("display", "flex");
    })

    $('.modal-close').on('click', function(e){
        e.preventDefault();
        $(this).parents( ".modal" ).css( "display", "none" );
    })
    
    $('.accordion .item').on('click',function(){
        $(this).toggleClass('active');
    })
</script>

</html>