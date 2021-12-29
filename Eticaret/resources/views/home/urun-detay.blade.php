@extends('layouts.homelayout')

@section('title', 'Product Detail Page')

@section('content')

<!-- Start All Title Box -->
<div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Shop Detail</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Shop</a></li>
                        <li class="breadcrumb-item active">Shop Detail </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->

    <!-- Start Shop Detail  -->
    <div class="shop-detail-box-main">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-5 col-md-6">
                    <div id="carousel-example-1" class="single-product-slider carousel slide" data-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active"> <img class="d-block w-100" src="{{asset('images/'.$product->image)}}" alt="First slide"> </div>
                            <div class="carousel-item"> <img class="d-block w-100" src="{{asset('images/'.$product->image)}}" alt="Second slide"> </div>
                            <div class="carousel-item"> <img class="d-block w-100" src="{{asset('images/'.$product->image)}}" alt="Third slide"> </div>
                        </div>
                        <a class="carousel-control-prev" href="#carousel-example-1" role="button" data-slide="prev"> 
						<i class="fa fa-angle-left" aria-hidden="true"></i>
						<span class="sr-only">Previous</span> 
					</a>
                        <a class="carousel-control-next" href="#carousel-example-1" role="button" data-slide="next"> 
						<i class="fa fa-angle-right" aria-hidden="true"></i> 
						<span class="sr-only">Next</span> 
					</a>
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-example-1" data-slide-to="0" class="active">
                                <img class="d-block w-100 img-fluid" src="images/smp-img-01.jpg" alt="" />
                            </li>
                            <li data-target="#carousel-example-1" data-slide-to="1">
                                <img class="d-block w-100 img-fluid" src="images/smp-img-02.jpg" alt="" />
                            </li>
                            <li data-target="#carousel-example-1" data-slide-to="2">
                                <img class="d-block w-100 img-fluid" src="images/smp-img-03.jpg" alt="" />
                            </li>
                        </ol>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-7 col-md-6">
                    <div class="single-product-details">
                        <h2>{{$product->title}}</h2>
                        <h5> <del>$ 60.00</del> $ {{$product->price}}</h5>
                        <p class="available-stock"><span> More than {{$product->quantity}} available / <a href="#">8 sold </a></span>
                            <p>
                                <h4>Short Description:</h4>
                                <p>{{$product->detail}} </p>
                                <ul>
                                    <form action="{{ route('shopcart-store',['id'=>$product->id]) }}" method="post">
                                        @csrf 
                                    <li>
                                        <div class="form-group size-st">
                                            <label class="control-label">Sepet</label>
                                            <input type="submit" class="btn btn-danger form-control" value="Sepete Ekle" onclick="Swal.fire({ icon: 'success', title: 'Ürün sepetinize eklendi!', showConfirmButton: false, timer: 1500})">
                                        </div>
                                    </li>
                                    
                                    <li>
                                        <div class="form-group quantity-box">
                                            <label class="control-label">Quantity</label>
                                            <input class="form-control" value="0" min="0" max="{{$product->quantity}}" type="number" name="product_quantity">
                                        </div>
                                    </li>
                                </form>
                                </ul>

                                
                    </div>
                </div>
            </div>

            <livewire:feature />    
            @livewireScripts

        </div>
    </div>
    <!-- End Cart -->



@endsection