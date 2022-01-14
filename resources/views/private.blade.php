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
        <a href="private" class="active border-top">Ваши туры</a>
        <a href="private_change" class="border-bottom">Изменить данные</a>
        <a href="main" class="border-bottom">Назад</a>
    </div>

    <div class="shopping-cart last__order add_product">
        <div class="header-cart" style="background:#e5e5e5">
            <div class = "total__price-cart">Ваши туры</div>
        </div>
        @foreach(\Illuminate\Support\Facades\DB::table('contracts')->where('user_id', '=', \Illuminate\Support\Facades\Auth::user()->id)->get() as $contract)
            @foreach(\Illuminate\Support\Facades\DB::table('tours')->where('id', '=', $contract->tour_id)->get() as $tour)
        <div class="container container__tour border">
            <img src="img\{{$tour->image}}" alt="картинка тура" width="200px" height="150px">
            <div class = "description">
                <div class="grade"> {{$tour->rating}}/10</div>
                <div class="margin__description">{{$tour->name}}</div>
                <div class="margin__description" style="font-size:15px;">{{$tour->country}}</div>
                <div class="margin__description" style="font-size:13px;">{{$tour->description}}</div>
                <form action="{{route('delete')}}" method="post">
                    @csrf
                    <input type="hidden" name="id" value="{{$contract->id}}">
                    <button type="submit" class = "registerbtn" name = "submit">удалить</button>
                </form>
            </div>
        </div>
            @endforeach
        @endforeach

    </div>
</div>
@include('footer')

</body>
