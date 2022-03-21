@extends('layouts.shop')
@section('content')
    <div id="main-cont row">
        <div class="container">
            <div class="bl-tb container-tb">
                <div class="bl-cell al-top bl-center">
                    <div class="text-center">
                        <form method="post" action="{{route('user.login')}}"
                              class="form-container form-login bl-inl al-top form-hover">
                            @csrf
                            <div class="text-center"><h1>Вход в личный кабинет</h1></div>
                            <div class="field-form text-left">
                                <input placeholder="Email" name="email" id="email" type="text"
                                       class="email form-control br20 b-f">
                                <div class="pos-rel">
                                    <input placeholder="Password" name="password" type="password"
                                           class="pass-log form-control br20 b-f">
                                </div>
                                <div class="text-right">
                                    <a class="a-pass s13" href="{{route('user.recovery')}}">Напомнить пароль</a>
                                </div>
                            </div>
                            <div class="btn-form text-center">
                                <button type="submit" class="btn btn-primary btn-block br20">Войти</button>
                            </div>
                            <input name="submit_login2" value="1" type="hidden">
                            <div class="text-center"><a class="a-reg" href="{{route('user.registration')}}>Регистрация</a></div>
        <input type=" hidden" name="_csrf" value="34ef127c06c64c5e307158eb7a2ab3711647800369">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
