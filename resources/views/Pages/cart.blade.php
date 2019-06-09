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
                               <th scope="row">1</th>
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
                                <th scope="row">2</th>
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
                                <th scope="row">3</th>
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
                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters</p>
            </aside>
        </div>    
    </div>        
@endsection