 <!--Сортировка галереи товаров-->
 <div class="sorting-line-divider">
    <div class="sort-wrapper">
        <form action="/sort" method="get" class="sort-form">
            <label for="sort">Сортировать по:</label>
            <select name="sort" id="sort" class="sort-field">
                <option value="date">Новизне</option>
                <option value="name-a-z">Названию А-Я</option>
                <option value="name-z-a">Названию Я-А</option>
                <option value="price-low">Уменьшению цены</option>
                <option value="price-high">Увеличению цены</option>                              
            </select>
            <!-- <button type="submit" name="" value="" class="sort-submit">
                <img class="search-image" src="images/search-icon.svg" alt="Go">
            </button>  -->                           
        </form>
    </div>
</div>

<!--  <ul class="shop_gallery"> Галерея товаров-->
<ul id="imgBlock" class="layout_four_column">
    @foreach($products as $product)   
    <!-- $products это из ProductComposer.php-->        
        @include('includes.product_card', $product)        
    @endforeach
</ul>
<!--Пагинация галереи товаров (по 6 товаров на странице) -->
{{ $products->withQueryString()->links('includes.pagination') }}