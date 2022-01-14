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
        <div class="personal_area_name">Кузьмин Захар</div>
        <a href="private" class="active border-top">Ваши туры</a>
        <a href="private_change" class="border-bottom">Изменить данные</a>
        <a href="main" class="border-bottom">Назад</a>
    </div>

    <div class="shopping-cart last__order add_product">
        <div class="header-cart" style="background:#e5e5e5">
            <div class = "total__price-cart">Ваши туры</div>
        </div>
        <div class="container container__tour border">
            <img src="img\thailand.jpg" alt="картинка тура" width="200px" height="150px">
            <div class = "description">
                <div class="grade"> 3.5/5</div>
                <div class="margin__description">CARMEN SUITE 4*</div>
                <div class="margin__description" style="font-size:15px;">Аланья</div>
                <div class="margin__description" style="font-size:13px;">Апарт-отель расположен в городе Алания, в 600 м от аквапарка. Состоит из главного 9-этажного здания и дополнительного 5-этажного корпуса. К услугам гостей — апартаменты с бесплатным Wi-Fi, кондиционером и выходом в сад с открытым бассейном.</div>
            </div>
        </div>

        <div class="container container__tour border">
            <img src="img\thailand.jpg" alt="картинка тура" width="200px" height="150px">
            <div class = "description">
                <div class="grade"> 3.5/5</div>
                <div class="margin__description">CARMEN SUITE 4*</div>
                <div class="margin__description" style="font-size:15px;">Аланья</div>
                <div class="margin__description" style="font-size:13px;">Апарт-отель расположен в городе Алания, в 600 м от аквапарка. Состоит из главного 9-этажного здания и дополнительного 5-этажного корпуса. К услугам гостей — апартаменты с бесплатным Wi-Fi, кондиционером и выходом в сад с открытым бассейном.</div>
            </div>
        </div>

        <div class="container container__tour border">
            <img src="img\thailand.jpg" alt="картинка тура" width="200px" height="150px">
            <div class = "description">
                <div class="grade"> 3.5/5</div>
                <div class="margin__description">CARMEN SUITE 4*</div>
                <div class="margin__description" style="font-size:15px;">Аланья</div>
                <div class="margin__description" style="font-size:13px;">Апарт-отель расположен в городе Алания, в 600 м от аквапарка. Состоит из главного 9-этажного здания и дополнительного 5-этажного корпуса. К услугам гостей — апартаменты с бесплатным Wi-Fi, кондиционером и выходом в сад с открытым бассейном.</div>
            </div>
        </div>
    </div>
</div>
@include('footer')

</body>
