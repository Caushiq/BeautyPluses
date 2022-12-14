<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Kalpana's | It all starts with a great skin</title>
       <!-- CSS File -->
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       <link rel="stylesheet" href="style.css">
       <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
       <!-- Font Awesome CDN -->
       <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
   </head>
   <body>
      <?php include('includes/header.php');?>
      <!-- Start Home Section -->

      <section class="home" id="home">
           <div class="slider-content" style="">
               <div class="slider">
                    <span style="--i:1;">
                        <a href="services.php?category_id=10&id_arr=<?php if(isset($_GET['id_arr'])){echo $_GET['id_arr'];} ?>"><img src="admin/images/bqtquq.jpg" alt=""></a>
                       </span>
                    <span style="--i:2;">
                        <a href="services.php?category_id=12&id_arr=<?php if(isset($_GET['id_arr'])){echo $_GET['id_arr'];} ?>"><img src="admin/images/IMG_20210224_111610.jpg" alt=""></a>
                       </span>
                   <span style="--i:3;">
                        <a href="services.php?category_id=4&id_arr=<?php if(isset($_GET['id_arr'])){echo $_GET['id_arr'];} ?>"><img src="admin/images/dmnd.JPG" alt=""></a>
                       </span>
                   <span style="--i:4;">
                        <a href="services.php?category_id=8&id_arr=<?php if(isset($_GET['id_arr'])){echo $_GET['id_arr'];} ?>"><img src="admin/images/vavahhsh.jpg" alt=""></a>
                       </span>
                   <span style="--i:5;">
                        <a href="services.php?category_id=9&id_arr=<?php if(isset($_GET['id_arr'])){echo $_GET['id_arr'];} ?>"><img src="admin/images/hairspa2.jpg" alt=""></a>
                       </span>
                   <span style="--i:6;">
                        <a href="services.php?category_id=3&id_arr=<?php if(isset($_GET['id_arr'])){echo $_GET['id_arr'];} ?>"><img src="admin/images/gld.jpg" alt=""></a>
                       </span>
                   <span style="--i:7;">
                        <a href="services.php?category_id=5&id_arr=<?php if(isset($_GET['id_arr'])){echo $_GET['id_arr'];} ?>"><img src="admin/images/yssghha.jpg" alt=""></a>
                    </span>
                   <span style="--i:8;">
                        <a href="services.php?category_id=7&id_arr=<?php if(isset($_GET['id_arr'])){echo $_GET['id_arr'];} ?>"><img src="admin/images/bleac.jpg" alt=""></a>
                       </span>
                   <span style="--i:9;">
                        <a href="services.php?category_id=2&id_arr=<?php if(isset($_GET['id_arr'])){echo $_GET['id_arr'];} ?>"><img src="admin/images/slvr.jpg" alt=""></a>
                       </span>
                   <span style="--i:10;">
                        <a href="services.php?category_id=6&id_arr=<?php if(isset($_GET['id_arr'])){echo $_GET['id_arr'];} ?>"><img src="admin/images/kakakks.jpg" alt=""></a>
                       </span>
                   <span style="--i:11;">
                        <a href="services.php?category_id=11&id_arr=<?php if(isset($_GET['id_arr'])){echo $_GET['id_arr'];} ?>"><img src="admin/images/IMG_20210224_110856.jpg" alt=""></a>
                       </span>
                   <span style="--i:12;">
                        <a href="services.php?category_id=1&id_arr=<?php if(isset($_GET['id_arr'])){echo $_GET['id_arr'];} ?>"><img src="admin/images/brnz.jpg" alt=""></a>
                       </span>
               </div>
            </div>
       </section>
       <section class="containhome" id="home">
           <div class="home-content" style="margin:auto;">
                   <h1>Your Big Day<br><span>In Style</span></h1>
                    <h3>Beauty Services<br><span>At Home Also Available </span></h3>
               <span><strong>For Women & Kids only</strong></span>
                   <p>Come see our bride's beauty parlour at <strong>BeautyPluses </strong>
                       and give us an opportunity to beautify you.</p>
           </div>
    </section>
      <!-- End Home Section -->
      <!-- Start About Section -->
      <section class="about" id="about">
         <div class="container">
            <div class="section-title">
               <h1>our story</h1>
               <span>LET US INTRODUCE YOU TO BEAUTYPLUSES.COM</span>
            </div>
            <div class="about-detail">
               <div class="about-detail-content">
                  <div class="about-img">
                     <img src="img/about-img.jpg">
                  </div>
                  <div class="about-description">
                     <p>BeautyPluses have introduced to deliver fabulous beauty treatment in the comfort of your home.</p>
                     <p>We offer you our beauty services at the comfort of your time schedule.</p>
                     <p>We have created BeautyPluses to take your pressure and stress away, delivering beauty services directly to your door at the time which suits you. The BeautyPluses services aims to provide you ultimate luxury treatments in the comfort of your home.</p>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- End About Section -->
      <!-- Start Services Section -->
      <section class="services" id="services">
         <div class="services-content">
            <div class="section-title">
               <h1>services</h1>
               <span>what we do</span>
            </div>
            <div class="services-content-description">
               <a href="services.php?category_id=5&id_arr=<?php if(isset($_GET['id_arr'])){echo $_GET['id_arr'];} ?>">
                  <div class="box">
                     <div class="inner">
                        <img src="img/services/eyebrow design.png">
                        <p>Facial & Clean up</p>
                     </div>
                  </div>
               </a>
               <a href="services.php?category_id=10&id_arr=<?php if(isset($_GET['id_arr'])){echo $_GET['id_arr'];} ?>">
                  <div class="box">
                     <div class="inner">
                        <img src="img/services/makeup.png">
                        <p>makeup</p>
                     </div>
                  </div>
               </a>
               <a href="services.php?category_id=8&id_arr=<?php if(isset($_GET['id_arr'])){echo $_GET['id_arr'];} ?>">
                  <div class="box">
                     <div class="inner">
                        <img src="img/services/manicure.png">
                        <img src="img/services/pedicure.png">
                        <p>mani & pedi</p>
                     </div>
                  </div>
               </a>
               <a href="services.php?category_id=6&id_arr=<?php if(isset($_GET['id_arr'])){echo $_GET['id_arr'];} ?>">
                  <div class="box">
                     <div class="inner">
                        <img src="img/services/waxing.png">
                        <p>waxing</p>
                     </div>
                  </div>
               </a>
               <a href="services.php?category_id=7&id_arr=<?php if(isset($_GET['id_arr'])){echo $_GET['id_arr'];} ?>">
                  <div class="box">
                     <div class="inner">
                        <img src="img/services/haircut.png">
                        <p>Bleach & De Tan</p>
                     </div>
                  </div>
               </a>
               <a href="services.php?category_id=11&id_arr=<?php if(isset($_GET['id_arr'])){echo $_GET['id_arr'];} ?>">
                  <div class="box">
                     <div class="inner">
                        <img src="img/services/eyebrow design.png">
                        <p>Threading</p>
                     </div>
                  </div>
               </a>
               <a href="services.php?category_id=9&id_arr=<?php if(isset($_GET['id_arr'])){echo $_GET['id_arr'];} ?>">
                  <div class="box">
                     <div class="inner">
                        <img src="img/services/hairstyle.png">
                        <p>Hair Care</p>
                     </div>
                  </div>
               </a>
               <a href="services.php?category_id=12&id_arr=<?php if(isset($_GET['id_arr'])){echo $_GET['id_arr'];} ?>">
                  <div class="box">
                     <div class="inner">
                        <img src="img/services/skin cleansing.png">
                        <p>Body Massage / skin cleansing</p>
                     </div>
                  </div>
               </a>
            </div>
         </div>
      </section>
      <!-- End Services Section -->
      <!-- Start Package Section -->
      <section class="package" id="package">
         <div class="section-title">
            <h1>promotional packages</h1>
            <span>for your bride's day</span>
         </div>
         <div class="package-cards">
            <div class="card">
               <div class="card-title">
                  <h1>Bronze</h1>
               </div>
               <div class="card-items">
                  <div class="item">
                     <i class="far fa-check-square check-icon"></i>
                     <p>Waxing-Full Arms</p>
                  </div>
                  <div class="item">
                     <i class="far fa-check-square check-icon"></i>
                     <p>Full Legs</p>
                  </div>
                  <div class="item">
                     <i class="far fa-check-square check-icon"></i>
                     <p>Underarms</p>
                  </div>
                <div class="item">
                         <i class="far fa-check-square check-icon"></i>
                         <p>Pedicure - <span>VLCC / Sara / O3+</span></p>
                </div>
                <div class="item">
                         <i class="far fa-check-square check-icon"></i>
                         <p>Threading</p>
                </div>
                <div class="item">
                         <i class="far fa-check-square check-icon"></i>
                         <p>Upperlips</p>
                </div>

                  <div class="item">
                     <i class="far fa-times-square x-icon"></i>
                     <p class="not">Full Body RICA Wax</p>
                  </div>
                   <div class="item">
                     <i class="far fa-times-square x-icon"></i>
                     <p class="not">Hair Spa</p>
                  </div>
                   <div class="item">
                     <i class="far fa-times-square x-icon"></i>
                     <p class="not">Bleach - Face & Neck</p>
                  </div>
                   <div class="item">
                     <i class="far fa-times-square x-icon"></i>
                     <p class="not">Mani & Pedi</p>
                  </div>
                   <div class="item">
                     <i class="far fa-times-square x-icon"></i>
                     <p class="not">Bikini Wax</p>
                  </div>

                  <a href="services.php?category_id=1&id_arr=<?php if(isset($_GET['id_arr'])){echo $_GET['id_arr'];} ?>">
                  <button class="btn">I want this</button>
                  </a>
               </div>
            </div>
            <div class="card">
               <div class="card-title">
                  <h1>Silver</h1>
               </div>
               <div class="card-items">
                  <div class="item">
                     <i class="far fa-check-square check-icon"></i>
                     <p>Clean Up</p>
                  </div>
                  <div class="item">
                     <i class="far fa-check-square check-icon"></i>
                     <p>Bleach - Face & Neck</p>
                  </div>
                  <div class="item">
                     <i class="far fa-check-square check-icon"></i>
                     <p>Facial <span>(Sara Gold)</span></p>
                  </div>
                   <div class="item">
                         <i class="far fa-check-square check-icon"></i>
                         <p>Mani & Pedi <span>(Sara / VLCC)</span></p>
                    </div>

                   <div class="item">
                         <i class="far fa-check-square check-icon"></i>
                         <p>Threading</p>
                </div>
                <div class="item">
                         <i class="far fa-check-square check-icon"></i>
                         <p>Upperlips</p>
                </div>
                   <div class="item">
                     <i class="far fa-check-square check-icon"></i>
                     <p>Waxing-Full Arms</p>
                  </div>
                  <div class="item">
                     <i class="far fa-check-square check-icon"></i>
                     <p>Full Legs</p>
                  </div>
                  <div class="item">
                     <i class="far fa-check-square check-icon"></i>
                     <p>Underarms</p>
                  </div>
                  <div class="item">
                     <i class="far fa-times-square x-icon"></i>
                     <p class="not">Hair Spa</p>
                  </div>
                   <div class="item">
                     <i class="far fa-times-square x-icon"></i>
                     <p class="not">Full Body RICA Wax</p>
                  </div>
                  <a href="services.php?category_id=2&id_arr=<?php if(isset($_GET['id_arr'])){echo $_GET['id_arr'];} ?>">
                  <button class="btn">I want this</button>
                  </a>
               </div>
            </div>
            <div class="card">
               <div class="card-title">
                  <h1>Gold</h1>
               </div>
               <div class="card-items">
                  <div class="item">
                     <i class="far fa-check-square check-icon"></i>
                     <p>Skin Secrets Facial</p>
                  </div>
                    <div class="item">
                     <i class="far fa-check-square check-icon"></i>
                     <p>Vedicline Facial</p>
                  </div>
                <div class="item">
                     <i class="far fa-check-square check-icon"></i>
                     <p>VLCC Insta Glow Facial</p>
                  </div>
                  <div class="item">
                     <i class="far fa-check-square check-icon"></i>
                     <p>Bleach - Face & Neck</p>
                  </div>
                  <div class="item">
                     <i class="far fa-check-square check-icon"></i>
                     <p>Raaga - De-Tan <span>(Face & Neck)</span></p>
                  </div>

                   <div class="item">
                         <i class="far fa-check-square check-icon"></i>
                         <p>Mani & Pedi <span>(Sara / VLCC)</span></p>
                    </div>
                  <div class="item">
                     <i class="far fa-check-square check-icon"></i>
                     <p>Loreal Hair Spa <span>(Any Length)</span></p>
                  </div>
                <div class="item">
                     <i class="far fa-check-square check-icon"></i>
                     <p>Full Body RICA Wax</p>
                  </div>
                   <div class="item">
                     <i class="far fa-check-square check-icon"></i>
                       <p>RICA BRAZILLIAN <span>(Bikini Wax)</span></p>
                  </div>

                   <div class="item">
                         <i class="far fa-check-square check-icon"></i>
                         <p>Head Massage</p>
                </div>
                  <div class="item">
                     <i class="far fa-times-square x-icon"></i>
                     <p class="not">Diamond Facials</p>
                  </div>
                  <a href="services.php?category_id=3&id_arr=<?php if(isset($_GET['id_arr'])){echo $_GET['id_arr'];} ?>">
                  <button class="btn">I want this</button>
                  </a>
               </div>
            </div>
            <div class="card">
               <div class="card-title">
                  <h1>Diamond</h1>
               </div>
               <div class="card-items">
                  <div class="item">
                     <i class="far fa-check-square check-icon"></i>
                     <p>Shine & Glow O3+ Facial</p>
                  </div>
                  <div class="item">
                     <i class="far fa-check-square check-icon"></i>
                      <p>Bridal <span>(VIT C Glowing Skin O3+)</span></p>
                  </div>
                  <div class="item">
                     <i class="far fa-check-square check-icon"></i>
                     <p>Vedicline Facial</p>
                  </div>
                   <div class="item">
                     <i class="far fa-check-square check-icon"></i>
                     <p>Bleach - Face & Neck</p>
                  </div>
                  <div class="item">
                     <i class="far fa-check-square check-icon"></i>
                     <p>Raaga - De-Tan <span>(Face & Neck)</span></p>
                  </div>
                  <div class="item">
                     <i class="far fa-check-square check-icon"></i>
                     <p>Mani & Pedi <span>(O3+ / Sara)</span></p>
                  </div>
                  <div class="item">
                         <i class="far fa-check-square check-icon"></i>
                         <p>Threading</p>
                </div>
                <div class="item">
                         <i class="far fa-check-square check-icon"></i>
                         <p>Upperlips</p>
                </div>
                   <div class="item">
                     <i class="far fa-check-square check-icon"></i>
                     <p>Waxing-Full Arms</p>
                  </div>
                  <div class="item">
                     <i class="far fa-check-square check-icon"></i>
                     <p>Full Legs</p>
                  </div>
                  <div class="item">
                     <i class="far fa-check-square check-icon"></i>
                     <p>Underarms</p>
                  </div>
                  <a href="services.php?category_id=4&id_arr=<?php if(isset($_GET['id_arr'])){echo $_GET['id_arr'];} ?>">
                  <button class="btn">I want this</button>
                  </a>
               </div>
            </div>
         </div>
      </section>
      <!-- End Package Section -->
      <!-- Start Gallery Section -->
<!--
      <section class="gallery" id="gallery">
         <div class="gallery-content">
            <div class="section-title">
               <h1>gallery</h1>
               <span>the princesses of our instagram</span>
            </div>
            <div class="gallery-list-img">
               <div class="gallery-img">
                  <img src="img/img-insta/photo1.png">
               </div>
               <div class="gallery-img">
                  <img src="img/img-insta/photo2.png">
               </div>
               <div class="gallery-img">
                  <img src="img/img-insta/photo3.png">
               </div>
               <div class="gallery-img">
                  <img src="img/img-insta/photo4.png">
               </div>
               <div class="gallery-img">
                  <img src="img/img-insta/photo5.png">
               </div>
               <div class="gallery-img">
                  <img src="img/img-insta/photo6.png">
               </div>
               <div class="gallery-img">
                  <img src="img/img-insta/photo7.png">
               </div>
               <div class="gallery-img">
                  <img src="img/img-insta/photo8.png">
               </div>
            </div>
            <button class="btn">see more</button>
         </div>
      </section>
-->
      <!-- End Gallery Section -->
      <!-- Start Testimonials Section -->
      <section class="testimonials" id="testimonials">
         <div class="testimonials-content">
            <div class="section-title">
               <h1>testimonials</h1>
               <span>see what our customer say</span>
            </div>
            <div class="testimonials-card">
               <div class="testimonials-item">
                  <div class="testimonials-img">
                     <img src="img/testimonials/testimonials1.png">
                  </div>
                  <div class="testimonials-box">
                     <div class="testimonials-name">
                        <h1>Arti</h1>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                     </div>
                     <div class="testimonials-description">
                        <p>I love my local beauty parlour! It's always a pleasure to go there, wonderful treatments, beautiful treatment rooms and the ladies in there are just fab! I'll be back in soon.</p>
                     </div>
                  </div>
               </div>
               <div class="testimonials-item">
                  <div class="testimonials-img">
                     <img src="img/testimonials/testimonials2.png">
                  </div>
                  <div class="testimonials-box">
                     <div class="testimonials-name">
                        <h1>Neha</h1>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                     </div>
                     <div class="testimonials-description">
                        <p>Lovely manicure from Kalpana today. Will be going again. Relaxing atmosphere. Will send to our colleagues and neighbours.</p>
                     </div>
                  </div>
               </div>
               <div class="testimonials-item">
                  <div class="testimonials-img">
                     <img src="img/testimonials/testimonials1.png">
                  </div>
                  <div class="testimonials-box">
                     <div class="testimonials-name">
                        <h1>Beena</h1>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                     </div>
                     <div class="testimonials-description">
                        <p>FABULOUS, Excellent service, inviting and warm welcome. I do not live locally and travel for almost an hour to go to the salon.</p>
                     </div>
                  </div>
               </div>
               <div class="testimonials-item">
                  <div class="testimonials-img">
                     <img src="img/testimonials/testimonials2.png">
                  </div>
                  <div class="testimonials-box">
                     <div class="testimonials-name">
                        <h1>Swati</h1>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                     </div>
                     <div class="testimonials-description">
                        <p>Would highly recommend 'All About You', the staff are extremely helpful and is a very relaxing setting to take some time out to unwind!</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- End Testimonials Section -->
      <!-- Start Footer Section -->
      <?php include('includes/footer.php');?>
      <?php include('includes/footer_include_files.php');?>
   </body>
</html>
