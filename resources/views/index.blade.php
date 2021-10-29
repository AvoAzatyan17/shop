@extends('layouts.layoutapp')

@section('indexcontent')
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
               @foreach($products as $product)
                   <div class="col-md-6 col-lg-4 col-xl-3">
                      <div id="product-3" class="single-product">
                         <div class="part-1">
                            <ul>
                               <li>
                                   <a href="" class="add-to-cart"
                                              data-name="{{$product->product_name}}"
                                              data-price="{{$product->price}}"
                                              data-tax="{{$product->tax}}"
                                              data-dimension="{{$product->dimension}}">
                                     <i class="fas fa-shopping-cart"></i>
                                   </a>
                               </li>
                            </ul>
                         </div>
                         <div class="part-2">
                            <h3 class="product-title">{{$product->product_name}}</h3>
                            <h4 class="product-price">${{$product->price}}</h4>
                         </div>
                      </div>
                   </div>
               @endforeach
            </div>
         </div>
      </section>
   </div>
@endsection
