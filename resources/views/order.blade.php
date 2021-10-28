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
                       <th>Product name</th>
                       <th>Price</th>
                       <th>Count</th>
                       <th>Count</th>
                     </tr>
                   </thead>
                   <tbody>
                     <tr>
                       <td>John</td>
                       <td>Doe</td>
                       <td>john@example.com</td>
                        <td>
                            <button class='btn btn-primary'>Details</button>
                        </td>
                     </tr>
                     <tr>
                       <td>John</td>
                       <td>Doe</td>
                       <td>john@example.com</td>
                        <td>
                            <button class='btn btn-primary'>Details</button>
                        </td>
                     </tr>
                   </tbody>
                 </table>
            </div>
        </div>
    </div>
@endsection
