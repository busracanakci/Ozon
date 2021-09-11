@extends('layouts.app')
@section('content')
<div class="breadcrumbs">
		<div class="container">
			<div class="breadcrumbs-main">
				<ol class="breadcrumb">
					<li><a href="/">Anasayfa</a></li>
					<li class="active">İletişim</li>
				</ol>
			</div>
		</div>
	</div>
  <div class="contact">
		<div class="container">
			<div class="contact-top heading">
				<h2>İLETİŞİM</h2>
			</div>
				<div class="contact-text">
				<div class="col-md-3 contact-left">
						<div class="address">
							<h5>İletişim Bilgileri</h5>
							<p>Merkez Bina:
							<span> Akarbaşı Mahallesi Kıbrıs Şehitleri Caddesi No: 55 </span>
							Odunpazarı/Eskişehir</p>
						</div>
						<div class="address">
							<p>+90 (222) 221 48 48
							<span><a href="mailto: info@ozelanadoluhastanesi.com">info@ozelanadoluhastanesi.com</a></span>
							</p>
						</div>
					</div>
					<div class="col-md-9 contact-right">
						<form>
							<input type="text" placeholder="Adınız Soyadınız">
							<input type="text" placeholder="Telefon Numaranız">
							<input type="text" placeholder="Mail Adresiniz">
							<textarea placeholder="Mesajınız" required=""></textarea>
							<div class="submit-btn">
								<input type="submit" value="GÖNDER">
							</div>
						</form>
					</div>
					<div class="clearfix"></div>
				</div>
		</div>
	</div>

  <div class="map">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3066.7667110807743!2d30.51181331519062!3d39.767345979445956!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cc16104da8cfe1%3A0xcb6ade61c0be7c8a!2sEski%C5%9Fehir+%C3%96zel+Anadolu+Hastanesi!5e0!3m2!1str!2sus!4v1561475505199!5m2!1str!2sus" style="border:0"></iframe>
	</div>

@endsection
