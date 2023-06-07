const rangeInput = document.querySelectorAll(".range-input input"),
priceInput = document.querySelectorAll(".price-input input"),
range = document.querySelector(".slider .progress");
// let priceGap = 1000;
let priceGap = 10;

/* priceInput.forEach(input1 =>{
    console.log('hi');
    console.log(input1)
    });
 */

// Даниил добавил: для old значений range полосы
document.addEventListener('DOMContentLoaded', function () {
    let input_min = document.querySelector('.input-min');
    let input_max = document.querySelector('.input-max');
    range.style.left = ((input_min.value / rangeInput[0].max) * 100) + "%";
    range.style.right = 100 - (input_max.value / rangeInput[1].max) * 100 + "%";
}, false);

priceInput.forEach(input =>{
    input.addEventListener("input", e =>{
        let minPrice = parseInt(priceInput[0].value),
        maxPrice = parseInt(priceInput[1].value);
        
        if((maxPrice - minPrice >= priceGap) && maxPrice <= rangeInput[1].max){
            if(e.target.className === "input-min"){
                rangeInput[0].value = minPrice;
                range.style.left = ((minPrice / rangeInput[0].max) * 100) + "%";
                // console.log('range.style.left');
            }else{
                rangeInput[1].value = maxPrice;
                range.style.right = 100 - (maxPrice / rangeInput[1].max) * 100 + "%";
            }
        }
    });
});

rangeInput.forEach(input =>{
    input.addEventListener("input", e =>{
        let minVal = parseInt(rangeInput[0].value),
        maxVal = parseInt(rangeInput[1].value);

        if((maxVal - minVal) < priceGap){
            if(e.target.className === "range-min"){
                rangeInput[0].value = maxVal - priceGap;
                console.log('range-min');
            }else{
                rangeInput[1].value = minVal + priceGap;
            }
        }else{
            priceInput[0].value = minVal;
            priceInput[1].value = maxVal;
            range.style.left = ((minVal / rangeInput[0].max) * 100) + "%";
            // console.log('range.style.left');
            range.style.right = 100 - (maxVal / rangeInput[1].max) * 100 + "%";
        }
    });
});