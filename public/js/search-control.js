//Search поля
let searchInput = document.querySelector('.search-field'); // поле ввода search
let searchResults = document.querySelector('.search-results-list'); // список результатов поиска
let noResults = document.querySelector('.search-li-not-found'); // li ичего не найдено

//Search Working JS
if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', ready);
} else {
    ready();
}


//Making Function
function ready() {
    searchInput.addEventListener('input', showSearchResult); // вместо события keyup
}


async function showSearchResult(event) {
    event.preventDefault();
    var searchField = event.target;
    var inputText = searchField.value.trim();


    if (inputText.length >= 3) {
        //.value.toLowerCase();
        let myResponse = await fetch("/search?" + new URLSearchParams({
            'sSearch': inputText
        }));
        searchResults.innerHTML = await myResponse.text();
        searchResults.classList.remove("hide-search-results");

    } else {
        searchResults.innerHTML = '';
        searchResults.classList.add("hide-search-results");
    }
}
