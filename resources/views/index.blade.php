<!DOCTYPE html>
<html lang="en" >
   <head>
      <meta charset="UTF-8">
      <title>Onilne shop example</title>
      <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css'>
      <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css'>
      <link rel="stylesheet" href="{{ asset('css/style.css') }}">
   </head>
   <body>
   <div class="header">
       <ul>
            <div class="CartButton">
                <a href="#">
                    <i class="fa" style="font-size:24px">&#xf07a;</i>
                    <span class='badge badge-warning' id='lblCartCount'> 5 </span>
                </a>
            </div>
            <!--<li><a href="#">Home</a></li>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Our Services</a></li>-->
            @if (Route::has('login'))
                 @auth
                    <li><a href="{{ url('/home') }}">Home</a></li>
                 @else
                    <li><a href="{{ route('login') }}">Log in</a></li>
                    @if (Route::has('register'))
                       <li><a href="{{ route('register') }}">Register</a></li>
                    @endif
                @endauth
            @endif
        </ul>

   </div>
   <div class="middle">
       <section class="text-center about">
          <h1>About US</h1>
          <div class="container">
             <div class="row">
                <div class="col-lg-4 col-sm-6 col-ex-12 about-item wow lightSpeedIn" data-wow-offset="200" >
                   <span class="fa fa-address-book"></span>
                   <h2>Section 1</h2>
                   <p class="lead">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled</p>
                </div>
                <div class="col-lg-4 col-sm-6 col-ex-12 about-item wow lightSpeedIn" data-wow-offset="200">
                   <span class="fa fa-info"></span>
                   <h2>Section 2 </h2>
                   <p class="lead">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum </p>
                </div>
                <div class="col-lg-4 col-sm-6 col-ex-12 about-item wow lightSpeedIn" data-wow-offset="200">
                   <span class="fa fa-file"></span>
                   <h2>Section 3</h2>
                   <p class="lead">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled</p>
                </div>
             </div>
          </div>
       </section>
      <section class="section-products">
         <div class="container">
            <div class="row justify-content-center text-center">
               <div class="col-md-8 col-lg-6">
                  <div class="header">
                     <h2>All Products List</h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <!-- Single Product -->
               <div class="col-md-6 col-lg-4 col-xl-3">
                  <div id="product-1" class="single-product">
                     <div class="part-1">
                        <ul>
                           <li><a href="#"><i class="fas fa-shopping-cart"></i></a></li>
                          <!-- <li><a href="#"><i class="fas fa-heart"></i></a></li>
                           <li><a href="#"><i class="fas fa-plus"></i></a></li>
                           <li><a href="#"><i class="fas fa-expand"></i></a></li>-->
                        </ul>
                     </div>
                     <div class="part-2">
                        <h3 class="product-title">Here Product Title</h3>
                        <h4 class="product-old-price">$79.99</h4>
                        <h4 class="product-price">$49.99</h4>
                     </div>
                  </div>
               </div>
               <!-- Single Product -->
               <div class="col-md-6 col-lg-4 col-xl-3">
                  <div id="product-2" class="single-product">
                     <div class="part-1">
                        <span class="discount">15% off</span>
                        <ul>
                           <li><a href="#"><i class="fas fa-shopping-cart"></i></a></li>
                          <!-- <li><a href="#"><i class="fas fa-heart"></i></a></li>
                           <li><a href="#"><i class="fas fa-plus"></i></a></li>
                           <li><a href="#"><i class="fas fa-expand"></i></a></li>-->
                        </ul>
                     </div>
                     <div class="part-2">
                        <h3 class="product-title">Here Product Title</h3>
                        <h4 class="product-price">$49.99</h4>
                     </div>
                  </div>
               </div>
               <!-- Single Product -->
               <div class="col-md-6 col-lg-4 col-xl-3">
                  <div id="product-3" class="single-product">
                     <div class="part-1">
                        <ul>
                           <li><a href="#"><i class="fas fa-shopping-cart"></i></a></li>
                           <!--<li><a href="#"><i class="fas fa-heart"></i></a></li>
                           <li><a href="#"><i class="fas fa-plus"></i></a></li>
                           <li><a href="#"><i class="fas fa-expand"></i></a></li>-->
                        </ul>
                     </div>
                     <div class="part-2">
                        <h3 class="product-title">Here Product Title</h3>
                        <h4 class="product-old-price">$79.99</h4>
                        <h4 class="product-price">$49.99</h4>
                     </div>
                  </div>
               </div>
               <!-- Single Product -->
               <div class="col-md-6 col-lg-4 col-xl-3">
                  <div id="product-4" class="single-product">
                     <div class="part-1">
                        <span class="new">new</span>
                        <ul>
                           <li><a href="#"><i class="fas fa-shopping-cart"></i></a></li>
                       <!--    <li><a href="#"><i class="fas fa-heart"></i></a></li>
                           <li><a href="#"><i class="fas fa-plus"></i></a></li>
                           <li><a href="#"><i class="fas fa-expand"></i></a></li>-->
                        </ul>
                     </div>
                     <div class="part-2">
                        <h3 class="product-title">Here Product Title</h3>
                        <h4 class="product-price">$49.99</h4>
                     </div>
                  </div>
               </div>
               <!-- Single Product -->
               <div class="col-md-6 col-lg-4 col-xl-3">
                  <div id="product-1" class="single-product">
                     <div class="part-1">
                        <ul>
                           <li><a href="#"><i class="fas fa-shopping-cart"></i></a></li>
                         <!--  <li><a href="#"><i class="fas fa-heart"></i></a></li>
                           <li><a href="#"><i class="fas fa-plus"></i></a></li>
                           <li><a href="#"><i class="fas fa-expand"></i></a></li>-->
                        </ul>
                     </div>
                     <div class="part-2">
                        <h3 class="product-title">Here Product Title</h3>
                        <h4 class="product-old-price">$79.99</h4>
                        <h4 class="product-price">$49.99</h4>
                     </div>
                  </div>
               </div>
               <!-- Single Product -->
               <div class="col-md-6 col-lg-4 col-xl-3">
                  <div id="product-2" class="single-product">
                     <div class="part-1">
                        <span class="discount">15% off</span>
                        <ul>
                           <li><a href="#"><i class="fas fa-shopping-cart"></i></a></li>
                         <!--  <li><a href="#"><i class="fas fa-heart"></i></a></li>
                           <li><a href="#"><i class="fas fa-plus"></i></a></li>
                           <li><a href="#"><i class="fas fa-expand"></i></a></li>-->
                        </ul>
                     </div>
                     <div class="part-2">
                        <h3 class="product-title">Here Product Title</h3>
                        <h4 class="product-price">$49.99</h4>
                     </div>
                  </div>
               </div>
               <!-- Single Product -->
               <div class="col-md-6 col-lg-4 col-xl-3">
                  <div id="product-3" class="single-product">
                     <div class="part-1">
                        <ul>
                           <li><a href="#"><i class="fas fa-shopping-cart"></i></a></li>
                          <!-- <li><a href="#"><i class="fas fa-heart"></i></a></li>
                           <li><a href="#"><i class="fas fa-plus"></i></a></li>
                           <li><a href="#"><i class="fas fa-expand"></i></a></li>-->
                        </ul>
                     </div>
                     <div class="part-2">
                        <h3 class="product-title">Here Product Title</h3>
                        <h4 class="product-old-price">$79.99</h4>
                        <h4 class="product-price">$49.99</h4>
                     </div>
                  </div>
               </div>
               <!-- Single Product -->
               <div class="col-md-6 col-lg-4 col-xl-3">
                  <div id="product-4" class="single-product">
                     <div class="part-1">
                        <span class="new">new</span>
                        <ul>
                           <li><a href="#"><i class="fas fa-shopping-cart"></i></a></li>
                         <!--  <li><a href="#"><i class="fas fa-heart"></i></a></li>
                           <li><a href="#"><i class="fas fa-plus"></i></a></li>
                           <li><a href="#"><i class="fas fa-expand"></i></a></li>--->
                        </ul>
                     </div>
                     <div class="part-2">
                        <h3 class="product-title">Here Product Title</h3>
                        <h4 class="product-price">$49.99</h4>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
   </div>
      <!-- footer -->
      <footer class="footer-area footer--light">
        <div class="mini-footer">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="copyright-text">
                  <p>© 2021
                    All rights reserved. Created by
                    <a href="#">Avetis Azatyan</a>
                  </p>
                </div>
                <div class="go_top">
                  <span class="icon-arrow-up"></span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </footer>
   </body>
</html>
