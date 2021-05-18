// Filiere


// Technicien Spescialisé

const reseau = document.querySelector(".ri");
const developement = document.querySelector(".di");
const getionE = document.querySelector(".ge");

const reseauContRI = document.querySelector(".reseau");
const developementContDI = document.querySelector(".developement");
const getionEContGE = document.querySelector(".gestionE");

const imageRI = document.querySelector(".ri");
const imageDI = document.querySelector(".di");
const imageGE = document.querySelector(".ge");

reseau.addEventListener("click", function () {
  if (imageRI.classList.contains("blue")) {
    imageRI.classList.remove("blue");
  } else {
    reseauContRI.classList.add("display");
    reseauContRI.classList.remove("disapear");
    reseauContRI.style.display = "block";
    imageRI.classList.add("blue");

    developementContDI.classList.remove("display");
    imageDI.classList.remove("blue");
    developementContDI.classList.add("disapear");

    getionEContGE.classList.add("disapear");
    getionEContGE.classList.remove("display");
    imageGE.classList.remove("blue");
    TechnicienRemove();
    operateurRemove();
    widowsScrollTS();
  }
});

developement.addEventListener("click", function () {
  if (imageDI.classList.contains("blue")) {
   
    imageDI.classList.remove("blue");
  } else {
    developementContDI.classList.add("display");
    developementContDI.classList.remove("disapear");
    developementContDI.style.display = "block";
    imageDI.classList.add("blue");

    reseauContRI.classList.add("disapear");
    reseauContRI.classList.remove("display");
    imageRI.classList.remove("blue");

    getionEContGE.classList.add("disapear");
    getionEContGE.classList.remove("display");
    imageGE.classList.remove("blue");
    TechnicienRemove();
    operateurRemove();
    widowsScrollTS();
    
  }
});

getionE.addEventListener("click", function () {
  if (imageGE.classList.contains("blue-border")) {
  
    imageGE.classList.remove("blue");
  } else {
    getionEContGE.classList.add("display");
    getionEContGE.classList.remove("disapear");
    getionEContGE.style.display = "block";
    imageGE.classList.add("blue");

    reseauContRI.classList.add("disapear");
    reseauContRI.classList.remove("display");
    imageRI.classList.remove("blue");

    developementContDI.classList.add("disapear");
    developementContDI.classList.remove("display");
    imageDI.classList.remove("blue");
    TechnicienRemove();
    operateurRemove();
    widowsScrollTS();
  }
});

// Technicien

const infographie = document.querySelector(".in");
const gestionI = document.querySelector(".gi");
const maintenance = document.querySelector(".mi");

const infographieCont = document.querySelector(".infographie");
const gestionICont = document.querySelector(".gestionI");
const maintenanceCont = document.querySelector(".maintenance");

const imageIN = document.querySelector(".in");
const imageGI = document.querySelector(".gi");
const imageMI = document.querySelector(".mi");

infographie.addEventListener("click", function () {
  if (imageIN.classList.contains("blue")) {
   
    imageIN.classList.remove("blue");
  } else {
    infographieCont.classList.add("display");
    infographieCont.classList.remove("disapear");
    infographieCont.style.display = "block";
    imageIN.classList.add("blue");

    gestionICont.classList.remove("display");
    imageGI.classList.remove("blue");
    gestionICont.classList.add("disapear");

    maintenanceCont.classList.add("disapear");
    maintenanceCont.classList.remove("display");
    imageMI.classList.remove("blue");
    TechnicienSpRemove();
    operateurRemove();
    widowsScrollT();
  }
});

gestionI.addEventListener("click", function () {
  if (imageGI.classList.contains("blue")) {
   
    imageGI.classList.remove("blue");
  } else {
    gestionICont.classList.add("display");
    gestionICont.classList.remove("disapear");
    gestionICont.style.display = "block";
    imageGI.classList.add("blue");

    infographieCont.classList.add("disapear");
    infographieCont.classList.remove("display");
    imageIN.classList.remove("blue");

    maintenanceCont.classList.add("disapear");
    maintenanceCont.classList.remove("display");
    imageMI.classList.remove("blue");
    TechnicienSpRemove();
    operateurRemove();
    widowsScrollT();
  }
});

maintenance.addEventListener("click", function () {
  if (imageMI.classList.contains("blue")) {
   
    imageMI.classList.remove("blue");
  } else {
    maintenanceCont.classList.add("display");
    maintenanceCont.classList.remove("disapear");
    maintenanceCont.style.display = "block";
    imageMI.classList.add("blue");

    infographieCont.classList.add("disapear");
    infographieCont.classList.remove("display");
    imageIN.classList.remove("blue");

    gestionICont.classList.add("disapear");
    gestionICont.classList.remove("display");
    imageGI.classList.remove("blue");
    TechnicienSpRemove();
    operateurRemove();
    widowsScrollT();
  }
});

// Qualification

const operateur = document.querySelector(".os");

const operateurCont = document.querySelector(".operateur");

const imageOS = document.querySelector(".os");

operateur.addEventListener("click", function () {
  if (imageOS.classList.contains("blue")) {
    
    imageOS.classList.remove("blue");
  } else {
    operateurCont.classList.add("display");
    operateurCont.classList.remove("disapear");
    operateurCont.style.display = "block";
    imageOS.classList.add("blue");
    TechnicienSpRemove();
    TechnicienRemove();
    widowsScrollQ();
  }
});



// Functions

function TechnicienSpRemove() {
  reseauContRI.classList.add("disapear");
  reseauContRI.classList.remove("display");
  imageRI.classList.remove("blue");

  developementContDI.classList.remove("display");
  imageDI.classList.remove("blue");
  developementContDI.classList.add("disapear");

  getionEContGE.classList.add("disapear");
  getionEContGE.classList.remove("display");
  imageGE.classList.remove("blue");
}

function TechnicienRemove() {
  infographieCont.classList.add("disapear");
  infographieCont.classList.remove("display");
  imageIN.classList.remove("blue");

  gestionICont.classList.remove("display");
  imageGI.classList.remove("blue");
  gestionICont.classList.add("disapear");

  maintenanceCont.classList.add("disapear");
  maintenanceCont.classList.remove("display");
  imageMI.classList.remove("blue");
}

function operateurRemove() {
  operateurCont.classList.add("disapear");
  operateurCont.classList.remove("display");
  imageOS.classList.remove("blue");
}

const techS=document.querySelector('.title1');
const tech =document.querySelector('.title2');
const quali =document.querySelector('.title3');


const qualiLi=document.querySelector('.quali');
const techLi=document.querySelector('.tech');
const techSLi =document.querySelector('.techS');


techS.addEventListener("click", function(){
  techSLi.classList.toggle("dis-none");
  techLi.classList.add("dis-none");
  qualiLi.classList.add("dis-none");
});


tech.addEventListener("click", function(){
  techLi.classList.toggle("dis-none");
  techSLi.classList.add("dis-none");
  qualiLi.classList.add("dis-none");

});


quali.addEventListener("click", function(){
  techSLi.classList.add("dis-none");
  techLi.classList.add("dis-none");
  qualiLi.classList.toggle("dis-none");
});





let Width600=window.matchMedia("(max-width: 600px)");
// let Width980=window.matchMedia("(max-width: 980px)");
// let Width700=window.matchMedia("(max-width: 700px)");

function widowsScrollTS() {
  
  if(Width600.matches){
    window.scrollTo( 0,550);
    
  }
  // else if(Width980.matches){
  //   window.scrollTo( 0,500);
  // }
  // else if(Width700.matches){
  //   window.scrollTo( 0,400);
   
  // }
  // else{
  //   window.scrollTo( 0,540);
  // }
 
}


// function widowsScrollT() {
//   if(Width600.matches){
//     window.scrollTo( 0,1915);
    
//   }
//  else if(Width980.matches){
//     window.scrollTo( 0,840);
    
   
//   }
//   else if(Width700.matches){
//     window.scrollTo( 0,400);
    
    
//   }
//   else {
//     window.scrollTo( 0,890);
//   }
// }

// function widowsScrollQ() {
//   if(Width600.matches){
//     window.scrollTo( 0,2275);
//   }
//  else if(Width980.matches){
//     window.scrollTo( 0,1175);
    
//   }
//   else if(Width700.matches){
//     window.scrollTo( 0,1000);
    
//   }
//   else {
//     window.scrollTo( 0,1250);
//   }
// }






// function ShowFiliere(){

//   if (imageRI.classList.contains("blue")) {
//     reseauContRI.classList.add("disapear");
//     reseauContRI.classList.remove("display");
//     imageRI.classList.remove("blue");
//   } else {
//     reseauContRI.classList.add("display");
//     reseauContRI.classList.remove("disapear");
//     reseauContRI.style.display = "block";
//     imageRI.classList.add("blue");

//     developementContDI.classList.remove("display");
//     imageDI.classList.remove("blue");
//     developementContDI.classList.add("disapear");

//     getionEContGE.classList.add("disapear");
//     getionEContGE.classList.remove("display");
//     imageGE.classList.remove("blue");
//     TechnicienRemove();
//     operateurRemove();
//     widowsScrollTS();
//   }

//   if (imageDI.classList.contains("blue")) {
//     developementContDI.classList.add("disapear");
//     developementContDI.classList.remove("display");
//     imageDI.classList.remove("blue");
//   } else {
//     developementContDI.classList.add("display");
//     developementContDI.classList.remove("disapear");
//     developementContDI.style.display = "block";
//     imageDI.classList.add("blue");

//     reseauContRI.classList.add("disapear");
//     reseauContRI.classList.remove("display");
//     imageRI.classList.remove("blue");

//     getionEContGE.classList.add("disapear");
//     getionEContGE.classList.remove("display");
//     imageGE.classList.remove("blue");
//     TechnicienRemove();
//     operateurRemove();
//     widowsScrollTS();
    
//   }

//   if (imageGE.classList.contains("blue-border")) {
//     getionEContGE.classList.add("disapear");
//     getionEContGE.classList.remove("display");
//     imageGE.classList.remove("blue");
//   } else {
//     getionEContGE.classList.add("display");
//     getionEContGE.classList.remove("disapear");
//     getionEContGE.style.display = "block";
//     imageGE.classList.add("blue");

//     reseauContRI.classList.add("disapear");
//     reseauContRI.classList.remove("display");
//     imageRI.classList.remove("blue");

//     developementContDI.classList.add("disapear");
//     developementContDI.classList.remove("display");
//     imageDI.classList.remove("blue");
//     TechnicienRemove();
//     operateurRemove();
//     widowsScrollTS();
//   }
//   if (imageIN.classList.contains("blue")) {
//     infographieCont.classList.add("disapear");
//     infographieCont.classList.remove("display");
//     imageIN.classList.remove("blue");
//   } else {
//     infographieCont.classList.add("display");
//     infographieCont.classList.remove("disapear");
//     infographieCont.style.display = "block";
//     imageIN.classList.add("blue");

//     gestionICont.classList.remove("display");
//     imageGI.classList.remove("blue");
//     gestionICont.classList.add("disapear");

//     maintenanceCont.classList.add("disapear");
//     maintenanceCont.classList.remove("display");
//     imageMI.classList.remove("blue");
//     TechnicienSpRemove();
//     operateurRemove();
//     widowsScrollT();
//   }

//   if (imageGI.classList.contains("blue")) {
//     gestionICont.classList.add("disapear");
//     gestionICont.classList.remove("display");
//     imageGI.classList.remove("blue");
//   } else {
//     gestionICont.classList.add("display");
//     gestionICont.classList.remove("disapear");
//     gestionICont.style.display = "block";
//     imageGI.classList.add("blue");

//     infographieCont.classList.add("disapear");
//     infographieCont.classList.remove("display");
//     imageIN.classList.remove("blue");

//     maintenanceCont.classList.add("disapear");
//     maintenanceCont.classList.remove("display");
//     imageMI.classList.remove("blue");
//     TechnicienSpRemove();
//     operateurRemove();
//     widowsScrollT();
//   }

//   if (imageMI.classList.contains("blue")) {
//     maintenanceCont.classList.add("disapear");
//     maintenanceCont.classList.remove("display");
//     imageMI.classList.remove("blue");
//   } else {
//     maintenanceCont.classList.add("display");
//     maintenanceCont.classList.remove("disapear");
//     maintenanceCont.style.display = "block";
//     imageMI.classList.add("blue");

//     infographieCont.classList.add("disapear");
//     infographieCont.classList.remove("display");
//     imageIN.classList.remove("blue");

//     gestionICont.classList.add("disapear");
//     gestionICont.classList.remove("display");
//     imageGI.classList.remove("blue");
//     TechnicienSpRemove();
//     operateurRemove();
//     widowsScrollT();
//   }

//   if (imageOS.classList.contains("blue")) {
//     operateurCont.classList.add("disapear");
//     operateurCont.classList.remove("display");
//     imageOS.classList.remove("blue");
//   } else {
//     operateurCont.classList.add("display");
//     operateurCont.classList.remove("disapear");
//     operateurCont.style.display = "block";
//     imageOS.classList.add("blue");
//     TechnicienSpRemove();
//     TechnicienRemove();
//     widowsScrollQ();
//   }

// }