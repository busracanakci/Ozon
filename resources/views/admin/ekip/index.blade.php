@extends('layouts.admin')
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
              <a href="{{route('admin.ekip.create')}}" class="btn btn-primary pull-right">Yenİ Ekİp Üyesİ Ekle</a>
                <div class="card">
                    <div class="card-header" data-background-color="blue">
                        <h4 class="title">EKİBİMİZ</h4>
                        <p class="category">Burada Ozon Ekibinin Listesini Bulabilirsiniz.</p>
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
                                    <td><a href="{{route('admin.ekip.edit',['id'=>$value['id']])}}">Düzenle</a></td>

                                    <td><a href="{{route('admin.ekip.delete',['id'=>$value['id']])}}">Sil</a></td>
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
