<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>HeyDeTodo</title>
</head>
<body>
<h1>Пользователь успешно зарегистрирован</h1>
<div class="form-group text-center">
    <div class="modal-content">
        <button type="button" class="close" data-dismiss="modal" href="{{route('user.logout')}}"><span>×</span></button>
    </div>
</div>
</body>
</html>
