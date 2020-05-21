<!DOCTYPE html>
<html lang="en">
<head>
<title>Berita | Cariwis.id</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Travelix Project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="plugins/colorbox/colorbox.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/blog_styles.css">
<link rel="stylesheet" type="text/css" href="styles/blog_responsive.css">
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
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="images/blog_background.jpg"></div>
		<div class="home_content">
			<div class="home_title">berita</div>
		</div>
	</div>

	<!-- Blog -->

	<div class="blog">
		<div class="container">
			<div class="row">

				@yield('berita')

				<!-- Blog Sidebar -->

				<div class="col-lg-4 sidebar_col">
					
					<!-- Sidebar Latest Posts -->

					<div class="sidebar_latest_posts">
						<div class="sidebar_title">Latest Posts</div>
						<div class="latest_posts_container">
							<ul>

								<!-- Latest Post -->
								<li class="latest_post clearfix">
									<div class="latest_post_image">
										<a href="#"><img src="images/tmbberita1.jpg" width="73px" alt=""></a>
									</div>
									<div class="latest_post_content">
										<div class="latest_post_title trans_200"><a href="{{ route('berita1')}}">Mendes PDTT Resmikan Wahana Edu Wisata Lontar Sewu di Gresik</a></div>
										<div class="latest_post_meta">
											<div class="latest_post_author trans_200"><a href="#">oleh Kevin K. A. P.</a></div>
											<div class="latest_post_date trans_200"><a href="#">Senin, 18 Mei 2020</a></div>
										</div>
									</div>
								</li>

								<!-- Latest Post -->
								<li class="latest_post clearfix">
									<div class="latest_post_image">
										<a href="#"><img src="images/berita2-2.jpg" width="73px" height="73px" alt=""></a>
									</div>
									<div class="latest_post_content">
										<div class="latest_post_title trans_200"><a href="{{ route('berita2')}}">4 Tempat Wisata di Gresik, Uniknya Bukit Kapur hingga Kebun Mangrove</a></div>
										<div class="latest_post_meta">
											<div class="latest_post_author trans_200"><a href="#">oleh Jales Febri Kusuma</a></div>
											<div class="latest_post_date trans_200"><a href="#">Selasa, 19 Mei 2020</a></div>
										</div>
									</div>
								</li>

								<!-- Latest Post -->
								<li class="latest_post clearfix">
									<div class="latest_post_image">
										<a href="#"><img src="images/tmbberita3.jpg" width="73px" alt=""></a>
									</div>
									<div class="latest_post_content">
										<div class="latest_post_title trans_200"><a href="{{ route('berita3')}}">Berikut Daftar Lengkap Juara Cak & Yuk Gresik 2016</a></div>
										<div class="latest_post_meta">
											<div class="latest_post_author trans_200"><a href="#">oleh Kevin K. A. P.</a></div>
											<div class="latest_post_date trans_200"><a href="#">Rabu, 12 Oktober 2016</a></div>
										</div>
									</div>
								</li>

								<!-- Latest Post -->
								<li class="latest_post clearfix">
									<div class="latest_post_image">
										<a href="#"><img src="images/tmbberita4.jpg" width="73px" alt=""></a>
									</div>
									<div class="latest_post_content">
										<div class="latest_post_title trans_200"><a href="{{ route('berita4')}}">10 Upacara Adat di Bali dengan Keunikannya</a></div>
										<div class="latest_post_meta">
											<div class="latest_post_author trans_200"><a href="#">oleh M. Rois Syarifudin</a></div>
											<div class="latest_post_date trans_200"><a href="#">Rabu, 20 Mei 2020</a></div>
										</div>
									</div>
								</li>
							</ul>
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
									<div class="contact_info_text"><a href="mailto:contactme@gmail.com?Subject=Hello" target="_top">admin@cariwis.com</a></div>
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
<script src="plugins/colorbox/jquery.colorbox-min.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/blog_custom.js"></script>
</body>
</html>