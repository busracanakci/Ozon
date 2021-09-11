@extends('layouts.app')
@section('content')
<div class="breadcrumbs">
		<div class="container">
			<div class="breadcrumbs-main">
				<ol class="breadcrumb">
					<li><a href="/">Anasayfa</a></li>
					<li class="active">Ekibimiz</li>
				</ol>
			</div>
		</div>
	</div>
<div class="product">
  <div class="container">
    <center><b><font color="#2A4F7E" size="5">EKİBİMİZ</font></b></center><br><br>
    <div class="product-top">
      @foreach(\App\Models\Ekibimiz::all()->chunk(2) as $chunk)
      <div class="product-one">
        @foreach($chunk as $key => $value)

        <div class="col-md-6 product-right">
          <div class="product-main simpleCart_shelfItem ">
            <a href="{{route('ekip.detay',['selflink'=>$value['selflink']])}}" class="mask">
              <img class="img-responsive zoom-img" style="width:225px;height:335px;" src="{{asset($value['image'])}}" alt="" />
            </a>
            <div class="product-bottom">
              <h3 align="center">{{$value['name']}}</h3>
              </div>

          </div>
        </div>
        @endforeach
        <div class="clearfix"></div>
      </div>
    @endforeach
    </div>
  </div>
</div>
@endsection
