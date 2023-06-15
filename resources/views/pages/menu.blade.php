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
        <link rel="stylesheet" href="{{ asset('css/menu.css') }}">
        <title>QuickBite - Меню</title>
    </head>
    <body>
        <main class="page">
            <div class="wrapper">
                <header class="header">
                    <section class="header__desktop-menu">
                        <a class="header__logo" href="/">QuickBite</a>
                        <ul class="header__nav">
                            <a class="header__nav-item">Меню</a>
                            <a href="/about" class="header__nav-item">Про нас</a>
                        </ul>
                    </section>

                    <section class="header__burger-menu">
                        <a class="header__logo" href="/">QuickBite</a>
                        <input class="menu-checkbox" type="checkbox" id="burger-toggle" />
                        <label class="header-icon" for="burger-toggle">&#9776;</label>

                        <div class="menu">
                            <a class="menu-item">Меню</a>
                            <a class="menu-item" href="/about">Про нас</a>
                        </div>
                    </section>
                </header>
            </div>

            <section class="container">
                <div class="wrapper">
                    <div class="menu-title">Меню</div>
                    <div class="menu-products">
                        @foreach($products as $product)
                        <div class="menu-products__item" data-id="{{$product->id}}" >
                            <img src="{{ asset('eat/'. $product-> img_name) }}" alt="Product Image">
                            <div class="name">{{$product-> name}}</div>
                            <div class="price">{{ $product->price }} UAH</div>
                            <button class="menu-products__item-button" onclick="addProduct('{{$product->id}}')" >Додади</button>
                        </div>
                        @endforeach
                    </div>
                </div>
            </section>

            <div class="wrapper">
                <footer class="footer">
                    <ul class="footer__nav">
                        <a class="footer__nav-item">Меню</a>
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
