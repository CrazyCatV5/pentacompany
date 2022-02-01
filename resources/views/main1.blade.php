
    <!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>Anna tour</title>
    <link rel="stylesheet" href="{{ asset("css/style.css") }}">
    <meta name="viewport" content="width=device-width">
    <script src="https://kit.fontawesome.com/c734ae8fb2.js" crossorigin="anonymous"></script>
</head>
<body>
@include('header')
<div class="banner">
    <form action='' method="get">
    <div class="container align-items_center container-box space-around-box">
        <div class="choise" style='border-top-left-radius:6px; border-bottom-left-radius:6px; padding:0px;'>
            <div class="drop" style='margin-top:10px; margin-bottom:10px;'>
                <p>Куда</p>
                        <select name="country" id="country">
                            <option>страна</option>
                            @foreach(\Illuminate\Support\Facades\DB::table('tours')->distinct()->get(['country'])->toArray() as $country)
                                <option>{{$country->country}}</option>
                            @endforeach
                        </select>

            </div>
        </div>
        <div class="choise" style='padding:0px;'>
            <div class="drop" style='margin-top:10px; margin-bottom:10px;' >
                <p>Цена мин.</p>
                    <input type="number" placeholder="0" id="price_min" name="price_min" min="1" max="1000000000">
            </div>
        </div>
        <div class="choise" class="start-choise">
            <div class="drop">
                <p>Цена макс.</p>
                <input type="number" placeholder="999999" id="price_max" name="price_max" min="1" max="1000000000">
            </div>
        </div>
        <div class="choise" class="start-choise">
            <div class="drop">
                <p>рейтинг</p>
                        <select name="rating" id="rating">
                            <option>0</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            <option>6</option>
                            <option>7</option>
                            <option>8</option>
                            <option>9</option>
                            <option>10</option>
                        </select>
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
                    <form action="{{route('buy')}}" method="post">
                        @csrf
                        <input type="hidden" name="id" value="{{$tour->id}}">
                        <button type="submit" class = "registerbtn" name = "submit">купить</button>
                    </form>
                </div>
            </li>
    @endforeach
</ul>

<div class="shopping-cart">
    <div class="header-cart">
        <div class="from_which_city">
        </div>
    </div>
    @foreach($Tour as $tour)
    <div class="item-cart">
        <div class = "product__inf-cart">
            <img src="img/{{$tour->image}}" class="image-cart" alt="" />

            <div>
                <div class="description-cart">{{$tour->name}}</div>
                <div class="item__price-cart">{{$tour->short_description}}</div>
                <div class="item__price-cart">{{$tour->cost}}р</div>
                <div class="buttons__wrap">
                <!--<button class="button__country" onclick="window.location.href='{{ route('hotel_item', ['id' => $tour->id]) }}'">Подробнее</button> -->
                    <form action="{{route('buy')}}" method="post">
                        @csrf
                        <input type="hidden" name="id" value="{{$tour->id}}">
                        <button type="submit" class = "button__country" name = "submit">купить</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
    @endforeach
    {!! $Tour->appends(request()->except('page'))->links() !!}
</div>
    <style>.w-5{
            display: none;
        }
        p.text-sm{
            display: none;
        }
    </style>
@include('footer')


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
