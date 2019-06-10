@extends('layouts.master')
@section('content')
@include('Pages.header')
@include('Pages.assets.nav')
<div class="container-fluid">
        <div class="row">
               
                <div class="col-sm-2 small_picture">
                        <div class="small_pictures">
                                <a href="#"><img src="{{asset('images/2.jpg')}}" class="image" alt="Imac"></a>
                        </div>
                        <div class="small_pictures">
                                <a href="#"><img src="{{asset('images/2.jpg')}}" class="image" alt="Imac"></a>
                        </div>
                        <div class="small_pictures">
                                <a href="#"><img src="{{asset('images/2.jpg')}}" class="image" alt="Imac"></a>
                        </div>
                </div>
                <div class="col-sm-5">
                        <div class="cards" style="width:20rem">
                                <img src="{{asset('images/2.jpg')}}" class="image" alt="Imac">                                
                                    <a href="{{url('/dashboard2')}}"><button class="btn btn-secondary button">Back To Shopping</button></a>
                                    <a href="#"><button class="btn btn-success button"><i class="fas fa-cart-plus"></i>Add To Cart</button></a>                                                                  
                        </div>
                </div>
                <div class="col-sm-2">
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters</p> 
                </div>
                <div class="col-sm-2">
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters</p>
                </div>
        </div>
        <div class="row">
                <div class="col-sm-3 col-md-3">
                        <div> <h5>Number of Ratings</h5></div>
                        <div>
                                <h5>Comments</h5>
                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters</p>
                        </div>
                </div>
                <div class="col-sm-3 col-md-3">
                        <h5>Reviews</h5>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters</p>  
                </div>
                <div class="col-sm-3 col-md-3">
                        <h5>Description</h5>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters</p>
                </div>
                <div class="col-sm-3 col-md-3">
                        <h5>Return Policy</h5>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters</p>
                </div>
        </div>
</div>




@endsection

