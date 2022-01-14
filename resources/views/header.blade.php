<header class="header">
    <div class="container align-items_center">
        <a href="index.php" class="logo" title="logo">
            <img src="img/1y1ip0Pj2Oc.jpg" class = "img_logo" alt="Logo">
        </a>
        <div class="header-right">
            <div class = "block">
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
