
//handilg sendin email
let Name=document.getElementById("customerName");
let Email=document.getElementById("email");
let Phone=document.getElementById("phone");
let Message=document.getElementById("message");
let errorMessages=document.querySelectorAll(".error-message");
let ContactForm=document.getElementById("contact_Form");
let alertDiv=document.querySelector(".pop-up-alert-message");
let alertMessage=document.querySelector(".pop-up-alert-message .message");
let closeAlertMessageButton=document.querySelector(".pop-up-alert-message .close-alert");
let interval;
let submit_button=document.getElementById("submit_form");

//check the validity of customer name
checkName=()=>{
    if(Name.value==""){

        errorMessages[0].textContent="هذا الحقل مطلوب";
        return false;
    }
    else{
        errorMessages[0].textContent="";
        return true;
    }
}


//check the validity of email
// checkEmail=()=>{
//     if(Email.value==""){

//         errorMessages[1].textContent="هذا الحقل مطلوب";
//         return false;
//     }
//     else if(!Email.value.match(/^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i)){
//         errorMessages[1].textContent= "أدخل بريد إلكتروني صحيح مثل" +"example@domain.com";
//         return false;
//     }
//     else{
//         errorMessages[1].textContent="";

//         return true;

//     }
 
// }
//check the validity of email
checkPhone=()=>{
    if(Phone.value==""){

        errorMessages[1].textContent="هذا الحقل مطلوب";
        return false;
    }
    else if(!Phone.value.match(/^([0-9]){5,}$/)){
        errorMessages[1].textContent=" الرقم غير صحيح";
        return false;
    }
    else{
        errorMessages[1].textContent="";

        return true;

    }
}





submit_button.addEventListener("click",(e)=>{
    e.preventDefault();
    
    checkName();
    checkPhone();
   


    if(checkName()&&checkPhone() ){
        submit_button.disabled = true;
        submit_button.innerHTML=`<div class="animation"><span></span><span></span><span></span></div>`;

        let date=new Date().getTime();
        if(localStorage.getItem("lastTimeSendingMessage")){
             if(date-localStorage.getItem("lastTimeSendingMessage")>600000){
                
                sendEmail();
                localStorage.setItem("lastTimeSendingMessage",date);

                


             }
             else{
                alertDiv.classList.add("error","active")
                alertMessage.innerHTML=`<img src="assets/images/error.webp" loading="lazy" alt=""><span >تم إرسال بياناتك من قبل</span>`;
                submit_button.innerHTML="سجل الآن";;
                submit_button.disabled = false;


               interval= setTimeout(()=>{
                    alertDiv.classList.remove("active","error");


                },5000);
             }
            
        }
        else{
          
            saveDataToGoogleSheet();
          
            localStorage.setItem("lastTimeSendingMessage",date);

            
        }
    }
   

   
    
});    

//sending mails using emailjs

function saveDataToGoogleSheet(){
    // Define the URL for the API request
    const url = 'https://sheetdb.io/api/v1/0p8403p4knl68';

    // Define the API key or access token for authentication
    const accessToken = 'jsrwde10qcrasvyw0zjsd7br39sii0c4inkjwici'; 


    // Format the data as required by the API
    const requestBody = {
    الاسم:Name.value,
    الجوال:Phone.value,
    ملاحظات:Message.value}


    // Make the API request
    fetch(url, {
    method: 'POST',

    headers: {
        'Authorization': `Bearer ${accessToken}`,
        'Content-Type': 'application/json'
   },
    body: JSON.stringify(requestBody)
    })
    .then(response => response.json())
    .then(data => {
        alertDiv.classList.add("success","active");
        alertMessage.innerHTML=`<img src="assets/images/success.webp" loading="lazy" alt=""><span >تم حفط بياناتك بنجاح</span>`;
        submit_button.disabled = false;
        submit_button.innerHTML="سجل الآن";


        interval=setTimeout(()=>{
          
            alertDiv.classList.remove("active","success");



        },5000);
    })
    .catch(error => {
        alertDiv.classList.add("error","active")
        alertMessage.innerHTML=`<img src="assets/images/error.webp" loading="lazy" alt=""><span >تعذر  حفظ البيانات</span>`;
        interval= setTimeout(()=>{
        alertDiv.classList.remove("active","error");



        },5000);
    });

}
  

//close alert message when click on close btn
closeAlertMessageButton.addEventListener("click",function(){
    alertDiv.classList.remove("active","error","success")
    clearInterval(interval);

});
