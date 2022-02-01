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
    <table class="table" border="1">
        <tr>
            <th class = "corneer__left"  style="border-top-left-radius:5px;">Картинка</th>
            <th>id</th>
            <th>время</th>
            <th>Цена</th>
            <th>Название</th>
            <th>Изменить</th>
            <th class = "corneer__right" style="border-top-right-radius:5px;">удалить</th>
        </tr>
        @foreach(\App\Models\Tour::all() as $tour)
        <tr>
            <td><img src="img/{{$tour->image}}" class="img-table"  width="72" height="60"></td>
            <td>{{$tour->id}}</td>
            <td>{{$tour->start}} - {{$tour->finish}}</td>
            <td>{{$tour->cost}}</td>
            <td>{{$tour->name}}</td>
            <td>
                <form action="{{route('admin_change')}}" method="get">
                    @csrf
                    <input type="hidden" name="id" value="{{$tour->id}}">
                    <button type="submit" class = "registerbtn" name = "submit">Изменить</button>
                </form>
            </td>
            <td>
                <form action="{{route('tour_delete')}}" method="post">
                    @csrf
                    <input type="hidden" name="id" value="{{$tour->id}}">
                    <button type="submit" class = "registerbtn" name = "submit">удалить</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>
</div>
@include('footer')

</body>
