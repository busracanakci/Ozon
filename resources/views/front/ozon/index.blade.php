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
              <li data-thumb="images/s-1.jpg">
                <div class="thumb-image"> <img src="{{asset($data[0]['image'])}}" data-imagezoom="true" class="img-responsive" alt=""/> </div>
              </li>

              </ul>
          </div>
          <!-- FlexSlider -->
          <script src="js/imagezoom.js"></script>
          <script defer src="js/jquery.flexslider.js"></script>
          <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />

          <script>
          // Can also be used with $(document).ready()
          $(window).load(function() {
            $('.flexslider').flexslider({
            animation: "slide",
            controlNav: "thumbnails"
            });
          });
          </script>
        </div>
        <div class="col-md-7 single-top-right">

          <div class="single-para simpleCart_shelfItem">

          <h2>{{$data[0]['name']}}</h2>
            <div class="star-on">


            <div class="clearfix"> </div>
            </div>


            <p>{{$data[0]['icerik']}}</p>
            <div class="available">

          </div>



          </div>
        </div>
        <div class="clearfix"> </div>
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
                     <a href="{{route('ozon.detay',['selflink'=>$value['selflink']])}}">
                    <font color="#2A4F7E"><h4 align="center">{{$value['name']}}</h4></a>
                    </div>
                  <a href="{{route('ozon.detay',['selflink'=>$value['selflink']])}}" class="mask">
                    <img class="img-responsive zoom-img" style="width:300px;height:210px;" src="{{asset($value['image'])}}" alt="" />
                  <h3 class="b2" align="center"> <span class="label label-info">Detaylı Bilgi..</span></a></h3>
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
          <div class="clearfix"></div>
        </div>
      </div>
    </div>
</div></div>

    </div>
  </div>
</div>
@endsection
