<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>ANADOLU OZON | OZON TEDAVİ ESKİŞEHİR</title>
<link href="{{asset('css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
<!--jQuery(necessary for Bootstrap's JavaScript plugins)-->
<script src="{{asset('js/jquery-1.11.0.min.js')}}"></script>
<!--Custom-Theme-files-->
<!--theme-style-->
<link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Luxury Watches Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--start-menu-->
<script src="js/simpleCart.min.js"> </script>
<link href="{{asset('css/memenu.css')}}" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="{{asset('js/memenu.js')}}"></script>
<script>$(document).ready(function(){$(".memenu").memenu();});</script>
<!--dropdown-->
<script src="{{asset('js/jquery.easydropdown.js')}}"></script>
</head>
<body>
  <div class="top-header" style="background-color:#2A4F7E;">
    <div class="container">
      <div class="top-header-main">
        <div class="col-md-6 top-header-left">
          <div class="drop">
        <!--    @auth
            <div class=box>
            <a href="">{{\Illuminate\Support\Facades\Auth::user()->name}}</a>
          </div>
          <div class="box">
            <a onclick="event.preventDefault();document.getElementById('logout-form').submit();" href="{{route('logout')}}">Çıkış Yap</a>
            <form action="{{route('logout')}}" method="POST" id="logout-form">
              {{csrf_field()}}
            </form>
          </div>

            @endauth

            @guest
            <div class=box>
            <a href="{{route('login')}}">Giriş Yap</a>
          </div>
          <div class=box1>

            <a href="">Kayıt Ol</a>
          </div>-->
        <a href="tel://+902222214848">  <font color="white">  0 222 221 48 48 </font></a><font color="white"> |</font>
        <a href="mailto:info@ozelanadoluhastanesi.com">  <font color="white">  info@ozelanadoluhastanesi.com</font></a>


@endguest
            <div class="clearfix"></div>
          </div>
        </div>
        <div class="col-md-6 top-header-left">
          <div class="cart box_1">
            <a href="https://www.instagram.com/ozelanadoluhastanesieskisehir/" target="_blank">
               <div class="total">
                </div>
              <img src="{{asset('images/insta.png')}}" style="width:20px;height:22px;">
            </a>

            <div class="clearfix"> </div>
          </div>
          <div class="cart box_1">
            <a href="https://www.facebook.com/ozeleskisehiranadoluhastanesi" target="_blank">
               <div class="total">
                </div>
              <img src="{{asset('images/facebook.png')}}" style="width:14px;height:20px;">
            </a>

            <div class="clearfix"> </div>
          </div>
          <div class="cart box_1">
            <a href="https://www.youtube.com/channel/UCSSYOUxZ2vxe_u0mwE1Pjrg" target="_blank">
               <div class="total">
                </div>
              <img src="{{asset('images/youtube.png')}}" style="width:24px;height:19px;">
            </a>


            <div class="clearfix"> </div>
          </div>
        </div>
        <div class="clearfix"></div>
      </div>
    </div>
  </div>
  <!--top-header-->
  <!--start-logo-->

  <!--start-logo-->
  <!--bottom-header-->
  <div class="header-bottom">
    <div class="container">
      <div class="header">
        <div class="col-md-9 header-right">
        <div class="top-nav">
          <ul class="memenu skyblue">
          <li class="grid"><a href="/"><img src="{{asset('images\logo.png')}}" style="height:75px;weight:75px;"></li></a>
            <li class="active"><a href="/">ANASAYFA</a></li>
            <li class="grid"><a href="/ekibimiz">EKİBİMİZ</a>

            </li>
            <li class="grid"><a href="/tedaviler">TEDAVİLER</a>

            </li>


            <li class="grid"><a href="/iletisim">İLETİŞİM</a>
            </li>
          </ul>
        </div>
        <div class="clearfix"> </div>
      </div>

      <div class="clearfix"> </div>
      </div>
    </div>
  </div>
  <!--bottom-header-->
  @yield('content')

<div class="information" style="background-color:#2A4F7E;">
  <div class="container"><br>
    <div class="infor-top" >
      <div class="col-md-3 infor-left">
        <h3><font color="white">İletişim</font></h3>
        <ul><font color="white">
   <li><p>  Merkez Bina: Akarbaşı Mahallesi Kıbrıs Şehitleri Caddesi No: 55 Odunpazarı/Eskişehir</p></li>
      <li><p>  0(222) 221 48 48</p></li>
      <li><a href="#"><p><font color="white">  info@ozelanadoluhastanesi.com</font></p></a></li>
</font>
        </ul>
      </div>
      <div class="col-md-3 infor-left">
        <h3><font color="white">Web Sitelerimiz</font></h3>
        <ul>
          <li><a href="https://www.ozelanadoluhastanesi.com/" target="_blank"><img src="{{asset('images\anadolu.png')}}" class="" alt="..." style="width: 9rem;"></a></li>
          <li><a href="http://anadoluguzellik.com/" target="_blank"><img src="{{asset('images\guzellik.png')}}" class="" alt="..." style="width: 8rem;"></a></li>


        </ul>
      </div>
      <div class="col-md-3 infor-left">
        <h3><font color="white">Sosyal Medya Hesaplarımız</font></h3>
        <ul>
<font color="white">
          <li><a href="#"><p><img src="{{asset('images/facebook.png')}}" style="width:9px;height:16px;">  Facebook</p></a></li>
          <li><a href="#"><p><img src="{{asset('images/insta.png')}}" style="width:14px;height:16px;"> Instagram</p></a></li>
          <li><a href="#"><p><img src="{{asset('images/youtube.png')}}" style="width:17px;height:12px;"> Youtube</p></a></li>
</font>        </ul>
      </div>
      <div class="col-md-3 infor-left">
        <h3><font color="white">Çalışma Saatlerimiz</font></h3>
<font color="white">
<br>
        <p>Hafta içi 09:00 - 17:00<br>Cumartesi 09:00 - 13:00</p></font>
      </div>
      <div class="clearfix"></div>
    </div>
  </div>
</div>
<!--information-end-->
<!--footer-starts-->
<div class="footer" style="background-color:#2A4F7E;">
  <div class="container" >
    <div class="footer-top">

      <div class="col-md-6 footer-left">
        <p><font color="white">© 2021 ANADOLU OZON | Tüm Hakları  <a href="https://www.ozelanadoluhastanesi.com/" target="_blank"><font color="white">Özel Anadolu Hastanesi</a>'ne aittir.</font></p>
    </font>  </div>
      <div class="clearfix"></div>
    </div>
  </div>
</div>
<!--footer-end-->
</body>
</html>
