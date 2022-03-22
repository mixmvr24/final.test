@extends('layouts.shop')
@section('content')
    <div id="header" class="header b-f">
        <div class="header-nav-user">
            <div class="container text-center">
                <div class="dropdown dropdown-hover bl-inl">
                    <div data-toggle="dropdown" class="nav-user-span bl-inl icp1 a-hov b-f-h">Объявления</div>
                    <ul class="dropdown-menu dropdown-ar">
                        <li><a href="{{route('published')}}">Опубликованы (0)</a></li>
                        <li><a href="/users/moderated/">На модерации (0)</a></li>
                        <li><a href="/users/deleted/">Удалены (0)</a></li>
                        <li><a href="/users/update/">Обновить дату (0)</a></li>
                    </ul>
                </div>
                <a class="ic-panel bl-inl icp4 c-20 b-f-h" href="{{route('pm')}}">
                    Сообщения <span class="pm_counter br20" style="display:none;">0</span></a>
                <a class="ic-panel bl-inl icp6 c-20 b-f-h active-p" href={{route('info')}}>Профиль</a>
                <a class="ic-panel bl-inl icp8 c-20 b-f-h" href="/users/exit/">Выход</a>
                <div>
                    <link href="{{asset("/css/style-userpanel.css")}}">
                </div>

            </div><!-- /header -->

            <div id="main">
                <div class="container">
                    <div class="main-cont row">
                        <div class="col-sm-12 col-content b-f bl-pad br3">
                            <h1>Параметры входа
                            </h1>
                            <div class="registr_block1 text-center" id="panel_reg">
                                <form name='panel_reg' action='' method='post'
                                      class="form-registr form-container bl-inl al-top form-hover">
                                    <div class="text-left">
                                        <div class="text-center">
                                            <div class="form-group"><p class="s13 f-l c-7">Внимание! После смены e-mail
                                                    адреса потребуется
                                                    его повторное подтверждение! Если не желаете менять свой пароль,
                                                    оставьте поле пустым.</p></div>
                                        </div>
                                        <div class="form-group pos-rel"><input placeholder="Ваше имя" id="rname"
                                                                               class="form-control" required=""
                                                                               name='name' type='text' value='user777'>
                                        </div>
                                        <div class="form-group pos-rel"><input placeholder="Ваш e-mail" id="remail"
                                                                               class="form-control" required=""
                                                                               name='email' type='email'
                                                                               value='mixmvr@yandex.ru'></div>
                                        <div class="form-group pos-rel">
                                            <div class="pos-rel"><input placeholder="Пароль" name="password"
                                                                        id="password1" value=""
                                                                        class="form-control show-pas1"
                                                                        type="password"><span
                                                    class="masked1 bl-bl pos-abs point"></span></div>
                                            <div class="pos-rel"><input placeholder="Повторите пароль" name="password1"
                                                                        id="password2" value=""
                                                                        class="form-control show-pas2" type="password"
                                                                        style="display:none;"><span
                                                    class="masked2 bl-bl pos-abs point"></span></div>
                                            <div class="alert alert-success form-alert" style="display: none;"
                                                 id="password_success">Пароли совпали!
                                            </div>
                                            <div class="alert alert-warning form-alert" style="display: none;"
                                                 id="password_warning">Пароли не совпадают!
                                            </div>
                                            <div class="alert alert-info form-alert" style="display: none;"
                                                 id="password_info">Пароль слишком короткий!
                                            </div>
                                        </div>

                                        <div class="form-group text-center">
                                            <div class="captcha_cont">
                                                <img alt="" src='/captcha/423982'>
                                                <input name="captcha" required=""
                                                       class="form-control bl-inl al-top s22 required" type="text"
                                                       placeholder="Код" autocomplete="off"></div>
                                        </div>
                                        <div class="form-group text-center">
                                            <div class="checkbox cl-check"><input id='person' type="checkbox"
                                                                                  required=""><label for='person'>Cогласие
                                                    на <a class="license" href="#">обработку персональных
                                                        данных</a></label></div>
                                            <div class="modal fade" id="license_text" tabindex="-1" role="dialog"
                                                 aria-labelledby="license_title" aria-hidden="true">
                                                <div class="modal-dialog text-left">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal">
                                                                <span aria-hidden="true">×</span></button>
                                                            <h4 class="modal-title" id="license_title">Согласие на
                                                                обработку персональных данных</h4></div>
                                                        <div class="modal-body">Предоставляя свои персональные данные
                                                            пользователь даёт согласие на обработку, хранение и
                                                            использование своих персональных данных на основании ФЗ №
                                                            152-ФЗ «О персональных данных» от 27.07.2006 г.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <input type='submit' name='submit_registr' value='Сохранить'
                                                   class="btn btn-primary btn-block">
                                        </div>

                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="menu-overly-mask mbtn-close"></div>
@endsection
