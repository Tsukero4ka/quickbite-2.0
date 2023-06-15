<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="{{ asset('css/index.css') }}">
        <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
        <link rel="stylesheet" href="{{ asset('css/header.css') }}">
        <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
        <link rel="stylesheet" href="{{ asset('css/main.css') }}">
        <title>QuickBite</title>
    </head>
    <body>
        <main class="page">
            <div class="wrapper">
                <header class="header">
                    <section class="header__desktop-menu">
                        <a class="header__logo" href="/">QuickBite</a>
                        <ul class="header__nav">
                            <a href="/menu" class="header__nav-item">Меню</a>
                            <a href="/about" class="header__nav-item">Про нас</a>
                        </ul>
                    </section>

                    <section class="header__burger-menu">
                        <div class="header__logo">QuickBite</div>
                        <input class="menu-checkbox" type="checkbox" id="burger-toggle" />
                        <label class="header-icon" for="burger-toggle">&#9776;</label>

                        <div class="menu">
                            <a class="menu-item" href="/menu">Меню</a>
                            <a class="menu-item" href="/about">Про нас</a>
                        </div>
                    </section>
                </header>

                <section class="container">
                    <div class="hero">
                        <div class="hero__title">найкращий магазин швидкої їжі</div>
                        <div class="hero__burger">
                            <img src="{{ asset('burger.png') }}" alt="" />
                        </div>
                        <img class="hero__hotdog" src="{{ asset('hotdog.png') }}" alt="" />
                        <img class="hero__hotdog2" src="{{ asset('hotdog.png') }}" alt="">
                    </div>

                    <div class="hero">
                        <img class="hero__bull" src="{{ asset('bull.png') }}" alt="" />
                        <div class="hero__wrapper">
                            <div class="hero__title">ШВИДКА ДОСТАВКА</div>
                            <div class="hero__desc">
                                Ми намагаємось задовільнити нашого клієнта, та стараємось реалізувати доставку максимальної швидкості. Наші курєри
                                роблять це по всьому Києву за 30 хвилин від приготування замовлення
                            </div>
                        </div>

                        <img class="hero__hotdog3" src="{{ asset('hotdog.png') }}"" alt=""> <img class="hero__hotdog4" src="{{ asset('hotdog.png') }}" alt="">
                    </div>

                    <div class="hero">
                        <div class="hero__wrapper">
                            <div class="hero__title">ВИСОКА ЯКІСТЬ ЇЖІ</div>
                            <div class="hero__desc">
                                Висока якість їжі - це головний пріоритет у QuickBite. Ми ретельно відбираємо найсвіжіші та найсмачніші інгредієнти
                                для кожної страви, щоб забезпечити нашим клієнтам неперевершений смак та задоволення. Ми пильно стежимо за якістю
                                приготування кожної порції, щоб кожен ковток був насиченим смаком та ароматом. Наша команда готує з любов'ю до їжі та
                                звертає увагу до кожної дрібниці, щоб забезпечити максимально можливий рівень задоволення наших клієнтів.
                                Насолоджуйтесь високою якістю їжі у нашому QuickBite!
                            </div>
                        </div>
                        <img class="hero__peoples" src="{{ asset('peoples.png') }}" alt="" />
                    </div>
                </section>

                <footer class="footer">
                    <ul class="footer__nav">
                        <a href="/menu" class="footer__nav-item">Меню</a>
                        <a href="/about" class="footer__nav-item">Про нас</a>
                    </ul>

                    <div class="footer__logo">QuickBite</div>

                    <div class="footer__utensils">© Авторські права належать QuickBite</div>
                </footer>
            </div>
        </main>
        <script src="{{ asset('script.js') }}"></script>
    </body>
</html>
