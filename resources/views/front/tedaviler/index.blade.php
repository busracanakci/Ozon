@extends('layouts.app')
@section('content')
<div class="breadcrumbs">
		<div class="container">
			<div class="breadcrumbs-main">
				<ol class="breadcrumb">
					<li><a href="/">Anasayfa</a></li>
					<li class="active">Tedaviler</li>
				</ol>
			</div>
		</div>
	</div>
<div class="product">
  <div class="container">
    <center><b><font color="#2A4F7E" size="5">OZON HAKKINDA</font></b></center><br><br>
    <div class="product-top">
      @foreach(\App\Models\Ozon::all()->chunk(2) as $chunk)
      <div class="product-one">
        @foreach($chunk as $key => $value)

        <div class="col-md-6 product-right">
          <div class="product-main simpleCart_shelfItem ">
            <div class="product-bottom">
              <font color="#2A4F7E"><h4 align="center">{{$value['name']}}</h4></font>
              </div>
            <a href="{{route('ozon.detay',['selflink'=>$value['selflink']])}}" class="mask">
              <img class="img-responsive zoom-img" style="width:280px;height:190px;" src="{{asset($value['image'])}}" alt="" />
            <h3 class="b2" align="center">  <a href="{{route('ozon.detay',['selflink'=>$value['selflink']])}}"><span class="label label-info">Detaylı Bilgi..</span></a></h3>
            </a>


          </div>
        </div>
        @endforeach
        <div class="clearfix"></div>
      </div>
    @endforeach
    </div>
  </div>
</div>


    </div>
@endsection
