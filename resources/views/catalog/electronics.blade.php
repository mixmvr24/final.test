@extends('layouts.shop')
@section('content')

    <div id="main"><div class="container">
            <div class="main-cont row">
                <div class="col-sm-9 col-content b-f bl-pad br3">
                    <img class="imgcat pull-left hidden-xs" src="{{asset('/images/cat13.png')}}" alt="Телефоны">
                    <h1>Телефоны</h1>
                    <ul class="row tree1">
                        <li class="col-xs-6 col-sm-6 col-md-4 colp"><div class="tree-l sp-now pos-rel"><a href="https://coredo.elite-board.org/Telefony/telephone/" class="pos-rel b-f">
                                    Телефоны</a><span class="count-tree1 b-f pos-abs c-a s13">0</span></div></li>
                        <li class="col-xs-6 col-sm-6 col-md-4 colp"><div class="tree-l sp-now pos-rel"><a href="https://coredo.elite-board.org/Telefony/accessory/" class="pos-rel b-f">
                                    Аксессуары</a><span class="count-tree1 b-f pos-abs c-a s13">0</span></div></li>
                        <li class="col-xs-6 col-sm-6 col-md-4 colp"><div class="tree-l sp-now pos-rel"><a href="https://coredo.elite-board.org/Telefony/content/" class="pos-rel b-f">
                                    Контент</a><span class="count-tree1 b-f pos-abs c-a s13">0</span></div></li>
                        <li class="col-xs-6 col-sm-6 col-md-4 colp"><div class="tree-l sp-now pos-rel"><a href="https://coredo.elite-board.org/Telefony/racii/" class="pos-rel b-f">
                                    Переговорные устройства</a><span class="count-tree1 b-f pos-abs c-a s13">0</span></div></li>
                        <li class="col-xs-6 col-sm-6 col-md-4 colp"><div class="tree-l sp-now pos-rel"><a href="https://coredo.elite-board.org/Telefony/remont/" class="pos-rel b-f">
                                    Ремонт и сервис</a><span class="count-tree1 b-f pos-abs c-a s13">0</span></div></li>
                        <li class="col-xs-6 col-sm-6 col-md-4 colp"><div class="tree-l sp-now pos-rel"><a href="https://coredo.elite-board.org/Telefony/drugoe/" class="pos-rel b-f">
                                    Другое</a><span class="count-tree1 b-f pos-abs c-a s13">0</span></div></li>
                    </ul>
                    <div id="search_form_cat" class="block_search pos-rel">
                        <div class="btn btn-default colsearch visible-xs" data-toggle="collapse" data-target="#colsearch">Все параметры</div>
                        <div id="colsearch" class="collapse in"><form id="block_search" name="block_search" method="GET" action="/search/">
                                <input type="hidden" name="add_cat" class="add_cat" value="7"><input type="hidden" name="add_region" class="add_region" value=""><input type="hidden" name="map" class="add_map" value="">
                                <div class="block_search_ajax"><div class="row search_fields bl-table yamm">
                                        <script>$(".radio-value").on("click",function(){var a="( ";$(this).find("input[type=radio]:checked").each(function(){a+=$(this).siblings("label").text()+" "});a+=")";"( )"==a&&(a="");$(this).find(".selected-radio").text(a)});
                                            $(".checkbox-value").on("click",function(){var a="( ";$(this).find("input[type=checkbox]:checked").each(function(){a+=$(this).siblings("label").text()+" "});a+=")";"( )"==a&&(a="");$(this).find(".selected-checkbox").text(a)});</script>
                                        <div class="col-xs-12 col-sm-6 col-md-4 colp2"><div class="dropdown yamm-fw radio-value">
                                                <div data-toggle="dropdown" class="dropdown-toggle sp-now point form-control icar"><div class="sp-now-w">Сортировать по полю <span class="selected-radio"></span></div></div>
                                                <div class="dropdown-menu">
                                                    <div class="btn-group">
                                                        <div class="btn btn-default cl-radio" role="button"><input id="sort_by1" name="sort_by" type="radio" value="date_add"><label for="sort_by1">Дата</label></div>
                                                        <div class="btn btn-default cl-radio" role="button">
                                                            <input class="form-check" id="f_271" name="sort_by" type="radio" value="f_27"><label for="f_271">Цена</label>
                                                        </div></div>
                                                    <div class="sort-desc"><div class="bl-inl al-top cl-check"><input class="form-check" id="desc1" name="desc" type="checkbox" value="yes"><label for="desc1">В обратном порядке</label></div></div>
                                                </div>
                                            </div></div>
                                        <div class="col-xs-12 col-sm-6 col-md-4 colp2"><div class="dropdown yamm-fw checkbox-value">
                                                <div data-toggle="dropdown" class="dropdown-toggle sp-now point form-control icar"><div class="sp-now-w">Должно присутствовать <span class="selected-checkbox"></span></div></div>
                                                <div class="dropdown-menu">
                                                    <div class="bl-inl al-top cl-check">
                                                        <input id="must[34]1" name="must[34]" type="checkbox" value="ON"><label for="must[34]1">Метка на карте</label>
                                                    </div><br><div class="bl-inl al-top cl-check">
                                                        <input id="must[35]1" name="must[35]" type="checkbox" value="ON"><label for="must[35]1">Фото</label>
                                                    </div><br><div class="bl-inl al-top cl-check">
                                                        <input id="must[36]1" name="must[36]" type="checkbox" value="ON"><label for="must[36]1">Прайс-Лист</label>
                                                    </div><br><div class="bl-inl al-top cl-check">
                                                        <input id="must[37]1" name="must[37]" type="checkbox" value="ON"><label for="must[37]1">Видео с YouTube</label>
                                                    </div><br></div>
                                            </div></div>
                                        <div class="col-xs-12 col-sm-6 col-md-4 colp2">
                                            <div class="dropdown yamm-fw">
                                                <div data-toggle="dropdown" class="dropdown-toggle sp-now point form-control icar"><div class="sp-now-w">Цена</div></div>
                                                <div class="dropdown-menu">
                                                    <div class="slider-inputs">
                                                        <div class="slider-cont" data-id="f_27" data-min="0" data-max="0">
                                                            <div class="input-range">
                                                                <span class="bl-inl rateloc s13 c-5">От</span><input class="from form-control bl-inl al-top" type="text" name="f_27[from]">
                                                                <span class="bl-inl rateloc s13 c-5">До</span><input class="to form-control bl-inl al-top" type="text" name="f_27[to]">
                                                            </div><input type="hidden" class="rate_value" name="f_27[rate]" value="1">
                                                            <div class="rates-range btn-group"><div class="rate btn s13 btn-default active" data-rate="1" data-id="1">руб.</div>
                                                                <div class="rate btn s13 btn-default" data-rate="63.69" data-id="2">usd</div>
                                                                <div class="rate btn s13 btn-default" data-rate="68.78" data-id="3">eur</div>
                                                            </div>
                                                        </div></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div></div><div class="text-right search-ajax-btn"><span class="linkreset bl-inl al-top pull-left c-7 point a-hov" style="display:none">Сбросить <span class="resetclose s22 pos-rel">×</span></span>
                                    <a href="#" class="gotomap btn btn-primary btn-block" title="Объявления на карте">На карте</a><input type="submit" class="btn btn-success btn-block" value="Показать"></div>
                            </form></div></div>
                    <div class="filter-panel bl-tb br6 fpc">
                        <div class="filter-mes btn-group">
                            <a class="btn btn-default" role="button" href="?filter[shop]=all" rel="nofollow">Все <span class="c-7 s13">(0)</span></a>
                            <a class="btn btn-default active-btn disabled" role="button" href="?filter[shop]=only" rel="nofollow">От магазинов <span class="c-7 s13">(0)</span></a>
                            <a class="btn btn-default" role="button" href="?filter[shop]=none" rel="nofollow">Частные <span class="c-7 s13">(0)</span></a>
                        </div>
                    </div><!--// <- filter-panel//-->
                    <div class="count-l text-center">Пока нет объявлений в данной категории</div>
                    <div class="offerlist">
                    </div><!--/offerlist-->
                    <div class="promo-subscribe bl-tb"><div class="promo-subscribe-text pull-left">Получайте новые объявления<br>из категории Телефоны</div>
                        <a class="btn btn-primary s13 pull-right" href="/users/subscribe/">Подписаться</a></div>
                </div>
                <div class="col-sm-3 col-sidebar"><div class="sidebar_right">
                        <div class="block-specials lateral-specials b-f br3">
                            <div class="block-v pos-rel dropdown point dropdown-hover s15 f-m"><h2 class="bl-inl al-top s15">VIP-объявления</h2> <span class="us-bl bl-inl pull-right"></span>
                                <div class="dropdown-menu service-presets-vip"><span class="s18 f-r service-presets-tit bl-bl">VIP-объявление</span>
                                    <div class="s13 f-r service-presets-desc">Ваше объявление будет отображаться в специальном блоке на страницах категорий и объявлений.</div>
                                    <a class="btn btn-success bl-bl f-r" href="/users/order/?service=b">Подключить</a></div>
                            </div>
                            <div class="bl-specials-offer-slider"><div class="specials-container ov-h"><div class="lSSlideOuter "><div class="lSSlideWrapper usingCss"><ul class="specials-offer-slider lightSlider lsGrab lSSlide" style="width: 1620px; transform: translate3d(-270px, 0px, 0px); height: 237.425px; padding-bottom: 0%;"><li class="specials-offer pos-rel clone left" style="width: 270px; margin-right: 0px;">
                                                    <a title="" href="https://coredo.elite-board.org/Russia/Moscow/Avtotransport/sale/mototeh/17-brp-can-am-spyder-roadster.html">
                                                        <div class="carousel-img brazzers-daddy"><div class="tmb-wrap"><div class="tmb-wrap-table"><div class="active"></div><div></div><div></div></div></div><div class="image-wrap"><div class="imgLiquidFill imgLiquid_bgSize imgLiquid_ready" style="background-image: url(&quot;/uploads/usr/0/ts_7ff343613e105334ddecc6fb5e0dfb9a_35_3.webp&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat;"><img alt="" src="/uploads/usr/0/ts_7ff343613e105334ddecc6fb5e0dfb9a_35_3.webp" style="display: none;"></div><div class="imgLiquidFill imgLiquid_bgSize imgLiquid_ready" style="background-image: url(&quot;/uploads/usr/0/ts_7ff343613e105334ddecc6fb5e0dfb9a_35_0.webp&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat;"><img alt="" src="/uploads/usr/0/ts_7ff343613e105334ddecc6fb5e0dfb9a_35_0.webp" style="display: none;"></div><div class="imgLiquidFill imgLiquid_bgSize imgLiquid_ready" style="background-image: url(&quot;/uploads/usr/0/ts_7ff343613e105334ddecc6fb5e0dfb9a_35_1.webp&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat;"><img alt="" src="/uploads/usr/0/ts_7ff343613e105334ddecc6fb5e0dfb9a_35_1.webp" style="display: none;"></div></div></div><h4>BRP Can-Am Spyder Road...</h4></a>
                                                    <span class="notepad-fav"><span class="notepad ic-star" data-id="17" data-toggle="tooltip" data-placement="top" title="Добавить в избранные"></span></span>
                                                    <div class="sp-now bl-pad2">
                                                        <span class="s15"><span class="currency">₽</span> 870 000 </span>
                                                        <span class="reg_cat s13 c-7">Москва</span></div>
                                                </li>
                                                <li class="specials-offer pos-rel lslide active" style="width: 270px; margin-right: 0px;">
                                                    <a title="" href="https://coredo.elite-board.org/Russia/spb/Nedvizhimost/apartmen/sale/12-prodaju-3-h-komnatnuju-kvartiru-80-kv.m.html">
                                                        <div class="carousel-img brazzers-daddy"><div class="tmb-wrap"><div class="tmb-wrap-table"><div class="active"></div></div></div><div class="image-wrap"><div class="imgLiquidFill imgLiquid_bgSize imgLiquid_ready" style="background-image: url(&quot;/uploads/usr/0/ts_33dfaa8f7e8f7328ea85a1cecbfe9e08_35_1.webp&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat;"><img alt="" src="/uploads/usr/0/ts_33dfaa8f7e8f7328ea85a1cecbfe9e08_35_1.webp" style="display: none;"></div></div></div><h4>Продаю 3-х комнатную к...</h4></a>
                                                    <span class="notepad-fav"><span class="notepad ic-star" data-id="12" data-toggle="tooltip" data-placement="top" title="Добавить в избранные"></span></span>
                                                    <div class="sp-now bl-pad2">
                                                        <span class="s15"><span class="currency">₽</span>3 200 000 </span>
                                                        <span class="reg_cat s13 c-7">Санкт-Петербург</span></div>
                                                </li>
                                                <li class="specials-offer pos-rel lslide" style="width: 270px; margin-right: 0px;">
                                                    <a title="" href="https://coredo.elite-board.org/Russia/Moscow/Avtotransport/sale/Legkovye/29-haval-jolion-2021.html">
                                                        <div class="carousel-img brazzers-daddy"><div class="carousel-more pos-abs c-f f-m s13 text-center">Ещё 1 фото</div>
                                                            <div class="tmb-wrap"><div class="tmb-wrap-table"><div class="active"></div><div></div><div></div></div></div><div class="image-wrap"><div class="imgLiquidFill imgLiquid_bgSize imgLiquid_ready" style="background-image: url(&quot;/uploads/usr/0/ts_d57de3451f3ea83bbe97029c7ff300f6_35_4.webp&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat;"><img alt="" src="/uploads/usr/0/ts_d57de3451f3ea83bbe97029c7ff300f6_35_4.webp" style="display: none;"></div><div class="imgLiquidFill imgLiquid_bgSize imgLiquid_ready" style="background-image: url(&quot;/uploads/usr/0/ts_d57de3451f3ea83bbe97029c7ff300f6_35_1.webp&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat;"><img alt="" src="/uploads/usr/0/ts_d57de3451f3ea83bbe97029c7ff300f6_35_1.webp" style="display: none;"></div><div class="imgLiquidFill imgLiquid_bgSize imgLiquid_ready" style="background-image: url(&quot;/uploads/usr/0/ts_d57de3451f3ea83bbe97029c7ff300f6_35_2.webp&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat;"><img alt="" src="/uploads/usr/0/ts_d57de3451f3ea83bbe97029c7ff300f6_35_2.webp" style="display: none;"></div></div></div><h4>Haval Jolion 2021</h4></a>
                                                    <span class="notepad-fav"><span class="notepad ic-star" data-id="29" data-toggle="tooltip" data-placement="top" title="Добавить в избранные"></span></span>
                                                    <a href="/shops/6-avilon-ford-volgogradskij.html" data-toggle="tooltip" data-placement="top" title="АВИЛОН Ford Волгоградский" class="magazin-b">АВИЛОН Ford Волгоградский</a><div class="sp-now bl-pad2">
                                                        <span class="s15"><span class="currency">₽</span>1 899 000 </span>
                                                        <span class="reg_cat s13 c-7">Москва</span></div>
                                                </li>
                                                <li class="specials-offer pos-rel lslide" style="width: 270px; margin-right: 0px;">
                                                    <a title="" href="https://coredo.elite-board.org/Russia/Moscow/Biznes/sale_and_buying/21-biznes-pod-kljuch-franshiza-studii-manikjura-nailmaker.html">
                                                        <div class="carousel-img brazzers-daddy"><div class="tmb-wrap"><div class="tmb-wrap-table"><div class="active"></div></div></div><div class="image-wrap"><div class="imgLiquidFill imgLiquid_bgSize imgLiquid_ready" style="background-image: url(&quot;/uploads/usr/0/ts_9a6a74aa12490c17a3ecb369c734b90a_35_1.webp&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat;"><img alt="" src="/uploads/usr/0/ts_9a6a74aa12490c17a3ecb369c734b90a_35_1.webp" style="display: none;"></div></div></div><h4>Бизнес под ключ/франши...</h4></a>
                                                    <span class="notepad-fav"><span class="notepad ic-star" data-id="21" data-toggle="tooltip" data-placement="top" title="Добавить в избранные"></span></span>
                                                    <div class="sp-now bl-pad2">
                                                        <span class="s15"><span class="currency">₽</span> 120 000 </span>
                                                        <span class="reg_cat s13 c-7">Москва</span></div>
                                                </li>
                                                <li class="specials-offer pos-rel lslide" style="width: 270px; margin-right: 0px;">
                                                    <a title="" href="https://coredo.elite-board.org/Russia/Moscow/Avtotransport/sale/mototeh/17-brp-can-am-spyder-roadster.html">
                                                        <div class="carousel-img brazzers-daddy"><div class="tmb-wrap"><div class="tmb-wrap-table"><div class="active"></div><div></div><div></div></div></div><div class="image-wrap"><div class="imgLiquidFill imgLiquid_bgSize imgLiquid_ready" style="background-image: url(&quot;/uploads/usr/0/ts_7ff343613e105334ddecc6fb5e0dfb9a_35_3.webp&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat;"><img alt="" src="/uploads/usr/0/ts_7ff343613e105334ddecc6fb5e0dfb9a_35_3.webp" style="display: none;"></div><div class="imgLiquidFill imgLiquid_bgSize imgLiquid_ready" style="background-image: url(&quot;/uploads/usr/0/ts_7ff343613e105334ddecc6fb5e0dfb9a_35_0.webp&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat;"><img alt="" src="/uploads/usr/0/ts_7ff343613e105334ddecc6fb5e0dfb9a_35_0.webp" style="display: none;"></div><div class="imgLiquidFill imgLiquid_bgSize imgLiquid_ready" style="background-image: url(&quot;/uploads/usr/0/ts_7ff343613e105334ddecc6fb5e0dfb9a_35_1.webp&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat;"><img alt="" src="/uploads/usr/0/ts_7ff343613e105334ddecc6fb5e0dfb9a_35_1.webp" style="display: none;"></div></div></div><h4>BRP Can-Am Spyder Road...</h4></a>
                                                    <span class="notepad-fav"><span class="notepad ic-star" data-id="17" data-toggle="tooltip" data-placement="top" title="Добавить в избранные"></span></span>
                                                    <div class="sp-now bl-pad2">
                                                        <span class="s15"><span class="currency">₽</span> 870 000 </span>
                                                        <span class="reg_cat s13 c-7">Москва</span></div>
                                                </li><li class="specials-offer pos-rel clone right" style="width: 270px; margin-right: 0px;">
                                                    <a title="" href="https://coredo.elite-board.org/Russia/spb/Nedvizhimost/apartmen/sale/12-prodaju-3-h-komnatnuju-kvartiru-80-kv.m.html">
                                                        <div class="carousel-img brazzers-daddy"><div class="tmb-wrap"><div class="tmb-wrap-table"><div class="active"></div></div></div><div class="image-wrap"><div class="imgLiquidFill imgLiquid_bgSize imgLiquid_ready" style="background-image: url(&quot;/uploads/usr/0/ts_33dfaa8f7e8f7328ea85a1cecbfe9e08_35_1.webp&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat;"><img alt="" src="/uploads/usr/0/ts_33dfaa8f7e8f7328ea85a1cecbfe9e08_35_1.webp" style="display: none;"></div></div></div><h4>Продаю 3-х комнатную к...</h4></a>
                                                    <span class="notepad-fav"><span class="notepad ic-star" data-id="12" data-toggle="tooltip" data-placement="top" title="Добавить в избранные"></span></span>
                                                    <div class="sp-now bl-pad2">
                                                        <span class="s15"><span class="currency">₽</span>3 200 000 </span>
                                                        <span class="reg_cat s13 c-7">Санкт-Петербург</span></div>
                                                </li></ul><div class="lSAction"><a class="lSPrev"></a><a class="lSNext"></a></div></div></div></div></div>
                        </div>
                        <div class="headerblock b-f bl-pad br3"><div class="headercontent"><p class="text-center"><a href="https://elite-board.org/dizain.html" target="_blank" title=""><img alt="" src="/images/cat/design.png"></a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
