//Cart
let cartIcon = document.querySelector('.basket'); // icon Basket with items counter
let cartOverlay = document.querySelector('.cart-right-overlay'); //серый фон на сайт при открытой корзине
let cart = document.querySelector('.cart-right');
let closeCart = document.querySelector('.cart-close');

let clearCart = document.querySelector('.btn-clear-cart');
let cartItemsCounter = document.querySelector('.cart-items-counter');

// let cartItemObject = {}; // товар в корзине
let itemsInCart = []; //cart 
//itemsInCart = getCartFromLocalStorage();

//Open Cart
cartIcon.onclick = () =>{
    cartOverlay.classList.add("transparentBcg");
    cart.classList.add("active");
};
//Close Cart
closeCart.onclick = () =>{
    cartOverlay.classList.remove("transparentBcg");
    cart.classList.remove("active");
};
cartOverlay.onclick = (event) =>{
    if(event.target.className === 'cart-right-overlay transparentBcg') {
        cartOverlay.classList.remove("transparentBcg");
        cart.classList.remove("active");
     };   
};

//Cart Working JS
if (document.readyState == 'loading'){
    document.addEventListener('DOMContentLoaded', ready);
}else{
    ready();
};

//Making Function
function ready(){
    // Инициализировать массив товаров в корзине из localStorage
    // itemsInCart = getCartFromLocalStorage();
    // Добавить заполнение полей корзины из localStorage (вызвав метод добавления в корзину в цикле) и пересчет итогов (total и счетчика) 
    //Remove items from the cart
    var removeCartButtons = document.getElementsByClassName('cart-remove');
    for (var i = 0; i < removeCartButtons.length; i++){
        var button = removeCartButtons[i];
        button.addEventListener('click', removeCartItem);
    }
    //Quantity Changes
    var quantityInputs = document.getElementsByClassName('cart-quantity');
    for (var i = 0; i < quantityInputs.length; i++){
        var input = quantityInputs[i];
        input.addEventListener('change', quantityChanged);
    }

    //Уменьшить Quantity
   /*  var quantityMinusInputs = document.getElementsByClassName('cart-minus-quantity');
    for (var i = 0; i < quantityMinusInputs.length; i++){
        var input = quantityMinusInputs[i];
        input.addEventListener('click', decreaseQuantity);
    } */

    //Увеличить Quantity
   /*  var quantityPlusInputs = document.getElementsByClassName('cart-plus-quantity');
    for (var i = 0; i < quantityPlusInputs.length; i++){
        var input = quantityPlusInputs[i];
        input.addEventListener('click', increaseQuantity);
    } */

    //Add to Cart
    var addCart = document.getElementsByClassName('add-cart');
    for (var i = 0; i < addCart.length; i++){
        var button = addCart[i];
        //Проверка что товар уже был положен в корзину
        var id = button.dataset.id; //взять Артикул товара из аттрибута data-id кнопки .add-cart
        // console.log(id);
        var inCart = itemsInCart.find(function (element) {
            return element.id === id;
        });  
        // console.log(inCart);
        if (inCart){
            button.innerText = "Добавлен";
            button.disabled = true;
            button.classList.add('disabled');
        } //else{
        button.addEventListener("click", addCartClicked);
        //}
    }
    //Buy Button Work
    document.getElementsByClassName('btn-buy')[0].addEventListener('click', buyButtonClicked);
    //Clear Cart Button Work
    clearCart.addEventListener('click', clearCartButtonClicked);
};


//Buy Button
function buyButtonClicked(){
    alert("Ваш заказ успешно оформлен");
    var cartContent = document.getElementsByClassName('cart-right-content')[0];
    while (cartContent.hasChildNodes()){
        cartContent.removeChild(cartContent.firstChild);
    }
    updateTotal();
};

//Clear Cart Button
function clearCartButtonClicked(){
    alert("Ваша корзина пуста");
    var cartContent = document.getElementsByClassName('cart-right-content')[0];
    while (cartContent.hasChildNodes()){
        cartContent.removeChild(cartContent.firstChild);
    }
    updateTotal();
    // массив id товаров в корзине
    let cartItems = itemsInCart.map(function (element) {
        return element.id;
    }); 
    //обновление кнопок "Add to Cart"
    var addCart = document.getElementsByClassName('add-cart');
    for (var i = 0; i < addCart.length; i++){
        var button = addCart[i];
        //Проверка что товар уже был положен в корзину
        var id = button.dataset.id; //взять Артикул товара из аттрибута data-id кнопки .add-cart
        // console.log(id);
        var inCart = itemsInCart.find(function (element) {
            return element.id === id;
        });  
        // console.log(inCart);
        // Раздизэйблить кнопки "В корзину"
        if (inCart){
            button.innerText = "В корзину";
            button.disabled = false;
            button.classList.remove('disabled');          
        } 
    }
    //Обнуление массива товаров в корзине
    itemsInCart = [];
    // console.log(itemsInCart);
    // Добавление содержимого корзины в localStorage
    saveCartInLocalStorage(itemsInCart);
    // localStorage.removeItem('myNICIcart');
    //Пересчет счетчика товаров
    updateCartCounter(itemsInCart);

  /*   cartItems.forEach(function(element) {
        removeCartItemClearButton(id);
    }); */
}

//Clear Cart
function removeCartItemClearButton(id){
    itemsInCart = itemsInCart.filter(function(element) {
        return element.id !== id;
    });
};

//Remove items from the cart
function removeCartItem(event){
    var buttonClicked = event.target;
    // console.log(buttonClicked);
    //Цикл чтобы в svg кликнуть любой path и Корзина не исчезала
    /* var parentClass;
    if(!(buttonClicked.classList.contains("cart-remove"))){
        do{
            buttonClicked = buttonClicked.parentElement;
            parentClass = buttonClicked.classList;
        }while(!(parentClass.contains("cart-remove")));
    };   */    
    //Проверка что товар уже был положен в корзину
    var id = buttonClicked.dataset.id; //взять Артикул товара из аттрибута data-id кнопки .add-cart
    var inCart = itemsInCart.find(function (element) {
        return element.id === id;
    }); 
    // var parentClass;
    //Цикл чтобы в svg кликнуть любой path и Корзина не исчезала
   /*  do{
        buttonClicked = buttonClicked.parentElement;
        parentClass = buttonClicked.classList;
    }while(!(parentClass.contains("cart-right-box"))); */
    buttonClicked.parentElement.parentElement.remove(); //кнопка .cart-remove обернута в form тэг
    updateTotal();      
    // Раздизэйблить кнопки "В корзину" 
    // console.log(id);   
    var buttonAddToCart = document.querySelector(`.add-cart[data-id=${id}]`);    
    buttonAddToCart.innerText = "В корзину";
    buttonAddToCart.disabled = false;
    buttonAddToCart.classList.remove('disabled');     
    //Удаление объекта товара из массива товаров в корзине
    itemsInCart = itemsInCart.filter(function(element) {
        return element.id !== id;
    });
    // console.log(itemsInCart);
    // Добавление содержимого корзины в localStorage
    saveCartInLocalStorage(itemsInCart);     
    //Пересчет счетчика товаров
    updateCartCounter(itemsInCart);    
};

//Quantity Changes
function quantityChanged(event){
    event.preventDefault();
    var input = event.target;
    var id = input.dataset.id; //взять Артикул товара из аттрибута data-id кнопки .add-cartvar id = button.dataset.id;
    //Вернуть элемент массива с id
    var tempItem = itemsInCart.find(function (element) {
        return element.id === id;
    })
    if(isNaN(input.value) || input.value <= 0){
        input.value = 1;
        tempItem.quantity = 1;
    }else{
        tempItem.quantity = parseInt(input.value);
    }
    updateTotal();
    // Добавление содержимого корзины в localStorage
    saveCartInLocalStorage(itemsInCart);
    //Пересчет счетчика товаров
    updateCartCounter(itemsInCart);
};

//Minus button уменьшает Quantity
function decreaseQuantity(event){
    event.preventDefault();
    var buttonMinus = event.target;
    var id = buttonMinus.dataset.id; //взять Артикул товара из аттрибута data-id кнопки .add-cartvar id = button.dataset.id;
    //Вернуть элемент массива с id
    var tempItem = itemsInCart.find(function (element) {
        return element.id === id;
    })
    if(isNaN(tempItem.quantity) || tempItem.quantity <= 1){
        tempItem.quantity = 1;
        buttonMinus.nextElementSibling.value = 1;
    }else{
        tempItem.quantity = tempItem.quantity - 1;
        buttonMinus.nextElementSibling.value = tempItem.quantity;        
    }
    updateTotal();    
    // Добавление содержимого корзины в localStorage
    saveCartInLocalStorage(itemsInCart);
    //Пересчет счетчика товаров
    updateCartCounter(itemsInCart);
};

//Plus button увеличивает Quantity
function increaseQuantity(event){
    event.preventDefault();
    var buttonPlus = event.target;
    var id = buttonPlus.dataset.id; //взять Артикул товара из аттрибута data-id кнопки .add-cartvar id = button.dataset.id;
    //Вернуть элемент массива с id
    var tempItem = itemsInCart.find(function (element) {
        return element.id === id;
    })
    tempItem.quantity = tempItem.quantity + 1;
    // console.log(itemsInCart);
    // Обновить значение в поле Quantity
    if(isNaN(tempItem.quantity) || tempItem.quantity <= 0){
        buttonPlus.previousElementSibling.value = 1;
    }else{
        buttonPlus.previousElementSibling.value = tempItem.quantity;
    }
    updateTotal();    
    // Добавление содержимого корзины в localStorage
    saveCartInLocalStorage(itemsInCart);
    //Пересчет счетчика товаров
    updateCartCounter(itemsInCart);
};

//Add to Cart
function addCartClicked(event){
    var button = event.target;
    var id = button.dataset.id; //взять Артикул товара из аттрибута data-id кнопки .add-cart var id = button.dataset.id;
    var formWithButton = button.parentElement; //кнопка .add-cart теперь обернута в форму
    var shopProducts = formWithButton.parentElement;
    var aTitle = shopProducts.getElementsByClassName('link-img-product')[0];
    var title = aTitle.getElementsByClassName('name-product')[0].innerText;
    // console.log(title);

    var divPrice = shopProducts.getElementsByClassName('price-product')[0];
    var finalPrice = divPrice.getElementsByClassName('final-price-product')[0];
    var price = finalPrice.getElementsByClassName('final-price-product-amount')[0].innerText;
    // console.log(price);

    var divProductImg = aTitle.getElementsByClassName('img-product')[0];
    var productImg = divProductImg.getElementsByClassName('img')[0].src;
    // console.log(productImg);
    addProductToCart(id, title, price, productImg);
    // РОМАН: Открывает правую панель корзины при добавлении товара в корзину
    cartOverlay.classList.add("transparentBcg");
    cart.classList.add("active");
    updateTotal();

    // Задизэйблить кнопку "В корзину" для добавленного товара
    button.innerText = "Добавлен";
    button.disabled = true;
    button.classList.add('disabled');    

    // Создается один объект товара в корзине
    let cartItemObject = {}; // один товар в корзине
    cartItemObject.id = id;
    cartItemObject.title = title;
    cartItemObject.price = price;
    cartItemObject.productImg = productImg;
    cartItemObject.quantity = 1;
    // console.log(cartItemObject);
    // Объект товара в корзине добавляется в массив
    // itemsInCart = [...itemsInCart, cartItemObject];
    itemsInCart.push(cartItemObject);
    // console.log(itemsInCart);
    // Добавление содержимого корзины в localStorage
    saveCartInLocalStorage(itemsInCart);
    //Пересчет счетчика товаров
    updateCartCounter(itemsInCart);
};

//Вывод в правую панель корзины
function addProductToCart(id, title, price, productImg){
    var cartShopBox = document.createElement("div");
    cartShopBox.classList.add("cart-right-box");
    var cartItems = document.getElementsByClassName("cart-right-content")[0];
    var cartItemsNames = cartItems.getElementsByClassName("cart-product-title");
    
    for (var i = 0; i < cartItemsNames.length; i++){
        /* console.log(cartItemsNames[i].innerText);
        console.log(title); */
        if (cartItemsNames[i].innerText == title){
            alert("Этот товар уже был добавлен в корзину");
            return;
        }    
    }
    var cartBoxContent = `
                        <img src="${productImg}" alt="" class="cart-img">
                        <div class="detail-box">
                            <div class="cart-product-title">${title}</div>
                            <div class="cart-price"><span class="cart-price-amount">${price}</span><span class="cart-price-currency"> р.</span></div>
                            <form action="" method="post" class="">
                                <div class="cart-quantity-controls">
                                    <button class="cart-minus-quantity" data-id="${id}">-</button>
                                    <input type="number" value="1" class="cart-quantity" data-id="${id}">
                                    <button class="cart-plus-quantity" data-id="${id}">+</button>                                
                                </div>
                            </form>
                        </div>
                        <!--Remove cart-->
                        <form action="" method="post" class="">
                            <button class="cart-remove" data-id="${id}"></button>
                            <!-- <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="30" height="30" viewBox="0 0 256 256" xml:space="preserve" class="cart-remove" data-id="${id}">
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
                        </form>`;                        
    cartShopBox.innerHTML = cartBoxContent;
    cartItems.append(cartShopBox);
    cartShopBox.getElementsByClassName('cart-remove')[0].addEventListener('click', removeCartItem);
    cartShopBox.getElementsByClassName('cart-quantity')[0].addEventListener('change', quantityChanged);
    cartShopBox.getElementsByClassName('cart-minus-quantity')[0].addEventListener('click', decreaseQuantity);
    cartShopBox.getElementsByClassName('cart-plus-quantity')[0].addEventListener('click', increaseQuantity);
};

//Update Total
function updateTotal(){
    var cartContent = document.getElementsByClassName('cart-right-content')[0];
    var cartBoxes = cartContent.getElementsByClassName('cart-right-box');
    var total = 0;
    for (var i = 0; i < cartBoxes.length; i++){
        var cartBox = cartBoxes[i];
        var priceElement = cartBox.getElementsByClassName('cart-price')[0];
        // console.log(priceElement);
        var price = priceElement.getElementsByClassName('cart-price-amount')[0].innerHTML;
        // console.log(price);
        var quantityElement = cartBox.getElementsByClassName('cart-quantity')[0];
        // var price = parseFloat(priceElement.innerText.replace(" р.", ""));
        var quantity = quantityElement.value;
        total = total + (price * quantity);
    }
        //If Price contains some Cents value
        total = Math.round(total * 100) / 100;

        document.getElementsByClassName('total-price')[0].innerText = total + " р.";
    
};

// Добавление содержимого корзины в localStorage
function saveCartInLocalStorage(cart){
    localStorage.setItem('myNICIcart', JSON.stringify(cart)); 
    if(cart.length == 0){
        localStorage.removeItem('myNICIcart');
    };
};

// Получение содержимого корзины из localStorage
function getCartFromLocalStorage(cart){
    //проверка что в localStorage есть корзина
    return localStorage.getItem('myNICIcart')?JSON.parse(localStorage.getItem('myNICIcart')):[];
};

//Пересчет счетчика товаров
function updateCartCounter(cart){
    let itemsCounter = 0;
    cart.map(function (element) {
        return itemsCounter += element.quantity;
    });
    cartItemsCounter.innerText = itemsCounter;
};

