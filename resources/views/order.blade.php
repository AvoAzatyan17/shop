@extends('layouts.layoutapp')
@section('indexcontent')
    <section class="text-center about">
          <h1>Order List</h1>
    </section>
    <div class="container orderPage">
        <div class="row no-gutters">
            <div class="col-md-12">
               <table class="table table-hover">
                   <thead>
                     <tr>
                       <th>Number</th>
                       <th>User name</th>
                       <th>Price</th>
                       <th>Details</th>
                     </tr>
                   </thead>
                   <tbody>
                      @foreach($items as $key=>$item)
                         <tr>
                           <td>{{$key+1}}</td>
                           <td>{{Auth::user()->name}}</td>
                           <td>{{$item->total_sum}}$</td>
                            <td>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong{{$item->id}}">
                                  Details
                                </button>
                                <div class="modal fade" id="exampleModalLong{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle{{$item->id}}" aria-hidden="true">
                                  <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Order</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                      <div class="modal-body">
                                        <table class="table table-hover">
                                            <thead>
                                                 <thead>
                                                  <tr>
                                                    <th>Name</th>
                                                    <th>Price</th>
                                                    <th>Count</th>
                                                    <th>tax</th>
                                                    <th>dimension</th>
                                                    <th>total</th>
                                                  </tr>
                                                </thead>
                                                <tbody>
                                                @foreach (json_decode($item->products) as $product)
                                                    <tr>
                                                      <td>{{$product->name}}</td>
                                                      <td>{{$product->price}}</td>
                                                      <td>{{$product->count}}</td>
                                                      <td>{{$product->tax}}</td>
                                                      <td>{{$product->dimension}}</td>
                                                      <td>{{$product->total}}</td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </thead>
                                        </table>
                                        <div>Total price: $<span>{{$item->total_sum}}</span></div>
                                      </div>
                                      <div class="modal-footer">
                                      </div>
                                    </div>
                                  </div>
                                </div>
                            </td>
                         </tr>
                      @endforeach
                   </tbody>
                 </table>
            </div>
        </div>
    </div>
@endsection
