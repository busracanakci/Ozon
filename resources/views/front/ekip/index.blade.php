@extends('layouts.app')
@section('content')
<div class="breadcrumbs">
  <div class="container">
    <div class="breadcrumbs-main">
      <ol class="breadcrumb">
        <li><a href="{{route('index')}}">Anasayfa</a></li>
        <li class="active">{{$data[0]['name']}}</li>
      </ol>
    </div>
  </div>
</div>
<!--end-breadcrumbs-->
<!--start-single-->
<div class="single contact">
  <div class="container">
    <div class="single-main">
      <div class="col-md-12 single-main-left">
      <div class="sngl-top">
        <div class="col-md-5 single-top-left">
          <div class="flexslider">
              <ul class="slides">
              <li data-thumb="{{asset(\App\Helper\mHelper::largeImage($data[0]['image']))}}">
                <div class="thumb-image"> <img src="{{asset(\App\Helper\mHelper::largeImage($data[0]['image']))}}"  class="img-responsive" alt=""/> </div>
              </li>
              </ul>
          </div>
          <!-- FlexSlider -->
          <script src="{{asset('js/imagezoom.js')}}"></script>
          <script defer src="{{asset('js/jquery.flexslider.js')}}"></script>
          <link rel="{{asset('stylesheet" href="css/flexslider.css')}}" type="text/css" media="screen" />
        </div>
        <div class="col-md-7 single-top-right">
          <div class="single-para simpleCart_shelfItem">
          <h2>{{$data[0]['name']}}</h2>
          <br>
            <div class="clearfix"> </div>
            </div>
            <p>{{$data[0]['bio']}}<br></p>
            <div class="available">
          </div>
          </div>
        </div>
        <div class="clearfix"> </div>
      </div>
    </ul>
      </div>
        <br><br>
      <div class="product">
        <div class="container">
          <center><b><font color="#2A4F7E" size="5">OZON EKİBİMİZ</font></b></center><br><br>
          <div class="product-top">
            @foreach(\App\Models\Ekibimiz::all()->chunk(3) as $chunk)
            <div class="product-one">
              @foreach($chunk as $key => $value)

              <div class="col-md-4 product-right">
                <div class="product-main simpleCart_shelfItem ">
                  <a href="{{route('ekip.detay',['selflink'=>$value['selflink']])}}" class="mask">
                    <img class="img-responsive zoom-img" style="width:180px;height:290px;" src="{{asset($value['image'])}}" alt="" />
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
    </div>
      <div class="clearfix"> </div>
    </div>
  </div>
</div>
@endsection
