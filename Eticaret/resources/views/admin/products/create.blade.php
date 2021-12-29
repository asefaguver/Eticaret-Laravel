@extends('layouts.adminlayout')


@section('content')
<div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              Yeni Ürün Ekleme Formu
                          </header>
                          <div class="panel-body">
                              <div class=" form">
                                  <form class="cmxform form-horizontal tasi-form" id="commentForm" method="post" action="{{route('pro-store')}}" enctype="multipart/form-data" >
                                  @csrf 
                                      <div class="form-group ">
                                          <label for="cname" class="control-label col-lg-2">title (required)</label>
                                          <div class="col-lg-10">
                                              <input class=" form-control" id="cname" name="title" minlength="2" type="text" required />
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="cname" class="control-label col-lg-2">category title (required)</label>
                                          <div class="col-lg-10">
                                          <select name="category_id" class="form-control">
                                              <option selected>Kategori : </option>
                                              
                                              @foreach($cat as $key)
                                              <option  value="{{$key->id}}">{{$key->title}}</option>
                                              @endforeach
                                          </select>
                                          </div>
                                          
                                      </div>
                                      <div class="form-group ">
                                          <label for="cemail" class="control-label col-lg-2">keywords (optional)</label>
                                          <div class="col-lg-10">
                                              <input class="form-control " id="cemail" type="text" name="keywords"  />
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="curl" class="control-label col-lg-2">description (optional)</label>
                                          <div class="col-lg-10">
                                              <input class="form-control " id="curl" type="text" name="description" />
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="curl" class="control-label col-lg-2">image (required)</label>
                                          <div class="col-lg-10">                                              
                                              <input class="form-control " id="ccomment" name="image" type="file" required />
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="curl" class="control-label col-lg-2">price (required)</label>
                                          <div class="col-lg-10">
                                            <div class="iconic-input left">
                                                <i class="fas fa-dollar-sign"></i>
                                                <input type="text" class="form-control" name="price">
                                            </div>
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="curl" class="control-label col-lg-2">quantity (required)</label>
                                          <div class="col-lg-10">
                                              <input class="form-control " id="curl" type="number" name="quantity" required />
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="curl" class="control-label col-lg-2">minquantity (optional)</label>
                                          <div class="col-lg-10">
                                              <input class="form-control " id="curl" type="number" name="minquantity" />
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="curl" class="control-label col-lg-2">tax (optional)</label>
                                          <div class="col-lg-10">
                                              <input class="form-control " id="curl" type="number" value="18" name="tax" />
                                          </div>
                                      </div>                                      
                                      <div class="form-group ">
                                          <label for="curl" class="control-label col-lg-2">Slug (optional)</label>
                                          <div class="col-lg-10">
                                              <input class="form-control " id="curl" type="text" name="slug" />
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="curl" class="control-label col-lg-2">detail (required)</label>
                                          <div class="col-lg-10">
                                              <!--<input class="form-control " id="curl" type="text" name="detail" required />-->
                                              <textarea class="form-control " id="ccomment" name="detail" required></textarea>
                                          </div>
                                          
                                      </div>
                                      <div class="form-group ">
                                          <label for="curl" class="control-label col-lg-2">Status (optional)</label>
                                          <div class="col-lg-10">
                                          <select class="form-control" name="status">
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
                                              <button class="btn btn-danger" type="submit" onclick="Swal.fire({ icon: 'success', title: 'Ürün başarıyla eklendi!', showConfirmButton: false, timer: 1500})">Add Product</button>
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