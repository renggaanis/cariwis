<!DOCTYPE html>
<html lang="en">
<head>
<title>Contact</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Travelix Project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/contact_styles.css">
<link rel="stylesheet" type="text/css" href="styles/contact_responsive.css">
</head>

<body>

<div class="super_container">
	
	<!-- Header -->

	<header class="header">

		<!-- Top Bar -->

		<div class="top_bar">
			<div class="container">
				<div class="row">
					<div class="col d-flex flex-row">
						<div class="phone">+62 823 3212 3115</div>
						<div class="social">
							<ul class="social_list">
								<li class="social_list_item"><a href="https://www.instagram.com/kevink.ap" title="Follow us on Instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>

								<li class="social_list_item"><a href="https://www.facebook.com/idekevinblog" title="Follow us on Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li class="social_list_item"><a href="https://www.twitter.com/idekevinblog" title="Follow us on Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							</ul>
						</div>
						<div class="user_box ml-auto">
							<div class="user_box_login user_box_link"><a href="#">Masuk</a></div>
							<div class="user_box_register user_box_link"><a href="#">Daftar</a></div>
						</div>
					</div>
				</div>
			</div>		
		</div>

		<!-- Main Navigation -->

		<nav class="main_nav">
			<div class="container">
				<div class="row">
					<div class="col main_nav_col d-flex flex-row align-items-center justify-content-start">
						<div class="logo_container">
							<div class="logo"><a href="{{ route('index')}}"><img src="images/logo.png" alt="">cariwis.id</a></div>
						</div>
						<div class="main_nav_container ml-auto">
							<ul class="main_nav_list">
								<li class="main_nav_item"><a href="{{ route('index')}}">home</a></li>
								<li class="main_nav_item"><a href="{{ route('about')}}">tentang kami</a></li>
								<li class="main_nav_item"><a href="{{ route('offers')}}">trending</a></li>
								<li class="main_nav_item"><a href="{{ route('blog')}}">berita</a></li>
								<li class="main_nav_item"><a href="{{ route('contact')}}">kontak kami</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>	
		</nav>

	</header>

	<div class="menu trans_500">
		<div class="menu_content d-flex flex-column align-items-center justify-content-center text-center">
			<div class="menu_close_container"><div class="menu_close"></div></div>
			<div class="logo menu_logo"><a href="#"><img src="images/logo.png" alt=""></a></div>
			<ul>
				<li class="menu_item"><a href="{{ route('index')}}">home</a></li>
				<li class="menu_item"><a href="{{ route('about')}}">tentang kami</a></li>
				<li class="menu_item"><a href="{{ route('offers')}}">trending</a></li>
				<li class="menu_item"><a href="{{ route('blog')}}">berita</a></li>
				<li class="menu_item"><a href="{{ route('contact')}}">kontak kami</a></li>
			</ul>
		</div>
	</div>

	<!-- Home -->

	<div class="home">
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="images/contact_background.jpg"></div>
		<div class="home_content">
			<div class="home_title">contact</div>
		</div>
	</div>

	<!-- Contact -->

	<div class="contact_form_section">
		<div class="container">
			<div class="row">
				<div class="col">

					<!-- Contact Form -->
					<div class="contact_form_container">
						<div class="contact_title text-center">Formulir Hubungi Kami</div>
						<form action="#" id="contact_form" class="contact_form text-center">
							<input type="text" id="contact_form_name" class="contact_form_name input_field" placeholder="Nama" required="required" data-error="Name is required.">
							<input type="text" id="contact_form_email" class="contact_form_email input_field" placeholder="E-mail" required="required" data-error="Email is required.">
							<input type="text" id="contact_form_subject" class="contact_form_subject input_field" placeholder="Subject" required="required" data-error="Subject is required.">
							<textarea id="contact_form_message" class="text_field contact_form_message" name="message" rows="4" placeholder="Isi pesan di sini.." required="required" data-error="Please, write us a message."></textarea>
							<button type="submit" id="form_submit_button" class="form_submit_button button trans_200">kirim pesan<span></span><span></span><span></span></button>
						</form>
					</div>

				</div>
			</div>
		</div>
	</div>

	<!-- About -->
	<div class="about">
		<div class="container">
			<div class="row">
				<div class="col-lg-5">
					
					<!-- About - Image -->

					<div class="about_image">
						<img src="images/rojak.png" width="450px" alt="">
					</div>

				</div>

				<div class="col-lg-4">
					
					<!-- About - Content -->

					<div class="about_content">
						<div class="logo_container about_logo">
							<div class="logo"><a href="{{ route('index')}}"><img src="images/logo.png" alt="">cariwis.id</a></div>
						</div>
						<p class="about_text text-justify">Cariwis.id adalah situs web pencari wisata dengan database terlengkap yang memungkinkan Anda menemukan seluruh wisata yang ada di penjuru nusantara.<br><br>Cariwis.id dibangun oleh <b>RoJaK Team</b> yang beranggotakan Muhammad <u><strong>Ro</strong></u>is Syarifudin, <u><strong>Ja</strong></u>les Febri Kusuma, serta <u><strong>K</strong></u>evin Krisna Adji Pratama.</p>
						<ul class="about_social_list">
							<li class="about_social_item"><a href="https://www.instagram.com/idekevinblog" title="Follow us on Instagram"><i class="fa fa-instagram"></i></a></li>
							<li class="about_social_item"><a href="https://www.facebook.com/idekevinblog" title="Follow us on Facebook"><i class="fa fa-facebook-f"></i></a></li>
							<li class="about_social_item"><a href="https://www.twitter.com/kevink.ap" title="Follow us on Twitter"><i class="fa fa-twitter"></i></a></li>
							<li class="about_social_item"><a href="https://www.github.com/Kevlog" title="Follow us on GitHub"><i class="fa fa-github"></i></a></li>
						</ul>
					</div>

				</div>

				<div class="col-lg-3">
					
					<!-- About Info -->

					<div class="about_info">
						<ul class="contact_info_list">
							<li class="contact_info_item d-flex flex-row">
								<div><div class="contact_info_icon"><img src="images/placeholder.svg" alt=""></div></div>
								<div class="contact_info_text">A10 Teknik Informatika<br>Universitas Negeri Surabaya<br>Ketintang, Surabaya</div>
							</li>
							<li class="contact_info_item d-flex flex-row">
								<div><div class="contact_info_icon"><img src="images/phone-call.svg" alt=""></div></div>
								<div class="contact_info_text">+62 823 3212 3115</div>
							</li>
							<li class="contact_info_item d-flex flex-row">
								<div><div class="contact_info_icon"><img src="images/message.svg" alt=""></div></div>
								<div class="contact_info_text"><a href="mailto:contactme@gmail.com?Subject=Hello" target="_top">admin@cariwis.com</a></div>
							</li>
							<li class="contact_info_item d-flex flex-row">
								<div><div class="contact_info_icon"><img src="images/planet-earth.svg" alt=""></div></div>
								<div class="contact_info_text"><a href="https://idekevin.blogspot.com" target="_blank">RoJaK Team</a></div>
							</li>
						</ul>
					</div>

				</div>

			</div>
		</div>
	</div>
	<!-- Google Map -->
	<!-- <div class="travelix_map">
		<div id="google_map" class="google_map">
			<div class="map_container">
				<div id="map"></div>
			</div>
		</div>
	</div> -->
	<!-- Footer -->
	<footer class="footer">
		<div class="container">
			<div class="row">

				<!-- Footer Column -->
				<div class="col-lg-4 footer_column">
					<div class="footer_col">
						<div class="footer_content footer_about">
							<div class="logo_container footer_logo">
								<div class="logo"><a href="#"><img src="images/logo.png" alt="">Cariwis.id</a></div>
							</div>
							<p class="footer_about_text text-justify">Cariwis.id merupakan situs pencarian tempat wisata yang membantu calon wisatawan mencari destinasi wisata yang menarik di seluruh sudut Indonesia.</p>
							<ul class="footer_social_list">
								<li class="footer_social_item"><a href="https://www.instagram.com/idekevinblog"><i class="fa fa-instagram"></i></a></li>
								<li class="footer_social_item"><a href="https://www.facebook.com/idekevinblog"><i class="fa fa-facebook-f"></i></a></li>
								<li class="footer_social_item"><a href="https://www.twitter.com/kevink_ap"><i class="fa fa-twitter"></i></a></li>
								<li class="footer_social_item"><a href="https://www.github.com/Kevlog"><i class="fa fa-github"></i></a></li>
							</ul>
						</div>
					</div>
				</div>


				<!-- Footer Column -->
				<div class="col-lg-3 offset-lg-1 footer_column">
					<div class="footer_col">
						<div class="footer_title">kategori</div>
						<div class="footer_content footer_tags">
							<ul class="tags_list clearfix">
								<li class="tag_item"><a href="#">Berita</a></li>
								<li class="tag_item"><a href="#">Wisata Alam</a></li>
								<li class="tag_item"><a href="#">Wisata Kuliner</a></li>
								<li class="tag_item"><a href="#">Adat Istiadat</a></li>
								<li class="tag_item"><a href="#">Upacara</a></li>
								<li class="tag_item"><a href="#">Duta Wisata</a></li>
							</ul>
						</div>
					</div>
				</div>

				<!-- Footer Column -->
				<div class="col-lg-3 offset-lg-1 footer_column">
					<div class="footer_col">
						<div class="footer_title">informasi kontak</div>
						<div class="footer_content footer_contact">
							<ul class="contact_info_list">
								<li class="contact_info_item d-flex flex-row">
									<div><div class="contact_info_icon"><img src="images/placeholder.svg" alt=""></div></div>
									<div class="contact_info_text">A10 Teknik Informatika<br>Universitas Negeri Surabaya<br>Ketintang, Surabaya</div>
								</li>
								<li class="contact_info_item d-flex flex-row">
									<div><div class="contact_info_icon"><img src="images/phone-call.svg" alt=""></div></div>
									<div class="contact_info_text">+62 823 3212 3115</div>
								</li>
								<li class="contact_info_item d-flex flex-row">
									<div><div class="contact_info_icon"><img src="images/message.svg" alt=""></div></div>
									<div class="contact_info_text">admin@cariwis.com</div>
								</li>
								<li class="contact_info_item d-flex flex-row">
									<div><div class="contact_info_icon"><img src="images/planet-earth.svg" alt=""></div></div>
									<div class="contact_info_text"><a href="https://idekevin.blogspot.com">RoJaK Team</a></div>
								</li>
							</ul>
						</div>
					</div>
				</div>

			</div>
		</div>
	</footer>

	<!-- Copyright -->

	<div class="copyright">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 order-lg-1 order-2  ">
					<div class="copyright_content d-flex flex-row align-items-center">
						<div>
							Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Dikerjakan dengan <i class="fa fa-heart-o" aria-hidden="true"></i> oleh <a href="https://idekevin.blogspot.com" target="_blank">RoJaK Team</a>
						</div>
					</div>
				</div>
				<div class="col-lg-9 order-lg-2 order-1">
					<div class="footer_nav_container d-flex flex-row align-items-center justify-content-lg-end">
						<div class="footer_nav">
							<ul class="footer_nav_list">
								<li class="footer_nav_item"><a href="{{ route('index')}}">home</a></li>
								<li class="footer_nav_item"><a href="{{ route('about')}}">about us</a></li>
								<li class="footer_nav_item"><a href="{{ route('offers')}}">trending</a></li>
								<li class="footer_nav_item"><a href="{{ route('blog')}}">news</a></li>
								<li class="footer_nav_item"><a href="{{ route('contact')}}">contact</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/contact_custom.js"></script>
<!-- <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script> -->
</body>
</html>