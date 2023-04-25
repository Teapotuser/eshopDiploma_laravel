@extends('layouts.master')
@section('custom_css') 
    <link rel="stylesheet" href="{{ asset('css/slick_slider_my.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/product.css') }}" type="text/css">
@endsection
@section('content')
<main>
    <div class="wrapper">   
        
        <div class="shop-wrapper">               
            <!-- левая панель -->                               
            <!-- Правая панель -->                   
            <section class="right-side"> 
                <div class="right-side-wrapper">
                    <div class="product-slider-title-container">
                        <div class="product-slider">
                            <!-- Главный слайдер -->
                            <div class="product-slider-wrapper">
                                <div class="product-carousel">
                                    @foreach ($images->toArray()['path'] as $path)
                                        <a class="link-image" href="{{ Storage::url($path) }}">                          
                                            <img class="slider-img" src="{{ Storage::url($path) }}" alt="" /> 
                                        </a>
                                    @endforeach

                                   <!--  <a class="link-image" href="images/goods/products/48531_01_HA.jpg">                          
                                        <img class="slider-img" src="images/goods/products/48531_01_HA.jpg" alt="" /> 
                                    </a>
                                    <a class="link-image" href="images/goods/products/48531_02_ZA.jpg">
                                        <img class="slider-img" src="images/goods/products/48531_02_ZA.jpg" alt="" /> 
                                    </a>  
                                    <a class="link-image" href="images/goods/products/48531_03_ZA.jpg">
                                        <img class="slider-img" src="images/goods/products/48531_03_ZA.jpg" alt="" />
                                    </a>
                                    <a class="link-image" href="images/goods/products/48531_04_ZA.jpg">                          
                                        <img class="slider-img" src="images/goods/products/48531_04_ZA.jpg" alt="" /> 
                                    </a>
                                    <a class="link-image" href="images/goods/products/48531_14_Milieu.jpg">
                                        <img class="slider-img" src="images/goods/products/48531_14_Milieu.jpg" alt="" /> 
                                    </a>       -->                    
                                </div>
                                <button class="slider-button-left"></button>
                                <button class="slider-button-right"></button>

                                <!--Labels Акция, Новинка -->
                                @if ($product->issetDiscount() || $product->is_new)
                                <div class="promotion-wrapper">
                                    <!--Label Акция -->
                                    @if ($product->issetDiscount())
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
                                    @if ($product->is_new)
                                    <div class="promotion-new1">
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

                                <!-- <div class="promotion">
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
                                </div> -->
                            </div>  
                            <div class="product-slider-nav-wrapper">  
                                <div class="slider-nav">
                                    <!-- конвертация коллекции (из контроллера ProductController) в массив -->
                                    @foreach ($previews->toArray()['preview'] as $preview_path)
                                        <div class="slider-wrap-nav"> 
                                            <img class="slider-img1" src="{{ Storage::url($preview_path) }}" alt="" />
                                        </div>
                                    @endforeach

                                    <!-- <div class="slider-wrap-nav">                                
                                        <img class="slider-img1" src="images/goods/products/48531_01_200_200.jpg" alt="" /> 
                                    </div> 
                                    <div class="slider-wrap-nav">                                                  
                                        <img class="slider-img1" src="images/goods/products/48531_02_200_200.jpg" alt="" />   
                                    </div>
                                    <div class="slider-wrap-nav">                                                       
                                        <img class="slider-img1" src="images/goods/products/48531_03_200_200.jpg" alt="" />                               
                                    </div>
                                    <div class="slider-wrap-nav">                                
                                        <img class="slider-img1" src="images/goods/products/48531_04_200_200.jpg" alt="" />                                
                                    </div>
                                    <div class="slider-wrap-nav">
                                        <img class="slider-img1" src="images/goods/products/48531_14_200_200.jpg" alt="" />                                </a>
                                    </div> -->
                                </div>
                                <button class="slider-nav-button-left"></button>
                                <button class="slider-nav-button-right"></button>
                            </div>    
                        </div>
                        <div class="product-title">
                            <div class="product-lighter-bg">
                                <h3 class="product-name">{{ $product->title }}</h3>
                                <div class="product-article">
                                    <span>Артикул: </span>
                                    <span>{{ $product->article }}</span>
                                </div>
                                <!-- <div class="product-size">
                                    <span>Размер: </span>
                                    <span>25</span>
                                    <span> см</span>
                                </div> -->
                                <div class="product-price">
                                    <span>Цена: </span>
                                    <p class="product-initial-price">
                                        67.08 р.
                                    </p>
                                    <p class="product-final-price">
                                        53.12 р.
                                    </p>

                                    <div class="price-product">
                                        @if ($product->issetDiscount())
                                            <p class="initial-price-product">
                                                <span class="initial-price-product-amount">{{ $product->price }}</span>
                                                <span class="initial-price-product-currency"> р.</span>
                                            </p>
                                            <p class="final-price-product">
                                                <span class="final-price-product-amount">{{ $product->getPriceWithDiscount() }}</span>
                                                <span class="final-price-product-currency"> р.</span>
                                            </p>
                                        @else
                                            <p class="final-price-product">
                                                <span class="final-price-product-amount blue-price">{{ $product->price }}</span>
                                                <span class="final-price-product-currency blue-price"> р.</span>
                                            </p>
                                        @endif
                                    </div>

                                </div>
                            </div>
                            <div class="product-darker-bg">
                                <div class="product-size">
                                    <div>Размер: </div>
                                    <div class="product-size-rect">
                                        <span>{{ $product->size }}</span>
                                        <span> см</span>
                                    </div>
                                </div>
                                <form name="add-to-basket-form" method="post" action="">                                        
                                        
                                        <div class="add-to-basket-form-quantity-wrapper">
                                            <span>Количество: </span>                                          
                                            <div class="cart-quantity-controls">
                                                <button class="cart-minus-quantity" data-id="${id}">-</button>
                                                <input type="number" value="1" class="cart-quantity" data-id="${id}">
                                                <button class="cart-plus-quantity" data-id="${id}">+</button>                                
                                            </div> 
                                        </div>                                              
                                    
                                    <div class="add-to-basket-form-wrapper"> 
                                        <button type="submit" class="img_block__button add-cart">В корзину</button>    
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>  
                    <div class="product-description-wrapper">
                        <div class="dash-top"></div>
                        <div class="product-info">
                            <div class="product-description-common">
                                <p>{{ $product->description }}</p>
                            </div>
                            <div class="product-details-wrapper">
                                <div class="product-details">
                                    <div class="product-details-header">Описание товара</div>
                                    <p>{{ $product->product_info }}</p>
                                </div>
                                <div class="product-details-table">
                                    <div class="product-details-header">Характеристики товара</div>
                                    <div>
                                        <table class="product--properties-table"> 
                                            <tbody>
                                                <tr class="product--properties-row"> 
                                                    <td class="product--properties-label is--bold">Длина:</td> 
                                                    <td class="product--properties-value">{{ $product->height }} см</td> 
                                                </tr> 
                                                <tr class="product--properties-row"> 
                                                    <td class="product--properties-label is--bold">Ширина:</td> 
                                                    <td class="product--properties-value">{{ $product->width }} см</td> 
                                                </tr> <tr class="product--properties-row"> 
                                                    <td class="product--properties-label is--bold">Глубина:</td> 
                                                    <td class="product--properties-value">{{ $product->depth }} см</td> 
                                                </tr>                                                 
                                                <tr class="product--properties-row"> 
                                                    <td class="product--properties-label is--bold">Коллекция: </td> 
                                                    <td class="product--properties-value"><a href="{{ route('collection.show', $product->collection->code) }}">{{ $product->collection->name }}</a></td> 
                                                </tr>                                                   
                                                <tr class="product--properties-row"> 
                                                    <td class="product--properties-label is--bold">Материал: </td> 
                                                    <td class="product--properties-value">{{ $product->material }}</td> 
                                                </tr> 
                                                <tr class="product--properties-row"> 
                                                    <td class="product--properties-label is--bold">Материал наполнителя: </td> 
                                                    <td class="product--properties-value">{{ $product->material_filling }}</td> 
                                                </tr> 
                                                <tr class="product--properties-row"> 
                                                    <td class="product--properties-label is--bold">Рекомендуемый возраст (от): </td> 
                                                    <td class="product--properties-value">{{ $product->age_from }}</td> 
                                                </tr>
                                                <tr class="product--properties-row"> 
                                                    <td class="product--properties-label is--bold">Рекомендации по уходу: </td> 
                                                    <td class="product--properties-value"><p>{{ $product->care_recommend }}</p></td> 
                                                </tr> 
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="dash-bottom"></div>
                    </div>
                </div>       
            </section> 
        </div> 
    </div>
</main> 
@endsection 
@section('custom_js')
<script src="{{ asset('js/jquery.magnific-popup.min.js') }}" type="text/javascript"></script>
@endsection  