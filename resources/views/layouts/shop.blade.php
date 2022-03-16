<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="msapplication-TileColor" content="#E6E6FA">
    <meta name="theme-color" content="#E6E6FA">
    <title>HeyDeTodo</title>
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet"/>
    <link href="{{asset('/css/style-main.css')}}" rel="stylesheet"/>
    <link href="{{asset('/css/glyphicon.css')}}" rel="stylesheet"/>
    <link rel="stylesheet" href="{{asset('/css/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{asset('jquery.fileupload.css')}}">
    <link rel="stylesheet" href="{{asset('jquery.fileupload-ui.css')}}">
</head>
<body>
<div id="header" class="header b-f">
    <div class="header-top">
        <div class="container">
            <div class="bl-tb">
                <div class="bl-cell al-mid">
                    <a href="/" class="logo-title c-20">
                        <span class="logo-icon"><img alt='logo' src='{{asset('/images/logo.png')}}'></span>
                        <span class="logo-text al-mid s20 f-m">HayDeTodo</span>
                    </a>
                </div>
                <div class="bl-cell al-mid text-right mobile-menu">
                    <a class="btn-notepad bl-inl al-mid c-20 pos-rel" title="Избранных объявлений: 0" href="/notepad/">
                        <span class="visible-xs">Избранные</span>
                        <span class="n_count pos-abs">0</span>
                    </a>
                    <div class="dropdown bl-inl al-mid">
                        <div class="btn-user point br100" data-toggle="dropdown">
                            <span class="visible-xs">Личный кабинет</span>
                        </div>
                        <ul class="dropdown-menu text-center br10 droplk">
                            <li><a href="{{route('user.registration')}}" title="">Регистрация</a></li>
                            <li class="btn-login"><a class="btn btn-primary br20" href="{{route('user.login')}}" title="">Войти</a></li>
                        </ul>
                    </div>
                    <a class="btn btn-success btn-add br25" href="{{route('create_advertisement')}}">Подать объявление</a>
                    <span class="mbtn-close visible-xs pos-abs">×</span>
                </div>
                <div class="mobile-btn bl-inl al-top pos-abs"></div>
            </div>
        </div>
    </div>
    <div class="header-bottom panel-user-hid">
        <div class="container">
            <div class="bl-tb">
                <div class="bl-cell al-top hedser">
                    <form id="top_seach" class="search-form br2 f-l br25 bl-inl al-mid" name="top_seach" method="GET" action="/search/">
                        <input name="add_region" value="" type="hidden" id="ajax_region_id"/><input type='hidden' name='add_cat' value='0'/>
                        <div class="input-group group-search br25">
                            <span class="input-group-btn"><button class="btn-search btn"></button></span>
                            <input id="autocomplete-text" class="form-control" type="text" name="text" placeholder="Что вы ищете?" value="">
                        </div>
                    </form>
                    <a href="#selectRegion" data-toggle="modal" class="selectRegion bl-inl al-mid c-20 panel-user-hid pos-rel">
                        <span>Регионы<span class="loc-all pos-abs br100"></span></span></a>
                </div>
                <div class="header-menu bl-cell al-mid text-right">
                    <div class="navigation-menu dropdown bl-inl al-mid">
                        <div data-toggle="dropdown" class="btn-nav point a-hov sp-now br20">
                            <span class="pos-rel bl-inl br3"></span>Категории
                        </div>
                        <div class="dropdown-menu lihover br10">
                            <ul>
                                <li class="dropdown dropdown-hover dropdown-submenu">
                                    <a href="https://coredo.elite-board.org/Avtotransport/" class="sp-now">
                                        <img src='{{asset('/images/cat1.png')}}' alt='Автотранспорт'>Автотранспорт</a>
                                    <ul class="dropdown-menu hidden-xs">
                                        <li>
                                            <a class="sp-now" href="https://coredo.elite-board.org/Avtotransport/sale/">Продажа авто
                                                <span class="cat-count b-f c-7">9</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="sp-now" href="https://coredo.elite-board.org/Avtotransport/buy/">Покупка авто
                                                <span class="cat-count b-f c-7">0</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="sp-now" href="https://coredo.elite-board.org/Avtotransport/autoservis/">Автосервис и услуги
                                                <span class="cat-count b-f c-7">1</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="sp-now" href="https://coredo.elite-board.org/Avtotransport/autozap/">Автозапчасти и принадлежности
                                                <span class="cat-count b-f c-7">1</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="sp-now" href="https://coredo.elite-board.org/Avtotransport/Avtosalony/">Автосалоны
                                                <span class="cat-count b-f c-7">0</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown dropdown-hover dropdown-submenu">
                                    <a href="https://coredo.elite-board.org/Nedvizhimost/" class="sp-now">
                                        <img src='{{asset('/images/cat2.png')}}' alt='Недвижимость'>Недвижимость</a>
                                    <ul class="dropdown-menu hidden-xs">
                                        <li>
                                            <a class="sp-now" href="https://coredo.elite-board.org/Nedvizhimost/garag/">Гаражи и Стоянки
                                                <span class="cat-count b-f c-7">0</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="sp-now"
                                               href="https://coredo.elite-board.org/Nedvizhimost/datcha/">Дачи, Коттеджи
                                                <span class="cat-count b-f c-7">0</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="sp-now" href="https://coredo.elite-board.org/Nedvizhimost/lands/">Земельный участок
                                                <span class="cat-count b-f c-7">0</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="sp-now" href="https://coredo.elite-board.org/Nedvizhimost/apartmen/">Комнаты, Квартиры
                                                <span class="cat-count b-f c-7">5</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="sp-now" href="https://coredo.elite-board.org/Nedvizhimost/office/">Офисы
                                                <span class="cat-count b-f c-7">0</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="sp-now" href="https://coredo.elite-board.org/Nedvizhimost/other/">Прочее
                                                <span class="cat-count b-f c-7">0</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown dropdown-hover dropdown-submenu">
                                    <a href="https://coredo.elite-board.org/Mebel-interer/" class="sp-now">
                                        <img src='{{asset('/images/cat5.png')}}' alt='Мебель, интерьер'>Мебель, интерьер</a>
                                    <ul class="dropdown-menu hidden-xs">
                                        <li>
                                            <a class="sp-now"
                                               href="https://coredo.elite-board.org/Mebel-interer/interer/">Мебель и интерьер
                                                <span class="cat-count b-f c-7">1</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="sp-now" href="https://coredo.elite-board.org/Mebel-interer/obihod/">Предметы обихода
                                                <span class="cat-count b-f c-7">0</span></a>
                                        </li>
                                        <li>
                                            <a class="sp-now"
                                               href="https://coredo.elite-board.org/Mebel-interer/remont/">Ремонт и сервис
                                                <span class="cat-count b-f c-7">0</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="sp-now" href="https://coredo.elite-board.org/Mebel-interer/other/">Другое
                                                <span class="cat-count b-f c-7">0</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown dropdown-hover dropdown-submenu">
                                    <a href="https://coredo.elite-board.org/Tovary/" class="sp-now">
                                        <img src='{{asset('/images/cat14.png')}}' alt='Товары'>Дом и сад</a>
                                    <ul class="dropdown-menu hidden-xs">
                                        <li>
                                            <a class="sp-now" href="https://coredo.elite-board.org/Tovary/children/">Детские товары
                                                <span class="cat-count b-f c-7">0</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="sp-now" href="https://coredo.elite-board.org/Tovary/office/">Канцелярские товары
                                                <span class="cat-count b-f c-7">0</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="sp-now" href="https://coredo.elite-board.org/Tovary/beauty/">Красота и Здоровье
                                                <span class="cat-count b-f c-7">0</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="sp-now" href="https://coredo.elite-board.org/Tovary/furniture/">Мебель
                                                <span class="cat-count b-f c-7">0</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="sp-now" href="https://coredo.elite-board.org/Tovary/sport_stock/">Спорт инвентарь
                                                <span class="cat-count b-f c-7">1</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="sp-now" href="https://coredo.elite-board.org/Tovary/other/">Прочее
                                                <span class="cat-count b-f c-7">0</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown dropdown-hover dropdown-submenu">
                                    <a href="https://coredo.elite-board.org/Bytovaya-tehnika/" class="sp-now">
                                        <img src='{{asset('/images/cat10.png')}}' alt='Бытовая техника'>Бытовая техника</a>
                                    <ul class="dropdown-menu hidden-xs">
                                        <li>
                                            <a class="sp-now"
                                               href="https://coredo.elite-board.org/Bytovaya-tehnika/audio/">Аудио, Видео
                                                <span class="cat-count b-f c-7">0</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="sp-now" href="https://coredo.elite-board.org/Bytovaya-tehnika/games/">Игры, игровые приставки
                                                <span class="cat-count b-f c-7">0</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="sp-now" href="https://coredo.elite-board.org/Bytovaya-tehnika/gps/">GPS-навигаторы
                                                <span class="cat-count b-f c-7">0</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="sp-now"
                                               href="https://coredo.elite-board.org/Bytovaya-tehnika/pilesosi/">Пылесосы
                                                <span class="cat-count b-f c-7">0</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="sp-now" href="https://coredo.elite-board.org/Bytovaya-tehnika/stiralnie/">Стиральные машины
                                                <span class="cat-count b-f c-7">0</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="sp-now"
                                               href="https://coredo.elite-board.org/Bytovaya-tehnika/kuhonnaya/">Кухонная техника
                                                <span class="cat-count b-f c-7">0</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="sp-now" href="https://coredo.elite-board.org/Bytovaya-tehnika/glagka/">Швейное оборудование
                                                <span class="cat-count b-f c-7">0</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="sp-now" href="https://coredo.elite-board.org/Bytovaya-tehnika/klimat/">Климатическая техника
                                                <span class="cat-count b-f c-7">0</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="sp-now" href="https://coredo.elite-board.org/Bytovaya-tehnika/remont/">Ремонт и сервис
                                                <span class="cat-count b-f c-7">0</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="sp-now" href="https://coredo.elite-board.org/Bytovaya-tehnika/other/">Другое
                                                <span class="cat-count b-f c-7">0</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown dropdown-hover dropdown-submenu">
                                    <a href="https://coredo.elite-board.org/Uslugi/" class="sp-now">
                                        <img src='{{asset('/images/cat12.png')}}' alt='Услуги'>Услуги</a>
                                    <ul class="dropdown-menu hidden-xs">
                                        <li>
                                            <a class="sp-now" href="https://coredo.elite-board.org/Uslugi/webdesign/">Web дизайн
                                                <span class="cat-count b-f c-7">0</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="sp-now" href="https://coredo.elite-board.org/Uslugi/accounting/">Бухгалтерские
                                                <span class="cat-count b-f c-7">0</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="sp-now" href="https://coredo.elite-board.org/Uslugi/medical/">Медицинские
                                                <span class="cat-count b-f c-7">0</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="sp-now" href="https://coredo.elite-board.org/Uslugi/nursemaids/">Няни, Сиделки
                                                <span class="cat-count b-f c-7">0</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="sp-now" href="https://coredo.elite-board.org/Uslugi/translation/">Перевод текстов
                                                <span class="cat-count b-f c-7">0</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="sp-now" href="https://coredo.elite-board.org/Uslugi/printing/">Полиграфия
                                                <span class="cat-count b-f c-7">0</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="sp-now"
                                               href="https://coredo.elite-board.org/Uslugi/advancement_site/">Продвижение сайта
                                                <span class="cat-count b-f c-7">0</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="sp-now" href="https://coredo.elite-board.org/Uslugi/advertisment/">Реклама
                                                <span class="cat-count b-f c-7">0</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="sp-now" href="https://coredo.elite-board.org/Uslugi/other/">Другое
                                                <span class="cat-count b-f c-7">0</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown dropdown-hover dropdown-submenu">
                                    <a href="https://coredo.elite-board.org/Telefony/" class="sp-now">
                                        <img src='{{asset('/images/cat13.png')}}' alt='Телефоны'>Электроника</a>
                                    <ul class="dropdown-menu hidden-xs">
                                        <li>
                                            <a class="sp-now" href="https://coredo.elite-board.org/Telefony/telephone/">Телефоны
                                                <span class="cat-count b-f c-7">0</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="sp-now" href="https://coredo.elite-board.org/Telefony/accessory/">Аксессуары
                                                <span class="cat-count b-f c-7">0</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="sp-now" href="https://coredo.elite-board.org/Telefony/remont/">Ремонт
                                                и сервис <span class="cat-count b-f c-7">0</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="sp-now" href="https://coredo.elite-board.org/Telefony/drugoe/">Другое
                                                <span class="cat-count b-f c-7">0</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown dropdown-hover dropdown-submenu">
                                    <a href="https://coredo.elite-board.org/Stroi-materialy/" class="sp-now">
                                        <img src='{{asset('/images/cat7.png')}}' alt='Строй материалы'>Стройка и ремонт</a>
                                    <ul class="dropdown-menu hidden-xs">
                                        <li>
                                            <a class="sp-now"
                                               href="https://coredo.elite-board.org/Stroi-materialy/varnish/">Лаки, Краски
                                                <span class="cat-count b-f c-7">0</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="sp-now" href="https://coredo.elite-board.org/Stroi-materialy/saw/">Пиломатериалы
                                                <span class="cat-count b-f c-7">0</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="sp-now" href="https://coredo.elite-board.org/Stroi-materialy/other/">Другое
                                                <span class="cat-count b-f c-7">0</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="btn-chat chat-click-popup bl-inl al-mid point"></div>
                    <div class="chat-popup b-f bl-bl hidden-xs">
                        <span class="chat-close bl-inl al-top s25 c-a point pos-rel a-hov">×</span>
                        <div class="chat-popup-bl pos-abs bl-bl text-left">
                            <div class="chat-popup-header text-center s22">Общаться — легко</div>
                            <div class="chat-popup-description">Перейдите на страницу объявления, чтобы написать
                                продавцу. Не забудьте авторизоваться.
                            </div>
                            <div class="chat-popup-btn text-center">
                                <a class="btn btn-primary btn-block" href="/users/login/" title="">Войти</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- /header -->
@yield('content')
<div id="footer" class="b-f">
    <div class="container">
        <div class="text-center">
            <h2 class="s20 f-m foot-h2">Удачный выбор для всех и для каждого!</h2>
            Найди свое среди тысяч товаров, опубликованных на нашем сайте
        </div>
        <div class="footer">
            <div class="row">
                <div class="col-xs-6 col-sm-3 col-md-3">
                    <ul class="footer-logo">
                        <li class="footer-logo"><a class="logo-text s20 f-m c-20 text-up" href="/"
                                                   title="HayDeTodo">
                                <img alt='HayDeTodo' src='{{asset('/images/logo.png')}}'>HayDeTodo</a>
                        </li>
                    </ul>
                </div>
                <div class="col-xs-6 col-sm-3 col-md-3">
                    <ul class="footer-link">
                        <li class="footer-tit text-up">Платные услуги</li>
                        <li><a href="/reklama-na-saite/" title="" class="c-4">Реклама на сайте</a></li>
                        <li><a href="/uslugi_saita/" title="" class="c-4">Платные услуги</a></li>
                        <li><a href="/mail/" title="" class="c-4">Контакты</a></li>
                    </ul>
                </div>
                <div class="col-xs-6 col-sm-3 col-md-3">
                    <ul class="footer-link resp-line">
                        <li class="footer-tit text-up">Информация</li>
                        <li><a href="/pravila/" title="" class="c-4">Правила сайта</a></li>
                        <li><a href="/help/" title="" class="c-4">Помощь</a></li>
                        <li><a href="/articles/" title="" class="c-4">Статьи</a></li>
                    </ul>
                </div>
                <div class="col-xs-6 col-sm-3 col-md-3">
                    <ul class="footer-link resp-line">
                        <li class="footer-tit text-up">Пользователю</li>
                        <li><a href="/users/login/" title="" class="c-4">Личный кабинет</a></li>
                        <li><a href="/users/login/" title="" class="c-4">Регистрация</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-copyright">
                        <div class="footer-social c-7 s13">Мы в соцсетях
                            <a href="/" data-toggle="tooltip" data-placement="top" title="facebook" class="s-fa"><img
                                    alt='HayDeTodo' src='{{asset('/images/sfa.png')}}'></a>
                            <a href="/" data-toggle="tooltip" data-placement="top" title="twitter" class="s-tw"><img
                                    alt='HayDeTodo' src='{{asset('/images/stw.png')}}'></a>
                            <a href="/" data-toggle="tooltip" data-placement="top" title="odnoklassniki"
                               class="s-od"><img alt='HayDeTodo' src='{{asset('/images/sod.png')}}'></a>
                            <a href="/" data-toggle="tooltip" data-placement="top" title="vkontakte" class="s-vk"><img
                                    alt='HayDeTodo' src='{{asset('/images/svk.png')}}'></a>
                        </div>
            </div>
        </div>
    </div>
</div>
<div class="menu-overly-mask mbtn-close"></div>
<script>
    var parent_region = 0;
    var back_region = 0;
    var current_region = TPL_REGION_ID;
</script>
<div class="modal fade" id="selectRegion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content modal-content-region">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title text-center s18" id="exampleModalLabel">Выбор региона</h4>
                <div class="bl-regionlist br10">
                    <div class="region_current"><a href="#" id="region_select_current"><span
                                id="region_select_current_name"></span></a></div>
                    <div class="RegionFilter pos-rel"><input type="text" id="region-modal-filter" value=""
                                                             class="form-control" placeholder="Фильтр по названию..."
                                                             autocomplete="off"><a id="region-modal-clear"
                                                                                   class="pos-abs bl-bl s16 point c-a  text-center">×</a>
                    </div>
                    <ul id="regionlist"></ul>
                </div>
                <div id="region_loader_img" style="display:none;">
                    <div>Пожалуйста, подождите...</div>
                </div>
                <div class="region_control"><a href="#" id="region_select_back" class="btn btn-default btn-xs">Назад</a>
                    <a href="#" id="region_select_all" class="btn btn-default btn-xs pull-right">Все регионы</a></div>
            </div>
        </div>
    </div>
</div>
<script src="{{asset('/js/jquery.min.js')}}"></script>
<script src="{{asset('jquery.cookie.js')}}"></script>
<script src="{{asset('/js/lightslider.min.js')}}"></script>
<link href="{{asset('/css/lightslider.min.css')}}" rel="stylesheet"/>
<script>$(document).ready(function () {
        $(".specials-offer-slider").lightSlider({
            item: 1,
            slideMargin: 0,
            loop: !0,
            pager: !1,
            pauseOnHover: !0,
            auto: !0,
            pause: 4E3,
        });
    });</script>
<script src="{{asset('js/script.min.js')}}"></script>
<script>$(document).ready(function () {
        $(".imgLiquidFill").imgLiquid();
    });</script>
<script>
    $(".mobile-btn").click(function () {
        $(".mobile-menu").addClass("open");
        $(".menu-overly-mask").addClass("open");
    });
    $(".mbtn-close").click(function () {
        $(".mobile-menu").removeClass("open");
        $(".menu-overly-mask").removeClass("open");
    });
</script>
<script src="{{asset('/js/imgLiquid-min.js')}}"></script>
<script src="{{asset('/js/script.js')}}"></script>
<script>
    var _csrf = document.cookie.split("_csrf=");
    if (_csrf[1] !== undefined) {
        _csrf = _csrf[1].split(";");
        _csrf = _csrf[0]
        $("form[method=post]").each(function () {
            $("<input>").attr("type", "hidden").attr("name", "_csrf").attr("value", _csrf).appendTo($(this));
        });
    }
</script>
</body>
</html>
