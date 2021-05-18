// Tabs PRO

const TS= document.querySelector('.TS');
const T= document.querySelector('.T');
const Q= document.querySelector('.Q');

const cycleContent1 =document.querySelector('.tech1');
const cycleContent2 =document.querySelector('.tech2');
const cycleContent3 =document.querySelector('.tech3');

TS.addEventListener('click',function(){

cycleContent1.style.display='block';
cycleContent3.style.display='none';
cycleContent2.style.display='none';
TS.style.backgroundColor="var(--yellow)";
  T.style.backgroundColor="white";
  Q.style.backgroundColor="white";


});


T.addEventListener('click',function(){

  cycleContent1.style.display='none';
  cycleContent3.style.display='none';
  cycleContent2.style.display='block';
  TS.style.backgroundColor="white";
  T.style.backgroundColor="var(--yellow)";
  Q.style.backgroundColor="white";
  
  });


  Q.addEventListener('click',function(){

    cycleContent1.style.display='none';
    cycleContent3.style.display='block';
    cycleContent2.style.display='none';
    Q.style.backgroundColor="var(--yellow)";
    TS.style.backgroundColor="white";
    T.style.backgroundColor="white";
    
    });

    // TABS SUP

const L= document.querySelector('.L');
const B1= document.querySelector('.B1');
const B2= document.querySelector('.B2');

const licence =document.querySelector('.licence');
const bachlor1 =document.querySelector('.bachlor1');
const bachlor2 =document.querySelector('.bachlor2');

L.addEventListener('click',function(){

licence.style.display='block';
bachlor1.style.display='none';
bachlor2.style.display='none';
L.style.backgroundColor="var(--yellow)";
  B1.style.backgroundColor="white";
  B2.style.backgroundColor="white";

});


B1.addEventListener('click',function(){

  licence.style.display='none';
 bachlor1.style.display='block';
 bachlor2.style.display='none';
 B1.style.backgroundColor="var(--yellow)";
  B2.style.backgroundColor="white";
  L.style.backgroundColor="white";
  
  });


  B2.addEventListener('click',function(){

    licence.style.display='none';
    bachlor1.style.display='none';
    bachlor2.style.display='block';
    B2.style.backgroundColor="var(--yellow)";
  B1.style.backgroundColor="white";
  L.style.backgroundColor="white";
    
    });


    // Formation

const formation3 =document.querySelector('.cm');
const content3 =document.querySelector('.com');
const btn3 =document.querySelector('.for-com');

btn3.addEventListener('click',function(){

formation3.classList.toggle('height');
content3.classList.toggle('display');
  
  });


  const formation2 =document.querySelector('.dm2');
const content2 =document.querySelector('.d2');
const btn2 =document.querySelector('.for-d-2');

btn2.addEventListener('click',function(){

formation2.classList.toggle('height');
content2.classList.toggle('display');
  
  });


  const formation1 =document.querySelector('.dm1');
const content1 =document.querySelector('.d1');
const btn1 =document.querySelector('.for-d-1');

btn1.addEventListener('click',function(){

formation1.classList.toggle('height');
content1.classList.toggle('display');
  
  });