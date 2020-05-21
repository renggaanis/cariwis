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

				<!-- Blog Content -->

				<div class="col-lg-8">
					
					<div class="blog_post_container">

						<!-- Blog Post -->
						
						<div class="blog_post">
							<div class="blog_post_image">
								<img src="images/berita1.jpg">
								<div class="blog_post_date d-flex flex-column align-items-center justify-content-center">
									<div class="blog_post_day">18</div>
									<div class="blog_post_month">Mei, 2020</div>
								</div>
							</div>
							<div class="blog_post_meta">
								<ul>
									<li class="blog_post_meta_item"><a href="">oleh Kevin K. A. P.</a></li>
									<li class="blog_post_meta_item"><a href="">Berita</a></li>
								</ul>
							</div>
							<div class="blog_post_title"><a href="{{ route('berita1')}}">Mendes PDTT Resmikan Wahana Edu Wisata Lontar Sewu di Gresik</a></div>
							<div class="blog_post_text">
								<p>Menteri Desa, Pembangunan Daerah Tertinggal dan Transmigrasi, Abdul Halim Iskandar, meresmikan Wahana Edu Wisata Lontar Sewu di Desa Hendrosari, Kecamatan Menganti, Gresik, Jawa Timur..</p>
							</div>
							<div class="blog_post_link"><a href="{{ route('berita1')}}">read more</a></div>
						</div>

						<!-- Blog Post -->
						
						<div class="blog_post">
							<div class="blog_post_image">
								<img src="images/berita2-2.jpg">
								<div class="blog_post_date d-flex flex-column align-items-center justify-content-center">
									<div class="blog_post_day">19</div>
									<div class="blog_post_month">Mei, 2020</div>
								</div>
							</div>
							<div class="blog_post_meta">
								<ul>
									<li class="blog_post_meta_item"><a href="">oleh Jales F. K.</a></li>
									<li class="blog_post_meta_item"><a href="">Wisata Alam</a></li>
								</ul>
							</div>
							<div class="blog_post_title"><a href="{{ route('berita2')}}">4 Tempat Wisata di Gresik, Uniknya Bukit Kapur hingga Kebun Mangrove</a></div>
							<div class="blog_post_text">
								<p> Gresik, Jawa Timur terus berbenah untuk meningkatkan sektor pariwisatanya. Kota dikenal dengan kota industri dan santri ini memiliki sejumlah tempat wisata mulai dari wisata alam, buatan dan sejarah..</p>
							</div>
							<div class="blog_post_link"><a href="{{ route('berita2')}}">read more</a></div>
						</div>

						<!-- Blog Post -->
						
						<div class="blog_post">
							<div class="blog_post_image">
								<img src="images/berita3.jpg" alt="https://unsplash.com/@stilclassics">
								<div class="blog_post_date d-flex flex-column align-items-center justify-content-center">
									<div class="blog_post_day">12</div>
									<div class="blog_post_month">Oktober, 2016</div>
								</div>
							</div>
							<div class="blog_post_meta">
								<ul>
									<li class="blog_post_meta_item"><a href="">by Kevin Krisna Adji Pratama</a></li>
									<li class="blog_post_meta_item"><a href="">Duta Wisata</a></li>
								</ul>
							</div>
							<div class="blog_post_title"><a href="{{ route('berita3')}}">Berikut Daftar Lengkap Juara Cak & Yuk Gresik 2016</a></div>
							<div class="blog_post_text">
								<p>Selamat untuk Cak Badik Choirudin dan Yuk Melisa Wulan yang terpilih menjadi @CakYukGresik 2016 malam ini! Semoga amanah dan bisa memberikan kemajuan untuk pariwisata Gresik..</p>
							</div>
							<div class="blog_post_link"><a href="{{ route('berita3')}}">read more</a></div>
						</div>

					</div>
				</div>

				<!-- Blog Sidebar -->

				<div class="col-lg-4 sidebar_col">

					<!-- Sidebar Search -->
					<div class="sidebar_search">
						<form action="#">
							<input id="sidebar_search_input" type="search" class="sidebar_search_input" placeholder="" required="required">
							<button id="sidebar_search_button" type="submit" class="sidebar_search_button trans_300" value="Submit">
								<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
								width="17px" height="17px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
									<g>
										<g>
											<g>
												<path class="mag_glass" fill="#FFFFFF" d="M78.438,216.78c0,57.906,22.55,112.343,63.493,153.287c40.945,40.944,95.383,63.494,153.287,63.494
												s112.344-22.55,153.287-63.494C489.451,329.123,512,274.686,512,216.78c0-57.904-22.549-112.342-63.494-153.286
												C407.563,22.549,353.124,0,295.219,0c-57.904,0-112.342,22.549-153.287,63.494C100.988,104.438,78.439,158.876,78.438,216.78z
												M119.804,216.78c0-96.725,78.69-175.416,175.415-175.416s175.418,78.691,175.418,175.416
												c0,96.725-78.691,175.416-175.416,175.416C198.495,392.195,119.804,313.505,119.804,216.78z"/>
											</g>
										</g>
										<g>
											<g>
												<path class="mag_glass" fill="#FFFFFF" d="M6.057,505.942c4.038,4.039,9.332,6.058,14.625,6.058s10.587-2.019,14.625-6.058L171.268,369.98
												c8.076-8.076,8.076-21.172,0-29.248c-8.076-8.078-21.172-8.078-29.249,0L6.057,476.693
												C-2.019,484.77-2.019,497.865,6.057,505.942z"/>
											</g>
										</g>
									</g>
								</svg>
							</button>
						</form>
					</div>
					
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