@extends('layouts.master')
@section('content')
    @include('Pages.header')
    @include('Pages.assets.nav')
    <div class="container-fluid">
        <h2 class="pl-5">Cart</h2>
        <div class="row">
            <div class="col-sm-8 col-md-8">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">Price</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>IMac</td>
                                <td>$200</td>
                                <td>
                                    <input type="number" value="1">
                                </td>
                                <td>
                                   <input style="float: left"  type="submit" class="button success small" value="Ok">                                      
                                   <input type="submit" value="Delete">
                                </td>
                            </tr>
                            <tr>
                                 <td>2</td>
                                <td>IMac</td>
                                <td>$200</td>
                                <td>
                                    <input type="number" value="1">
                                </td>
                                <td>
                                    <input style="float: left"  type="submit" class="button success small" value="Ok">
                                    <input type="submit" value="Delete">
                                </td>
                            </tr>
                            <tr>
                                 <td>3</td>
                                <td>IMac</td>
                                <td>$200</td>
                                <td>
                                    <input type="number" value="1">
                                </td>
                                <td>
                                    <input style="float: left"  type="submit" class="button success small" value="Ok">
                                    <input type="submit" value="Delete">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <a href="{{url('/checkout')}} " class="button">Checkout</a>
                </div>
            </div>
            <aside class="col-sm-3 col-md-3">
                <h1>Totals</h1>
                <div class="row">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Items</th>
                            <th>Sub-Total</th>

                        </tr>
                        <tr>
                            <td>4</td>
                            <td>$100</td>
                        </tr>
                        <tr>
                            <th>Tax</th>
                            <th>Totals</th>
                        </tr>
                        </tr>
                        <tr>
                            <td>$10.01</td>
                            <td>$110.01</td>
                        </tr>

                        </thead>
                    </table>
                </div>
            </aside>
        </div>    
    </div>        
@endsection