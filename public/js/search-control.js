//Search поля
let searchInput = document.querySelector('.search-field'); // поле ввода search
let searchResults = document.querySelector('.search-results-list'); // список результатов поиска
let noResults = document.querySelector('.search-li-not-found'); // li ичего не найдено

//Search Working JS
if (document.readyState == 'loading'){
    document.addEventListener('DOMContentLoaded', ready);
}else{
    ready();
};

//Making Function
function ready(){   
    searchInput.addEventListener('input', showSearchResult); // вместо события keyup  
};


function showSearchResult(event) {
    var searchField = event.target;
    var inputText = searchField.value.trim();
    if (inputText.length >= 3){
        //.value.toLowerCase();
        if (inputText == "000"){
            //вывод "Не найдено"
            searchResults.classList.remove("hide-search-results");
            noResults.classList.remove("hide-search-results");
        }
        else{
        searchResults.classList.remove("hide-search-results");
        }
    }
    else{
        searchResults.classList.add("hide-search-results");
    }
}