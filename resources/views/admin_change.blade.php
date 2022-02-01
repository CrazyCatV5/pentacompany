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
    <a href="private" class=" border-top">Ваши туры</a>
    <a href="private_change" class="border-bottom">Изменить данные</a>
    @if(\Illuminate\Support\Facades\Auth::user()->tour_manager)
        <a href="admin" class=" active border-bottom">admin-demo</a>
    @endif
    <a href="main" class="border-bottom">Назад</a>
</div>
<div class = "container">
    <div class = "add_product">
        <form action = "vendor/create.php" method="post" enctype="multipart/form-data">
            <div class="add_product_container">

                <label for="email"><b class="add_product_point">Название</b></label>
                <input type="text" name="title" placeholder="Название отлея" required class="add_product_text">

                <label for="email"><b class="add_product_point">Город</b></label>
                <input type="text" name="title" placeholder="Город" required class="add_product_text">

                <label for="psw"><b class="add_product_point">Цена</b></label>
                <input placeholder="Цена тура" name="price" required class="add_product_text">

                <label for="psw"><b class="add_product_point">Страна</b></label>
                <select  name="category"   required class="add_product_text">
                </select>

                <label for="psw"><b class="add_product_point">Изображение</b></label>
                <input type="file" name="image" class="add_product_text" >


                <label for="psw"><b class="add_product_point">Описание</b></label>
                <p><textarea  placeholder="Описание" class="add_product_text"></textarea></p>

                <hr class="registration__line">
                <button type="submit" class="registerbtn" >Добавить</button>
            </div>
        </form>
    </div>
</div>
</div>
@include('footer')

</body>
