@extends('layouts.adminlayout')


@section('content')

<!-- page start-->
<section class="panel">
                  <header class="panel-heading">
                      Product Table
                  </header>
                  <div class="panel-body">
                      <div class="adv-table editable-table ">
                          <div class="clearfix">
                              <div class="btn-group">
                                  <!--<button id="editable-sample_new" class="btn green">
                                      Add New <i class="fa fa-plus"></i>
                                  </button> -->
                                  <a href="/products/create" ><button class="btn btn-primary" type="submit">Yeni Ürün Oluştur</button></a>
                              </div>
                              <div class="btn-group pull-right">
                                  <button class="btn dropdown-toggle" data-toggle="dropdown">Tools <i class="fa fa-angle-down"></i>
                                  </button>
                                  <ul class="dropdown-menu pull-right">
                                      <li><a href="#">Print</a></li>
                                      <li><a href="#">Save as PDF</a></li>
                                      <li><a href="#">Export to Excel</a></li>
                                  </ul>
                              </div>
                          </div>
                          <div class="space15"></div>

                          <div class="table-responsive">

                          <table class="table table-striped table-hover table-bordered" id="editable-sample">
                              <thead>
                              <tr>
                                  <th>Title</th>
                                  <th>Category Title</th>
                                  
                                  <th>Description</th>
                                  <th>Image</th>
                                  <th>Price</th>
                                                                    
                                  
                                  <th>Status</th>                                  
                                  <th>Edit</th>
                                  <th>Delete</th>
                              </tr>
                              </thead>
                              <tbody>
                              @foreach($products as $pro)
                              <tr class="">
                                  <td>{{$pro->title}}</td>
                                  <td>{{$pro->category->title}}</td>
                                  
                                  <td>{{$pro->description}}</td>
                                  <td><img src="{{asset('images/'.$pro->image)}}" width="50px" height="50px" alt=""></td>
                                  <td>{{$pro->price}}</td>
                                  <td>{{$pro->status}}</td>                                  
                                  <td><a href="/products/{{$pro->id}}/edit"><button class="btn btn-warning btn-sm"><i class="fas fa-edit"></i> Düzenle </button></a> </td>
                                  <td><a href="/products/{{$pro->id}}/delete"><button onclick="return confirmDel();" type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt "></i> Sil </button></a></td>
                              </tr>
                              @endforeach
                              <!--<tr class="">
                                  <td>Admin</td>
                                  <td> Flat Lab</td>
                                  <td>462</td>
                                  <td class="center">new user</td>
                                  <td><a class="edit" href="javascript:;">Edit</a></td>
                                  <td><a class="delete" href="javascript:;">Delete</a></td>
                              </tr>
                                                            
                              <tr class="">
                                  <td>Rafiqul</td>
                                  <td>Rafiqul dulal</td>
                                  <td>62</td>
                                  <td class="center">new user</td>
                                  <td><a class="edit" href="javascript:;">Edit</a></td>
                                  <td><a class="delete" href="javascript:;">Delete</a></td>
                              </tr>-->
                              </tbody>
                          </table>

                          </div>
                      </div>
                  </div>
              </section>
              <!-- page end-->

              

@endsection
