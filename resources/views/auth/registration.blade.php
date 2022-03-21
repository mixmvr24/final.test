@extends('layouts.shop')
@section('content')
    <div id="main-cont row">
        <div class="col-sm-12 col-content  bl-pad br3">
            <div class="bl-tb container-tb">
                <div class="bl-cell al-top bl-center">
                    <div class="registr_block1 text-center" id="panel_reg">
                        <form name="panel_reg" action="{{route('user.registration')}}" method="post"
                              class="form-registr form-container bl-inl al-top form-hover">
                            @csrf
                            <div class="text-left">
                                <div class="text-center"><h1>Регистрация</h1>
                                </div>
                                <div class="form-group pos-rel"><input placeholder="Ваше имя" id="name"
                                                                       class="name form-control br20 b-f"  name="name"
                                                                       type="text" value="">
                                </div>
                                <div class="form-group pos-rel"><input placeholder="Ваш e-mail" id="remail"
                                                                       class="email form-control br20 b-f"  name="email"
                                                                       type="email" value="">
                                </div>
                                <div class="form-group pos-rel">
                                    <div class="pos-rel"><input placeholder="Пароль" name="password" id="password1"
                                                                value="" class="pass-log form-control br20 b-f" type="password">
                                    </div>
                                    <div class="pos-rel"><input placeholder="Повторите пароль" name="password1"
                                                                id="password2" value="" class="form-control show-pas2"
                                                                type="password" style="display:none;">
                                    </div>
                                    <div class="alert alert-success form-alert" style="display: none;"
                                         id="password_success">Пароли совпали!
                                    </div>
                                    <div class="alert alert-warning form-alert" style="display: none;"
                                         id="password_warning">Пароли не совпадают!
                                    </div>
                                    <div class="alert alert-info form-alert" style="display: none;" id="password_info">
                                        Пароль слишком короткий!
                                    </div>
                                </div>
                                <div class="form-group text-center">
                                    <input type="submit" name="submit_registr" value="Зарегистрироваться"
                                           class="btn btn-primary btn-block br20">
                                </div>
                            </div>
                            <input type="hidden" name="_csrf" value="1d48bf09027a1496e67a15e602c07e641647801098">
                        </form>
                    </div>
                </div>
            </div>
@endsection
