@extends('layouts.shop')
@section('content')

    <div id="main">
        <div class="container">
            <ol class="breadcrumb s13 f-l bread-product">
                <li><a class="btn-back bl-inl" title="Вернуться назад" href="javascript:history.back()">назад</a></li>
                <li><a title="" href="/">Главная</a></li>
                <li><a title="" href="https://coredo.elite-board.org/Russia/Moscow/Tovary/">Товары</a></li>
                <li><a title="" href="https://coredo.elite-board.org/Russia/Moscow/Tovary/sport_stock/">Спорт
                        инвентарь</a></li>
            </ol>
            <div class="main-cont row">
                <div class="col-sm-9 col-content">
                    <div class="product pos-rel">
                        <div class="product_header-btn btn-scroll hidden-xs"><span
                                class="btn-span-active bl-inl al-top b-f">Объявление</span>
                            <a class="bl-inl al-top c-20 b-f-h" href="#comments">Комментарии</a></div>
                        <div class="product_header bl-tb b-f">
                            <div class="bl-cell al-top m-pad">
                                <div class="s19 f-m"><h1>Продам Вело Forward</h1></div>
                                <div class="product_header_info c-7 s13">
                                    <div class="product_header_btn bl-inl al-mid">
                                        <span class="notepad ic-star" data-id="23" data-toggle="tooltip"
                                              data-placement="top" title="Добавить в избранные"></span>
                                        <a class="print bl-inl al-mid bd-d3 br6 b-f5-h hidden-xs" data-toggle="tooltip"
                                           data-placement="top" title="Печать объявления" href=""
                                           onclick="go('/print/23'); return false;"></a></div>
                                    <span data-toggle="tooltip" data-placement="top" title=""
                                          data-original-title="Добавлено 11.02.2022 в 14:24 – Будет удалено 18.09.2025 в 00:00">11.02.2022</span>
                                    <span data-toggle="tooltip" data-placement="top" title="" class="views"
                                          data-original-title="Кол-во просмотров объявления">10</span>
                                    <span>ID 23</span>
                                </div>
                            </div>
                            <div class="bl-cell al-top m-pad text-right bl-cell-price">
                                <div class="product_price">
                                    <div>
                                        <div class="s19 f-m"><span class="price-item bl-inl al-top"><span
                                                    class="currency">₽</span>9 500</span></div>
                                    </div>
                                </div>
                                <div class="product-services"><a
                                        class="premium_modal us-col bl-inl al-mid br6 bd-d3 b-f5-h"
                                        href="/services.html?service=m&amp;message_id=23" data-toggle="tooltip"
                                        data-placement="top" title="" data-original-title="Выделить цветом"></a>
                                    <a class="premium_modal us-top bl-inl al-mid br6 bd-d3 b-f5-h"
                                       href="/services.html?service=r&amp;message_id=23" data-toggle="tooltip"
                                       data-placement="top" title="" data-original-title="Топ-объявление"></a>
                                    <a class="premium_modal us-bl bl-inl al-mid br6 bd-d3 b-f5-h"
                                       href="/services.html?service=b&amp;message_id=23" data-toggle="tooltip"
                                       data-placement="top" title="" data-original-title="Vip-объявление"></a>
                                </div>
                            </div>
                        </div>
                        <div class="product_block b-f m-pad2">
                            <div class="product_block_header row">
                                <div class="product_block_user col-sm-6 col-md-7">
                                    <span class="user-avatar text-up text-center bl-inl al-top br100 c-f f-m pull-left"
                                          id="avatar">А</span>
                                    <div class="user-info"><a data-toggle="tooltip" data-placement="top"
                                                              title="Перейти в профиль" href="/userinfo/1/"><span
                                                class="user-info-name f-m s17" id="name">Админ</span></a>
                                        <div class="product_region"><span class="c-7 user-info-span s13">Регион:</span>
                                            Москва
                                        </div>
                                    </div>
                                </div>
                                <div class="product_block_contacts col-sm-6 col-md-5 text-right"><a
                                        class="contact_modal btn btn-default s15 c-20"
                                        href="/sendmail/?messageid=23&amp;userid=1" title="">Написать</a>

                                    <a data-toggle="modal" data-target="#modal-phone" title=""
                                       class="btn-phone btn btn-success s15" href="#" id="f_32_23">
                                        <span>Показать<span>Телефон</span></span>
                                    </a>
                                </div>
                            </div>
                            <div class="modal fade" id="modal-phone" tabindex="-1" role="dialog">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                                ×
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="modal-phone-header">
                                                <a id="openphone" class="openphone s24" href="#"><span></span></a>
                                                <div class="modal-phone-header-text c-7">Скажите продавцу, что нашли
                                                    объявление на coredo.elite-board.org
                                                </div>
                                            </div>
                                            <div class="modal-phone-body pos-rel">
                                                <div class="product_header_btn bl-inl al-mid pos-abs"><span
                                                        class="notepad ic-star" data-id="23" data-toggle="tooltip"
                                                        data-placement="top"
                                                        title="Добавить в избранные">В избранные</span></div>
                                                <div class="modal-phone-body-name s20">Админ</div>
                                                <div class="modal-phone-body-register">На сайте с 19.05.2018</div>
                                                <div class="modal-phone-body-adress"><span class="c-7">Регион:</span>
                                                    Москва
                                                </div>
                                                <div class="modal-phone-body-email">Пользователь подтверждён</div>
                                                <div class="modal-phone-body-info"><span class="f-b">Внимание!</span> Не
                                                    соглашайтесь на предоплату, если не уверены в надёжности продавца.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product_block_body">
                                <div class="product_block_body_container row">
                                    <div class="fotorama-col col-xs-12 col-sm-6 col-md-7">
                                        <div class="fotorama_container product_fotorama pos-rel">
                                            <style></style>
                                            <div class="fotorama--hidden"></div>
                                            <div class="fotorama fotorama1647902293749" data-nav="thumbs"
                                                 data-fit="scaledown" data-thumbwidth="90" data-allowfullscreen="true"
                                                 data-transition="crossfade" data-width="100%" data-ratio="450/280"
                                                 data-maxwidth="450">
                                                <div
                                                    class="fotorama__wrap fotorama__wrap--css3 fotorama__wrap--fade fotorama__wrap--toggle-arrows fotorama__wrap--no-controls"
                                                    style="width: 100%; min-width: 0px; max-width: 450px;">
                                                    <div class="fotorama__stage" style="width: 450px; height: 280px;">
                                                        <div class="fotorama__fullscreen-icon" tabindex="0"
                                                             role="button"></div>
                                                        <div class="fotorama__stage__shaft"
                                                             style="transition-duration: 0ms; transform: translate3d(0px, 0px, 0px); width: 450px; margin-left: 0px;">
                                                            <div
                                                                class="fotorama__stage__frame fotorama__fade-rear fotorama__loaded fotorama__loaded--img fotorama__active"
                                                                style="left: 0px; transition-duration: 0ms; opacity: 1;">
                                                                <img
                                                                    src="/uploads/usr/0/tb_8c4d5659b6c08bd101d905255bbc2689_35_1.webp"
                                                                    class="fotorama__img"
                                                                    style="width: 374.582px; height: 280px; left: 37.709px; top: 0px;">
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="fotorama__arr fotorama__arr--prev fotorama__arr--disabled"
                                                            tabindex="-1" role="button" disabled="disabled"
                                                            style="display: none;"></div>
                                                        <div
                                                            class="fotorama__arr fotorama__arr--next fotorama__arr--disabled"
                                                            tabindex="-1" role="button" disabled="disabled"
                                                            style="display: none;"></div>
                                                        <div class="fotorama__video-close"></div>
                                                    </div>
                                                    <span class="info pos-abs c-f s20">1 / 1</span></div>
                                            </div>
                                            <span class="img-cover"
                                                  style="background-image:url('/uploads/usr/0/tb_8c4d5659b6c08bd101d905255bbc2689_35_1.webp');"></span>
                                        </div>
                                    </div>
                                    <div class="product_params col-xs-12 col-sm-6 col-md-5">
                                        <div class="product_params_title s17 f-m">Параметры</div>
                                        <ul class="product_params_list">
                                            <li><span>Характер объявления:</span> <a class="c-20 a-hov" title=""
                                                                                     href="/sort/?f_1=2">Предложение</a>
                                            </li>
                                            <li><span>Торг:</span> <a class="c-20 a-hov" title=""
                                                                      href="/sort/?f_28=314">Возможен</a></li>
                                        </ul>
                                        <div class="bid bl-inl al-top point c-3" data-toggle="modal" data-target="#bid">
                                            Предложить свою цену
                                        </div>
                                    </div>
                                </div><!--product_block_body-->
                                <div class="modal fade" id="bid" tabindex="-1" role="dialog">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal"
                                                        aria-hidden="true">×
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <iframe src="/bid/?messageid=23&amp;userid=1"></iframe>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product_description">
                                    <div class="product_description_title s17 f-m">Описание продавца</div>
                                    <div class="product_description_text">Алюминиевая рама, легкий, хорошая резина
                                        Kenda, детали от шимано. Выезжал на нем пару раз, теперь стоит пылится. Скорости
                                        переключает чётко. Размер колес 26. Я ростом 174 см, мне в самый раз.
                                    </div>
                                </div>
                                <div class="socials">
                                    <div class="socials-title c-5 s13 bl-inl al-top">Делитесь с <br>друзьями</div>
                                    <div class="ya-share2 bl-inl al-top ya-share2_inited"
                                         data-services="vkontakte,odnoklassniki,twitter,whatsapp,blogger,viber"
                                         data-counter="">
                                        <div
                                            class="ya-share2__container ya-share2__container_size_m ya-share2__container_color-scheme_normal ya-share2__container_shape_normal">
                                            <ul class="ya-share2__list ya-share2__list_direction_horizontal">
                                                <li class="ya-share2__item ya-share2__item_service_vkontakte"><a
                                                        class="ya-share2__link"
                                                        href="https://vk.com/share.php?url=https%3A%2F%2Fcoredo.elite-board.org%2FRussia%2FMoscow%2FTovary%2Fsport_stock%2F23-prodam-velo-forward.html&amp;title=%D0%9F%D1%80%D0%BE%D0%B4%D0%B0%D0%BC%20%D0%92%D0%B5%D0%BB%D0%BE%20Forward%20%2F%20Coredo%20%D0%B2%20%D1%80%D0%B5%D0%B3%D0%B8%D0%BE%D0%BD%D0%B5%20%D0%A0%D0%BE%D1%81%D1%81%D0%B8%D1%8F%2C%20%D0%9C%D0%BE%D1%81%D0%BA%D0%B2%D0%B0&amp;utm_source=share2"
                                                        rel="nofollow noopener" target="_blank" title="ВКонтакте"><span
                                                            class="ya-share2__badge"><span
                                                                class="ya-share2__icon"></span></span><span
                                                            class="ya-share2__title">ВКонтакте</span></a></li>
                                                <li class="ya-share2__item ya-share2__item_service_odnoklassniki"><a
                                                        class="ya-share2__link"
                                                        href="https://connect.ok.ru/offer?url=https%3A%2F%2Fcoredo.elite-board.org%2FRussia%2FMoscow%2FTovary%2Fsport_stock%2F23-prodam-velo-forward.html&amp;title=%D0%9F%D1%80%D0%BE%D0%B4%D0%B0%D0%BC%20%D0%92%D0%B5%D0%BB%D0%BE%20Forward%20%2F%20Coredo%20%D0%B2%20%D1%80%D0%B5%D0%B3%D0%B8%D0%BE%D0%BD%D0%B5%20%D0%A0%D0%BE%D1%81%D1%81%D0%B8%D1%8F%2C%20%D0%9C%D0%BE%D1%81%D0%BA%D0%B2%D0%B0&amp;utm_source=share2"
                                                        rel="nofollow noopener" target="_blank"
                                                        title="Одноклассники"><span class="ya-share2__badge"><span
                                                                class="ya-share2__icon"></span></span><span
                                                            class="ya-share2__title">Одноклассники</span></a></li>
                                                <li class="ya-share2__item ya-share2__item_service_twitter"><a
                                                        class="ya-share2__link"
                                                        href="https://twitter.com/intent/tweet?text=%D0%9F%D1%80%D0%BE%D0%B4%D0%B0%D0%BC%20%D0%92%D0%B5%D0%BB%D0%BE%20Forward%20%2F%20Coredo%20%D0%B2%20%D1%80%D0%B5%D0%B3%D0%B8%D0%BE%D0%BD%D0%B5%20%D0%A0%D0%BE%D1%81%D1%81%D0%B8%D1%8F%2C%20%D0%9C%D0%BE%D1%81%D0%BA%D0%B2%D0%B0&amp;url=https%3A%2F%2Fcoredo.elite-board.org%2FRussia%2FMoscow%2FTovary%2Fsport_stock%2F23-prodam-velo-forward.html&amp;utm_source=share2"
                                                        rel="nofollow noopener" target="_blank" title="Twitter"><span
                                                            class="ya-share2__badge"><span
                                                                class="ya-share2__icon"></span></span><span
                                                            class="ya-share2__title">Twitter</span></a></li>
                                                <li class="ya-share2__item ya-share2__item_service_whatsapp"><a
                                                        class="ya-share2__link"
                                                        href="https://api.whatsapp.com/send?text=%D0%9F%D1%80%D0%BE%D0%B4%D0%B0%D0%BC%20%D0%92%D0%B5%D0%BB%D0%BE%20Forward%20%2F%20Coredo%20%D0%B2%20%D1%80%D0%B5%D0%B3%D0%B8%D0%BE%D0%BD%D0%B5%20%D0%A0%D0%BE%D1%81%D1%81%D0%B8%D1%8F%2C%20%D0%9C%D0%BE%D1%81%D0%BA%D0%B2%D0%B0%20https%3A%2F%2Fcoredo.elite-board.org%2FRussia%2FMoscow%2FTovary%2Fsport_stock%2F23-prodam-velo-forward.html&amp;utm_source=share2"
                                                        rel="nofollow noopener" target="_blank" title="WhatsApp"><span
                                                            class="ya-share2__badge"><span
                                                                class="ya-share2__icon"></span></span><span
                                                            class="ya-share2__title">WhatsApp</span></a></li>
                                                <li class="ya-share2__item ya-share2__item_service_blogger"><a
                                                        class="ya-share2__link"
                                                        href="https://www.blogger.com/blog-this.g?u=https%3A%2F%2Fcoredo.elite-board.org%2FRussia%2FMoscow%2FTovary%2Fsport_stock%2F23-prodam-velo-forward.html&amp;n=%D0%9F%D1%80%D0%BE%D0%B4%D0%B0%D0%BC%20%D0%92%D0%B5%D0%BB%D0%BE%20Forward%20%2F%20Coredo%20%D0%B2%20%D1%80%D0%B5%D0%B3%D0%B8%D0%BE%D0%BD%D0%B5%20%D0%A0%D0%BE%D1%81%D1%81%D0%B8%D1%8F%2C%20%D0%9C%D0%BE%D1%81%D0%BA%D0%B2%D0%B0&amp;utm_source=share2"
                                                        rel="nofollow noopener" target="_blank" title="Blogger"><span
                                                            class="ya-share2__badge"><span
                                                                class="ya-share2__icon"></span></span><span
                                                            class="ya-share2__title">Blogger</span></a></li>
                                                <li class="ya-share2__item ya-share2__item_service_viber"><a
                                                        class="ya-share2__link"
                                                        href="viber://forward?text=%D0%9F%D1%80%D0%BE%D0%B4%D0%B0%D0%BC%20%D0%92%D0%B5%D0%BB%D0%BE%20Forward%20%2F%20Coredo%20%D0%B2%20%D1%80%D0%B5%D0%B3%D0%B8%D0%BE%D0%BD%D0%B5%20%D0%A0%D0%BE%D1%81%D1%81%D0%B8%D1%8F%2C%20%D0%9C%D0%BE%D1%81%D0%BA%D0%B2%D0%B0%20https%3A%2F%2Fcoredo.elite-board.org%2FRussia%2FMoscow%2FTovary%2Fsport_stock%2F23-prodam-velo-forward.html&amp;utm_source=share2"
                                                        rel="nofollow" target="_blank" title="Viber"><span
                                                            class="ya-share2__badge"><span
                                                                class="ya-share2__icon"></span></span><span
                                                            class="ya-share2__title">Viber</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <span class="abuse btn btn-default s15 c-20 pull-right" data-toggle="modal"
                                          data-target="#abuse">Пожаловаться</span>
                                </div>
                                <div class="modal fade" id="abuse" tabindex="-1" role="dialog" style="display: none;">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="modal-abuse-header text-center s18 f-m">Жалоба на объявление</div>
                                                <div id="complaint-result"></div>
                                                <div id="complaint">
                                                    <form id="complaint-form">
                                                        <div class="form-group complaint-form-email"><input type="email"
                                                                                                            name="email"
                                                                                                            required=""
                                                                                                            value=""
                                                                                                            placeholder="Ваш e-mail"
                                                                                                            class="form-control">
                                                        </div>
                                                        <div class="form-group cl-radio2"><input name="abuse" id="tema1"
                                                                                                 value="Товар продан"
                                                                                                 type="radio"
                                                                                                 required=""><label
                                                                for="tema1">Товар продан</label></div>
                                                        <div class="form-group cl-radio2"><input name="abuse" id="tema2"
                                                                                                 value="Неверная цена"
                                                                                                 type="radio"><label
                                                                for="tema2">Неверная цена</label></div>
                                                        <div class="form-group cl-radio2"><input name="abuse" id="tema3"
                                                                                                 value="Неверное описание, фото"
                                                                                                 type="radio"><label
                                                                for="tema3">Неверное описание, фото</label></div>
                                                        <div class="form-group cl-radio2"><input name="abuse" id="tema4"
                                                                                                 value="Неверный адрес"
                                                                                                 type="radio"><label
                                                                for="tema4">Неверный адрес</label></div>
                                                        <div class="form-group cl-radio2"><input name="abuse" id="tema5"
                                                                                                 value="Мошенник"
                                                                                                 type="radio"><label
                                                                for="tema5">Мошенник</label></div>
                                                        <div class="form-group cl-radio2"><input name="abuse" id="tema6"
                                                                                                 value="Другая причина"
                                                                                                 type="radio"><label
                                                                class="field_label" for="tema6">Другая причина</label>
                                                        </div>
                                                        <input name="url" type="hidden"
                                                               value="https://coredo.elite-board.org/Russia/Moscow/Tovary/sport_stock/23-prodam-velo-forward.html">
                                                        <div class="text-center"><input type="submit" value="Отправить"
                                                                                        class="btn btn-primary s15">
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="comments" class="blogs-comments-area text-center">
                                    <div class="product_comments_title s17 f-m text-left">Комментарии пользователей</div>
                                    <div class="add-comment">
                                        <span class="bl-inl al-top c-f br3">Всего: 0 комментариев</span>
                                    </div>
                                    <div class="blogs-comment-respond" id="respond">
                                        <div class="bl-inl" id="add-comment">
                                            <div class="alert alert-warning">Оставлять комментарии могут только зарегистрированные пользователи!</div>
                                        </div>
                                    </div>
                                </div>
                            </div><!--product_block_body_container-->
                        </div> <!--product_block-->
                    </div><!--product-->
                    <div class="modal fade" id="contact_autor_div" tabindex="-1" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header pos-rel">
                                    <button type="button" class="close" data-dismiss="modal">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                    <div class="modal-header-user-name bl-tb text-center s20">Написать сообщение</div>
                                </div>
                                <div class="modal-body">
                                    <div class="modal-body-user text-center">
                                        <div class="modal-body-user-info">Чтобы начать диалог с продавцом, авторизуйтесь
                                            на сайте, <br>либо пройдите процедуру регистрации
                                        </div>
                                        <div class="modal-body-user-btn">
                                            <a class="btn btn-success btn-block" href="/users/login/">Войти</a>
                                            <a class="btn btn-primary btn-block" href="/users/register/">Регистрация</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="premium_div" tabindex="-1" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <iframe id="premium_iframe" src=""></iframe>
                            </div>
                        </div>
                    </div>
                    <script type="text/javascript">var stringToColor = function (a) {
                            }, name = "Админ", letter = name.substr(0, 1),
                            elementAvatar = document.getElementById("avatar"),
                            elementName = document.getElementById("name");
                        elementName.innerHTML = name;
                        elementAvatar.innerHTML = letter;</script>
                    <script type="text/javascript">function go(addr) {
                            window.open(addr, "MyWin", "scrollbars=yes,menubar=yes,width=700,height=668");
                        }</script>
                </div>
            </div>
        </div>
    </div>

@endsection
