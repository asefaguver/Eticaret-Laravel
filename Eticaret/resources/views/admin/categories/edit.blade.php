@extends('layouts.adminlayout')


@section('content')
<div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              Form validations
                          </header>
                          <div class="panel-body">
                              <div class=" form">
                                  <form class="cmxform form-horizontal tasi-form" id="commentForm" method="post" action="/categories/{{$id->id}}">
                                  @csrf
                                  @method('PUT') 
                                      <div class="form-group ">
                                          <label for="cname" class="control-label col-lg-2">title (required)</label>
                                          <div class="col-lg-10">
                                              <input class=" form-control" id="cname" name="title" value="{{$id->title}}" required/>
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="cemail" class="control-label col-lg-2">keywords (required)</label>
                                          <div class="col-lg-10">
                                              <input class="form-control " id="cemail" type="text" name="keywords" value="{{$id->keywords}}" required/>
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="curl" class="control-label col-lg-2">description (optional)</label>
                                          <div class="col-lg-10">
                                              <input class="form-control " id="curl" type="text" name="description" value="{{$id->description}}" required/>
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
                                              <button class="btn btn-danger" type="submit">Save Category</button>
                                              <a href="/category"> <button class="btn btn-default" type="button">Cancel</button> </a>
                                          </div>
                                      </div>
                                  </form>
                              </div>

                          </div>
                      </section>
                  </div>
              </div>
@endsection