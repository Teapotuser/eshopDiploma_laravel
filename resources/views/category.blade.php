@extends('layouts.master')
@section('custom_css') 
    <link rel="stylesheet" href="{{ asset('css/collection.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/pagination.css') }}" type="text/css">
@endsection
@section('content')
<main>
        <div class="wrapper">   
           
            <div class="shop-wrapper">               
                <!-- левая панель -->
                <aside class="left-side">
                    <div class="category">
                        <div class="list-box">
                            <div class="title-box open">
                                <p>Категории</p>
                                <div class="button-plus-minus">                                    
                                </div>                               
                            </div>
                            <div class="list-link open">
                                <nav>
                                @foreach ($categories as $category_leftbar)
                                    <li><a href="{{ route('category.show', $category_leftbar->code) }}">{{ $category_leftbar->name }} </a></li> 
                                @endforeach

                                   <!--  <li><a href="#">Мягкие игрушки</a></li>
                                    <li><a href="#">Брелки</a></li>
                                    <li><a href="#">Магниты</a></li>
                                    <li><a href="#">Подушки</a></li> -->
                                </nav>
                            </div>
                        </div>
                        <!-- левая панель: Коллекции -->
                        <div class="list-box">
                            <div class="title-box open">
                                <p>Коллекции</p>
                                <div class="button-plus-minus">                                    
                                </div>                               
                            </div>
                            <div class="list-link open">
                                <nav>
                                @foreach ($collections as $collection_leftbar)
                                    <li><a href="{{ route('collection.show', $collection_leftbar->code) }}">{{ $collection_leftbar->name }}</a></li> 
                                @endforeach

                                   <!--  <li><a href="#">Овечки Jolly Mäh</a></li>
                                    <li><a href="#">Единорог Theodor и его друзья</a></li>
                                    <li><a href="#">Лесные жители</a></li>
                                    <li><a href="#">Дикие обитатели</a></li>
                                    <li><a href="#">Веселая ферма</a></li> -->
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="filters">
                        <!-- левая панель: Фильтр -->
                        <div class="list-box">
                            <div class="title-box open">
                                <p>Фильтр</p>
                                <div class="button-plus-minus">                                    
                                </div>                               
                            </div>
                            <div class="list-link open">
                                <div class="left-filter-title">
                                    <p>Категория или коллекция</p>                                                                   
                                </div>
                                <form class="left-form-filter" method="get"  action="">
                                    <li>
                                        <input class="" type="checkbox" id="id_sheep" name="sheep">
                                        <label class="" for="id_sheep">Овечки Jolly Mäh</label>
                                    </li>  
                                    <li>
                                        <input class="" type="checkbox" id="id_unicorn" name="unicorn">
                                        <label class="" for="id_unicorn">Единорог Theodor и его друзья</label>
                                    </li> 
                                    <li>
                                        <input class="" type="checkbox" id="id_forest" name="forest">
                                        <label class="" for="id_forest">Лесные жители</label>
                                    </li> 
                                    <li>
                                        <input class="" type="checkbox" id="id_wild" name="wild">
                                        <label class="" for="id_wild">Дикие обитатели</label>
                                    </li> 
                                    <li>
                                        <input class="" type="checkbox" id="id_farm" name="farm">
                                        <label class="" for="id_farm">Веселая ферма</label>
                                    </li>                                      
                                <!-- </form> -->
                                <!-- левая панель: Фильтр по цене -->
                                    <div class="filter-price">
                                        <div class="left-filter-title">
                                            <p>Цена</p>                                                                   
                                        </div>
                                        <div class="price-input">
                                            <div class="field">
                                                <span>Мин.</span>
                                                <!-- <input type="number" class="input-min" value="2500"> -->
                                                <input type="number" class="input-min" value="0">
                                            </div>
                                            <div class="separator">-</div>
                                            <div class="field">
                                                <span>Макс.</span>
                                                <!-- <input type="number" class="input-max" value="7500"> -->
                                                <input type="number" class="input-max" value="200">
                                            </div>
                                        </div>
                                        <div class="slider">
                                            <div class="progress"></div>
                                        </div>
                                        <div class="range-input">
                                            <!-- <input type="range" class="range-min" min="0" max="10000" value="2500" step="100">
                                            <input type="range" class="range-max" min="0" max="10000" value="7500" step="100"> -->
                                            <input type="range" class="range-min" min="0" max="250" value="0" step="10">
                                            <input type="range" class="range-max" min="0" max="250" value="200" step="10">
                                        </div>
                                    </div>
                                    <div  class="filter-buttons-container">
                                        <button type="submit" class="apply-filter">Применить</button>
                                        <button type="button" class="reset-filter">Сбросить</button>
                                    </div>
                                </form>
                            </div>                            
                        </div>                        
                    </div>
                </aside>
                <section class="right-side"> <!-- Правая галерея товаров -->
                    <div class="right-side-wrapper">
                        <h1 class="right-side-title">{{ $category->name }}</h1>
                        <div class="right-side-description">                            
                            <p>{{ $category->description }}</p>
                        </div>

                        <div class="dotted-line-divider"></div>
                        <div class="top-sale-title">Хиты продаж</div>

                         <!-- Слайдер популярных товаров -->
                        <div class="slider-carousel-wrapper-collection">
                            <div class="slider-carousel-collection">

                                @foreach ($products_bestsellers as $product_popular)
                                    <div class="slider-wrap-collection">
                                        <a href="#" class="slider-img-collection">
                                            <div class="img-name-wrapper-product-collection">
                                                <div class="img-product-collection">
                                                    <img class="img" src="{{ Storage::url($product_popular->picture) }}" alt="" />
                                                </div>
                                                <h3 class="name-product-collection">{{ $product_popular->title }}</h3>  
                                            </div>
                                            <div class="price-product-collection">
                                                @if ($product_popular->issetDiscount())
                                                    <p class="initial-price-product-collection">
                                                        <span class="initial-price-product-amount">{{ $product_popular->price }}</span>
                                                        <span class="initial-price-product-currency"> р.</span>
                                                    </p>
                                                    <p class="final-price-product-collection">
                                                        <span class="final-price-product-amount">{{ $product_popular->getPriceWithDiscount() }}</span>
                                                        <span class="final-price-product-currency"> р.</span>
                                                    </p>
                                                @else
                                                    <p class="final-price-product-collection">
                                                        <span class="final-price-product-amount blue-price">{{ $product_popular->price }}</span>
                                                        <span class="final-price-product-currency blue-price"> р.</span>
                                                    </p>
                                                @endif
                                            </div>                                                                             
                                        </a>

                                        <!--Labels Акция, Новинка -->
                                        @if ($product_popular->issetDiscount() || $product_popular->is_new)
                                        <div class="promotion-wrapper-collection">
                                            <!--Label Акция -->
                                            @if ($product_popular->issetDiscount())
                                            <div class="promotion-discount">
                                                <div class="svg-promotion">
                                                    <svg
                                                        
                                                        viewBox="0 0 20.896444 20.788588"
                                                        version="1.1"
                                                        id="svg933"
                                                        inkscape:version="1.1 (c68e22c387, 2021-05-23)"
                                                        sodipodi:docname="star-promotion2.svg"
                                                        xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape"
                                                        xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:svg="http://www.w3.org/2000/svg">
                                                        <defs
                                                        id="defs930" />
                                                        <g
                                                            inkscape:label="Layer 1"
                                                            inkscape:groupmode="layer"
                                                            id="layer1"
                                                            transform="translate(-0.05709351,0.0295498)">    
                                                            <path
                                                                style="display:inline;fill:#e20049;fill-opacity:1;stroke:#e20049;stroke-width:0.264583;stroke-opacity:1"
                                                                d="M 12.742515,20.207419 C 12.342655,20.018252 11.931185,19.676738 10.895035,18.674042 9.3249951,17.154691 8.9721047,16.936232 8.0878447,16.936232 7.3210647,16.936232 6.6018947,17.185332 4.9776047,18.013528 3.1334847,18.953804 2.5434147,19.055174 2.0113547,18.523108 1.3247947,17.836548 1.4731147,17.08179 2.6995947,15.020908 3.9046447,12.996041 4.0528647,11.763377 3.2391747,10.533651 3.0877947,10.304874 2.4617047,9.5969233 1.8478647,8.9604286 0.6251547,7.6926021 0.38769473,7.3087551 0.38769473,6.6001241 0.38769473,5.9713071 0.61016473,5.5691461 1.0707147,5.3654221 1.5680347,5.1454341 2.3849647,5.1997051 3.9262947,5.5551251 5.3827847,5.8909821 6.6896547,5.9760301 7.2289947,5.7700521 7.8367647,5.5379431 8.4469247,4.7830421 9.5330551,2.9194181 10.608505,1.0741211 11.144855,0.41757916 11.655105,0.32185516 12.041525,0.24936216 12.395985,0.38994316 12.681095,0.72878213 13.116795,1.2465841 13.269635,1.8902841 13.425739,3.8649721 13.622118,6.3491771 13.731754,6.6732601 14.493793,7.0221321 14.734397,7.1322861 15.684257,7.3961601 16.604594,7.6085221 18.621299,8.0738641 19.431095,8.3325841 19.966414,8.6825771 20.457086,9.0033816 20.715349,9.4343026 20.627941,9.7863523 20.512061,10.253069 19.776316,10.843904 18.605865,11.410166 15.405169,12.958658 15.229234,13.067995 14.867184,13.733625 14.502019,14.404984 14.428923,15.219121 14.588871,16.833402 14.756313,18.523287 14.75958,19.528093 14.598891,19.912681 14.360549,20.483112 13.58542,20.60618 12.742515,20.207419 Z"
                                                                id="path6437" />
                                                        </g>
                                                    </svg>
                                                </div> 
                                                <p>Акция</p>   
                                            </div>
                                            @endif        
                                            <!--Label Новинка -->
                                            @if ($product_popular->is_new)
                                            <div class="promotion-new">
                                                <div class="svg-promotion">
                                                    <svg
                                                        
                                                        viewBox="0 0 20.896444 20.788588"
                                                        version="1.1"
                                                        id="svg933"
                                                        inkscape:version="1.1 (c68e22c387, 2021-05-23)"
                                                        sodipodi:docname="star-promotion2.svg"
                                                        xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape"
                                                        xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:svg="http://www.w3.org/2000/svg">
                                                        <defs
                                                        id="defs930" />
                                                        <g
                                                            inkscape:label="Layer 1"
                                                            inkscape:groupmode="layer"
                                                            id="layer1"
                                                            transform="translate(-0.05709351,0.0295498)">    
                                                            <path
                                                                style="display:inline;fill:#ff9c00;fill-opacity:1;stroke:#ff9c00;stroke-width:0.264583;stroke-opacity:1"
                                                                d="M 12.742515,20.207419 C 12.342655,20.018252 11.931185,19.676738 10.895035,18.674042 9.3249951,17.154691 8.9721047,16.936232 8.0878447,16.936232 7.3210647,16.936232 6.6018947,17.185332 4.9776047,18.013528 3.1334847,18.953804 2.5434147,19.055174 2.0113547,18.523108 1.3247947,17.836548 1.4731147,17.08179 2.6995947,15.020908 3.9046447,12.996041 4.0528647,11.763377 3.2391747,10.533651 3.0877947,10.304874 2.4617047,9.5969233 1.8478647,8.9604286 0.6251547,7.6926021 0.38769473,7.3087551 0.38769473,6.6001241 0.38769473,5.9713071 0.61016473,5.5691461 1.0707147,5.3654221 1.5680347,5.1454341 2.3849647,5.1997051 3.9262947,5.5551251 5.3827847,5.8909821 6.6896547,5.9760301 7.2289947,5.7700521 7.8367647,5.5379431 8.4469247,4.7830421 9.5330551,2.9194181 10.608505,1.0741211 11.144855,0.41757916 11.655105,0.32185516 12.041525,0.24936216 12.395985,0.38994316 12.681095,0.72878213 13.116795,1.2465841 13.269635,1.8902841 13.425739,3.8649721 13.622118,6.3491771 13.731754,6.6732601 14.493793,7.0221321 14.734397,7.1322861 15.684257,7.3961601 16.604594,7.6085221 18.621299,8.0738641 19.431095,8.3325841 19.966414,8.6825771 20.457086,9.0033816 20.715349,9.4343026 20.627941,9.7863523 20.512061,10.253069 19.776316,10.843904 18.605865,11.410166 15.405169,12.958658 15.229234,13.067995 14.867184,13.733625 14.502019,14.404984 14.428923,15.219121 14.588871,16.833402 14.756313,18.523287 14.75958,19.528093 14.598891,19.912681 14.360549,20.483112 13.58542,20.60618 12.742515,20.207419 Z"
                                                                id="path6437" />
                                                        </g>
                                                    </svg>
                                                </div> 
                                                <p>NEW</p>   
                                            </div>
                                            @endif
                                        </div>
                                        @endif

                                    </div>                                      
                                @endforeach
                                <!-- <div class="slider-wrap-collection">
                                    <a href="#" class="slider-img-collection">
                                        <div class="img-product-collection">
                                            <img class="img" src="images/goods/48531_01_HA_Frei.jpg" alt="" />
                                        </div>
                                        <h3 class="name-product-collection">Мягкая игрушка Овечка Jolly Frances</h3>  
                                        <div class="price-product-collection">
                                            <p class="initial-price-product-collection">
                                                67.08 р.
                                            </p>
                                            <p class="final-price-product-collection">
                                                53.12 р.
                                            </p>
                                        </div>                                    
                                    </a>
                                </div>  -->                                                       
                            </div>
                            <button class="slider-button-left"></button>
                            <button class="slider-button-right"></button>
                        </div>    
                        

                    <!--Здесь была Сортировка галереи товаров-->             

                   <!--  <ul class="shop_gallery"> здесь была Галерея товаров-->
                   @include('includes.product_gallery')
                    </div> 
                </section> 
            </div> 
        </div>
    </main>
@endsection        