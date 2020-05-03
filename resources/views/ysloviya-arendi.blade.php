@extends('layouts/master')

@section('title', 'Аренда инструментов во Львове и Львовской области | Условия аренды')
@section('content')
<div class="container-fluid">
    <div class="col-md-12">
        <div class="row">
            <h1 class="page-title" style="width:100%">Условия аренды</h1>
            <div class="steps">
                <div class="step">
                    <div class="ico_wrap">
                        <svg class="bi bi-file-earmark-check" width="1em" height="1em" viewBox="0 0 16 16"
                            fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M9 1H4a2 2 0 00-2 2v10a2 2 0 002 2h5v-1H4a1 1 0 01-1-1V3a1 1 0 011-1h5v2.5A1.5 1.5 0 0010.5 6H13v2h1V6L9 1z" />
                            <path fill-rule="evenodd"
                                d="M15.854 10.146a.5.5 0 010 .708l-3 3a.5.5 0 01-.708 0l-1.5-1.5a.5.5 0 01.708-.708l1.146 1.147 2.646-2.647a.5.5 0 01.708 0z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                    <p>Заключите договор</p>
                </div>
                <div class="step">
                    <div class="ico_wrap">
                        <svg class="bi bi-tag-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M2 1a1 1 0 00-1 1v4.586a1 1 0 00.293.707l7 7a1 1 0 001.414 0l4.586-4.586a1 1 0 000-1.414l-7-7A1 1 0 006.586 1H2zm4 3.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                    <p>Вносите залог и арендную плату</p>
                </div>
                <div class="step">
                    <div class="ico_wrap">
                        <svg class="bi bi-tools" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M0 1l1-1 3.081 2.2a1 1 0 01.419.815v.07a1 1 0 00.293.708L10.5 9.5l.914-.305a1 1 0 011.023.242l3.356 3.356a1 1 0 010 1.414l-1.586 1.586a1 1 0 01-1.414 0l-3.356-3.356a1 1 0 01-.242-1.023L9.5 10.5 3.793 4.793a1 1 0 00-.707-.293h-.071a1 1 0 01-.814-.419L0 1zm11.354 9.646a.5.5 0 00-.708.708l3 3a.5.5 0 00.708-.708l-3-3z"
                                clip-rule="evenodd" />
                            <path fill-rule="evenodd"
                                d="M15.898 2.223a3.003 3.003 0 01-3.679 3.674L5.878 12.15a3 3 0 11-2.027-2.027l6.252-6.341A3 3 0 0113.778.1l-2.142 2.142L12 4l1.757.364 2.141-2.141zm-13.37 9.019L3.001 11l.471.242.529.026.287.445.445.287.026.529L5 13l-.242.471-.026.529-.445.287-.287.445-.529.026L3 15l-.471-.242L2 14.732l-.287-.445L1.268 14l-.026-.529L1 13l.242-.471.026-.529.445-.287.287-.445.529-.026z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                    <p>Пользуетесь инструментом</p>
                </div>
                <div class="step">
                    <div class="ico_wrap">
                        <svg class="bi bi-gear-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 01-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 01.872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 012.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 012.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 01.872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 01-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 01-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 100-5.86 2.929 2.929 0 000 5.858z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                    <p>Возвращаете инструмент <br />в исправном виде</p>
                </div>
                <div class="step">
                    <div class="ico_wrap">
                        <svg class="bi bi-check-all" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M12.354 3.646a.5.5 0 010 .708l-7 7a.5.5 0 01-.708 0l-3.5-3.5a.5.5 0 11.708-.708L5 10.293l6.646-6.647a.5.5 0 01.708 0z"
                                clip-rule="evenodd" />
                            <path
                                d="M6.25 8.043l-.896-.897a.5.5 0 10-.708.708l.897.896.707-.707zm1 2.414l.896.897a.5.5 0 00.708 0l7-7a.5.5 0 00-.708-.708L8.5 10.293l-.543-.543-.707.707z" />
                        </svg>
                    </div>
                    <p>Забираете залог</p>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="row">
            <div class="accordion gray-over">
                <div class="item">
                    <div class="title">
                        <span>КАКИЕ ДОКУМЕНТЫ НУЖНЫ ДЛЯ ОФОРМЛЕНИЯ?</span>
                        <svg class="bi bi-arrow-down-short" width="1em" height="1em" viewBox="0 0 16 16"
                            fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M4.646 7.646a.5.5 0 01.708 0L8 10.293l2.646-2.647a.5.5 0 01.708.708l-3 3a.5.5 0 01-.708 0l-3-3a.5.5 0 010-.708z"
                                clip-rule="evenodd" />
                            <path fill-rule="evenodd" d="M8 4.5a.5.5 0 01.5.5v5a.5.5 0 01-1 0V5a.5.5 0 01.5-.5z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div class="description">
                        <ul>
                            <li><strong>Паспорт (оригинал)</strong> с пропиской Киева или области +
                                <strong>Идентификационный код (оригинал)</strong></li>
                        </ul>
                        <p>С пропиской других областей - залог увеличивается.<br><br>(документы остаются у вас, мы
                            только снимаем копии)</p>
                        <p>Клиенты с пропиской временно оккупированных территорий оформляются под залог остаточной
                            стоимости оборудования.&nbsp;</p>
                    </div>
                </div>
                <div class="item">
                    <div class="title">
                        <span>МОЖНО БЕЗ ПРОПИСКИ?</span>
                        <svg class="bi bi-arrow-down-short" width="1em" height="1em" viewBox="0 0 16 16"
                            fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M4.646 7.646a.5.5 0 01.708 0L8 10.293l2.646-2.647a.5.5 0 01.708.708l-3 3a.5.5 0 01-.708 0l-3-3a.5.5 0 010-.708z"
                                clip-rule="evenodd" />
                            <path fill-rule="evenodd" d="M8 4.5a.5.5 0 01.5.5v5a.5.5 0 01-1 0V5a.5.5 0 01.5-.5z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div class="description">
                        <p><span>Без прописки можно оформление аренды только с полным залогом.&nbsp;&nbsp;Залог
                                указанный на сайте не покрывает стоимость инструмента. Прописка необходима для того,
                                чтобы имелись данные об&nbsp;арендаторе, в&nbsp;случае не возврата оборудования
                                и&nbsp;потери с&nbsp;ним связи.</span></p>
                    </div>
                </div>
                <div class="item">
                    <div class="title">
                        <span>ВЫ МОЖЕТЕ ПРИЕХАТЬ И ОФОРМИТЬ НА МЕСТЕ?</span>
                        <svg class="bi bi-arrow-down-short" width="1em" height="1em" viewBox="0 0 16 16"
                            fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M4.646 7.646a.5.5 0 01.708 0L8 10.293l2.646-2.647a.5.5 0 01.708.708l-3 3a.5.5 0 01-.708 0l-3-3a.5.5 0 010-.708z"
                                clip-rule="evenodd" />
                            <path fill-rule="evenodd" d="M8 4.5a.5.5 0 01.5.5v5a.5.5 0 01-1 0V5a.5.5 0 01.5-.5z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div class="description">
                        <p>Да, возможно. Нужно прислать фото паспорта и ИНН кода к нам на имеил info@budprocat.com или
                            Viber +380675021000 и произвести оплату. Мы составим договор и акт приема-передачи
                            оборудования с указанием комплектации, времени и срока аренды.&nbsp; Обязательным, в данном
                            случае, является присутствие арендатора и наличие оригиналов его документов на объекте.</p>
                    </div>
                </div>
                <div class="item">
                    <div class="title">
                        <span>МИНИМАЛЬНЫЙ СРОК АРЕНДЫ</span>
                        <svg class="bi bi-arrow-down-short" width="1em" height="1em" viewBox="0 0 16 16"
                            fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M4.646 7.646a.5.5 0 01.708 0L8 10.293l2.646-2.647a.5.5 0 01.708.708l-3 3a.5.5 0 01-.708 0l-3-3a.5.5 0 010-.708z"
                                clip-rule="evenodd" />
                            <path fill-rule="evenodd" d="M8 4.5a.5.5 0 01.5.5v5a.5.5 0 01-1 0V5a.5.5 0 01.5-.5z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div class="description">
                        <p>Минимальный срок аренды зависит от&nbsp;того, что конкретно человек планирует арендовать.</p>
                        <p>Если инструмент&nbsp;— минимальный срок аренды 1&nbsp;сутки = 24&nbsp;ЧАСА</p>
                        <p>Если леса&nbsp;/ вышки&nbsp;/ помости&nbsp;— минимальный заказ по&nbsp;Киеву&nbsp;— 500 грн
                            (тут важна сумма, а&nbsp;не&nbsp;кол-во дней)</p>
                    </div>
                </div>
                <div class="item">
                    <div class="title">
                        <span>КАК СОБРАТЬ ЛЕСА?</span>
                        <svg class="bi bi-arrow-down-short" width="1em" height="1em" viewBox="0 0 16 16"
                            fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M4.646 7.646a.5.5 0 01.708 0L8 10.293l2.646-2.647a.5.5 0 01.708.708l-3 3a.5.5 0 01-.708 0l-3-3a.5.5 0 010-.708z"
                                clip-rule="evenodd" />
                            <path fill-rule="evenodd" d="M8 4.5a.5.5 0 01.5.5v5a.5.5 0 01-1 0V5a.5.5 0 01.5-.5z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div class="description">
                        <p>Леса и&nbsp;вышки собираются очень просто. Лучше один раз увидеть, чем сто раз услышать.
                            Поэтому для Вас мы сняли <a href="https://youtu.be/WPc_up7N6lU">видео по сборке строительных
                                лесов</a>.</p>
                        <p>Наша компания выполняет сборку - разборку лесов. Для заказа сборки звоните по тел: 8 (067) -
                            502 - 10 - 00</p>
                    </div>
                </div>
                <div class="item">
                    <div class="title">
                        <span>КУДА СДАВАТЬ ОБОРУДОВАНИЕ?</span>
                        <svg class="bi bi-arrow-down-short" width="1em" height="1em" viewBox="0 0 16 16"
                            fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M4.646 7.646a.5.5 0 01.708 0L8 10.293l2.646-2.647a.5.5 0 01.708.708l-3 3a.5.5 0 01-.708 0l-3-3a.5.5 0 010-.708z"
                                clip-rule="evenodd" />
                            <path fill-rule="evenodd" d="M8 4.5a.5.5 0 01.5.5v5a.5.5 0 01-1 0V5a.5.5 0 01.5-.5z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div class="description">
                        <p><span>На&nbsp;склад ( там&nbsp;же, где его и&nbsp;выдавали). Измерительная техника сдается в
                                офис. Если Вы сдаете оборудование на другой филиал в Киеве, тогда дополнительно Вы
                                оплачиваете 1000 грн. за внутреннее перемещение.</span></p>
                    </div>
                </div>
                <div class="item">
                    <div class="title">
                        <span>КАК ЗАБРОНИРОВАТЬ ИНСТРУМЕНТ?</span>
                        <svg class="bi bi-arrow-down-short" width="1em" height="1em" viewBox="0 0 16 16"
                            fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M4.646 7.646a.5.5 0 01.708 0L8 10.293l2.646-2.647a.5.5 0 01.708.708l-3 3a.5.5 0 01-.708 0l-3-3a.5.5 0 010-.708z"
                                clip-rule="evenodd" />
                            <path fill-rule="evenodd" d="M8 4.5a.5.5 0 01.5.5v5a.5.5 0 01-1 0V5a.5.5 0 01.5-.5z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div class="description">
                        <p>Зарезервировать инструмент можно в телефонном режиме предварительно за 1-2часа, до приезда в
                            офис, или с 16:00 на утро следующего дня до 10:00.</p>
                    </div>
                </div>
                <div class="item">
                    <div class="title">
                        <span>УСЛОВИЯ АРЕНДЫ</span>
                        <svg class="bi bi-arrow-down-short" width="1em" height="1em" viewBox="0 0 16 16"
                            fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M4.646 7.646a.5.5 0 01.708 0L8 10.293l2.646-2.647a.5.5 0 01.708.708l-3 3a.5.5 0 01-.708 0l-3-3a.5.5 0 010-.708z"
                                clip-rule="evenodd" />
                            <path fill-rule="evenodd" d="M8 4.5a.5.5 0 01.5.5v5a.5.5 0 01-1 0V5a.5.5 0 01.5-.5z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div class="description">
                        <p>1. При оформлении аренды оборудования обязательно вносится предоплата за весь необходимый
                            срок аренды.&nbsp;</p>
                        <p>2. Для заключения договора нужен <strong>Паспорт (оригинал)</strong> с пропиской Киева или
                            области и&nbsp;<strong>Идентификационный код (оригинал)</strong>. С пропиской других
                            областей - залог увеличивается. Документы под залог не оставляются: снимается ксерокопия и
                            возвращаются владельцу.</p>
                        <p>Если у Вас уже оформлен договор аренды с нами - достаточно одного документа: паспорт или
                            права или загранпаспорт.</p>
                        <p><span>Оформление без документов —&nbsp;под полную стоимость оборудования.</span></p>
                        <p>3.&nbsp;<span>Залог</span></p>
                        <ul>
                            <li>Размер залога от 1500 грн. По окончанию аренды залог возвращается.</li>
                            <li>Обязательно Киевская прописка. Если прописка не Киевская - то залог увеличивается в два
                                раза.</li>
                            <li>Если прописка временно оккупированных территорий, залог составит 80% от стоимости
                                оборудования.</li>
                            <li>Если берется 2 инструмента в аренду - сумма залога увеличивается в два раза.</li>
                        </ul>
                        <p>4.<span>МИНИМАЛЬНЫЙ СРОК АРЕНДЫ: 4 часа (без опозданий).</span></p>
                        <p>5. Если аренда&nbsp;оформляется&nbsp;в&nbsp;субботу&nbsp;с 12.00 до 15.00 и инструмент
                            возвращается&nbsp; в понедельник до 10.00 утра &nbsp;-&nbsp;считаем &nbsp;как 1 сутки
                            аренды.</p>
                        <p><span>ВНИМАНИЕ: Филиал на Куреневской, 18 работает без выходных! Скидка в этом филиале на
                                воскресенье, не действует!</span></p>
                        <p><span>ПРИМЕР: Берете инструмент в Субботу в 14.00 и если возврат в Воскресенье в 14.00 - это
                                одни сутки оренды. Если возврат в Понедельник до 14.00 - это двое суток аренды!</span>
                        </p>
                        <p><strong>Внимание: При задержке возврата инструмента из аренды на срок более 2-х часов - Вам
                                начисляются дополнительные сутки аренды!</strong></p>
                        <p><span>6.&nbsp;</span>Для юр. лиц существует сумма минимального заказа - 1000 грн.<br>Эта
                            сумма может быть использована на аренду любого оборудования в течении года.</p>
                    </div>
                </div>
                <div class="item">
                    <div class="title">
                        <span>ГАРАНТИИ И ОБЯЗАТЕЛЬСТВА</span>
                        <svg class="bi bi-arrow-down-short" width="1em" height="1em" viewBox="0 0 16 16"
                            fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M4.646 7.646a.5.5 0 01.708 0L8 10.293l2.646-2.647a.5.5 0 01.708.708l-3 3a.5.5 0 01-.708 0l-3-3a.5.5 0 010-.708z"
                                clip-rule="evenodd" />
                            <path fill-rule="evenodd" d="M8 4.5a.5.5 0 01.5.5v5a.5.5 0 01-1 0V5a.5.5 0 01.5-.5z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div class="description">
                        <p>В случае неисправности электроинструмента по причине естественного износа или
                            брака&nbsp;—&nbsp;претензий к Арендатору нет! Стоимость ремонта вы не оплачиваете!</p>
                        <p>Не вскрывайте инструмент, не нарушайте пломбы&nbsp;—&nbsp;инструмент снимается с гарантии и
                            отправляется в независимый сервисный центр и они определяют стоимость ремонта! При
                            механическом повреждении/загрязнении оборудования&nbsp;—&nbsp;Арендатор оплачивает
                            устранение причиненного ущерба!</p>
                    </div>
                </div>
                <div class="item">
                    <div class="title">
                        <span>МОЖНО ВЗЯТЬ ИНСТРУМЕНТ БЕЗ ЗАЛОГА?</span>
                        <svg class="bi bi-arrow-down-short" width="1em" height="1em" viewBox="0 0 16 16"
                            fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M4.646 7.646a.5.5 0 01.708 0L8 10.293l2.646-2.647a.5.5 0 01.708.708l-3 3a.5.5 0 01-.708 0l-3-3a.5.5 0 010-.708z"
                                clip-rule="evenodd" />
                            <path fill-rule="evenodd" d="M8 4.5a.5.5 0 01.5.5v5a.5.5 0 01-1 0V5a.5.5 0 01.5-.5z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div class="description">
                        <p><span>Без залога мы&nbsp;не&nbsp;сдаем инструмент в&nbsp;аренду.</span></p>
                    </div>
                </div>
                <div class="item">
                    <div class="title">
                        <span>МОЖНО ВЗЯТЬ НА ЧАСИК?</span>
                        <svg class="bi bi-arrow-down-short" width="1em" height="1em" viewBox="0 0 16 16"
                            fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M4.646 7.646a.5.5 0 01.708 0L8 10.293l2.646-2.647a.5.5 0 01.708.708l-3 3a.5.5 0 01-.708 0l-3-3a.5.5 0 010-.708z"
                                clip-rule="evenodd" />
                            <path fill-rule="evenodd" d="M8 4.5a.5.5 0 01.5.5v5a.5.5 0 01-1 0V5a.5.5 0 01.5-.5z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div class="description">
                        <p><span>Минимальный срок аренды&nbsp;— 4 часа (без опозданий). По истечению 4 часах - аренда
                                будет считаться как за 1 день.</span></p>
                    </div>
                </div>
                <div class="item">
                    <div class="title">
                        <span>КАКОЙ ЗАЛОГ?</span>
                        <svg class="bi bi-arrow-down-short" width="1em" height="1em" viewBox="0 0 16 16"
                            fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M4.646 7.646a.5.5 0 01.708 0L8 10.293l2.646-2.647a.5.5 0 01.708.708l-3 3a.5.5 0 01-.708 0l-3-3a.5.5 0 010-.708z"
                                clip-rule="evenodd" />
                            <path fill-rule="evenodd" d="M8 4.5a.5.5 0 01.5.5v5a.5.5 0 01-1 0V5a.5.5 0 01.5-.5z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div class="description">
                        <p><span>Залог зависит от&nbsp;того, какое оборудование&nbsp;Вы возьмете. В&nbsp;среднем залог
                                составляет 1000&nbsp;— 2000&nbsp;грн. На&nbsp;некоторые позиции залог выше, за&nbsp;счет
                                более высокой стоимости оборудования, и&nbsp;составляет 3000, 5000&nbsp;грн.
                                На&nbsp;нашем сайте&nbsp;Вы можете посмотреть размер залога по&nbsp;каждой конкретно
                                интересующей Вас позиции.</span></p>
                    </div>
                </div>
                <div class="item">
                    <div class="title">
                        <span>ПРАВИЛА ЭКСПЛУАТАЦИИ ОБОРУДОВАНИЯ</span>
                        <svg class="bi bi-arrow-down-short" width="1em" height="1em" viewBox="0 0 16 16"
                            fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M4.646 7.646a.5.5 0 01.708 0L8 10.293l2.646-2.647a.5.5 0 01.708.708l-3 3a.5.5 0 01-.708 0l-3-3a.5.5 0 010-.708z"
                                clip-rule="evenodd" />
                            <path fill-rule="evenodd" d="M8 4.5a.5.5 0 01.5.5v5a.5.5 0 01-1 0V5a.5.5 0 01.5-.5z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div class="description">
                        <p>&nbsp;Правила эксплуатации оборудования и ответы на все технические вопросы вам дадут на
                            складе. Перед выдачей инструмент включат, покажут как правильно им пользоваться, проверят на
                            работоспособность. Важно внимательно смотреть и слушать кладовщика, можно снять процесс на
                            видео, чтобы не задавать одни и те же вопросы по нескольку раз</p>
                    </div>
                </div>
                <div class="item">
                    <div class="title">
                        <span>ЧТО ДЕЛАТЬ ПРИ ПОЛОМКЕ ОБОРУДОВАНИЯ? </span>
                        <svg class="bi bi-arrow-down-short" width="1em" height="1em" viewBox="0 0 16 16"
                            fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M4.646 7.646a.5.5 0 01.708 0L8 10.293l2.646-2.647a.5.5 0 01.708.708l-3 3a.5.5 0 01-.708 0l-3-3a.5.5 0 010-.708z"
                                clip-rule="evenodd" />
                            <path fill-rule="evenodd" d="M8 4.5a.5.5 0 01.5.5v5a.5.5 0 01-1 0V5a.5.5 0 01.5-.5z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div class="description">
                        <p>Если инструмент при работе вышел из строя — очень важно не вскрывать его самому и, ни в коем
                            случае, не пытаться его починить! Важно сразу позвонить нам в офис, предупредить о том что
                            инструмент сломался и привозить его к нам на склад. Далее, наши опытные сотрудники выясняют
                            причину поломки либо отдают инструмент в сервисный центр. По результатам экспертизы
                            становится понятно чья вина поломки , и виновник оплачивает ремонт</p>
                    </div>
                </div>
                <div class="item">
                    <div class="title">
                        <span>КАК ПОЛУЧИТЬ ВОЗВРАТ ЗАЛОГА? </span>
                        <svg class="bi bi-arrow-down-short" width="1em" height="1em" viewBox="0 0 16 16"
                            fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M4.646 7.646a.5.5 0 01.708 0L8 10.293l2.646-2.647a.5.5 0 01.708.708l-3 3a.5.5 0 01-.708 0l-3-3a.5.5 0 010-.708z"
                                clip-rule="evenodd" />
                            <path fill-rule="evenodd" d="M8 4.5a.5.5 0 01.5.5v5a.5.5 0 01-1 0V5a.5.5 0 01.5-.5z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div class="description">
                        <p>Нужно сдать инструмент в чистом виде и рабочем состоянии на склад и вернуться в офис за
                            залогом. Залог мы можем перечислить Вам на карту Приватбанка.&nbsp; &nbsp;Для Юр. лиц для
                            получения гарантийного платежа нужно вернуть подписанный акт выполненных работ.&nbsp;</p>
                    </div>
                </div>
                <div class="item">
                    <div class="title">
                        <span>КАКОЙ БЕНЗИН МОЖНО ИСПОЛЬЗОВАТЬ? </span>
                        <svg class="bi bi-arrow-down-short" width="1em" height="1em" viewBox="0 0 16 16"
                            fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M4.646 7.646a.5.5 0 01.708 0L8 10.293l2.646-2.647a.5.5 0 01.708.708l-3 3a.5.5 0 01-.708 0l-3-3a.5.5 0 010-.708z"
                                clip-rule="evenodd" />
                            <path fill-rule="evenodd" d="M8 4.5a.5.5 0 01.5.5v5a.5.5 0 01-1 0V5a.5.5 0 01.5-.5z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div class="description">
                        <p>Использовать спиртовой бензин запрещено! Это может привести к поломке оборудования! На АЗС
                            этот бензин маркируется "Е", возможны другие обозначения. Они предназначены только для авто!
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection