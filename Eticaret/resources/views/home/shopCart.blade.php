@extends('layouts.homelayout')

@section('title', 'Sepetim')

@section('content')


<!-- Start All Title Box -->
<div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Cart</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Shop</a></li>
                        <li class="breadcrumb-item active">Cart</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->

    <!-- Start Cart  -->
    <div class="cart-box-main">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="table-main table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Images</th>
                                    <th>Product Name</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th>Remove</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php 
                                $total=0;
                                @endphp

                                @foreach($dataList as $dl)
                                <tr>
                                    <td class="thumbnail-img">
                                        <a href="#">
									<img class="img-fluid" src="{{asset('images/'.$dl->product->image)}}" alt="" />
								        </a>
                                    </td>
                                    <td class="name-pr">
                                        <a href="#">
									{{$dl->product->title}}
								        </a>
                                    </td>
                                    <td class="price-pr">
                                        <p>$ {{$dl->product->price }}</p>
                                    </td>
                                    <td class="quantity-box">
                                        <form action="{{ route('shopcart-update',['id'=>$dl->id]) }}" method="post">
                                            @csrf
                                        <input type="number" name="product_quantity" size="4" value="{{$dl->product_quantity}}" min="0" step="1" class="c-input-text qty text" onchange="this.form.submit()"> 
                                        </form>
                                    </td>
                                    <td class="total-pr">
                                        <p>$ {{$dl->product->price * $dl->product_quantity}}</p>
                                    </td>
                                    <td class="remove-pr">
                                        <a href="/{{$dl->id}}/delete" onclick="return confirm('Ürünü sepetinizden kaldırmak istediğinzden emin misiniz?');">
									<i class="fas fa-times"></i>
								        </a>
                                    </td>
                                </tr>
                                @php 
                                $total += $dl->product->price * $dl->product_quantity;
                                @endphp

                                @endforeach
                               
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            
                
            <div class="row my-5">
                <div class="col-lg-8 col-sm-12"></div>
                <div class="col-lg-4 col-sm-12">
                    <div class="order-box orderSummaryTop">
                        <h3 class="orderSummaryTop" style="font-family: monospace;">Sipariş Özeti</h3>                        
                        <hr>
                        <div class="d-flex gr-total">
                            <h2>Grand Total</h2>
                            <div class="ml-auto h5"> $ {{$total}} </div>
                        </div>
                        <hr> 
                        <form action="{{route('order-add')}}" method="post">
                            @csrf
                            <input type="hidden" name="total" value="{{$total}}">
                            <div class="col-12 d-flex shopping-box">
                                <button type="submit" class="btn btn-danger">Checkout</button>
                            </div>
                         </form>
                    </div>
                        
                </div>
               
            </div>

        </div>
    </div>
    <!-- End Cart -->



@endsection