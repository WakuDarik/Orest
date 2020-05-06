@extends('layouts/master')

@section('title', 'Оренда інструментів у Львові і Львівській області | Умови оплати')
@section('content')
<div class="container-fluid">
    <div class="col-md-12">
        <div class="row">
            <h1 class="page-title" style="width:100%">Способы оплаты аренды инструмента и оборудования</h1>
            <div class="payment-method">
                <div class="item">
                    <svg class="bi bi-credit-card" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M14 3H2a1 1 0 00-1 1v8a1 1 0 001 1h12a1 1 0 001-1V4a1 1 0 00-1-1zM2 2a2 2 0 00-2 2v8a2 2 0 002 2h12a2 2 0 002-2V4a2 2 0 00-2-2H2z"
                            clip-rule="evenodd" />
                        <rect width="3" height="3" x="2" y="9" rx="1" />
                        <path d="M1 5h14v2H1z" />
                    </svg>
                    <div class="description">
                        <h6>Наличные</h6>
                        <p>Оплата производится перед непосредственной отгрузкой у нас в офисе.</p>
                    </div>
                </div>
                <div class="item">
                    <svg class="bi bi-credit-card" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M14 3H2a1 1 0 00-1 1v8a1 1 0 001 1h12a1 1 0 001-1V4a1 1 0 00-1-1zM2 2a2 2 0 00-2 2v8a2 2 0 002 2h12a2 2 0 002-2V4a2 2 0 00-2-2H2z"
                            clip-rule="evenodd" />
                        <rect width="3" height="3" x="2" y="9" rx="1" />
                        <path d="M1 5h14v2H1z" />
                    </svg>
                    <div class="description">
                        <h6>Перечисление на карту Приват Банка</h6>
                        <p>Со своего телефона, ближайшего банкомата или отделения банка.
                        </p>
                    </div>
                </div>
                <div class="item">
                    <svg class="bi bi-credit-card" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M14 3H2a1 1 0 00-1 1v8a1 1 0 001 1h12a1 1 0 001-1V4a1 1 0 00-1-1zM2 2a2 2 0 00-2 2v8a2 2 0 002 2h12a2 2 0 002-2V4a2 2 0 00-2-2H2z"
                            clip-rule="evenodd" />
                        <rect width="3" height="3" x="2" y="9" rx="1" />
                        <path d="M1 5h14v2H1z" />
                    </svg>
                    <div class="description">
                        <h6>Безналичный расчет на СПД (плательщик единого налога)</h6>
                        <p>Залог за леса оплачивается наличными.</p>
                    </div>
                </div>
                <div class="item">
                    <svg class="bi bi-credit-card" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M14 3H2a1 1 0 00-1 1v8a1 1 0 001 1h12a1 1 0 001-1V4a1 1 0 00-1-1zM2 2a2 2 0 00-2 2v8a2 2 0 002 2h12a2 2 0 002-2V4a2 2 0 00-2-2H2z"
                            clip-rule="evenodd" />
                        <rect width="3" height="3" x="2" y="9" rx="1" />
                        <path d="M1 5h14v2H1z" />
                    </svg>
                    <div class="description">
                        <h6>Онлайн пополнение с карты любого украинского банка</h6>
                    </div>
                </div>
                <div class="item">
                    <svg class="bi bi-credit-card" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M14 3H2a1 1 0 00-1 1v8a1 1 0 001 1h12a1 1 0 001-1V4a1 1 0 00-1-1zM2 2a2 2 0 00-2 2v8a2 2 0 002 2h12a2 2 0 002-2V4a2 2 0 00-2-2H2z"
                            clip-rule="evenodd" />
                        <rect width="3" height="3" x="2" y="9" rx="1" />
                        <path d="M1 5h14v2H1z" />
                    </svg>
                    <div class="description">
                        <h6>Безналичный расчет на ТОВ (плательщик НДС)</h6>
                        <p>
                            Оплачивайте за аренду с вашего расчетного счёта.<br>
                            Залог за леса тоже оплачивается безналичным платежом.<br>
                            Стоимость аренды соответствует ценам на сайте.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection