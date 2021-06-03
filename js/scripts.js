
// swiper
let mySwiper = new Swiper ('.swiper-container',{
loop: true,
centeredSlides:true,
slidePreView: 1,

pagination:{
    el:'.swiper-pagination',
},

navigation:{
    nextEl:'.swiper-button-next',
    prevEl:'.swiper-button-prev',
},

})

//Responsive nav menu
const overlay = document.querySelector('.overlay');
const hamburger = document.getElementById('hamburger');
const close = document.getElementById('close');

hamburger.addEventListener('click',()=>{
    overlay.classList.add('show');
    hamburger.classList.add('hide');
})

close.addEventListener('click',()=>{
    overlay.classList.remove('show');
    hamburger.classList.remove('hide');
})