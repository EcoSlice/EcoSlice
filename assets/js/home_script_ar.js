
///make header sticky and change background color when user scroll
let header=document.querySelector("header nav");
window.onscroll=function(){
    if(this.scrollY > 900){
        header.classList.add("sticky-nav")


    }
    else{
        header.classList.remove("sticky-nav")



    }

}

//open menu bar in mobile screens when click on hamburger btn
let hamburger=document.querySelector(".hamburger");
let menuBar=document.querySelector("header .navbar");

hamburger.addEventListener("click",function(){
    this.classList.toggle("active");
    menuBar.classList.toggle("show");
    menuBar.addEventListener("click",function(){
        console.log("sss")
        hamburger.classList.remove("active");
        this.classList.remove("show");
    })
    document.querySelectorAll("header .navbar ul li a").forEach(ele=>{
        ele.addEventListener("click",function(){
            hamburger.classList.remove("active");
            menuBar.classList.remove("show");



        })
    })
    
});

let aside=document.querySelector("header .navbar ul"); 
aside.addEventListener("click",function(e){
    e.stopPropagation();
})


let CloseAsideBtn=document.querySelector("header .navbar .close-aside");
console.log(CloseAsideBtn)
CloseAsideBtn.addEventListener("click",function(e){
  hamburger.classList.remove("active");
            menuBar.classList.remove("show");
})


$('#testimonials').owlCarousel({
  loop: true,
  margin: 20,
  nav: true,
  rewindNav:true,
  autoplay: true,
  rtl:true,
  dots:true,

  navText: [
    "<img src='../assets/images/left-arrow.webp'>",
    "<img src='../assets/images/right-arrow.webp'>"
  ],
  autoplayHoverPause: true,
  responsive: {
    0: {
      items: 1
    },
    700: {
      items: 2
    },
    1200: {
      items: 3
    },
    2000:{
      items:4
    }
  },

  
  
});


$('#our-partners').owlCarousel({
  stagePadding: 0,
  rtl:true,
  loop:true,
  margin:10,
  nav: false,
  autoplay: true,
  slideTransition: 'linear',
  autoplayTimeout:2000,
  autoplaySpeed: 3000,
  
  autoplayHoverPause: false,
  responsive:{
      0:{
          items:2
      },
      600:{
          items:3
      },
      1000:{
          items:5
      }
  }
});



//set position of hover effect on my card
let myCard=document.querySelectorAll(".my-card")
myCard.forEach(card=>{
 card.addEventListener("mouseenter",function(e){
      // Get the target
 const target = e.target;

 // Get the bounding rectangle of target
 const rect = target.getBoundingClientRect();

 // Mouse position
 const x = e.clientX - rect.left;
 const y = e.clientY - rect.top;
 this.childNodes[1].style.top=y+"px";
 this.childNodes[1].style.left=x+"px";

     console.log(x+"  "+y)

})
});



$(document).ready(function() { 
  //video popup       
 $('.popup-youtube').magnificPopup({
   type: "iframe",
   removalDelay: 300,
   mainClass: "mfp-fade",
   overflowY: "hidden"
 });
});



//prevent right click on website
document.addEventListener('contextmenu', event => event.preventDefault());


