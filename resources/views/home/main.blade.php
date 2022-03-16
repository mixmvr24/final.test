@extends('layouts.shop')
@section('content')
    <div id="main">
        <div class="container">
            <div class="text-center indh">
                <h1 class="s24 f-m"><span class="pos-rel">Все категории</span></h1>
            </div>
            <div class="main-cont row">
                <div class="col-content">
                    <div class="categories">
                        <ul class="row tree4 wrapper-scroll-tree4">
                            <li class="categories-item col-xs-6 col-sm-4 col-md-3"><a
                                    href="https://coredo.elite-board.org/Avtotransport/"
                                    class="c-20 s15 bl-bl b-f pos-rel row">
                                <span class="img-circ pull-left"><img src="{{asset('/images/cat1.png')}}"
                                                                      alt="Автотранспорт"></span>
                                    <span class="tree-n bl-bl sp-now">Автотранспорт</span> <span
                                        class="count-tree c-7 s13 bl-bl sp-now">11 объявлений</span></a>
                            </li>
                            <li class="categories-item col-xs-6 col-sm-4 col-md-3"><a
                                    href="https://coredo.elite-board.org/Nedvizhimost/"
                                    class="c-20 s15 bl-bl b-f pos-rel row">
                                <span class="img-circ pull-left"><img src="{{asset('/images/cat2.png')}}"
                                                                      alt="Недвижимость"></span>
                                    <span class="tree-n bl-bl sp-now">Недвижимость</span> <span
                                        class="count-tree c-7 s13 bl-bl sp-now">5 объявлений</span></a>
                            </li>
                            <li class="categories-item col-xs-6 col-sm-4 col-md-3"><a
                                    href="https://coredo.elite-board.org/Mebel-interer/"
                                    class="c-20 s15 bl-bl b-f pos-rel row">
                                    <span class="img-circ pull-left"><img src="{{asset('/images/cat5.png')}}" alt="Мебель, интерьер"></span>
                                    <span class="tree-n bl-bl sp-now">Мебель, интерьер</span> <span
                                        class="count-tree c-7 s13 bl-bl sp-now">1 объявление</span></a>
                            </li>
                            <li class="categories-item col-xs-6 col-sm-4 col-md-3"><a
                                    href="https://coredo.elite-board.org/Tovary/" class="c-20 s15 bl-bl b-f pos-rel row">
                                    <span class="img-circ pull-left"><img src="{{asset('/images/cat14.png')}}" alt="Товары"></span>
                                    <span class="tree-n bl-bl sp-now">Дом и сад</span> <span
                                        class="count-tree c-7 s13 bl-bl sp-now">1 объявление</span></a>
                            </li>
                            <li class="categories-item col-xs-6 col-sm-4 col-md-3"><a
                                    href="https://coredo.elite-board.org/Bytovaya-tehnika/"
                                    class="c-20 s15 bl-bl b-f pos-rel row">
                                    <span class="img-circ pull-left"><img src="{{asset('/images/cat10.png')}}" alt="Бытовая техника"></span>
                                    <span class="tree-n bl-bl sp-now">Бытовая техника</span> <span
                                        class="count-tree c-7 s13 bl-bl sp-now">0 объявлений</span></a>
                            </li>
                            <li class="categories-item col-xs-6 col-sm-4 col-md-3"><a
                                    href="https://coredo.elite-board.org/Uslugi/" class="c-20 s15 bl-bl b-f pos-rel row">
                                    <span class="img-circ pull-left"><img src="{{asset('/images/cat12.png')}}" alt="Услуги"></span>
                                    <span class="tree-n bl-bl sp-now">Услуги</span> <span
                                        class="count-tree c-7 s13 bl-bl sp-now">0 объявлений</span></a>
                            </li>
                            <li class="categories-item col-xs-6 col-sm-4 col-md-3"><a
                                    href="https://coredo.elite-board.org/Telefony/" class="c-20 s15 bl-bl b-f pos-rel row">
                                    <span class="img-circ pull-left"><img src="{{asset('/images/cat13.png')}}" alt="Телефоны"></span>
                                    <span class="tree-n bl-bl sp-now">Электроника</span> <span
                                        class="count-tree c-7 s13 bl-bl sp-now">0 объявлений</span></a>
                            </li>
                            <li class="categories-item col-xs-6 col-sm-4 col-md-3"><a
                                    href="https://coredo.elite-board.org/Stroi-materialy/"
                                    class="c-20 s15 bl-bl b-f pos-rel row">
                                    <span class="img-circ pull-left"><img src="{{asset('/images/cat7.png')}}" alt="Строй материалы"></span>
                                    <span class="tree-n bl-bl sp-now">Стройка и ремонт</span> <span
                                        class="count-tree c-7 s13 bl-bl sp-now">0 объявлений</span></a>
                            </li>
                        </ul>
                    </div>
                    <div id="list_message_block" class="list-block-ind row">
                        <div class="title-name s19 col-sm-12">Свежие объявления
                            <a class="a-all s14 bl-inl al-top a-hov" href="/allmess/">Все объявления</a></div>
                        <div class="wrapper-scroll">
                            <div class="wrapper-scroll-bl">
                                <div class="list_message_block col-xs-6 col-sm-4 col-md-3 col5">
                                    <div id="message_1" class="b-f br10">
                                        <span class="notepad-fav"><span class='notepad ic-star' data-id="1"
                                                                        data-toggle="tooltip" data-placement="top" title="Добавить в избранные"></span>
                                        </span>
                                        <div class="message_block_imag pos-rel br6">
                                            <a title="Продам 1-к квартиру, 41 м², 9/24 эт."
                                               href='https://coredo.elite-board.org/Russia/Moscow/Nedvizhimost/apartmen/sale/1-prodam-1-k-kvartiru-41-m-9-24-jet.html'>
                                                <div class="carousel-img"><img alt="Продам 1-к квартиру, 41 м², 9/24 эт."
                                                                               src="/uploads/usr/0/ts_6700bfa7268531f7b9f11d5875989502_35_0.webp"><img
                                                        alt="Продам 1-к квартиру, 41 м², 9/24 эт."
                                                        src="/uploads/usr/0/ts_6700bfa7268531f7b9f11d5875989502_35_1.webp">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="message_block_tit pos-rel">
                                            <h3><a class="c-20 s14" title="Продам 1-к квартиру, 41 м², 9/24 эт."
                                                   href='https://coredo.elite-board.org/Russia/Moscow/Nedvizhimost/apartmen/sale/1-prodam-1-k-kvartiru-41-m-9-24-jet.html'>Продам
                                                    1-к квартиру, 41 м², 9/24 эт.</a></h3>
                                            <div class="sp-now">
                                                <span class="s15">
                                                    <span class="currency">&#8381;</span>3 000 000</span>
                                                <span class="reg_cat s13 c-7">Москва</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="list_message_block col-xs-6 col-sm-4 col-md-3 col5">
                                    <div id="message_11" class="b-f br10">
                                        <span class="notepad-fav"><span class='notepad ic-star' data-id="11"
                                data-toggle="tooltip" data-placement="top" title="Добавить в избранные"></span>
                                        </span>
                                        <div class="message_block_imag pos-rel br6">
                                            <a title="Продаю снегоход BRP Ski-Doo Summit 800"
                                               href='https://coredo.elite-board.org/Russia/Moscow/Avtotransport/sale/mototeh/11-prodaju-snegohod-brp-ski-doo-summit-800.html'>
                                                <div class="carousel-img"><img alt="Продаю снегоход BRP Ski-Doo Summit 800"
                                                                               src="/uploads/usr/0/ts_c4d6de90c52e9839c404cad9a7cc107a_35_0.webp"><img
                                                        alt="Продаю снегоход BRP Ski-Doo Summit 800"
                                                        src="/uploads/usr/0/ts_c4d6de90c52e9839c404cad9a7cc107a_35_1.webp">
                                                </div>
                                            </a>
                                            <div class="offer-details pos-abs">
                                            <span class="us-bl bl-inl al-top" data-toggle="tooltip" data-placement="top"
                                                  title="Vip-объявление"></span></div>
                                        </div>
                                        <div class="message_block_tit pos-rel">
                                            <h3><a class="c-20 s14" title="Продаю снегоход BRP Ski-Doo Summit 800"
                                                   href='https://coredo.elite-board.org/Russia/Moscow/Avtotransport/sale/mototeh/11-prodaju-snegohod-brp-ski-doo-summit-800.html'>Продаю
                                                    снегоход BRP Ski-Doo Summit 800</a></h3>
                                            <div class="sp-now">
                                                <span class="s15">
                                                    <span class="currency">&#8381;</span> 875 000</span>
                                                <span class="reg_cat s13 c-7">Москва</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="list_message_block col-xs-6 col-sm-4 col-md-3 col5">
                                    <div id="message_46" class="b-f br10">
                                        <span class="notepad-fav"><span class='notepad ic-star' data-id="46"
                                data-toggle="tooltip" data-placement="top" title="Добавить в избранные"></span>
                                        </span>
                                        <div class="message_block_imag pos-rel br6">
                                            <a title="Джинсы светлые Турция"
                                               href='https://coredo.elite-board.org/Russia/Moscow/Lichnye-veshi/women/46-dzhinsy-svetlye-turcija.html'>
                                                <div class="carousel-img"><img alt="Джинсы светлые Турция"
                                                                               src="/uploads/usr/0/ts_50099e885751753071a571bb8fd71ec5_35_0.webp">
                                                </div>
                                            </a>
                                            <a href="/shops/1-dzhinsy-iz-ameriki.html" data-toggle="tooltip"
                                               data-placement="top" title="Джинсы из Америки" class="magazin-b">Джинсы из
                                                Америки</a>
                                        </div>
                                        <div class="message_block_tit pos-rel">
                                            <h3><a class="c-20 s14" title="Джинсы светлые Турция"
                                                   href='https://coredo.elite-board.org/Russia/Moscow/Lichnye-veshi/women/46-dzhinsy-svetlye-turcija.html'>Джинсы
                                                    светлые Турция</a></h3>
                                            <div class="sp-now">
                                                <span class="s15">
                                                    <span class="currency">&#8381;</span>1 500</span>
                                                <span class="reg_cat s13 c-7">Москва</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="list_message_block col-xs-6 col-sm-4 col-md-3 col5">
                                    <div id="message_30" class="b-f br10">
                                        <span class="notepad-fav"><span class='notepad ic-star' data-id="30"
                                data-toggle="tooltip" data-placement="top" title="Добавить в избранные"></span>
                                        </span>
                                        <div class="message_block_imag pos-rel br6">
                                            <a title="Диск колесный алюминиевый R17 Mercedes B-klasse W2"
                                               href='https://coredo.elite-board.org/Russia/Moscow/Avtotransport/autozap/30-disk-kolesnyj-aljuminievyj-r17-mercedes-b-klasse-w2.html'>
                                                <div class="carousel-img"><img
                                                        alt="Диск колесный алюминиевый R17 Mercedes B-klasse W2"
                                                        src="/uploads/usr/0/ts_f3885b82302507da428b878abd73281c_35_0.webp">
                                                </div>
                                            </a>
                                            <a href="/shops/7-zapchasti-all.html" data-toggle="tooltip"
                                               data-placement="top" title="Запчасти ALL" class="magazin-b">Запчасти ALL</a>
                                        </div>
                                        <div class="message_block_tit pos-rel">
                                            <h3><a class="c-20 s14"
                                                   title="Диск колесный алюминиевый R17 Mercedes B-klasse W2"
                                                   href='https://coredo.elite-board.org/Russia/Moscow/Avtotransport/autozap/30-disk-kolesnyj-aljuminievyj-r17-mercedes-b-klasse-w2.html'>Диск
                                                    колесный алюминиевый R17 Mercedes B-klasse W2</a></h3>
                                            <div class="sp-now">
                                                <span class="s15">
                                                    <span class="currency">&#8381;</span>4 500</span>
                                                <span class="reg_cat s13 c-7">Москва</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="list_message_block col-xs-6 col-sm-4 col-md-3 col5">
                                    <div id="message_29" class="b-f br10 marked">
                                        <span class="notepad-fav"><span class='notepad ic-star' data-id="29"
                                data-toggle="tooltip" data-placement="top" title="Добавить в избранные"></span>
                                        </span>
                                        <div class="message_block_imag pos-rel br6">
                                            <a title="Ford Kuga II Рестайлинг"
                                               href='https://coredo.elite-board.org/Russia/Moscow/Avtotransport/sale/Legkovye/29-ford-kuga-ii-restajling.html'>
                                                <div class="carousel-img"><img alt="Ford Kuga II Рестайлинг"
                                                                               src="/uploads/usr/0/ts_d57de3451f3ea83bbe97029c7ff300f6_35_0.webp">
                                                </div>
                                            </a>
                                            <a href="/shops/6-avilon-ford-volgogradskij.html" data-toggle="tooltip"
                                               data-placement="top" title="АВИЛОН Ford Волгоградский" class="magazin-b">АВИЛОН
                                                Ford Волгоградский</a>
                                            <div class="offer-details pos-abs">
                                            <span class="us-col bl-inl al-top" data-toggle="tooltip"
                                                  data-placement="top" title="Выделить цветом"></span><span
                                                    class="us-bl bl-inl al-top" data-toggle="tooltip" data-placement="top"
                                                    title="Vip-объявление"></span>
                                            </div>
                                        </div>
                                        <div class="message_block_tit pos-rel">
                                            <h3><a class="c-20 s14" title="Ford Kuga II Рестайлинг"
                                                   href='https://coredo.elite-board.org/Russia/Moscow/Avtotransport/sale/Legkovye/29-ford-kuga-ii-restajling.html'>Ford
                                                    Kuga II Рестайлинг</a></h3>
                                            <div class="sp-now">
                                                <span class="s15">
                                                    <span class="currency">&#8381;</span>1 690 000</span>
                                                <span class="reg_cat s13 c-7">Москва</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
