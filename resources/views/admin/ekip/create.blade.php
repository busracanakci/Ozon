@extends('layouts.admin')
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">

              @if(session("status"))
              <div class="alert alert-primary" role="alert">
                {{session("status")}}
              </div>
                @endif
                <div class="card">
                    <div class="card-header" data-background-color="orange">
                        <h4 class="title">Ekip Üyesi Ekle</h4>
                        <p class="category">Yeni Ekip Üyesi Ekleyiniz</p>
                    </div>
                    <div class="card-content">
                        <form enctype="multipart/form-data" action="{{route('admin.ekip.create.post')}}" method="POST">
                          {{csrf_field()}}
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group label-floating is-empty">
                                        <label class="control-label">Yeni Üye Adı</label>
                                        <input type="text" name="name" class="form-control">
                                        <span class="material-input"></span>
                                    </div>
                                </div>
                              </div>
                                <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group label-floating is-empty">

                                        <input style="opacity:1;position:inherit" type="file" name="image">
                                        <span class="material-input"></span>
                                    </div>
                                </div>
                              </div>
                                <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group label-floating is-empty">
                                        <label class="control-label">Üye Tecrübeleri</label>
                                        <textarea name="bio" rows="10" cols="130"></textarea><br>
                                        <span class="material-input"></span>
                                    </div>
                                </div>
                              </div>

                            </div>

                            <button type="submit" class="btn btn-primary pull-right">EKLE</button>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
