@extends('layouts.shop')
@section('content')
    <div id="main">
        <div class="container">
            <div class="bl-tb container-tb">
                <div class="bl-cell al-top bl-center">
                    <div class="text-center">
                        <form  method="POST" action="{{route('user.login')}}"
                              class="form-container form-login bl-inl al-top form-hover">
                            @csrf
                            <div class="text-center">
                                <h1>Вход в личный кабинет</h1>
                            </div>
                            <div class="field-form text-left">
                                <div class="pos-rel">
                                    <input placeholder="email" name="email" id="email" type="text" class="email form-control br3 b-f">
                                </div>
                                @error('email')
                                    <div class="alert alert-danger">{{$massage}}</div>
                                @enderror
                                <div class="pos-rel">
                                    <input placeholder="password" name="password" type="password" class="pass-log show-pas1 form-control br3 b-f" id="password">
                                </div>
                                @error('password')
                                <div class="alert alert-danger">{{$massage}}</div>
                                @enderror
                                <div class="text-right">
                                    <a class="a-pass s13" href="">Напомнить пароль</a>
                                </div>
                            </div>
                            <div class="btn-form text-center">
                                <button type="submit" class="btn btn-primary s16">Войти</button>
                            </div>
                            <input name="submit_login2" value="1" type="hidden">
                            <div class="text-center"><a class="a-reg" href="{{route('user.registration')}}">Регистрация</a></div>
                            <input type="hidden" name="_csrf" value="a258a069d5654998dfd3399a8bf618651641757261">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
