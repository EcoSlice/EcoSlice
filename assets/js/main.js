///make header sticky and change background color when user scroll
let header=document.querySelector("header nav");
window.onscroll=function(){
    if(this.scrollY > 30){
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







//prevent right click on website
document.addEventListener('contextmenu', event => event.preventDefault());
