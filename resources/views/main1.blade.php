
    <!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>Anna tour</title>
    <link rel="stylesheet" href="{{ asset("css/style.css") }}">
    <meta name="viewport" content="width=device-width">
    <script src="https://kit.fontawesome.com/c734ae8fb2.js" crossorigin="anonymous"></script>
</head>
<body>
<header class="header">
    <div class="container align-items_center">
        <a href="index.php" class="logo" title="logo">
            <img src="img/1y1ip0Pj2Oc.jpg" class = "img_logo" alt="Logo">
        </a>
        <div class="header-right">
            <div class = "block">
                <div class = "subblock">
                    <div class="login">
                        <button class="button-login" onclick="window.location.href='private'">
                            Страны
                        </button>
                    </div>
                    <div class="login">
                        <button class="button-login" onclick="window.location.href='private'">
                            Агенствам
                        </button>
                    </div>
                </div>
                <div class = "subblock">
                    @if (Auth::check())
                        <div class="login">
                            <button class="button-login" onclick="window.location.href='logout'">
                                Выход
                            </button>
                        </div>
                    @else
                        <div class="login">
                            <button class="button-login" onclick="window.location.href='registration'">
                                Регистрация
                            </button>
                        </div>
                    @endif
                    @if (Auth::check())
                        <div class="login">
                            <button class="button-login" onclick="window.location.href='private'">
                                Личный кабинет
                            </button>
                        </div>
                    @else
                        <div class="login">
                            <button class="button-login" onclick="window.location.href='login'">
                                Вход
                            </button>
                        </div>
                    @endif
                </div>
                <div class="bars"><i class="fa fa-bars catalog__header-icon"></i></div>
            </div>
        </div>
    </div>
</header>
<div class="banner">
    <form action=''>
    <div class="container align-items_center container-box space-around-box">
        <div class="choise" style='border-top-left-radius:6px; border-bottom-left-radius:6px; padding:0px;'>
            <div class="drop" style='margin-top:10px; margin-bottom:10px;'>
                <p>Куда</p>
                <div class="dropdown_block">
                        <select name="country" id="country">
                            <option>страна</option>
                        @foreach(\Illuminate\Support\Facades\DB::table('tours')->distinct()->get(['country'])->toArray() as $country)
                                <option>{{$country->country}}</option>
                            @endforeach
                        </select>

                </div>
            </div>
        </div>
        <div class="choise" style='padding:0px;'>
            <div class="drop" style='margin-top:10px; margin-bottom:10px;' >
                <p>Цена</p>
                <div class="dropdown_block" >
                    <ul>
                        @foreach(\Illuminate\Support\Facades\DB::table('hotels')->distinct('country')->get(['country'])->toArray() as $hotel)
                            <li>{{$hotel->country}}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <div class="choise" style='padding:5px;'>
            Дата вылета:<input type="text" name="daterange" value="01/01/2021 - 01/15/2021" />
        </div>
        <div class="choise" class="start-choise">
            <div class="drop">
                <p>Цена</p>
                <div class="dropdown_block">
                    <ul>
                        <li>1</li>
                        <li>2</li>
                        <li>3</li>
                        <li>4</li>
                        <li>5</li>
                        <li>6</li>
                        <li>7</li>
                        <li>8</li>
                        <li>9</li>
                        <li>10</li>
                        <li>11</li>
                        <li>12</li>
                        <li>13</li>
                        <li>14</li>
                        <li>15</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="choise" class="start-choise">
            <div class="drop">
                <p>Туристы</p>
                <div class="dropdown_block">
                    <ul>
                        <li>1 человек</li>
                        <li>2 человека</li>
                        <li>3 человека</li>
                        <li>4 человек</li>
                        <li>5 человек</li>
                        <li>6 человек</li>
                    </ul>
                </div>
            </div>
        </div>
        <button class="choise confirm_selection" >
            Подобрать
        </button>
    </div>
    </form>
</div>

<ul class="container box_card">
    @foreach(\Illuminate\Support\Facades\DB::table('tours')->orderBy('rating','desc')->take(4)->get() as $tour)
    <li class="card">
        <img src="img/{{$tour->image}}" alt="Avatar" style="width:210px; height:130px;">
        <div class="container_description">
            <h4><b>{{$tour->name}}</b></h4>
            <p> {{$tour->cost}} р</p>
        </div>
    </li>
    @endforeach
</ul>

<div class="shopping-cart">
    <div class="header-cart">
        <div class="from_which_city">
            <div class="header__text">Город вылета</div>
            <div class="choise" class="start-choise" style = "width:190px; margin:0; border-right:none; padding:2px; margin-top:5px;">
                <div class="drop">
                    <p>Москва</p>
                    <div class="dropdown_block">
                        <ul>
                            <li>1 человек</li>
                            <li>2 человека</li>
                            <li>3 человека</li>
                            <li>4 человек</li>
                            <li>5 человек</li>
                            <li>6 человек</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @foreach($data as $tour)
    <div class="item-cart">
        <div class = "product__inf-cart">
            <img src="img/{{$tour->image}}" class="image-cart" alt="" />

            <div>
                <div class="description-cart">{{$tour->name}}</div>
                <div class="item__price-cart">{{$tour->short_description}}</div>
                <div class="buttons__wrap">
                    <button class="button__country"><a href="{{ route('hotel_item', ['id' => $tour->id]) }}">Подробнее</a></button>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    {{ $data->links() }}
</div>
    <style>.w-5{
            display: none;
        }
    </style>
<div class="grey__background">
    <div id="footer">
        Anna tour&trade; 2022
    </div>
</div>


<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<script>
    $(function() {
        $('input[name="daterange"]').daterangepicker({
            opens: 'left'
        }, function(start, end, label) {
            console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
        });
    });
</script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
</body>
</html>
