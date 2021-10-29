<!DOCTYPE html>
<html lang="en" >
   <head>
      <meta charset="UTF-8">
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <title>Onilne shop example</title>
      <link rel='stylesheet' href="{{ asset('css/bootstrap.min.css') }}">
      <link rel='stylesheet' href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
      <link rel="stylesheet" href="{{ asset('css/style.css') }}">
   </head>
   <body>
      <div class="header">
         <ul class="first-ul">
            <li class="first-ul-li homeLi"><a href="{{url('/')}}" class="homeLi">Home</a></li>
            <div class="CartButton">
               <a href="{{url('/cart')}}">
               <i class="fa" style="font-size:24px">&#xf07a;</i>
               <span class='badge badge-warning total-count' id='lblCartCount'> 0 </span>
               </a>
            </div>
            @if(session()->has('message'))
            <div class="alert alert-success" id="success-alert">
               <button type="button" class="close" data-dismiss="alert">x</button>
               {{ session()->get('message') }}
            </div>
            @endif
            @if (Route::has('login'))
            @auth
            <div class="dropdown userProfileDropDown">
               <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
               <i class="fa fa-user" aria-hidden="true"></i> {{ Auth::user()->name }}
               </button>
               <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                  <li><a class="dropdown-item" href="{{url('/order')}}">Order</a></li>
                  <li>
                     <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                     {{ __('Logout') }}
                     </a>
                     <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                     </form>
                  </li>
               </ul>
            </div>
            @else
            <li class="first-ul-li"><a href="{{ route('login') }}">Log in</a></li>
            @if (Route::has('register'))
            <li class="first-ul-li"><a href="{{ route('register') }}">Register</a></li>
            @endif
            @endauth
            @endif
         </ul>
      </div>
      @yield('indexcontent')
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
      <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
      <script src="{{ asset('js/jquery-3.6.0.js') }}"></script>
      <script src="{{ asset('js/popper.min.js') }}"></script>
      <script src="{{ asset('js/bootstrap.min.js') }}"></script>
      <script src="{{ asset('js/main.js') }}"></script>
   </body>
</html>
