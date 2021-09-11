@extends('layouts.admin')
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
              <a href="{{route('admin.slider.create')}}" class="btn btn-primary pull-right">Yenİ Slİder Ekle</a>
                <div class="card">
                    <div class="card-header" data-background-color="blue">
                        <h4 class="title">SLİDER</h4>
                        <p class="category">Burada Ozon Ekibinin Listesini Bulabilirsiniz.</p>
                    </div>
                    <div class="card-content table-responsive">
                        <table class="table">
                            <thead class="text-primary">
                                <th>Önizleme</th>
                                <th>Düzenle</th>
                                <th>Sil</th>

                            </thead>
                            <tbody>
                              @foreach($data as $key => $value)
                                <tr>
                                    <td><img src="{{asset($value['image'])}}" style="width:250px;height:120px;"></td>
                                    <td><a href="{{route('admin.slider.edit',['id'=>$value['id']])}}">Düzenle</a></td>

                                    <td><a href="{{route('admin.slider.delete',['id'=>$value['id']])}}">Sil</a></td>
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
