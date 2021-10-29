@extends('layouts.layoutapp')
@section('indexcontent')
<section class="text-center about">
   <h1>Shopping cart</h1>
</section>
<div class="container mt-5 p-3 rounded cart">
   <form action="{{url('/cart/store')}}" method="POST">
      {!! csrf_field() !!}
      <div class="row no-gutters">
         <div class="col-md-8">
            <table class="table table-hover">
               <thead>
                  <tr>
                     <th>Product name</th>
                     <th>Price</th>
                     <th>Count</th>
                     <th>Action</th>
                     <th>Sum</th>
                  </tr>
               </thead>
               <tbody class="show-cart">
               </tbody>
               <tfoot>
                  <span class="clear-cart btn btn-danger">Clear Cart</span>
               </tfoot>
            </table>
         </div>
         <div class="col-md-4">
            <div class="payment-info">
               <div class="d-flex justify-content-between align-items-center"><span>Card details</span></div>
               <span class="type d-block mt-3 mb-1">Card type</span><label class="radio"> <input type="radio" name="card" value="payment" checked> <span><img width="30" src="https://img.icons8.com/color/48/000000/mastercard.png" /></span> </label>
               <label class="radio"> <input type="radio" name="card" value="payment"> <span><img width="30" src="https://img.icons8.com/officel/48/000000/visa.png" /></span> </label>
               <label class="radio"> <input type="radio" name="card" value="payment"> <span><img width="30" src="https://img.icons8.com/ultraviolet/48/000000/amex.png" /></span> </label>
               <label class="radio"> <input type="radio" name="card" value="payment"> <span><img width="30" src="https://img.icons8.com/officel/48/000000/paypal.png" /></span> </label>
               <div><label class="credit-card-label">Name on card</label><input type="text" class="form-control credit-inputs" @auth value="{{Auth::user()->name}}" @else value="" @endauth placeholder="Name"></div>
               <div><label class="credit-card-label">Card number</label><input type="text" class="form-control credit-inputs" placeholder="0000 0000 0000 0000"></div>
               <div class="row">
                  <div class="col-md-6"><label class="credit-card-label">Date</label><input type="text" class="form-control credit-inputs" placeholder="12/24"></div>
                  <div class="col-md-6"><label class="credit-card-label">CVV</label><input type="text" class="form-control credit-inputs" placeholder="342"></div>
               </div>
               <hr class="line">
               <div class="d-flex justify-content-between information">
                  <span>Subtotal</span>
                  <span class="total-cart"></span>
               </div>
               <div class="d-flex justify-content-between information">
                  <span>Shipping</span>
                  @if(Auth::check() && Auth::user()->id == 1)
                  <span class="total-tax"></span>
                  @else
                  <span>0</span>
                  @endif
               </div>
               <div class="d-flex justify-content-between information">
                  <span>Total(Incl. taxes)</span>
                  @if(Auth::check() && Auth::user()->id == 1)
                  <span class="total-sum"></span>
                  @else
                  <span class="total-cart"></span>
                  @endif
                  @if(Auth::check() && Auth::user()->id == 1)
                  <input type="hidden" class="myClass" name="total_sum" value="">
                  @else
                  <input type="hidden" name="total_sum" value="">
                  @endif
                  <input type="hidden" name="arrayProduct" value="">
               </div>
               @if(Auth::check())
               <button class="btn btn-success btn-block d-flex justify-content-between mt-3 Checkout" type="submit">
               <span>Checkout<i class="fa fa-long-arrow-right ml-1"></i></span>
               </button>
               @else
               <a href="{{url('/login')}}" class="btn btn-success btn-block d-flex justify-content-between mt-3" style="width: 30%;">
               Login
               </a>
               @endif
            </div>
         </div>
      </div>
   </form>
</div>
@endsection
