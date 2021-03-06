
@extends('layouts.homelayout')

@section('title', 'Shop Page')

@section('content')
<!-- Start All Title Box -->
<div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Shop</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Shop</li>
                        <li class="breadcrumb-item active">{{$category->title}}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->

    <!-- Start Shop Page  -->
    <div class="shop-box-inner">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-sm-12 col-xs-12 sidebar-shop-left">
                    <div class="product-categori">
                        <div class="search-product">
                            <form action="{{route('getproduct')}}" method="post">
                                @csrf 
                                @livewire('search')
                                <button type="submit"> <i class="fa fa-search"></i> </button>
                            </form>
                            @livewireScripts
                        </div>
                        <!--<div class="filter-sidebar-left">
                            <div class="title-left">
                                <h3>Categories</h3>
                            </div>
                            <div class="list-group list-group-collapse list-group-sm list-group-tree" id="list-group-men" data-children=".sub-men">
                                <div class="list-group-collapse sub-men">
                                    <a class="list-group-item list-group-item-action" href="#sub-men1" data-toggle="collapse" aria-expanded="true" aria-controls="sub-men1">Kategoriler </a>
                                    <div class="collapse show" id="sub-men1" data-parent="#list-group-men">
                                    
                                        <div class="list-group">
                                        @foreach($product as $urun)
                                            
                                        <a href="/{{$urun->category->id}}/kategoriler" class="list-group-item list-group-item-action ">{{$urun->category->title}} </a>
                                          
                                        @endforeach
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        <div class="filter-price-left">
                            <div class="title-left">
                                <h3>Price</h3>
                            </div>
                            <div class="price-box-slider">
                                <div id="slider-range"></div>
                                <p>
                                    <input type="text" id="amount" readonly style="border:0; color:#fbb714; font-weight:bold;">
                                    <button class="btn hvr-hover" type="submit">Filter</button>
                                </p>
                            </div>
                        </div>-->
                        

                    </div>
                </div>
                <div class="col-xl-9 col-lg-9 col-sm-12 col-xs-12 shop-content-right">
                    <div class="right-product-box">
                        <div class="product-item-filter row">
                            <div class="col-12 col-sm-8 text-center text-sm-left">
                                <!--<div class="toolbar-sorter-right">
                                    <span>Sort by </span>
                                    <select id="basic" class="selectpicker show-tick form-control" data-placeholder="$ USD">
									<option data-display="Select">Nothing</option>
									<option value="1">Popularity</option>
									<option value="2">High Price ??? High Price</option>
									<option value="3">Low Price ??? High Price</option>
									<option value="4">Best Selling</option>
								</select>
                                </div>-->
                                <p>Showing all {{$category->title}} category results</p>
                            </div>
                            <div class="col-12 col-sm-4 text-center text-sm-right">
                                <ul class="nav nav-tabs ml-auto">
                                    <li>
                                        <a class="nav-link active" href="#grid-view" data-toggle="tab"> <i class="fa fa-th"></i> </a>
                                    </li>
                                    <li>
                                        <a class="nav-link" href="#list-view" data-toggle="tab"> <i class="fa fa-list-ul"></i> </a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="row product-categorie-box">
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade show active" id="grid-view">
                                    <div class="row">
                                    @foreach($product as $urun)
                                    @if($urun->category->title == $category->title)
                                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                            <div class="products-single fix">
                                                <div class="box-img-hover">
                                                    <div class="type-lb">
                                                        <p class="sale">Sale</p>
                                                    </div>
                                                    <img src="{{asset('images/'.$urun->image)}}" class="img-fluid" alt="Image" style="width:265px; height:343px">
                                                    <div class="mask-icon">
                                                        <ul>
                                                        <li><a href="/{{$urun->id}}/urun-detay" data-toggle="tooltip" data-placement="right" title="View"><i class="fa fa-eye"></i></a></li>                                                            
                                                            
                                                        </ul>
                                                        <form action="{{ route('shopcart-store',['id'=>$urun->id]) }}" method="post">
                                                            @csrf 
                                                            <input type="hidden" name="product_quantity" value="1">
                                                            <button class="btn cart-button" type="submit" onclick="Swal.fire({ icon: 'success', title: '??r??n sepetinize eklendi!', showConfirmButton: false, timer: 1500})" >Add to Cart</button>
                                                        </form>
                                                    </div>
                                                </div>
                                                <div class="why-text">
                                                    <a href="/{{$urun->id}}/urun-detay"><h4>{{$urun->title}}</h4></a>
                                                    <h5> $ {{$urun->price}}</h5>
                                                </div>
                                            </div>
                                        </div>
                                        @endif
                                    @endforeach
                                        
                                        
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="list-view">
                                    
                                    @foreach($product as $urun)
                                    @if($urun->category->title == $category->title)
                                    <div class="list-view-box">
                                        <div class="row">
                                            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                                <div class="products-single fix">
                                                    <div class="box-img-hover">
                                                        <div class="type-lb">
                                                            <p class="sale">Sale</p>
                                                        </div>
                                                        <img src="{{asset('images/'.$urun->image)}}" class="img-fluid" alt="Image">
                                                        <div class="mask-icon">
                                                            <ul>
                                                                <li><a href="/{{$urun->id}}/urun-detay" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                                                
                                                            </ul>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-6 col-lg-8 col-xl-8">
                                                <div class="why-text full-width">
                                                <a href="/{{$urun->id}}/urun-detay"><h4>{{$urun->title}}</h4></a>
                                                    <h5> <del>$ 60.00</del> $ {{$urun->price}}</h5>
                                                    <p>{{$urun->detail}}</p>
                                                    <form action="{{ route('shopcart-store',['id'=>$urun->id]) }}" method="post">
                                                            @csrf 
                                                            <input type="hidden" name="product_quantity" value="1">
                                                            <button class="btn btn-danger" type="submit" onclick="Swal.fire({ icon: 'success', title: '??r??n sepetinize eklendi!', showConfirmButton: false, timer: 1500})" >Add to Cart</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                    @endforeach
                                    
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Shop Page -->

    

@endsection