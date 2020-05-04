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
                        <span class="value">Львівська обл.<br />Скнилів-Сокільники</span>
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
                            <li class="phone">
                                <a class="phone open-modal" data-modal="rent-now" href="">
                                    <svg class="bi bi-phone" version="1.1" id="Capa_1"
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        x="0px" y="0px" width="1em" height="1em" viewBox="0 0 16 16"
                                        style="enable-background:new 0 0 413.987 413.987;" xml:space="preserve">
                                        <path d="M379.55,349.004c4.185-11.918-3.809-24.756-13.903-29.26l-66.364-29.493c-3.184-1.411-6.987-2.152-11.004-2.152
			c-8.206,0-16.438,3.047-21.47,7.937l-20.906,20.251c-3.112,3.017-8.633,5.037-13.751,5.037c-2.188,0-4.108-0.386-5.565-1.122
			c-14.102-7.068-36.282-21.186-61.847-48.307c-22.704-24.085-33.472-40.573-38.511-50.165c-2.821-5.383,0.124-14.681,4.55-19.104
			l18.603-18.588c7.736-7.727,11.212-21.947,7.924-32.39l-20.919-66.43c-3.176-10.098-13.903-20.556-26.441-20.556
			c-17.333,0.577-41.657,6.777-59.171,33.045c-27.058,40.606-25.43,118.767,24.38,174.269
			c46.334,51.618,115.143,108.607,115.742,109.105c1.485,1.341,36.97,32.905,88.882,32.905c5.002,0,10.11-0.31,15.219-0.914
			C351.504,406.228,372.228,369.992,379.55,349.004z M293.555,401.287c-4.565,0.554-9.201,0.838-13.792,0.838
			c-46.723,0-79.687-28.73-81.149-30.025c-2.829-2.356-69.939-58.234-114.653-108.05c-44.564-49.652-48.048-122.701-23.336-159.778
			c14.701-22.056,35.282-27.279,49.967-27.776c5.989,0.025,12.695,6.614,14.49,12.278l20.927,66.43
			c1.965,6.256-0.371,15.808-5.01,20.447l-18.603,18.595c-7.602,7.591-12.096,22.666-6.652,32.989
			c5.395,10.273,16.788,27.762,40.367,52.791c26.75,28.365,50.206,43.274,65.158,50.779c3.066,1.539,6.835,2.356,10.902,2.356
			c8.231,0,16.655-3.199,21.973-8.368l20.9-20.256c4.189-4.043,14.081-5.819,19.429-3.453l66.354,29.492
			c5.053,2.25,9.455,9.08,7.551,14.514C361.956,363.471,343.705,395.224,293.555,401.287z" />
                                        <path d="M188.867,148.828c0.663,1.439,1.848,2.521,3.326,3.064c0.655,0.246,1.351,0.373,2.044,0.373
			c2.473,0,4.702-1.556,5.555-3.879c16.358-44.438-6.487-93.907-50.925-110.261c-2.993-1.097-6.51,0.538-7.606,3.509
			c-0.546,1.482-0.49,3.095,0.173,4.524c0.665,1.439,1.848,2.529,3.333,3.082c38.316,14.102,58.011,56.747,43.909,95.052
			C188.131,145.778,188.194,147.391,188.867,148.828z" />
                                        <path d="M224.352,172.369c0.655,0.239,1.346,0.355,2.036,0.355c2.468,0,4.713-1.556,5.565-3.877
			c25.004-67.903-9.917-143.481-77.833-168.493c-2.994-1.13-6.51,0.546-7.607,3.517c-0.546,1.485-0.475,3.095,0.19,4.524
			c0.663,1.44,1.849,2.529,3.326,3.075c61.778,22.752,93.542,91.513,70.808,153.284C219.706,167.812,221.27,171.224,224.352,172.369
			z" />

                                    </svg>

                                </a>
                            </li>

                            <li class="viber"><a rel="nofollow" href="viber://chat?number=%2B380969292020"><img
                                        src="{{Storage::url('ico/viber.png')}}" alt="Аренда Второй товар в вайбере"></a>
                            </li>

                            <li class="telegram"><a rel="nofollow" href="https://t.me/"
                                    alt="Аренда Второй товар в telegram"><img src="{{Storage::url('ico/telegram.png')}}"
                                        alt="Аренда Второй товар в вайбере"></a></li>

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
                                {{-- <a href="{{ route('category', 'lesa-i-vyshki-tury') }}">Аренда лесов</a> --}}
                                <form method="POST" id="search">@csrf <input autocomplete="off" type="search" name="q"
                                        placeholder="Я шукаю">
                                    <div class="q-result"></div>
                                </form>
                            </div>
                            <div class="right-nav">
                                <a href="{{route('dostavka')}}">Доставка</a>

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