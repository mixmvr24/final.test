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
    <link href="{{asset('/css/style-mes.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('/css/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{asset('/css/jquery.fileupload.css')}}">
    <link rel="stylesheet" href="{{asset('/css/jquery.fileupload-ui.css')}}">

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
                            <li class="btn-login">
                                <a class="btn btn-primary br20" href="{{route('user.login')}}"
                                   title="">Войти
                                </a>
                            </li>
                        </ul>
                    </div>
                    <a class="btn btn-success btn-add br25" href="#">Подать объявление</a>
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
                    <form id="top_seach" class="search-form br2 f-l br25 bl-inl al-mid" name="top_seach" method="GET"
                          action="/search/">
                        <input name="add_region" value="" type="hidden" id="ajax_region_id"/>
                        <input type='hidden'
                               name='add_cat'
                               value='0'/>
                        <div class="input-group group-search br25">
                            <span class="input-group-btn">
                                <button class="btn-search btn"></button>
                            </span>
                            <input id="autocomplete-text" class="form-control" type="text" name="text"
                                   placeholder="Что вы ищете?" value="">
                        </div>
                    </form>
                    <a href="#selectRegion" data-toggle="modal"
                       class="selectRegion bl-inl al-mid c-20 panel-user-hid pos-rel">
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
                                    <a href="{{route('category_appliances')}}" class="sp-now">
                                        <img src='{{asset('/images/cat10.png')}}' alt='Бытовая техника'>Бытовая техника</a>
                                    <ul class="dropdown-menu hidden-xs">
                                        <li>
                                            <a class="sp-now" href="#">Аудио, Видео</a>
                                        </li>
                                        <li>
                                            <a class="sp-now" href="#">Игры, игровые приставки</a>
                                        </li>
                                        <li>
                                            <a class="sp-now" href="#">Пылесосы</a>
                                        </li>
                                        <li>
                                            <a class="sp-now" href="#">Стиральные машины</a>
                                        </li>
                                        <li>
                                            <a class="sp-now" href="#">Кухонная техника</a>
                                        </li>
                                        <li>
                                            <a class="sp-now" href="#">Швейное оборудование</a>
                                        </li>
                                        <li>
                                            <a class="sp-now" href="#">Климатическая техника</a>
                                        </li>
                                        <li>
                                            <a class="sp-now" href="#">Другое</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown dropdown-hover dropdown-submenu">
                                    <a href="{{route('category_services')}}" class="sp-now">
                                        <img src='{{asset('/images/cat12.png')}}' alt='Услуги'>Услуги</a>
                                    <ul class="dropdown-menu hidden-xs">
                                        <li>
                                            <a class="sp-now" href="#">Web дизайн</a>
                                        </li>
                                        <li>
                                            <a class="sp-now" href="#">Бухгалтерские</a>
                                        </li>
                                        <li>
                                            <a class="sp-now" href="#">Медицинские</a>
                                        </li>
                                        <li>
                                            <a class="sp-now" href="#">Няни, Сиделки</a>
                                        </li>
                                        <li>
                                            <a class="sp-now" href="#">Перевод текстов</a>
                                        </li>
                                        <li>
                                            <a class="sp-now" href="#">Полиграфия</a>
                                        </li>
                                        <li>
                                            <a class="sp-now" href="#">Продвижение сайта</a>
                                        </li>
                                        <li>
                                            <a class="sp-now" href="#">Реклама</a>
                                        </li>
                                        <li>
                                            <a class="sp-now" href="#">Другое</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown dropdown-hover dropdown-submenu">
                                    <a href="{{route('category_electronics')}}" class="sp-now">
                                        <img src='{{asset('/images/cat13.png')}}' alt='Телефоны'>Электроника</a>
                                    <ul class="dropdown-menu hidden-xs">
                                        <li>
                                            <a class="sp-now" href="#">Телефоны</a>
                                        </li>
                                        <li>
                                            <a class="sp-now" href="#">Аксессуары</a>
                                        </li>
                                        <li>
                                            <a class="sp-now" href="#">Ремонт и сервис</a>
                                        </li>
                                        <li>
                                            <a class="sp-now" href="#">Другое</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown dropdown-hover dropdown-submenu">
                                    <a href="{{route('category_decor')}}" class="sp-now">
                                        <img src='{{asset('/images/cat7.png')}}' alt='Строй материалы'>Мебель и интерьер</a>
                                    <ul class="dropdown-menu hidden-xs">
                                        <li>
                                            <a class="sp-now" href="#">Диваны и кровати</a>
                                        </li>
                                        <li>
                                            <a class="sp-now" href="#">Журнальные столики</a>
                                        </li>
                                        <li>
                                            <a class="sp-now" href="#">Ковры</a>
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
                                <a class="btn btn-primary btn-block" href="{{route('user.login')}}" title="">Войти</a>
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
                        <li><a href="{{route('user.login')}}" title="" class="c-4">Личный кабинет</a></li>
                        <li><a href="{{route('user.registration')}}" title="" class="c-4">Регистрация</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="menu-overly-mask mbtn-close"></div>
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
