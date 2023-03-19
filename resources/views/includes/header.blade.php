<header>
        <div class="header-top"> <!-- Header: Серая полоса -->
            <span class="header-top-phone">+375 (29) 785-02-99</span>
            <span class="header-top-phone">+375 (44) 726-52-85</span>
            <span class="header-top-email">niciby@gmail.com</span>
        </div>
        <div class="header-center"> <!-- Header: Лого -->
            <div class="header-center-wrap">
                <div class="logo">
                    <a href="#"><img src="images/NICI/nici_logo_butterfly2.png" alt="NICI logo"></a>
                </div>
                <div class="animals-image">
                    <img src="images/NICI/gEaLngtlZ_U_corrected_withText.jpg" alt="NICI animals">
                </div>
                <div class="profile-basket">
                    <div class="profile menu__profile">
                        <!-- <div><p></p></div> -->
                        <a href=# class="prof-bask-a">
                            <div>
                                <img src="images/user-4253.svg" alt="profile icon">
                            </div>
                            <p>Мой профиль</p>                            
                        </a>
                        <ul class="menu__sublist">
                            <li><a href="#" class="menu__sublink">Логин</a></li>
                            <li><a href="#" class="menu__sublink">Регистрация</a></li>
                            <li><a href="#" class="menu__sublink">Личные данные</a></li>
                            <li><a href="#" class="menu__sublink">История заказов</a></li>
                            <li><a href="#" class="menu__sublink">Выход</a></li>
                        </ul>
                    </div>

                    <div class="basket">
                        <!-- <div><p></p></div> -->
                        <a href=# class="prof-bask-a">
                            <div class="non-empty-cart">
                                <img src="images/shopping-bag-3750.svg" alt="basket icon" id="cart-icon">
                                <div class="cart-items-counter">0</div>
                            </div>                            
                            <p>Корзина</p>                            
                        </a>
                    </div>

                    <!-- Burger menu-->
                    <div class="menu-burger__header menu__icon">
                        <span></span>
                    </div>
                </div>
            </div>
        </div>

        <div class="header-bottom">
            <div class="horizont-menu-wrap">
                <!-- <div class="menu-burger__header">
                    <span></span>
                </div> -->
                <nav class="main_nav menu__body"> 
                    <ul class="horizont-menu menu__list">
                        <li>
                            <div class="menu__wrapper">
                                <p class="menu__link">Каталог</p>
                                <span class="menu__arrow"></span>
                            </div>
                            <ul class="menu__sublist">
                                <li>
                                    <div class="menu__wrapper">
                                        <p class="menu__sublink">Категории</p>
                                        <span class="menu__arrow"></span>
                                    </div>
                                    <!-- 3 уровень меню -->
                                    <ul class="menu__sublist">
                                        <li><a href="#" class="menu__sublink">Мягкие игрушки</a></li>
                                        <li><a href="#" class="menu__sublink">Брелки</a></li>
                                        <li><a href="#" class="menu__sublink">Магниты</a></li>
                                        <li><a href="#" class="menu__sublink">Подушки</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <div class="menu__wrapper">
                                        <p class="menu__sublink">Коллекции</p>
                                        <span class="menu__arrow"></span>
                                    </div>    
                                    <!-- 3 уровень меню -->
                                    <ul class="menu__sublist">
                                        <li><a href="#" class="menu__sublink">Овечки Jolly Mäh</a></li>
                                        <li><a href="#" class="menu__sublink">Единорог Theodor и его друзья</a></li>
                                        <li><a href="#" class="menu__sublink">Лесные жители</a></li>
                                        <li><a href="#" class="menu__sublink">Дикие обитатели</a></li>
                                        <li><a href="#" class="menu__sublink">Веселая ферма</a></li>                                        
                                    </ul>
                                </li>                               
                            </ul>
                        </li>
                        <li><a href="#" class="menu__link">Акции</a></li>
                        <li><a href="#" class="menu__link">Доставка и оплата</a></li>
                        <li><a href="#" class="menu__link">Контакты</a></li>
                        <li class="profile-hidden">
                            <div class="menu__wrapper">
                                <a href="#" class="menu__link">Мой профиль</a>
                                <span class="menu__arrow"></span>
                            </div>    
                            <ul class="menu__sublist">
                                <li><a href="#" class="menu__sublink">Логин</a></li>
                                <li><a href="#" class="menu__sublink">Регистрация</a></li>
                                <li><a href="#" class="menu__sublink">Личные данные</a></li>
                                <li><a href="#" class="menu__sublink">История заказов</a></li>
                                <li><a href="#" class="menu__sublink">Выход</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav> 
                <!-- Header: Горизонтальное меню: Поиск -->
                <div class="header-menu-search">
                    <form action="/search" method="get" class="search-form">
                            <input type="search" name="sSearch" aria-label="Найти..." class="search-field" autocomplete="off" autocapitalize="off" placeholder="Найти..."/>
                            <button type="submit" name="" value="" class="search-submit">
                                <img class="search-image" src="images/search-icon.svg" alt="Go">
                            </button>
                            <div class="form--ajax-loader">&nbsp;</div>
                    </form>
                    <div class="main-search--results">
                    </div>    
                </div>



                <!-- <div class="search">
                    <div class="search-icon-wrap">
                        <img src="images/search-icon.svg" alt="search icon">
                    </div>
                </div> -->
            </div>    
        </div>
        <div class="cart-right-overlay">
            <div class="cart-right">
                <h2 class="cart-right-title">Ваша корзина</h2>
                <div class="cart-right-content">
                    <!-- <div class="cart-right-box"> -->
                        <!-- <img src="images/goods/48531_01_HA_Frei.jpg" alt="" class="cart-img">
                        <div class="detail-box">
                            <div class="cart-product-title">Мягкая игрушка Овечка Jolly Frances</div>
                            <div class="cart-price">53.12 р.</div>
                            <input type="number" value="1" class="cart-quantity">
                        </div> -->
                        <!--Remove cart-->
                        <!--<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="30" height="30" viewBox="0 0 256 256" xml:space="preserve" class="cart-remove">

                            <defs>
                            </defs>
                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                <path d="M 64.71 90 H 25.291 c -4.693 0 -8.584 -3.67 -8.859 -8.355 l -3.928 -67.088 c -0.048 -0.825 0.246 -1.633 0.812 -2.234 c 0.567 -0.601 1.356 -0.941 2.183 -0.941 h 59.002 c 0.826 0 1.615 0.341 2.183 0.941 c 0.566 0.601 0.86 1.409 0.813 2.234 l -3.928 67.089 C 73.294 86.33 69.403 90 64.71 90 z M 18.679 17.381 l 3.743 63.913 C 22.51 82.812 23.771 84 25.291 84 H 64.71 c 1.52 0 2.779 -1.188 2.868 -2.705 l 3.742 -63.914 H 18.679 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(226,0,73); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                <path d="M 80.696 17.381 H 9.304 c -1.657 0 -3 -1.343 -3 -3 s 1.343 -3 3 -3 h 71.393 c 1.657 0 3 1.343 3 3 S 82.354 17.381 80.696 17.381 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(226,0,73); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                <path d="M 58.729 17.381 H 31.271 c -1.657 0 -3 -1.343 -3 -3 V 8.789 C 28.271 3.943 32.214 0 37.061 0 h 15.879 c 4.847 0 8.789 3.943 8.789 8.789 v 5.592 C 61.729 16.038 60.386 17.381 58.729 17.381 z M 34.271 11.381 h 21.457 V 8.789 C 55.729 7.251 54.478 6 52.939 6 H 37.061 c -1.538 0 -2.789 1.251 -2.789 2.789 V 11.381 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(226,0,73); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                <path d="M 58.33 74.991 c -0.06 0 -0.118 -0.002 -0.179 -0.005 c -1.653 -0.097 -2.916 -1.517 -2.819 -3.171 l 2.474 -42.244 c 0.097 -1.655 1.508 -2.933 3.171 -2.819 c 1.653 0.097 2.916 1.516 2.819 3.17 l -2.474 42.245 C 61.229 73.761 59.906 74.991 58.33 74.991 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(226,0,73); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                <path d="M 31.669 74.991 c -1.577 0 -2.898 -1.23 -2.992 -2.824 l -2.473 -42.245 c -0.097 -1.654 1.165 -3.073 2.819 -3.17 c 1.646 -0.111 3.073 1.165 3.17 2.819 l 2.473 42.244 c 0.097 1.654 -1.165 3.074 -2.819 3.171 C 31.788 74.989 31.729 74.991 31.669 74.991 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(226,0,73); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                <path d="M 45 74.991 c -1.657 0 -3 -1.343 -3 -3 V 29.747 c 0 -1.657 1.343 -3 3 -3 c 1.657 0 3 1.343 3 3 v 42.244 C 48 73.648 46.657 74.991 45 74.991 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(226,0,73); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                            </g>
                        </svg> -->
                    <!-- </div> -->
                </div>
                <!--Total-->
                <div class="total">
                    <div class="total-title">Итого:</div>
                    <div class="total-price">
                        <span class="total-amount">0.00</span>
                        <span class="total-currency"> р.</span>
                    </div>
                </div>
                <!-- Buy button-->                
                <button type="button" class="btn-clear-cart">Очистить корзину</button>
                <button type="button" class="btn-buy">Оформить заказ</button>
                
                <!-- Cart Close-->
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="20" height="20" viewBox="0 0 256 256" xml:space="preserve" class="cart-close">
                    <defs>
                    </defs>
                    <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                        <path d="M 7 90 c -1.792 0 -3.583 -0.684 -4.95 -2.05 c -2.734 -2.734 -2.734 -7.166 0 -9.9 l 76 -76 c 2.734 -2.733 7.166 -2.733 9.9 0 c 2.733 2.733 2.733 7.166 0 9.899 l -76 76 C 10.583 89.316 8.792 90 7 90 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(226,0,73); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                        <path d="M 83 90 c -1.791 0 -3.583 -0.684 -4.95 -2.05 l -76 -76 c -2.734 -2.733 -2.734 -7.166 0 -9.899 c 2.733 -2.733 7.166 -2.733 9.899 0 l 76 76 c 2.733 2.734 2.733 7.166 0 9.9 C 86.583 89.316 84.791 90 83 90 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(226,0,73); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                    </g>
                </svg>
            </div>
        </div>
    </header>