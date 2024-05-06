<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>إيكوسليس | الخصائص</title>
    <link rel="stylesheet" href="../../assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/css/aos.css">
    <link rel="stylesheet" href="../../assets/css/main_style.css">
    <link rel="stylesheet" href="../../assets/css/style_featues.css">
    <link rel="shortcut icon" href="../../assets/images/logo.svg" type="image/x-icon">
    <style>
    body{
      direction:rtl ;
    }
    
    .special-heading::before {
      content: url(../../assets/images/curve_line2.webp);
      position: absolute;
      bottom: -27px;
      right: 0;
    

      
    }
    .special-heading::after {
      content: "";
      position: absolute;
      -webkit-animation: animate-pulse 1s linear infinite ,Hmoving 10s linear infinite;
      bottom: 0px;
      right: 0;
      width: 25px;
      height: 25px;
      border-radius: 50%;
      background: var(--linear-gradient);
    }

    @keyframes Hmoving {
      0%{
          transform: translateX(0px);
      }
      50%{
          transform: translateX(-125px);
      }  
      100%{
          transform: translateX(0px);
      }
    }

    .about-us::after{
      content: "";
      position: absolute;
      bottom: -5px;
      left: 0;
      right:0;
      width: 100%;
      height: 380px;
      background-image:url(../../assets/images/shape-1.webp) ;
      background-repeat: no-repeat;
      background-position:left center;
      background-size: cover;
      z-index: -1;
    }

    .about-us ul li::before{
      content: url(../../assets/images/arrow_list.svg);
      position: absolute;
      top: 3px;
      right: 0;
      left:unset;
      transform:rotate(0deg);

    }

    footer .heading:after{
      content: "";
      position: absolute;
      right:1px;
      left:unset;
      bottom: 0;
      width: 50px;
      height: 4px;
      border-radius: 10px;
      background-color: var(--secondary-color);
    }
    footer .links ul li:before{
      position: absolute;
      content: url(../../assets/images/right-arrow.webp);
      right: 0;
      left: unset;
      top:13px;
      transition: all .4s ease-in-out;

    }
      footer .links ul li{
        padding:10px 30px 0 0;
    }
      footer .links ul li:hover::before{
        right: -5px;
    }
    

  
  </style>
</head>
<body>

  <!-- Start Header -->
  <header id="header">
    <nav class="">
      <div class="container d-flex align-items-center justify-content-between">
        <div class="logo d-flex align-items-center">
        <a href="/ar"><img  src="../../assets/images/logo.svg"  alt="logo"></a>
        </div>
        <div class="navbar">
        
          <ul>
            <div class="close-aside">
              <img src="../../assets/images/close_popup.webp"  alt="X">
            </div>
            <li><a href="/ar/">الرئيسية</a></li>
            <li><a href="/ar/features">الخصائص</a></li>
            <li><a href="/ar/contact-us">إتصل بنا</a></li>
            <li class="language">
              <div class="d-flex align-items-center justify-content-between gap-3">
                <div class="d-flex align-items-center gap-2">
                  <img class="default" src="../../assets/images/language_white.webp" alt="language">
                  <img class="sticky" src="../../assets/images/language.webp" alt="language">
                  <span>اللغة</span>
                </div>
                <div class="arrow">
                  <img class="default" style="width:18px" src="../../assets/images/angle_down_white.webp" alt="^">
                  <img class="sticky"style="width:18px"  src="../../assets/images/angle_down.webp" alt="^">
                </div>
              </div>
              <ul class="languages-dropdown-menu">
                <li><a href="/ar/features">العربية</a></li>
                <li><a href="/en/features">الإنجليزية</a></li>
                <li><a href="/fr/features">الفرنسية</a></li>

              </ul>
            </li>


  
  
          </ul>
        </div>
        <div class="hamburger">
          <span></span>
          <span></span>
          <span></span>
      </div>
      </div>
    </nav>
  
    <div class="main-banner">
      <div class="container h-100 ">
        <div class="row d-flex align-items-center">
          <div class="col-12  ">
            <div class="content" data-aos="fade-left" >
              <h1>الميزات الرئيسية
              </h1>
              <!-- <p>فريقنا في الخدمة دائما لكل استفسار او مساعدة</p> -->
            
            </div>
          </div>
     
          </div>
         
        </div>
      </div>  
  
    </header>

  <!-- End Header -->

 <!-- Startfeatures Section -->
<section class="features" >
  <div class="container">
    <div class="row d-flex justify-content-center">
      <div class="col-lg-6  col-xxl-4 mb-4" data-aos="fade-up">
          <div class="card">
              <div class="image">
                  <img loading="laz" class="img-fluid"  src="../../assets/images/Managingmultiplestores.webp" alt="إدارة العديد من المتاجر ">
              </div>
              <div class="info">
                <h4>متاجر متعددة الدول</h4>
                <p>يمكنك الآن تجميع عدة متاجر سواء في الجزائر أو في بلد آخر على منصة واحدة تضمن لك متابعة محترفة ومراقبة دقيقة لتفاصيل تجارتك، وتوفير الكثير من الوقت والمال.</p>
              </div>
          </div>
      </div>
      <div class="col-lg-6 col-xxl-4 mb-4" data-aos="fade-down">
      <div class="card ">
          <div class="image">
              <img loading="laz" class="img-fluid"  src="../../assets/images/ordersManagement.webp" alt="إدارة الطلبات">
          </div>
          <div class="info">
            <h4>إدارة ومتابعة الطلبات</h4>
            <p>تم تبسيط كل شيء لتجارتك الإلكترونية من التحضير إلى تسليم طلباتك.</p>
            <ul class="list-unstyled m-0 p-0">
              <li class="d-flex align-items-start gap-2">
                <span class="icon"><img src="../../assets/images/check-circle.webp"></span>
                <span>تخصيص تلقائي ويدوي للطلبات إلى مركز الاتصال</span>
              </li>
              <li class="d-flex align-items-start gap-2">
                <span class="icon"><img src="../../assets/images/check-circle.webp"></span>
                <span>طباعة مخصصة لفواتيرك</span>
              </li>
              <li class="d-flex align-items-start gap-2">
                <span class="icon"><img src="../../assets/images/check-circle.webp"></span>
                <span>توزيع الطلبات مع مختلف الناقلين وشركات التوصيل</span>
              </li>
              <li class="d-flex align-items-start gap-2">
                <span class="icon"><img src="../../assets/images/check-circle.webp"></span>
                <span>إنشاء تتبع تلقائي لكل طرد</span>
              </li>
              <li class="d-flex align-items-start gap-2">
                <span class="icon"><img src="../../assets/images/check-circle.webp"></span>
                <span>التحقق بواسطة ماسح ضوئي متاح</span>
              </li>
            </ul>
          </div>
      </div>
    </div>
    <div class="col-lg-6 col-xxl-4 mb-4" data-aos="fade-down">
      <div class="card ">
          <div class="image">
              <img loading="laz" class="img-fluid"  src="../../assets/images/Staffmanagement.webp" alt="إدارة الموظفين">
          </div>
          <div class="info">
            <h4>إدارة الموظفين</h4>
            <p>تسمح لك Upslice بمراقبة جميع موظفيك في الوقت الفعلي، وتقديم إحصائيات متنوعة وتقديم تقييم شامل لكل منهم لقياس أدائهم واتخاذ أفضل القرارات في الوقت المناسب.</p>
          </div>
      </div>
    </div>
  
    <div class="col-lg-6 col-xxl-4 mb-4" data-aos="fade-up">
        <div class="card ">
            <div class="image">
                <img loading="laz" class="img-fluid"  src="../../assets/images/Preciseanalyticalreport.webp" alt="تقارير تحليلية دقيقة">
            </div>
            <div class="info">
              <h4>قياس الأداء والمحاسبة</h4>
              <p>توفر لك عدة وحدات حسابية لحساب أرباحك وتكاليفك بشكل مفصل لتحليل الأداء بشكل مثلى.</p>
            </div>
        </div>
    </div>

   
  
    <div class="col-lg-6 col-xxl-4 mb-4" data-aos="fade-up">
        <div class="card ">
            <div class="image">
                <img loading="laz" class="img-fluid"  src="../../assets/images/integration.webp" alt="تكامل جميع واجهات برمجة التطبيقات الخاصة بشركات التوصيل">
            </div>
            <div class="info">
              <h4>تكامل واجهة برمجة التطبيقات</h4>
              <p>لم يعد لديك الحاجة إلى إدخال طلباتك يدويًا على منصات التوصيل المختلفة،</p>
              <ul class="list-unstyled m-0 p-0">
              <li class="d-flex align-items-start gap-2">
                <span class="icon"><img src="../../assets/images/check-circle.webp"></span>
                <span>توفر لك جميع واجهات برمجة التطبيقات الضرورية استيراد طلباتك تلقائيًا بنقرة واحدة!</span>
              </li>
              <li class="d-flex align-items-start gap-2">
                <span class="icon"><img src="../../assets/images/check-circle.webp"></span>
                <span>Shopify / Youcan / Woocomerce / Excel / Google sheet</span>
              </li>
              <li class="d-flex align-items-start gap-2">
                <span class="icon"><img src="../../assets/images/check-circle.webp"></span>
                <span>Yalidine / Zr express / Maystro delivery / Guepex / Nord et ouest</span>
              </li>
           
          
            </ul>
            </div>
        </div>
    </div>

    <div class="col-lg-6 col-xxl-4 mb-4" data-aos="fade-up">
        <div class="card ">
            <div class="image">
                <img loading="laz" class="img-fluid"  src="../../assets/images/mobileApp.webp" alt="تطبيق الهاتف المحمول">
            </div>
            <div class="info">
              <h4>تطبيق الهاتف المحمول</h4>
              <p> نوفر لك تطبيقًا محمولًا لموظفي التوصيل الخاص بك.</p>
            </div>
        </div>
    </div>

  </div>
  
 </div>    

</section>


<!-- End features Section -->




  <!-- Start Footer -->
  <footer id="footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-xl-4 mb-5 mb-lg-0" data-aos="fade-right">
            <div class="logo d-flex align-items-center" >
              <img class="default" src="../../assets/images/logo.svg"  alt="logo">
            </div>            
            <p>في إيكوسليس، نحن ملتزمون بتوفير حلول عالية الجودة لعملائنا، وخدمة عملاء استثنائية، ونتائج ملموسة. نحن فخورون بالتزامنا بالابتكار، والجودة، ورضا العملاء، ونتطلع إلى مساعدتكم في رحلتكم نحو النجاح في عالم التجارة الإلكترونية.</p> 
            <div class="follow-us" >
  
              <ul>
                <li><a href="https://facebook.com"><img src="../../assets/images/facebook.webp"></a></li>
                <li><a href="https://twitter.com"><img src="../../assets/images/twitter.webp"></a></li>
                <li><a href="https://www.instagram.com"><img src="../../assets/images/instagram.webp"></a></li>
  
  
              </ul>
            </div>
          
        </div>
        <div class="col-lg-6 col-xl-4 mb-5 mb-lg-0">
          <div class="links" data-aos="fade-right" data-aos-delay="300">
            <h3 class="heading">روابط سريعة</h3>
            <ul class="list-unstyled">
              <li><a href="/ar/">الرئيسية</a></li>
              <li><a href="/ar/features">الخصائص</a></li>
              <li><a href="/ar/contact-us">إتصل بنا</a></li>
            
            </ul>
          
          </div>
        </div>
        <div class="col-lg-6 col-xl-4 mb-5 mb-lg-0">
          <div class="contact" data-aos="fade-right" data-aos-delay="600">
            <h3 class="heading">التواصل</h3>
            <div class="address d-flex align-items-center">
                <span class="icon">
                  <img src="../../assets/images/location.webp"  alt="phone">
                </span>
                <span class="text">
                  <a href="https://maps.app.goo.gl/" target="_blank">الرياض - السعودية</a>
  
                </span>
            </div>
            <div class="email d-flex align-items-center">
                <span class="icon">
                  <img src="../../assets/images/email.webp"  alt="phone">
                </span>
                <span class="text">
                  <a href="mailto:info@gmail.com">info@gmail.com</a>
  
                </span>
            </div>
            <div class="phone d-flex align-items-center">
                <span class="icon">
                  <img src="../../assets/images/phone.webp"  alt="phone">
                </span>
                <span class="text text-end" style="direction: ltr;">
                  <a  href="tel:+966500789456">+966 50 078 9456</a>
  
                </span>
            </div>
          </div>
        
        </div>
      
  
      </div>
          <!-- Start CopyRight Section -->
    <div class="copyrights text-center">
      <div class="">
        <p> 2024© All Rights Reserved, Designed by <a style="text-decoration: none; color:var(--secondary-color)" href="https://mostaql.com/u/OmarAbd_Elsalam" target="_blank">Omar </a></p>
      </div>
    </div>
    <!-- End CopyRight Section -->
    </div>
  
  </footer>
  <!-- End Footer -->


      <!-- Start pop up alert message -->
      <div class="pop-up-alert-message">
        <div class="flex-box">
            <span class="message">
            </span>
            <span class="close-alert"><img style="width: 20px;" class="img-fluid" width="30" height="30" src="../../assets/images/close_popup.webp" loading="lazy" alt="close alert"></span>
        </div>
    </div>
    <!-- End pop up alert message -->

      








    
    <script src="../../assets/js/jquery-3.7.1.min.js"></script>
    <script src="../../assets/js/owl.carousel.min.js"></script>
    <script src="../../assets/js/aos.js"></script>
    <script src="../../assets/js/main.js"></script>
    <script>
       
      AOS.init({
      duration: 650,
      once: false
    });
   </script>
   <script>
    window._2chatConfig = {
    phoneNumber: '+966500789456',
    accountName: `مرحبا`,
    statusMessage: `عادةً ما نقوم بالرد  خلال ساعة واحدة`,
    chatMessage: `كيف يمكننا مساعدتك؟`,
    placeholder: 'اكتب رسالتك'+"...",
    position: 'left',
    colorScheme: 'automatic',
    showNotification: false,
  };

  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = 'https://widgets.2chat.io/index.js';
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', '_2chat'));
</script>


</body>
</html>