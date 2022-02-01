<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>Anna tour</title>
    <link rel="stylesheet" type="text/css" href="{{ asset("css/style.css") }}">
    <meta name="viewport" content="width=device-width">
</head>
<body>
@include('header')
<div class = "container">
    <div class="vertical-menu verticlal-menu_personal_area">
        <div class="personal_area_name">{{\Illuminate\Support\Facades\Auth::user()->first_name}} {{\Illuminate\Support\Facades\Auth::user()->last_name}}</div>
        <a href="private" class="border-top">Ваши туры</a>
        <a href="private_change" class="active border-bottom">Изменить данные</a>
        <a href="main" class="border-bottom">Назад</a>
    </div>
    <div class = "add_product">
        <form method="post", action="{{route('user.update')}}">
            @csrf
            <div class="add_product_container">

                <label for="login"><b class="registration__point">login</b></label>
                <input type="text" placeholder="Введите login" id="login" name="login" required class="registration__text" value="{{\Illuminate\Support\Facades\Auth::user()->login}}">
                @error('email')
                <div>{{$message}}</div>
                @enderror
                <label for="tel"><b class="registration__point">Телефон</b></label>
                <input type="tel" name="number" placeholder="Введите телфон" required class="registration__text" value="{{\Illuminate\Support\Facades\Auth::user()->number}}">
                @error('email')
                <div>{{$message}}</div>
                @enderror
                <label ><b class="registration__point">Имя</b></label>
                <input name="name" type="text" placeholder="Введите Имя" required class="registration__text" value="{{\Illuminate\Support\Facades\Auth::user()->first_name}}">
                @error('email')
                <div>{{$message}}</div>
                @enderror
                <label ><b  class="registration__point">Фамилия</b></label>
                <input name="lname" type="text" placeholder="Введите Фамилию" required class="registration__text" value="{{\Illuminate\Support\Facades\Auth::user()->last_name}}">
                @error('email')
                <div>{{$message}}</div>
                @enderror
                <label ><b class="registration__point">Отчество</b></label>
                <input name="mname" type="text" placeholder="Введите Отчество" required class="registration__text" value="{{\Illuminate\Support\Facades\Auth::user()->middle_name}}">
                @error('email')
                <div>{{$message}}</div>
                @enderror
                <label for="psw"><b class="registration__point">Пароль</b></label>
                <input type="password" placeholder="Введите пароль" name="password" required class="registration__text">
                @error('password')
                <div>{{$message}}</div>
                @enderror
                <label for="psw-repeat"><b class="registration__point">Повторите пароль</b></label>
                <input type="password" placeholder="Повторите пароль" name="password_confirmation" required class="registration__text">
                @error('password_confirmed')
                <div>{{$message}}</div>
                @enderror
                <label for="psw"><b class="registration__point">Пол</b></label>
                <select id="gender" name="gender">
                    <option value="0">Male</option>
                    <option value="1">Female</option>
                </select>

                <hr class="registration__line">
                <button type="submit" class = "registerbtn" name = "submit">Изменить</button>
            </div>
        </form>
    </div>

</div>


</div>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="scripts/menu_catalog.js"></script>
<script src="scripts/main.js"></script>
<script src="scripts/personal_area.js"></script>
@include('footer')

</body>
