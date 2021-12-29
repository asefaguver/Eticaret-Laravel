@extends('layouts.adminlayout')


@section('content')
<div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              Ürün Düzenleme Formu
                          </header>
                          <div class="panel-body">
                              <div class=" form">
                                  <form class="cmxform form-horizontal tasi-form" id="commentForm" method="post" action="/products/{{$id->id}}" enctype="multipart/form-data">
                                  @csrf 
                                      <div class="form-group ">
                                          <label for="cname" class="control-label col-lg-2">title (required)</label>
                                          <div class="col-lg-10">
                                          <input class=" form-control" id="cname" name="title" minlength="2" type="text" value="{{$id->title}}"  />
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="cname" class="control-label col-lg-2">category title (required)</label>
                                          <div class="col-lg-10">
                                          <select name="category_id" class="form-control">                                               
                                                @foreach($cat as $key)
                                                @if($id->category_id == $key->id)
                                                <option selected value="{{$key->id}}">{{$key->title}}</option>
                                                @else
                                                <option value="{{$key->id}}">{{$key->title}}</option>

                                                @endif

                                                @endforeach
                                                 
                                            </select>
                                          </div>
                                          
                                      </div>
                                      <div class="form-group ">
                                          <label for="cemail" class="control-label col-lg-2">keywords (required)</label>
                                          <div class="col-lg-10">
                                              <input class="form-control " id="cemail" type="text" name="keywords" value="{{$id->keywords}}"  />
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="curl" class="control-label col-lg-2">description (optional)</label>
                                          <div class="col-lg-10">
                                              <input class="form-control " id="curl" type="text" name="description" value="{{$id->description}}" />
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="curl" class="control-label col-lg-2">image (required)</label>
                                          <div class="col-lg-10">                                              
                                              <input class="form-control " id="ccomment" name="image" type="file" />
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="curl" class="control-label col-lg-2">price (required)</label>
                                          <div class="col-lg-10">
                                              
                                              <div class="iconic-input left">
                                                <i class="fas fa-dollar-sign"></i>
                                                <input type="text" class="form-control" name="price" value="{{$id->price}}" required>
                                            </div>
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="curl" class="control-label col-lg-2">quantity (optional)</label>
                                          <div class="col-lg-10">
                                              <input class="form-control " id="curl" type="number" name="quantity" value="{{$id->quantity}}" />
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="curl" class="control-label col-lg-2">minquantity (optional)</label>
                                          <div class="col-lg-10">
                                              <input class="form-control " id="curl" type="number" name="minquantity" value="{{$id->minquantity}}" />
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="curl" class="control-label col-lg-2">tax (optional)</label>
                                          <div class="col-lg-10">
                                              <input class="form-control " id="curl" type="number" value="18" name="tax" value="{{$id->tax}}" />
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="curl" class="control-label col-lg-2">detail (required)</label>
                                          <div class="col-lg-10">                                              
                                              <textarea class="form-control " id="ccomment" name="detail"  required>{{$id->detail}}</textarea>
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="curl" class="control-label col-lg-2">Slug (optional)</label>
                                          <div class="col-lg-10">
                                              <input class="form-control " id="curl" type="text" name="slug" value="{{$id->slug}}" />
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="curl" class="control-label col-lg-2">Status (optional)</label>
                                          <div class="col-lg-10">
                                          <select class="form-control" name="status" value="{{$id->status}}">
                                          <option value="{{$id->status}}">{{$id->status}}</option>
                                          <option value="True">True</option>                                          
                                          <option value="False">False</option>
                                      </select>
                                          </div>
                                      </div>
                                      <!--<div class="form-group ">
                                          <label for="ccomment" class="control-label col-lg-2">Your Comment (required)</label>
                                          <div class="col-lg-10">
                                              <textarea class="form-control " id="ccomment" name="comment" required></textarea>
                                          </div>
                                      </div>-->
                                      <div class="form-group">
                                          <div class="col-lg-offset-2 col-lg-10">
                                              <button class="btn btn-danger" type="submit">Update Product</button>
                                              <a href="/product"> <button class="btn btn-default" type="button">Cancel</button> </a>
                                          </div>
                                      </div>
                                  </form>
                              </div>

                          </div>
                      </section>
                  </div>
              </div>
@endsection