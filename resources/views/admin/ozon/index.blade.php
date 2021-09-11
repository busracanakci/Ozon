@extends('layouts.admin')
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
              <a href="{{route('admin.ozon.create')}}" class="btn btn-primary pull-right">Yenİ İçerik Ekle</a>
                <div class="card">
                    <div class="card-header" data-background-color="blue">
                        <h4 class="title">İÇERİKLER</h4>
                        <p class="category">Burada Ozon İçerik Listesini Bulabilirsiniz.</p>
                    </div>
                    <div class="card-content table-responsive">
                        <table class="table">
                            <thead class="text-primary">
                                <th>İsim</th>
                                <th>Düzenle</th>
                                <th>Sil</th>

                            </thead>
                            <tbody>
                              @foreach($data as $key => $value)
                                <tr>
                                    <td>{{$value['name']}}</td>
                                    <td><a href="{{route('admin.ozon.edit',['id'=>$value['id']])}}">Düzenle</a></td>

                                    <td><a href="{{route('admin.ozon.delete',['id'=>$value['id']])}}">Sil</a></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{$data->links()}}
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
