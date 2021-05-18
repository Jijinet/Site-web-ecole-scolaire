    // Slick Slider

    $(document).ready(function () {
      $(".cards").slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        prevArrow: $(".priv"),
        nextArrow: $(".nixt"),
    
        //? Responsive slider
    
        responsive: [
          {
            breakpoint: 1500,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 1,
              infinite: true,
              dots: true,
            },
          },
          {
            breakpoint: 1000,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 1,
            },
          },
          {
            breakpoint: 580,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
            },
          },
        ],
      });

      
    });


// NavBar Fixed

const nav = document.querySelector(".nav-container nav");

const btnScroll = document.querySelector("#up-button");

// const sticky = nav.offsetTop;

window.onscroll = function () {
 
   if (window.scrollY > 90) {
    nav.classList.add("scroll");
    
  } else if (window.scrollY < 90) {
    nav.classList.remove("scroll");
  }

  if (window.scrollY > 300) {
    btnScroll.style.display = "block";
  } else if (window.scrollY < 300) {
    btnScroll.style.display = "none";
  }

};

function clickUpbtn(){
  btnScroll.addEventListener("click", function () {
    window.scrollTo({
      top: 0,
      left: 0,
      behavior: "smooth",
    });
  });
  
  
}




// Burger Menu

const menuContainer = document.querySelector(".burger-menu");
const menu = document.querySelector(".menu-container");
const navContent = document.querySelector("nav");
const burgerMenu = document.querySelector(".fa-bars");
const closeBtn = document.querySelector(".fa-times");

burgerMenu.addEventListener("click", function () {
  burgerMenu.style.display = "none";
  closeBtn.style.display = "block";
  menu.style.display = "block";
  closeBtn.classList.toggle("round");
  burgerMenu.classList.toggle("trigger");
});

closeBtn.addEventListener("click", function () {
  burgerMenu.style.display = "block";
  closeBtn.style.display = "none";
  menu.style.display = "none";
  closeBtn.classList.toggle("round");
  burgerMenu.classList.toggle("trigger");
});




const pages= document.querySelectorAll('.page');
const prev=document.querySelector('.backward');
const next=document.querySelector('.forward');

let totalpages=pages.length;

console.log(totalpages);

for(let i=0;i<=totalpages;i++){

  pages[i].addEventListener('click',function(){
    if(i>0){
      prev.style.display="block";
    }
    else{
      prev.style.display="none";
    }
    if(i==pages.length-1){
      next.style.display="none";
    }
    else{
      next.style.display="block";
    }
  
   

  });
}


