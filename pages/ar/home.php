<!DOCTYPE html>
<html lang="ar">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>إيكوسليس | الرئيسية</title>
  <link rel="stylesheet" href="../../assets/css/owl.carousel.min.css">
  <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="../../assets/css/aos.css">
  <link rel="stylesheet" href="../../assets/css/magnific-popup.css">
  <link rel="stylesheet" href="../../assets/css/main_style.css">
  <link rel="stylesheet" href="../../assets/css/style_home.css">
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
    header#header{
      min-height:900px;
      position: relative;
      background-image:url(../../assets/images//header_bg_ar.webp);
      background-position: right center;
      overflow: hidden;
      background-repeat: no-repeat;
      background-size: cover;
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
                <li><a href="/ar/">العربية</a></li>
                <li><a href="/en/">الإنجليزية</a></li>
                <li><a href="/fr/">الفرنسية</a></li>

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
          <div class="col-lg-6 order-2 ">
            <div class="content" data-aos="fade-left" >
              <h1>مرحبًا بكم في <span class="highlight"> إيكوسليس </span>شريككم الموثوق في مجال التجارة الإلكترونية</h1>
              <p >انضموا إلى إيكوسليس اليوم واكتشفوا كيف يمكن لخبرتنا وحلولنا مساعدتكم في تحقيق نجاح جديد في مجال التجارة الإلكترونية.</p>

              <div class="actions py-3">
            
                <a href="https://ecoslice.vercel.app/" class="first-btn" target="_blank"><span>رابط المنصة</span></a>
                <div class="d-flex align-items-center gap-3 py-3">
                  <a id="play-video" class="popup-youtube video-play-button" href="../../assets/videos/video1.mp4">
                    <span></span>
                  </a>
                  <div class="text">فيديو توضيحي</div>
                </div>
                
              </div>
            </div>
          </div>
          <div class="col-lg-6 order-2 ">
            <div class="image" data-aos="fade-right" >
              <img class="img-fluid" src="../../assets/images/main_banner_image3.svg" alt="main_image" >
             
            </div>
          </div>
     
          </div>
         
        </div>
    </div>  
  
  </header>

  <!-- End Header -->



<!-- Start Section About us -->
<section class="about-us">
  <div class="container">
    <div class="row d-flex align-items-center">
      <div class=" col-xl-5 ">
        <div class="text" data-aos="fade-left">
          <h2 class="special-heading " data-aos="fade-left">
            <span>نبذة عنا</span>
            
          </h2>
          <ul>
            <li> نحن متخصصون في توفير حلول الإدارة للشركات التي تدير عدة متاجر، سواء على المستوى المحلي أو الدولي، كل ذلك من خلال منصة معلوماتية مركزية.</li>
            <li>بفضل خبرتنا العميقة في مجال التجارة الإلكترونية، نحن نفهم التحديات الفريدة التي تواجه الشركات التي تسعى لتوسيع وجودها عبر الإنترنت. لهذا السبب، قمنا بتطوير مجموعة شاملة من الحلول المصممة لتبسيط إدارة المتاجر عبر الإنترنت، وترتيب العمليات، وتحقيق الربحية القصوى.</li>
            <li>سواء كنت شركة صغيرة تسعى لتطوير وجودها عبر الإنترنت أو شركة مُنشأة تسعى لتحسين عملياتها في مجال التجارة الإلكترونية، فإن منصتنا توفر لك الأدوات التي تحتاجها لتحقيق النجاح. من إدارة المخزون والطلبات إلى تكامل الدفعات وتحليل الأداء، نوفر لك الأدوات التي تحتاجها لإدارة عملك عبر الإنترنت بكفاءة.</li>
            <li>في إيكوسليس، نحن ملتزمون بتوفير حلول عالية الجودة لعملائنا، وخدمة عملاء استثنائية، ونتائج ملموسة. نحن فخورون بالتزامنا بالابتكار، والجودة، ورضا العملاء، ونتطلع إلى مساعدتكم في رحلتكم نحو النجاح في عالم التجارة الإلكترونية.</li>
          </ul>
        </div>
      </div>
      <div class="col-xl-7 " data-aos="fade-right">
        <div class="adhd-top-video">
          <div class="adhd-top-video2">
              <video src="../../assets/videos/video1.mp4" autoplay muted loop allowfullscreen></iframe>
         </div>
      </div>
      </div>
    </div>
  </div>
</section>


<!-- End Section About us -->

  <!-- Startfeatures Section -->
  <section class="features" id="features">
    <div class="container">
      <h2 class="special-heading "  data-aos="fade-left">
        <span> أهم ما يميزنا</span>
        
      </h2>
      <div class="row d-flex justify-content-center">
        <div class="col-md-6 col-lg-4 col-xxl-3 mb-4"data-aos="fade-up">
            <div class="my-card ">
                <div class="hover-effect"></div>
                <div class="icon">
                    <img  src="../../assets/images/multipleStores.webp">
                </div>
                <div class="info">
                  <h4>إدارة العديد من المتاجر المحلية والدولية في وقت واحد</h4>
                  <p>سواء في الجزائر أو في أي مكان آخر، نحن نتعامل مع ربط جميع متاجرك في منصة واحدة</p>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-4 col-xxl-3 mb-4"data-aos="fade-down">
          <div class="my-card ">
              <div class="hover-effect"></div>
              <div class="icon">
                  <img  src="../../assets/images/staff_icon.webp">
              </div>
              <div class="info">
                <h4>إدارة الموظفين</h4>
                <p>قم بتعيين المهام المخصصة لموظفيك تلقائيًا مع مراقبة أدائهم.</p>
              </div>
          </div>
      </div>
        <div class="col-md-6 col-lg-4 col-xxl-3 mb-4"data-aos="fade-up">
          <div class="my-card ">
              <div class="hover-effect"></div>
              <div class="icon">
                  <img  src="../../assets/images/order_icon.webp">
              </div>
              <div class="info">
                <h4>إدارة الطلبات </h4>
                <p>الاستيراد التلقائي واليدوي للطلبات من Shopify/YouCan/Google Sheets/Excel...</p>
              </div>
          </div>
      </div>
        <div class="col-md-6 col-lg-4 col-xxl-3 mb-4"data-aos="fade-down">
          <div class="my-card ">
              <div class="hover-effect"></div>
              <div class="icon">
                  <img  src="../../assets/images/mobile-apps_icon.webp">
              </div>
              <div class="info">
                <h4>تطبيق الهاتف المحمول</h4>
                <p>تطبيق الهاتف المحمول لموظفي التوصيل لديك للبقاء متزامنين على مدار الساعة طوال أيام الأسبوع. </p>
              </div>
          </div>
      </div>

    </div>
   
  </div>    

  </section>

  
  <!-- End features Section -->



<!-- Start download app Section -->
<section class="download-app">
  <div class="container">
    <div class="row d-flex align-items-center ">
      <div class="col-md-6 mb-3 " data-aos="fade-left">
        <div class="content text-center text-md-end">
        <h2>حمل <br>التطبيق الآن!</h2>

        <div class="download-links d-flex align-items-center justify-content-center justify-content-md-start gap-3 pt-4">
          <div>
            <a href="" target="_blank">
              <img src="../../assets/images/googleplay.svg" alt="google Paly">
            </a>
          </div>
          <div>
            <a href="" target="_blank">
              <img  src="../../assets/images/appstore.svg" alt="app Store">
            </a>
          </div>
        </div>
          
        </div>
      </div>
      <div class="col-md-6" data-aos="fade-right">
        <div class="image">
          <img class="img-fluid" src="../../assets/images/downloadApp.webp" alt="app">


        </div>
      </div>
    </div>
  </div>
</section>
<!-- End download app Section -->
<section class="banner py-5">
  <div class="container">
    <picture>
      <source media="(min-width:700px)" srcset="../../assets/images/banner_web_ar.webp" alt="partners">
      <img class="img-fluid" src="../../assets/images/banner_mob_ar.webp" alt="partners">
    </picture>
  </div>
</section>

<!-- Start our Partners -->
<section class="our-partners">
  <div class="container">
    <h2 class="special-heading " data-aos="fade-left">
      <span>شركائنا</span>
      
    </h2>
    <div class="owl-carousel owl-theme " id="our-partners">
      <div class="item">
        <div class="box" data-aos="flip-right">
          <img src="../../assets/images/partners/partner1.webp"  alt="partner1">
        </div>
      </div>
      <div class="item">
        <div class="box" data-aos="flip-right">
          <img src="../../assets/images/partners/partner2.webp"  alt="partner2">
        </div>
      </div>
      <div class="item">
        <div class="box" data-aos="flip-right">
          <img src="../../assets/images/partners/partner3.webp"  alt="partner3">
        </div>
      </div>
      <div class="item">
        <div class="box" data-aos="flip-right">
          <img src="../../assets/images/partners/partner4.webp"  alt="partner4">
        </div>
      </div>
      <div class="item">
        <div class="box" data-aos="flip-right">
          <img src="../../assets/images/partners/partner5.webp"  alt="partner">
        </div>
      </div>
      <div class="item">
        <div class="box" data-aos="flip-right">
          <img src="../../assets/images/partners/partner6.webp"  alt="partner6">
        </div>
      </div>
      <div class="item">
        <div class="box" data-aos="flip-right">
          <img src="../../assets/images/partners/partner7.webp"  alt="partner7">
        </div>
      </div>
      <div class="item">
        <div class="box" data-aos="flip-right">
          <img src="../../assets/images/partners/partner8.webp"  alt="partner8">
        </div>
      </div>
     
    </div>
  </div>
</section>

<!-- End our Partners -->
<!-- Satrt testimonial section -->

<section class="testimonials">
  <div class="container">
    <h2 class="special-heading " data-aos="fade-left">
      <span>آراء العملاء</span>
      
    </h2>
      <div class="owl-carousel owl-theme products" id="testimonials">
        <div class="item"  data-aos="fade-down">
          <div class="box">
              <div class="rate">
                <img src="../../assets/images/review.webp" alt="*****">
              </div>
              <div class="comment">
                <p>أود ان اشكر  الفريق   على إنضباطهم، إحترافيتهم و تفاعلهم الرائع فيما يخص المنصة، هي من دون اي شك الاولى  لكل شخص  راغب لدخول مجال التجارة الإلكرونية، مبتدء كان ام محترف فأنا أوصي بها </p>
              </div>
              <div class="client-info d-flex align-items-center gap-2">
                <div class="client-image">
                  <img src="../../assets/images/client3.webp" alt="client-photo">

                </div>
                <div class="client-name-job">
                  <h5 class="name"> محمد علي</h5>
                  <span class="job">مسوق إلكتروني</span>
                </div>
              </div>
            
          </div>
        
        </div>
        <div class="item"  data-aos="fade-down">
          <div class="box">
              <div class="rate">
                <img src="../../assets/images/review.webp" alt="*****">
              </div>
              <div class="comment">
                <p>أود ان اشكر  الفريق   على إنضباطهم، إحترافيتهم و تفاعلهم الرائع فيما يخص المنصة، هي من دون اي شك الاولى  لكل شخص  راغب لدخول مجال التجارة الإلكرونية، مبتدء كان ام محترف فأنا أوصي بها </p>
              </div>
              <div class="client-info d-flex align-items-center gap-2">
                <div class="client-image">
                  <img src="../../assets/images/client3.webp" alt="client-photo">

                </div>
                <div class="client-name-job">
                  <h5 class="name"> محمد علي</h5>
                  <span class="job">مسوق إلكتروني</span>
                </div>
              </div>
            
          </div>
        
        </div>
        <div class="item"  data-aos="fade-down">
          <div class="box">
              <div class="rate">
                <img src="../../assets/images/review.webp" alt="*****">
              </div>
              <div class="comment">
                <p>أود ان اشكر  الفريق   على إنضباطهم، إحترافيتهم و تفاعلهم الرائع فيما يخص المنصة، هي من دون اي شك الاولى  لكل شخص  راغب لدخول مجال التجارة الإلكرونية، مبتدء كان ام محترف فأنا أوصي بها </p>
              </div>
              <div class="client-info d-flex align-items-center gap-2">
                <div class="client-image">
                  <img src="../../assets/images/client3.webp" alt="client-photo">

                </div>
                <div class="client-name-job">
                  <h5 class="name"> محمد علي</h5>
                  <span class="job">مسوق إلكتروني</span>
                </div>
              </div>
            
          </div>
        
        </div>
        <div class="item"  data-aos="fade-down">
          <div class="box">
              <div class="rate">
                <img src="../../assets/images/review.webp" alt="*****">
              </div>
              <div class="comment">
                <p>أود ان اشكر  الفريق   على إنضباطهم، إحترافيتهم و تفاعلهم الرائع فيما يخص المنصة، هي من دون اي شك الاولى  لكل شخص  راغب لدخول مجال التجارة الإلكرونية، مبتدء كان ام محترف فأنا أوصي بها </p>
              </div>
              <div class="client-info d-flex align-items-center gap-2">
                <div class="client-image">
                  <img src="../../assets/images/client3.webp" alt="client-photo">

                </div>
                <div class="client-name-job">
                  <h5 class="name"> محمد علي</h5>
                  <span class="job">مسوق إلكتروني</span>
                </div>
              </div>
            
          </div>
        
        </div>
     </div>
      
      
  </div>
</section>
<!-- End testimonial section -->

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
    <script src="/../../assets/js/jquery.magnific-popup.min.js"></script>
    <script src="../../assets/js/home_script_ar.js"></script>
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