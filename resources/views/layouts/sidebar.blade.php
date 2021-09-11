<div class="sidebar" data-color="blue" data-image="../assets/img/sidebar-1.jpg">
    <div class="logo">
        <a href="" class="simple-text">
          <img src="{{asset('admin_css/assets/img/mail.png')}}" width="30" height="30">  ADMİN
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="active">
                <a href="{{route('admin.index')}}">
                    <i class="material-icons">home</i>
                    <p>Anasayfa</p>
                </a>
            </li>
            <li>
                <a href="{{route('admin.ekip.index')}}">
                    <i class="material-icons">person</i>
                    <p>Ozon Ekibimiz</p>
                </a>
            </li>
            <li>
                <a href="{{route('admin.ozon.index')}}">
                    <i class="material-icons">library_books</i>
                    <p>Tedavi İçerikleri</p>
                </a>
            </li>

            <li>
                <a href="{{route('admin.slider.index')}}">
                    <i class="material-icons">image</i>
                    <p>Slider</p>
                </a>
            </li>

            <li>
                <a href="./notifications.html">
                    <i class="material-icons text-gray">group</i>
                    <p>Yönetici İşlemleri</p>
                </a>
            </li>
            <li class="active-pro">
              
                <p>
                    <i class="material-icons">logout</i>
                    <a onclick="event.preventDefault();document.getElementById('logout-form').submit();" href="{{route('logout')}}">Çıkış Yap</a>

                    <form action="{{route('logout')}}" method="POST" id="logout-form">
                      {{csrf_field()}}
                    </form>

</p>
                </a>

            </li>
        </ul>
    </div>
</div>
