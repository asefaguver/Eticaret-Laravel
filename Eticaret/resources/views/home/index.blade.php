@extends('layouts.homelayout')

@section('title', 'Index Page')

@section('content')
<!-- Start Slider -->
<div id="slides-shop" class="cover-slides">
        <ul class="slides-container">
            <li class="text-left">
                <img src="{{ asset('assets') }}/images/banner-01.jpg" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>The Book Store'a <br> Hoşgeldin.</strong></h1>
                            <p class="m-b-40">Yeni yıla özel kitaplar şimdi The Book Store'da <br> Hemen sipariş et ve fırsatlardan yararlan.</p>
                            <p><a class="btn hvr-hover" href="/shop">Shop New</a></p>                            
                        </div>
                    </div>
                </div>
            </li>
            <li class="text-center">
                <img src="{{ asset('assets') }}/images/banner-02.jpg" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Macera kitaplarında <br> %30 indirim.</strong></h1>
                            <p class="m-b-40">Hemen sipariş et <br> ve fırsatları kaçırma.</p>
                            <p><a class="btn hvr-hover" href="/shop">Shop New</a></p>
                        </div>
                    </div>
                </div>
            </li>
            <li class="text-right">
                <img src="{{ asset('assets') }}/images/banner-03.jpg" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Kış Kapıda <br> Eğlenceyi yakala.</strong></h1>
                            <p class="m-b-40">Sevdiğin kitaplar yanında <br> %50'ye varan yılbaşı indirimlerini kaçırma.</p>
                            <p><a class="btn hvr-hover" href="/shop">Shop New</a></p>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
        <div class="slides-navigation">
            <a href="#" class="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
            <a href="#" class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
        </div>
    </div>
    <!-- End Slider -->
        <br><br><br>
        <h2>Featured Books</h2>
    <!-- Start Instagram Feed  -->
    <div class="instagram-box">    
        <div class="main-instagram owl-carousel owl-theme">        
            @foreach($product as $pro)
            <div class="item">
                <div class="ins-inner-box" >
                    <img src="{{asset('images/'.$pro->image)}}" alt=""  />
                    <div class="hov-in">
                        <a href="/{{$pro->id}}/urun-detay"><i class="fa fa-eye"></i></a>
                    </div>
                </div>
            </div>
            @endforeach
           
        </div>
    </div>
    <!-- End Instagram Feed  -->

     <!-- Start Products  -->
     <div class="products-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-all text-center">
                        <h1>Featured Products</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet lacus enim.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="special-menu text-center">
                        <div class="button-group filter-button-group">
                            <button class="active" data-filter="*">All</button>
                            <button data-filter=".top-featured">Top featured</button>
                            <button data-filter=".best-seller">Best seller</button>
                        </div>
                    </div>
                </div>
            </div>

           
            <div class="row special-list">
            @foreach($product as $pro)
                <div class="col-lg-3 col-md-6 special-grid best-seller">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <div class="type-lb">
                                @if($pro->id %2 == 0)
                                <p class="sale">Sale</p>
                                @else
                                <p class="new">New</p>
                                @endif
                            </div>
                            <img src="{{asset('images/'.$pro->image)}}" class="img-fluid" alt="Image" style="width:180px; height:220px">
                            <div class="mask-icon">
                                <ul>
                                    <li><a href="/{{$pro->id}}/urun-detay" data-toggle="tooltip" data-placement="right" title="View"><i class="fa fa-eye"></i></a></li>                                    
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="fa fa-heart"></i></a></li>
                                </ul>
                                <form action="{{ route('shopcart-store',['id'=>$pro->id]) }}" method="post">
                                    @csrf 
                                    <input type="hidden" name="product_quantity" value="1">
                                    <button class="btn cart-button" type="submit" onclick="Swal.fire({ icon: 'success', title: 'Ürün sepetinize eklendi!', showConfirmButton: false, timer: 1500})" >Add to Cart</button>
                                </form>                                
                            </div>
                        </div>
                        <div class="why-text">
                            <h4> {{$pro->title}}  </h4>
                            <h5> ${{$pro->price}} </h5>
                        </div>
                    </div>
                </div>
                @endforeach

                <!-- <div class="col-lg-3 col-md-6 special-grid top-featured">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <div class="type-lb">
                                <p class="new">New</p>
                            </div>
                            <img src="{{ asset('assets') }}/images/img-pro-02.jpg" class="img-fluid" alt="Image">
                            <div class="mask-icon">
                                <ul>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i class="fa fa-eye"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fa fa-sync-alt"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="fa fa-heart"></i></a></li>
                                </ul>
                                <a class="cart" href="#">Add to Cart</a>
                            </div>
                        </div>
                        <div class="why-text">
                            <h4>Lorem ipsum dolor sit amet</h4>
                            <h5> $9.79</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 special-grid top-featured">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <div class="type-lb">
                                <p class="sale">Sale</p>
                            </div>
                            <img src="{{ asset('assets') }}/images/img-pro-03.jpg" class="img-fluid" alt="Image">
                            <div class="mask-icon">
                                <ul>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i class="fa fa-eye"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fa fa-sync-alt"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="fa fa-heart"></i></a></li>
                                </ul>
                                <a class="cart" href="#">Add to Cart</a>
                            </div>
                        </div>
                        <div class="why-text">
                            <h4>Lorem ipsum dolor sit amet</h4>
                            <h5> $10.79</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 special-grid best-seller">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <div class="type-lb">
                                <p class="sale">Sale</p>
                            </div>
                            <img src="{{ asset('assets') }}/images/img-pro-04.jpg" class="img-fluid" alt="Image">
                            <div class="mask-icon">
                                <ul>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i class="fa fa-eye"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fa fa-sync-alt"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="fa fa-heart"></i></a></li>
                                </ul>
                                <a class="cart" href="#">Add to Cart</a>
                            </div>
                        </div>
                        <div class="why-text">
                            <h4>Lorem ipsum dolor sit amet</h4>
                            <h5> $15.79</h5>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
    <!-- End Products  -->

@endsection