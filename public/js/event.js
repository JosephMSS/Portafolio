// 'use strict'
   var menu=document.querySelector(".header__menu");
   var burgerButton=document.querySelector("#burger-menu");
   var screen=window.matchMedia('screen and (max-width: 767px)');
    

    screen.addListener(validation)
    function validation(event){
        console.log(event)
        if(event.matches)
        {

            burgerButton.addEventListener('click', hideShow)
        }else{
            burgerButton.removeEventListener('click', hideShow)

        }
    }
    validation(screen)
   
    function hideShow(){
        if(menu.classList.contains('header__menu--isActive'))
       {
        menu.classList.remove('header__menu--isActive');

       }else{
        menu.classList.add('header__menu--isActive');

       }
    }