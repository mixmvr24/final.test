@extends('layouts.shop')
@section('content')
    <div id="header" class="header b-f">
        <div class="header-nav-user">
            <div class="container text-center">
                <div class="dropdown dropdown-hover bl-inl">
                    <div data-toggle="dropdown" class="nav-user-span bl-inl icp1 a-hov b-f-h">Объявления</div>
                    <ul class="dropdown-menu dropdown-ar">
                        <li><a href="/users/">Опубликованы (0)</a></li>
                        <li><a href="/users/moderated/">На модерации (0)</a></li>
                        <li><a href="/users/deleted/">Удалены (0)</a></li>
                        <li><a href="/users/update/">Обновить дату (0)</a></li>
                    </ul>
                </div>
                <a class="ic-panel bl-inl icp4 c-20 b-f-h active-p" href="{{route('pm')}}">
                    Сообщения <span class="pm_counter br20" style="display:none;">0</span></a>
                <a class="ic-panel bl-inl icp6 c-20 b-f-h" href="{{route('info')}}">Профиль</a>
                <a class="ic-panel bl-inl icp8 c-20 b-f-h" href="/users/exit/">Выход</a>
            </div>
        </div>
        <link href="/templates/coredo/css/style-userpanel.css" rel="stylesheet"/>

    </div><!-- /header -->
    <div id="main">
        <div class="container">
            <div class="main-cont row">
                <div class="col-sm-12 col-content b-f bl-pad br3">
                    <h1>Личные сообщения</h1>
                    <div class="bl-tb"></div>
                    <div class="alert alert-info alert-pm-info">У Вас пока нет диалогов. Начните общение &mdash;
                        оставьте комментарий или свяжитесь с автором объявления через форму обратной связи
                    </div>
                </div>
            </div>
        </div>
@endsection
