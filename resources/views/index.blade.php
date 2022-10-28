<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap&subset=cyrillic-ext" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<div class="wrapper">
    <header class="header">
        <nav class="header_auth auth">
            <div class="_container">
                <ul class="auth_list">
                    <li class="auth_item">
                        <a href="" class="auth_link">Реєстрація</a>
                    </li>
                    <li class="auth_item">
                        <a href="" class="auth_link">Авторизація</a>
                    </li>
                    <li class="auth_item_ua">
                        <a href="" class="auth_link">UA</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="header_container">
            <div class="_container">
                <nav class="header_search">
                    <div class="logotype">
                        <a href="">
                            <img src="{{asset('assets/images/Logo.jpg')}}" alt="" class="logo">
                        </a>
                    </div>
                    <div class="search_buttons">
                        <div class="buttons">
                            <div class="border">
                                <a href="" class="btn">Гарячі знижки</a>
                            </div>
                            <div class="border">
                                <a href="" class="btn">Топ продажу</a>
                            </div>
                            <div class="border">
                                <a href="" class="btn">Новинки</a>
                            </div>
                        </div>
                        <div class="search col-8">
                            <div class="search_item">
                                <form class="form_search">
                                    <div class="border_input">
                                        <input type="text" name=text" class="search_input" placeholder="Я шукаю...">
                                    </div>
                                    <div>
                                        <input type="submit" name="submit" class="search_submit" value="Знайти">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="likes_cart">
                        <div class="likes">
                            <div class="likes_img">
                                <img src="{{asset('assets/images/like_icon.jpg')}}" class="icon_like" alt="">
                            </div>
                            <div class="likes_count"> 1</div>
                        </div>
                        <div class="cart">
                            <div class="cart_img">
                                <img src="" class="icon_cart" alt="">
                            </div>
                            <div class="cart_count"> 1</div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <nav class="header_menu menu">
            <div class="container_menu">
                <ul class="menu_list">
                    <li class="menu_item">
                        <a href="" class="item_link">
                            <img src="{{asset('assets/images/home_icon.jpg')}}" alt="">
                        </a>
                    </li>
                    <li class="menu_item">
                        <a href="" class="item_link">КАТАЛОГ</a>
                    </li>
                    <li class="menu_item">
                        <a href="" class="item_link">АКЦІЇ</a>
                    </li>
                    <li class="menu_item">
                        <a href="" class="item_link">ОПЛАТА І ДОСТАВКА</a>
                    </li>
                    <li class="menu_item">
                        <a href="" class="item_link">ГАРАНТІЯ ТА ПОВЕРНЕННЯ</a>
                    </li>
                    <li class="menu_item">
                        <a href="" class="item_link">ПРО НАС</a>
                    </li>
                    <li class="menu_item">
                        <a href="" class="item_link">КОНТАКТИ</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    {{--MAIN CONTEN----------------------------------------------------------------------}}
    <main class="main">
        <div class="main_container">
{{--            <div>--}}
{{--                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus adipisci asperiores assumenda blanditiis consequuntur dignissimo.--}}
{{--            </div>--}}
{{--            <div>--}}
{{--                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus adipisci asperiores assumenda blanditiis consequuntur dignissimo.--}}
{{--            </div>--}}
{{--            <div>--}}
{{--                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus adipisci asperiores assumenda blanditiis consequuntur dignissimo.--}}
{{--            </div>--}}
        </div>
        <div class="hot_products">
            <div class="hot_header">
                <img src="{{asset('assets/images/arrow_icon.png')}}" alt="">
                <span>Гарячі знижки</span>
            </div>
            <div class="hot_content">
                <div class="owl-carousel owl-carousel-hot-products owl-theme">
                    <div class="item">
                        <div class="image_product">
                            <img src="{{asset('assets/images/products/prod_img.jpg')}}" alt="">
                        </div>
                        <div class="descrip_product">
                            <div class="title_prod">
                                <span>ТВ-тумба з дерева «АСТІ» – надійне та зручне розміщення ТВ</span>
                            </div>
                            <div>
                                <label for="color">Колір:</label>
                                <span class="info_span" id="color">Категорія А-1</span>
                            </div>
                            <div>
                                <label for="cover">Покриття:</label>
                                <span class="info_span" id="cover">Лляна олія</span>
                            </div>
                            <div>
                                <label for="size">Розмір:</label>
                                <span class="info_span" id="size">1500\450\520</span>
                            </div>
                            <div class="price_prod">
                                <label for="price">Ціна:</label>
                                <span class="info_span" id="price">17 653грн</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="image_product">
                            <img src="{{asset('assets/images/products/prod_img.jpg')}}" alt="">
                        </div>
                        <div class="descrip_product">
                            <div class="title_prod">
                                <span>ТВ-тумба з дерева «АСТІ» – надійне та зручне розміщення ТВ</span>
                            </div>
                            <div>
                                <label for="color">Колір:</label>
                                <span class="info_span" id="color">Категорія А-1</span>
                            </div>
                            <div>
                                <label for="cover">Покриття:</label>
                                <span class="info_span" id="cover">Лляна олія</span>
                            </div>
                            <div>
                                <label for="size">Розмір:</label>
                                <span class="info_span" id="size">1500\450\520</span>
                            </div>
                            <div class="price_prod">
                                <label for="price">Ціна:</label>
                                <span id="price">17 653грн</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hot_products">
            <div class="hot_header">
                <img src="{{asset('assets/images/arrow_icon.png')}}" alt="">
                <span>Топ продажів</span>
            </div>
            <div class="hot_content">
                <div class="owl-carousel owl-carousel-top-products owl-theme">
                    <div class="item">
                        <div class="image_product">
                            <img src="{{asset('assets/images/products/top_prod.jpg')}}" alt="">
                        </div>
                        <div class="descrip_product">
                            <div class="title_prod">
                                <span>ТВ-тумба з дерева «АСТІ» – надійне та зручне розміщення ТВ</span>
                            </div>
                            <div>
                                <label for="color">Колір:</label>
                                <span class="info_span" id="color">Категорія А-1</span>
                            </div>
                            <div>
                                <label for="cover">Покриття:</label>
                                <span class="info_span" id="cover">Лляна олія</span>
                            </div>
                            <div>
                                <label for="size">Розмір:</label>
                                <span class="info_span" id="size">1500\450\520</span>
                            </div>
                            <div class="price_prod">
                                <label for="price">Ціна:</label>
                                <span  id="price">17 653грн</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="image_product">
                            <img src="{{asset('assets/images/products/top_prod.jpg')}}" alt="">
                        </div>
                        <div class="descrip_product">
                            <div class="title_prod">
                                <span>ТВ-тумба з дерева «АСТІ» – надійне та зручне розміщення ТВ</span>
                            </div>
                            <div>
                                <label for="color">Колір:</label>
                                <span class="info_span" id="color">Категорія А-1</span>
                            </div>
                            <div>
                                <label for="cover">Покриття:</label>
                                <span class="info_span" id="cover">Лляна олія</span>
                            </div>
                            <div>
                                <label for="size">Розмір:</label>
                                <span class="info_span" id="size">1500\450\520</span>
                            </div>
                            <div class="price_prod">
                                <label for="price">Ціна:</label>
                                <span id="price">17 653грн</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="preference_container">
            <ul class="preference_list">
                <li class="preference_item">
                    <div>
                        <img src="{{asset('assets/images/delivery_icon.png')}}" alt="">
                    </div>
                    <div class="span_item">
                        <span>Безкоштовна <br>доставка</span>
                    </div>
                </li>
                <li class="preference_item">
                    <div >
                        <img src="{{asset('assets/images/bonus_icon.png')}}" alt="">
                    </div>
                    <div class="span_item">
                        <span>Бонуси <br>за покупки</span>
                    </div>
                </li>
                <li class="preference_item">
                    <div>
                        <img src="{{asset('assets/images/guarantee_icon.png')}}" alt="">
                    </div>
                    <div class="span_item">
                        <span>Гарантійне і <br>післягарантійне<br>обслуговування</span>
                    </div>
                </li>
                <li class="preference_item">
                    <div>
                        <img src="{{asset('assets/images/return_icon.png')}}" alt="">
                    </div>
                    <div class="span_item">
                        <span>Гарантоване<br>повернення і обмін</span>
                    </div>
                </li>
                <li class="preference_item">
                    <div>
                        <img src="{{asset('assets/images/certified_icon.png')}}" alt="">
                    </div>
                    <div class="span_item">
                        <span>Сертифіковані<br>товари</span>
                    </div>
                </li>
            </ul>
        </div>
        <div class="mailing_list">
            <div class="icon_mail">
                <img src="{{asset('assets/images/mail_icon.png')}}" alt="">
            </div>
            <div class="subscribe_container">
                <div class="header_subscribe">
                    <span>Підпишіться нa <b>РОЗСИЛКУ</b></span>
                </div>
                <div class="input_mail">
                    <form class="form_subscribe">
                        <div class="border_input_mail">
                            <input type="email" name="email" class="email_input" placeholder="Введіть свою електронну адресу">
                        </div>
                        <div class="border_btn_subscribe">
                            <input type="submit" name="subscribe" class="subscribe_submit" value="Підпишіться">
                            <img src="{{asset('assets/images/mail_logo.png')}}" alt="" >
                        </div>
                    </form>
                </div>
                <div class="social_container">
                    <ul class="social_menu">
                        <li class="social_item">
                            <a href=""><img src="{{asset('assets/images/facebook_icon.png')}}" alt="" ></a>
                        </li>
                        <li class="social_item">
                            <a href=""><img src="{{asset('assets/images/twitter_icon.png')}}" alt="" ></a>
                        </li>
                        <li class="social_item">
                            <a href=""><img src="{{asset('assets/images/insta_icon.png')}}" alt="" ></a>
                        </li>
                        <li class="social_item">
                            <a href=""><img src="{{asset('assets/images/pinterest_icon.png')}}" alt="" ></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </main>

    {{--  FOOTER------------------------------------------      --}}
    <footer class="footer">
        <div class="footer_container">
            <div class="logotype_footer">
                <a href="">
                    <img src="{{asset('assets/images/Logo.jpg')}}" alt="" class="logo">
                </a>
            </div>
            <div class="footer_menu">
                <ul class="menu_list_items">
                    <li class="menu_item">
                        <a href="" class="item_link">КАТАЛОГ</a>
                    </li>
                    <li class="menu_item">
                        <a href="" class="item_link">АКЦІЇ</a>
                    </li>
                    <li class="menu_item">
                        <a href="" class="item_link">ОПЛАТА І ДОСТАВКА</a>
                    </li>
                    <li class="menu_item">
                        <a href="" class="item_link">ГАРАНТІЯ ТА ПОВЕРНЕННЯ</a>
                    </li>
                    <li class="menu_item">
                        <a href="" class="item_link">ПРО НАС</a>
                    </li>
                    <li class="menu_item">
                        <a href="" class="item_link">КОНТАКТИ</a>
                    </li>
                </ul>
            </div>
            <div class="footer_contacts">
                <div>
                    <span>КОНТАКТИ:</span>
                </div>
                <ul class="contacts_items">
                    <li class="contact_item">
                        <span>+38 (044) 335-55-05</span>
                    </li>
                    <li class="contact_item">
                        <span>+38 (044) 035-05-85</span>
                    </li>
                    <li class="contact_item">
                        <img src="{{asset('assets/images/viber_icon.png')}}" alt="">
                        <span>+38 (093) 035-05-85</span>
                    </li>
                    <li class="contact_item">
                        <img src="{{asset('assets/images/whatsapp_icon.png')}}" alt="">
                        <span>+38 (067) 365-65-55</span>
                    </li>
                    <li class="contact_item">
                        <img src="{{asset('assets/images/telegram_icon.png')}}" alt="">
                        <span>+38 (066) 045-80-85</span>
                    </li>
                </ul>
            </div>
            <div class="footer_info">
                <ul class="menu_list_items">
                    <li class="footer_menu_item">
                        <a href="" class="item_link">ОПТОВИМ ПОКУПЦЯМ</a>
                    </li>
                    <li class="footer_menu_item">
                        <a href="" class="item_link">АРХІТЕКТОРАМ ТА ДИЗАЙНЕРАМ</a>
                    </li>
                    <li class="footer_menu_item">
                        <a href="" class="item_link">ВИРОБНИКИ</a>
                    </li>
                    <li class="footer_menu_item">
                        <a href="" class="item_link">ВАКАНСІЇ</a>
                    </li>
                    <li class="footer_menu_item">
                        <a href="" class="item_link">УМОВИ ВИКОРИСТАННЯ САЙТУ</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="copyright">
                <div class="row">
                    <div class="col-lg-6 col-md-12 copyright_text">
                        <p> &copy; 2010 - 2022 ІНТЕРНЕТ-МАГАЗИН МЕБЛІВ "FURNITURE.UA".</p>
                    </div>
                </div>
        </div>
        <div class="decor_line"></div>
    </footer>
</div>


<script src="{{ asset('assets/js/jquery.min.js') }} "></script>
<script src="{{ asset('assets/js/owl.carousel.min.js') }} "></script>
<script src="{{ asset('assets/js/script.js') }} "></script>
</body>
</html>
