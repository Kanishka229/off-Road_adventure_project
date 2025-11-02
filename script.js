let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.header .navbar');

menu.onclick = () => {
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
};

window.onscroll = () => {
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');
};

var swiper = new Swiper(".home-slider", {
    loop: true,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});

var swiper = new Swiper(".reviews-slide", {
    loop: true,
    grabCursor: true,
    spaceBetween: 20,
    // autoHeight:true,
    navigation:{
        nextEl:".swiper-button-next",
        prevEl:".swiper-button-prev",
    },

    breakpoints: {
        0: {
            slidesPerView: 1,
        },
        
        640: {
            slidesPerView: 2,
        },
        768: {
            slidesPerView: 3,

        },
        
    },
});

let loadMoreBtn = document.querySelector('.package .load-more .btn');
let currentItem = 3;

loadMoreBtn.onclick = () =>{
   let boxes = [...document.querySelectorAll('.package .box-cont .box')];
   for (var i = currentItem; i < currentItem + 3; i++){
      boxes[i].style.display = 'inline-block';
   };
   currentItem += 3;
   if(currentItem >= boxes.length){
      loadMoreBtn.style.display = 'none';
   }
}



function toggleBook() {
    var acceptTerms = document.getElementById('acceptTerms').checked;
    var book = document.getElementById('book');

    if (acceptTerms) {
        book.classList.remove('hidden');
    } else {
        book.classList.add('hidden');
    }



}
