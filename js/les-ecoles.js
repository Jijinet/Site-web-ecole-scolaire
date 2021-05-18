
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



// IMAGE SLIDER

const slide = document.querySelectorAll(".ecole-title");
const next = document.querySelector(".nixt");
const prev = document.querySelector(".priv");
const IntervalTime = 3000;
const auto = true;
let autoSlide;

const nextSlider = () => {
  const current = document.querySelector(".current");

  current.classList.remove("current");

  if (current.nextElementSibling) {
    current.nextElementSibling.classList.add("current");
    
  } else {
    slide[0].classList.add("current");
    
   
  }

  setTimeout(() => current.classList.remove("current"));
};

const prevSlider = () => {
  const current = document.querySelector(".current");
  
  current.classList.remove("current");

  if (current.previousElementSibling) {
    current.previousElementSibling.classList.add("current");
    
    
  } 
  else {
    slide[slide.length - 1].classList.add("current");
    
  }

  setTimeout(() => current.classList.remove("current"));
};

next.addEventListener("click", () => {
  nextSlider();
});

prev.addEventListener("click", () => {
  prevSlider();
});

if (auto) {
  autoSlide = setInterval(nextSlider, IntervalTime);
}


// FILIERE CLICK


const TS= document.querySelector('.ts');
const T= document.querySelector('.t');
const Q= document.querySelector('.q');

const content1 =document.querySelector('.tech1');
const content2 =document.querySelector('.tech2');
const content3 =document.querySelector('.tech3');

TS.addEventListener('click',function(){

content1.style.display='block';
content3.style.display='none';
content2.style.display='none';
TS.classList.add("blue");
T.classList.remove("blue");
  Q.classList.remove("blue");
  
});


T.addEventListener('click',function(){

  content1.style.display='none';
  content3.style.display='none';
  content2.style.display='block';
  T.classList.add("blue");
  TS.classList.remove("blue");
  Q.classList.remove("blue");
  
  });


  Q.addEventListener('click',function(){

    content1.style.display='none';
    content3.style.display='block';
    content2.style.display='none';
    Q.classList.add("blue");
    TS.classList.remove("blue");
  T.classList.remove("blue");
    
    
    });



// NEW WINDOW TAB

document.querySelector(".E-bns").addEventListener('click', function() {
  handle = window.open('ecole-bns.php', '_blank');
});
document.querySelector(".E-tmr").addEventListener('click', function() {
    handle = window.open('ecole-temara.php', '_blank');
});
document.querySelector(".E-salé").addEventListener('click', function() {
    handle = window.open('ecole-salé.php', '_blank');
});

