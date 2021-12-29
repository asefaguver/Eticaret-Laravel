@extends('layouts.homelayout')

@section('title', 'My Orders')

@section('content')

<div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>My Orders</h2>
                    
                </div>
            </div>
        </div>
    </div>

    <br><br>

<div class="container">
    
        
<table class=" table table-primary"> 

  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Image</th>
      <th scope="col">Name</th>
      <th scope="col">Price</th>
      <th scope="col">Quantity</th>
      <th scope="col">Total</th>
      <th scope="col">Date</th>
    </tr>
  </thead>
  <tbody>
    @foreach($dataList as $rs)
    @if($rs->order_id % 2 == 0)
    <tr>
      <th scope="row">{{$rs->order_id}}</th>
      <td class="table-warning"><img src="{{asset('images/'.$rs->product->image)}}" width="50px" height="50px" alt=""></td>
      <td class="table-warning">{{$rs->product->title}}</td>
      <td class="table-warning">$ {{$rs->product->price}}</td>
      <td class="table-warning">{{$rs->quantity}}</td>
      <td class="table-warning">$ {{$rs->quantity * $rs->price}}</td>
      <td class="table-warning">{{$rs->order->created_at}}</td>
    </tr>
    @else
    <tr>
      <th scope="row">{{$rs->order_id}}</th>
      <td class="table-success"><img src="{{asset('images/'.$rs->product->image)}}" width="50px" height="50px" alt=""></td>
      <td class="table-success">{{$rs->product->title}}</td>
      <td class="table-success">$ {{$rs->product->price}}</td>
      <td class="table-success">{{$rs->quantity}}</td>
      <td class="table-success">$ {{$rs->quantity * $rs->price}}</td>
      <td class="table-success">{{$rs->order->created_at}}</td>
    </tr>
    @endif
    @endforeach
    
  </tbody>
</table>


</div>

<!-- ********************************************************* --> 


       


@endsection