<!DOCTYPE html>
<html lang="en">
<head>
<title>Trending | Cariwis.id</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Travelix Project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/blog_styles.css">
<link rel="stylesheet" type="text/css" href="styles/offers_styles.css">
<link rel="stylesheet" type="text/css" href="styles/blog_responsive.css">
<link rel="stylesheet" type="text/css" href="styles/offers_responsive.css">
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
						<div class="phone"><i class="fa fa-phone"></i> +62 823 3212 3115</div>
						<div class="social">
							<ul class="social_list">
								<li class="social_list_item"><a href="https://www.instagram.com/kevink.ap" title="Follow us on Instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>

								<li class="social_list_item"><a href="https://www.facebook.com/idekevinblog" title="Follow us on Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li class="social_list_item"><a href="https://www.twitter.com/idekevinblog" title="Follow us on Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							</ul>
						</div>
						<div class="user_box ml-auto">
							<div class="user_box_login user_box_link"><a href="#">masuk</a></div>
							<div class="user_box_register user_box_link"><a href="#">daftar</a></div>
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
							<div class="logo"><a href="#"><img src="images/logo.png" alt="">cariwis.id</a></div>
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
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="images/arsip/about_background.jpg"></div>
		<div class="home_content">
			<div class="home_title">top 4 trending</div>
		</div>
	</div>

	<!-- Offers -->

	<div class="offers">

		<!-- Offers -->

		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<!-- Offers Grid -->

					<div class="offers_grid">

						<!-- Offers Item -->

						<div class="offers_item rating_4">
							<div class="row">
								<div class="col-lg-1 temp_col"></div>
								<div class="col-lg-3 col-1680-4">
									<div class="offers_image_container">
										<!-- Image by https://unsplash.com/@kensuarez -->
										<div class="offers_image_background" style="background-image:url(images/berita1.jpg)"></div>
										<div class="offer_name"><a href="single_listing.html">berita</a></div>
									</div>
								</div>
								<div class="col-lg-7">
									<div class="offers_content">
										<div class="blog_post_title"><a href="{{ route('berita1')}}">Mendes PDTT Resmikan Wahana Edu Wisata Lontar Sewu di Gresik</a></div>
										<p class="offers_text">Menteri Desa, Pembangunan Daerah Tertinggal dan Transmigrasi, Abdul Halim Iskandar, meresmikan Wahana Edu Wisata Lontar Sewu di Desa Hendrosari, Kecamatan Menganti, Gresik, Jawa Timur...</p>
										<div class="button book_button"><a href="{{ route('berita1')}}">selengkapnya<span></span><span></span><span></span></a></div>
									</div>
								</div>
								<div class="col-lg-1">
									<div class="offer_reviews">
										<div class="offer_reviews_rating text-center">#1</div>
										<div class="offer_reviews_content">
											<div class="offer_reviews_subtitle">100rb dilihat</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Offers Item -->

						<div class="offers_item rating_4">
							<div class="row">
								<div class="col-lg-1 temp_col"></div>
								<div class="col-lg-3 col-1680-4">
									<div class="offers_image_container">
										<!-- Image by https://unsplash.com/@kensuarez -->
										<div class="offers_image_background" style="background-image:url(images/berita2-2.jpg)"></div>
										<div class="offer_name"><a href="single_listing.html">wisata alam</a></div>
									</div>
								</div>
								<div class="col-lg-7">
									<div class="offers_content">
										<div class="blog_post_title"><a href="{{ route('berita2')}}">4 Tempat Wisata di Gresik, Uniknya Bukit Kapur hingga Kebun Mangrove</a></div>
										<p class="offers_text">Gresik, Jawa Timur terus berbenah untuk meningkatkan sektor pariwisatanya. Kota dikenal dengan kota industri dan santri ini memiliki sejumlah tempat wisata mulai dari wisata alam, buatan dan sejarah...</p>
										<div class="button book_button"><a href="{{ route('berita2')}}">selengkapnya<span></span><span></span><span></span></a></div>
									</div>
								</div>
								<div class="col-lg-1">
									<div class="offer_reviews">
										<div class="offer_reviews_rating text-center">#2</div>
										<div class="offer_reviews_content">
											<div class="offer_reviews_subtitle">100rb dilihat</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Offers Item -->

						<div class="offers_item rating_4">
							<div class="row">
								<div class="col-lg-1 temp_col"></div>
								<div class="col-lg-3 col-1680-4">
									<div class="offers_image_container">
										<!-- Image by https://unsplash.com/@kensuarez -->
										<div class="offers_image_background" style="background-image:url(images/berita3.jpg)"></div>
										<div class="offer_name"><a href="single_listing.html">duta wisata</a></div>
									</div>
								</div>
								<div class="col-lg-7">
									<div class="offers_content">
										<div class="blog_post_title"><a href="{{ route('berita3')}}">Berikut Daftar Lengkap Juara Cak & Yuk Gresik 2016</a></div>
										<p class="offers_text">Selamat untuk Cak Badik Choirudin dan Yuk Melisa Wulan yang terpilih menjadi @CakYukGresik 2016 malam ini! Semoga amanah dan bisa memberikan kemajuan untuk pariwisata Gresik..</p>
										<div class="button book_button"><a href="{{ route('berita3')}}">selengkapnya<span></span><span></span><span></span></a></div>
									</div>
								</div>
								<div class="col-lg-1">
									<div class="offer_reviews">
										<div class="offer_reviews_rating text-center">#3</div>
										<div class="offer_reviews_content">
											<div class="offer_reviews_subtitle">100rb dilihat</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Offers Item -->

						<div class="offers_item rating_4">
							<div class="row">
								<div class="col-lg-1 temp_col"></div>
								<div class="col-lg-3 col-1680-4">
									<div class="offers_image_container">
										<!-- Image by https://unsplash.com/@kensuarez -->
										<div class="offers_image_background" style="background-image:url(images/berita4.jpg)"></div>
										<div class="offer_name"><a href="single_listing.html">wisata alam</a></div>
									</div>
								</div>
								<div class="col-lg-7">
									<div class="offers_content">
										<div class="blog_post_title"><a href="{{ route('berita4')}}">10 Upacara Adat di Bali dengan Keunikannya</a></div>
										<p class="offers_text">Berbicara soal wisata pantai dan tempat hiburannya, Bali memang tidak ada duanya ya, sobat tiket. Banyak sekali tempat yang bisa kamu eksplor di pulau ini. Mulai dari tempat wisata keluarga, beach..</p>
										<div class="button book_button"><a href="{{ route('berita4')}}">selengkapnya<span></span><span></span><span></span></a></div>
									</div>
								</div>
								<div class="col-lg-1">
									<div class="offer_reviews">
										<div class="offer_reviews_rating text-center">#4</div>
										<div class="offer_reviews_content">
											<div class="offer_reviews_subtitle">100rb dilihat</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>		
	</div>

	<!-- Footer -->

	<footer class="footer">
		<div class="container">
			<div class="row">

				<!-- Footer Column -->
				<div class="col-lg-4 footer_column">
					<div class="footer_col">
						<div class="footer_content footer_about">
							<div class="logo_container footer_logo">
								<div class="logo"><a href="#"><img src="images/logo.png" alt="">cariwis.id</a></div>
							</div>
							<p class="footer_about_text text-justify">Cariwis.id merupakan situs pencarian tempat wisata yang membantu calon wisatawan mencari destinasi wisata yang menarik di seluruh sudut Indonesia.</p>
							<ul class="footer_social_list">
								<!-- <li class="footer_social_item"><a href="#"><i class="fa fa-pinterest"></i></a></li> -->
								<li class="footer_social_item"><a href="https://www.instagram.com/kevink.ap"><i class="fa fa-instagram"></i></a></li>
								<li class="footer_social_item"><a href="https://www.facebook.com/arhenz.naghspenic"><i class="fa fa-facebook-f"></i></a></li>
								<li class="footer_social_item"><a href="https://www.twitter.com/kevink_ap"><i class="fa fa-twitter"></i></a></li>
								<!-- <li class="footer_social_item"><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li class="footer_social_item"><a href="#"><i class="fa fa-behance"></i></a></li> -->
							</ul>
						</div>
					</div>
				</div>

				<!-- Footer Column -->
				<div class="col-lg-3 offset-lg-1 footer_column">
					<div class="footer_col">
						<div class="footer_title">Kategori</div>
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
						<div class="footer_title">kontak kami</div>
						<div class="footer_content footer_contact">
							<ul class="contact_info_list">
								<li class="contact_info_item d-flex flex-row">
									<div><div class="contact_info_icon"><img src="images/placeholder.svg" alt=""></div></div>
									<div class="contact_info_text">Gedung A10<br>Universitas Negeri Surabaya<br>Ketintang, Surabaya</div>
								</li>
								<li class="contact_info_item d-flex flex-row">
									<div><div class="contact_info_icon"><img src="images/phone-call.svg" alt=""></div></div>
									<div class="contact_info_text">+62 823 3212 3115</div>
								</li>
								<li class="contact_info_item d-flex flex-row">
									<div><div class="contact_info_icon"><img src="images/message.svg" alt=""></div></div>
									<div class="contact_info_text">kontakami@cariwis.id</div>
									<!-- <div class="contact_info_text"><a href="mailto:kontakami@cariwis.id?Subject=Hello" target="_top">kontakami@cariwis.id</a></div> -->
								</li>
								<li class="contact_info_item d-flex flex-row">
									<div><div class="contact_info_icon"><img src="images/planet-earth.svg" alt=""></div></div>
									<div class="contact_info_text">cariwis.id</div>
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
								<li class="footer_nav_item"><a href="{{ route('index')}}">Home</a></li>
								<li class="footer_nav_item"><a href="{{ route('about')}}">about us</a></li>
								<li class="footer_nav_item"><a href="{{ route('offers')}}">offers</a></li>
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
<script src="plugins/Isotope/isotope.pkgd.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/offers_custom.js"></script>
</body>
</html>