<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="<?php echo e(asset('css/index.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('css/reset.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('css/header.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('css/footer.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('css/main.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('css/menu.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('css/about.css')); ?>">
        <title>QuickBite - Про нас</title>
    </head>
    <body>
        <main class="page">
            <div class="wrapper">
                <header class="header">
                    <section class="header__desktop-menu">
                        <a class="header__logo" href="/">QuickBite</a>
                        <ul class="header__nav">
                            <a href="/menu" class="header__nav-item">Меню</a>
                            <a class="header__nav-item">Про нас</a>
                        </ul>
                    </section>

                    <section class="header__burger-menu">
                        <a class="header__logo" href="/">QuickBite</a>
                        <input class="menu-checkbox" type="checkbox" id="burger-toggle" />
                        <label class="header-icon" for="burger-toggle">&#9776;</label>

                        <div class="menu">
                            <a class="menu-item" href="/menu">Меню</a>
                            <a class="menu-item">Про нас</a>
                        </div>
                    </section>
                </header>
            </div>

            <section class="container">
                <div class="wrapper about">
                    <div class="faq-item">
                        <input class="item-input" id="item1" type="checkbox" />
                        <label class="item-title" for="item1">Команда QuickBite</label>
                        <div class="item-text">
                            Ми - команда професіоналів, яка надає послуги доставки фастфуду найвищої якості. Наша місія полягає в тому, щоб
                            забезпечити клієнтів смачною та якісною їжею, яку вони можуть насолоджуватися у зручний для себе час і місце.
                        </div>
                    </div>

                    <div class="faq-item">
                        <input class="item-input" id="item2" type="checkbox" />
                        <label class="item-title" for="item2">Чому ми?</label>
                        <div class="item-text">
                            Ми працюємо з найкращими ресторанами міста, щоб надавати широкий вибір страв для наших клієнтів. Ми переконані, що кожен
                            повинен мати можливість насолоджуватися смачною їжею, навіть якщо не має часу або можливості піти до ресторану.
                        </div>
                    </div>

                    <div class="faq-item">
                        <input class="item-input" id="item3" type="checkbox" />
                        <label class="item-title" for="item3">Наша команда</label>
                        <div class="item-text">
                            Наша команда прагне до того, щоб наш сервіс був максимально зручним і доступним для всіх клієнтів. Ми працюємо цілодобово,
                            щоб ви могли замовити їжу в будь-який час доби, і наша доставка завжди своєчасна і швидка.
                        </div>
                    </div>
                </div>
            </section>

            <div class="wrapper">
                <footer class="footer">
                    <ul class="footer__nav">
                        <a href="/menu" class="footer__nav-item">Меню</a>
                        <a class="footer__nav-item">Про нас</a>
                    </ul>

                    <div class="footer__logo">QuickBite</div>

                    <div class="footer__utensils">© Авторські права належать QuickBite</div>
                </footer>
            </div>
        </main>
        <script src="<?php echo e(asset('script.js')); ?>"></script>
    </body>
</html>
<?php /**PATH C:\Users\seaniwe\Desktop\app\resources\views/pages/about.blade.php ENDPATH**/ ?>