@extends('layouts.shop')
@section('content')
    <div class="form-group text-center">
        <div>
            <span>Пользователь успешно авторизирован!</span>
            <a href="{{route('main_page')}}">Для продолжения можете перейти на главную страницу!</a>
        </div>
    </div>
@endsection
