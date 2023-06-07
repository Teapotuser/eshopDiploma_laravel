@foreach($products_found as $product_found)
    <li>
        <a href="{{route('product.show',$product_found->article)}}" class="one-search-result">
        <span class="one-search-result-img-container">
            <img class="one-search-result-img" src="{{ Storage::url($product_found->picture) }}" alt="">
        </span>
            <span class="one-search-result-title-price">
            <span class="one-search-result-title">{{$product_found->title}}</span>
            <span class="one-search-result-price">
                <span class="one-search-result-final-amount">{{$product_found->getPriceWithDiscount()}}</span>
                <span class="one-search-result-final-currency"> р.</span>
            </span>
        </span>
        </a>
    </li>
  
@endforeach
@if($products_found->count())
    <li>
        <div class="search-result-totals">
            <a href="{{route('search.find',['sSearch'=>Request::get('sSearch')])}}" class="search-result-total-record">
                <!-- <span class="one-search-result-title-price"> -->
                <span class="search-result-total-title">Показать все результаты</span>
                <!-- </span>     -->
            </a>
            <span class="search-result-total-count">
                <span class="search-result-total-amount">{{$total_products_found_count}}</span>
                <span class="one-search-result-total-text"> найдено</span>
            </span>
        </div>
    </li>
@else
    <li class="search-li-not-found">
        <div class="search-result-not-found">
            <span class="search-result-not-found-title">По вашему запросу ничего не найдено</span>
        </div>
    </li>
@endif


