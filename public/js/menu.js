/* $(document).ready(function() {
	$('.menu-burger__header').click(function(){
        $('.menu-burger__header').toggleClass('open-menu');
        $('.main_nav').toggleClass('open-menu');
        $('body').toggleClass('fixed-page');
	});
}); */

"use strict"

document.body.classList.add('_touch');
const menuArrows = document.querySelectorAll('.menu__arrow');
if(menuArrows.length > 0){
        for(let index = 0; index < menuArrows.length; index++){
                const menuArrow = menuArrows[index];
                menuArrow.addEventListener("click", function(e){
                        //Цикл чтобы присвоить класс _active родительскому li
                        var parentElem;   
                        parentElem = menuArrow.parentElement;
                        while (!(parentElem.tagName === 'LI')) {
                                parentElem = parentElem.parentElement;
                        };
                        //убрать _active класс с других li одного уровня
                        var siblings_li = getSiblings(parentElem);
                        if(siblings_li.length > 0){
                                for(let index = 0; index < siblings_li.length; index++){
                                        const sibling = siblings_li[index];
                                        var children_of_sibling_li = getChildren(sibling);
                                        // console.log(children_li);
                                        if(children_of_sibling_li.length > 0){
                                                for(let index = 0; index < children_of_sibling_li.length; index++){
                                                        const child_li = children_of_sibling_li[index];
                                                        child_li.classList.remove('_active');
                                                }
                                        } 

                                        sibling.classList.remove('_active');
                                }
                        }        
                        
                        parentElem.classList.toggle('_active');
                        // console.log(parentElem);
                        // убрать класс _active детям закрытого li
                        /* Вадим убрал if (!(parentElem.classList.contains('_active'))) {
                                var children_li = getChildren(parentElem); */
                                // console.log(children_li);
                        if (true) {
                                childs = [];
                                const children_li = getChildren(parentElem);
                                if(children_li.length > 0){
                                        for(let index = 0; index < children_li.length; index++){
                                                const child_li = children_li[index];
                                                // child_li.classList.remove('_active');
                                                child_li.className = "";
                                        }
                                } 
                        }

                               /*  if(children_li.length > 0){
                                        for(let index = 0; index < children_li.length; index++){
                                                const child_li = children_li[index];
                                                child_li.classList.remove('_active');
                                        }
                                } 
                        } */

                       /*  menuArrow.parentElement.classList.toggle('_active');
                        if(menuArrow.parentElement.parentElement.tagName === 'LI'){
                                menuArrow.parentElement.parentElement.classList.toggle('_active');     
                        } */
                });
        }
}
//Children li текущего li элемента
var childs = [];
var getChildren = function (elem) {
        // var childs = [];
        for (const child of elem.children) {
                // console.log(child);
                if (child.tagName === 'UL') {
                        getChildren(child);
                }
                if (child.tagName === 'LI') {
                        childs.push(child);
                        getChildren(child);
                }
        }
        // console.log(childs);
        return childs;        
}

// Siblings текущего li элемента
var getSiblings = function (elem) {
	// Setup siblings array and get the first sibling
	var siblings = [];
	var sibling = elem.parentNode.firstChild;
	// Loop through each sibling and push to the array
	while (sibling) {
		if (sibling.nodeType === 1 && sibling !== elem) {
			siblings.push(sibling);
		}
		sibling = sibling.nextSibling;
	}
	return siblings;
};



// Кнопка бургер
const iconMenu = document.querySelector('.menu__icon');
const menuBody = document.querySelector('.menu__body');
if(iconMenu){
        iconMenu.addEventListener("click", function(e){
                document.body.classList.toggle('_lock');
                iconMenu.classList.toggle('_active');
                menuBody.classList.toggle('_active');

                if(menuArrows.length > 0){
                        for(let index = 0; index < menuArrows.length; index++){
                                const menuArrow = menuArrows[index];  
                                var parentElem;   
                                parentElem = menuArrow.parentElement;
                                while (!(parentElem.tagName === 'LI')) {
                                        parentElem = parentElem.parentElement;
                                };
                                parentElem.classList.remove('_active');
                                
                               /*  menuArrow.parentElement.classList.remove('_active');
                                if(menuArrow.parentElement.parentElement.tagName === 'LI' || menuArrow.parentElement.parentElement.classList.contains('menu__wrapper')){
                                        menuArrow.parentElement.parentElement.classList.remove('_active');     
                                }     */                            
                        }
                }
        });
}

//кнопка профиль
const profileButton = document.querySelector('.profile');
profileButton.addEventListener("click", function(e) {
        profileButton.children[1].classList.toggle('_active')
        // console.log(profileButton.children[1])
})

//Убрать верхнее меню при разворачивании экрана на ширину монитора компьютера
/*  document.documentElement.clientWidth;
document.documentElement.clientHeight; */
var screenWidthForMenu = $(window).width();
window.onresize = function() {
        if(screenWidthForMenu > 768) {
                document.body.classList.remove('_lock');
                iconMenu.classList.remove('_active');
                menuBody.classList.remove('_active');
                if(menuArrows.length > 0){
                        for(let index = 0; index < menuArrows.length; index++){
                                const menuArrow = menuArrows[index];  
                                var parentElem;   
                                parentElem = menuArrow.parentElement;
                                while (!(parentElem.tagName === 'LI')) {
                                        parentElem = parentElem.parentElement;
                                };
                                parentElem.classList.remove('_active');
                                
                               /*  menuArrow.parentElement.classList.remove('_active');
                                if(menuArrow.parentElement.parentElement.tagName === 'LI' || menuArrow.parentElement.parentElement.classList.contains('menu__wrapper')){
                                        menuArrow.parentElement.parentElement.classList.remove('_active');     
                                }     */                            
                        }
                }
            }        
      };
  
  // Закрывать burger menu при клике на ссылку в нем    
  const menuLinks = document.querySelectorAll('.main_nav a.menu__link, .main_nav a.menu__sublink');
//   console.log(menuLinks);
  if (menuLinks.length > 0) {
        menuLinks.forEach(menuLink => {
                menuLink.addEventListener('click', onMenuLinkClick);
        })
  };

  function onMenuLinkClick(e) {
        const menuLink = e.target;
        if (iconMenu.classList.contains('_active')) {
                if(menuArrows.length > 0){
                        for(let index = 0; index < menuArrows.length; index++){
                                const menuArrow = menuArrows[index]; 
                                var parentElem;   
                                parentElem = menuArrow.parentElement;
                                while (!(parentElem.tagName === 'LI')) {
                                        parentElem = parentElem.parentElement;
                                };
                                parentElem.classList.remove('_active');

                               /*  menuArrow.parentElement.classList.remove('_active');
                                if(menuArrow.parentElement.parentElement.tagName === 'LI' || menuArrow.parentElement.parentElement.classList.contains('menu__wrapper')){
                                        menuArrow.parentElement.parentElement.classList.remove('_active');     
                                }    */                             
                        }
                }
                document.body.classList.remove('_lock');
                iconMenu.classList.remove('_active');
                menuBody.classList.remove('_active');  
                
        }
  };