@extends('layouts.app')
@section('content')
<div class="bnr" id="home">
  <div  id="top" class="callbacks_container">
    <ul class="rslides" id="slider4">
      @foreach(App\Models\Slider::all() as $key => $value)
        <li>
        <img src="{{asset(\App\Helper\mHelper::largeImage($value['image']))}}" alt=""/>
      </li>
      @endforeach
    </ul>
  </div>
  <div class="clearfix"> </div>
</div>
<!--banner-ends-->
<!--Slider-Starts-Here-->
      <script src="{{asset('js/responsiveslides.min.js')}}"></script>
     <script>
        // You can also use "$(window).load(function() {"
        $(function () {
          // Slideshow 4
          $("#slider4").responsiveSlides({
            auto: true,
            pager: true,
            nav: true,
            speed: 500,
            namespace: "callbacks",
            before: function () {
              $('.events').append("<li>before event fired.</li>");
            },
            after: function () {
              $('.events').append("<li>after event fired.</li>");
            }
          });

        });
      </script><br>
    <!--End-slider-script-->
    <div class="product">
      <div class="container">
        <center><b><font color="#2A4F7E" size="5">OZON TEDAVİSİ HAKKINDA</font></b></center><br><br>
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
<!--about-starts-->
<div class="product">

<div style="background-color:#2A4F7E;"><br>
  <center><b><font color="white" size="5">Ozon Tedavisi Hangi Hastalıklara Uygulanır ?</font></b><br><hr size="30" color="white" width="300"></center>
<div class="about">
  <div class="container">
    <div class="about-top grid-1">
      <font color="white" size="3" >
      <div class="col-md-4 about-left">
        • Yorgunluğa bağlı göz altı torbaları ve morlukları<br><br>
 • Bağışıklık sisteminin güçlenmesi<br><br>
• Bölgesel ve genel zayıflama<br>
      </div>
      <div class="col-md-4 about-left">
      • Doku ve organ oksijenlenmesinin artması<br><br>
   • Cilt bakımı ve güzelliği<br><br>
  • Virüs, Bakteri ve Mantar Enfeksiyonları<br>
      </div>
      <div class="col-md-4 about-left">
        • Diyabetes Mellitus (Şeker hastalığı)<br><br>
• Hipertansiyon<br><br>
• Deri hastalıkları: Sedef ve atopik dermatit<br>
</div></font>

    </div>
  </div></div>
</div></div><!--about-end-->



<!--product-starts-->
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
<!--product-end-->
<!--information-starts-->

@endsection
