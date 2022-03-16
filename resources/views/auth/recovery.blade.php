@extends('layouts.shop')
@section('content')
    <div class="registr_block1 text-center">
        <form name="form" action="?" method="post" class="password-recovery form-container bl-inl al-top form-hover">
            <div class="text-center">
                <h1>Восстановление пароля</h1>
            </div>
            <div class="form-group text-left">
                <input placeholder="Введите email, указанный при регистрации" name="email" id="sender-email" type="email" class="form-control input-control email" required="">
            </div>
            <div class="form-group text-center">
                <input type="submit" name="submit" value="Отправить" class="btn btn-success btn-block">
            </div>
        </form>
    </div>
@endsection
