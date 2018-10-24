<!DOCTYPE html>
<html>

<head>

	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<meta name="author" content="CodePixar">

	<meta name="description" content="">

	<meta name="keywords" content="">

	<meta charset="UTF-8">

	<title>Kosanku</title>

	<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
	<link rel="stylesheet" href="assets/css/linearicons.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/css/nice-select.css">
	<link rel="stylesheet" href="assets/css/ion.rangeSlider.css" />
	<link rel="stylesheet" href="assets/css/ion.rangeSlider.skinFlat.css" />
	<link rel="stylesheet" href="assets/css/bootstrap.css">
	<link rel="stylesheet" href="assets/css/owl.carousel.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/card-style.css">
</head>

<body>

	<?php include('menuActive.php') ?>


	<header class="main-header">
		<!-- <div class="menutop-wrap">
			<div class="menu-top container">
				<div class="d-flex justify-content-end align-items-center">
					<ul class="list">
						<li><a href="#" style="color: #6c757d;">login / register</a>&nbsp;&nbsp;&nbsp;</li>
					</ul>
				</div>
			</div>
		</div> -->

		<div class="main-menu">
			<div class="container">
				<div class="row align-items-center justify-content-between d-flex">
					<div id="logo">
						<h1>Kosanku</h1>
						<!-- <a href="index.html"><img src="img/logo.png" alt="" title="" /></a> -->
					</div>
					<nav id="nav-menu-container">
						<ul class="nav-menu" id="navbar-menu">
							<li class="<?php echo menuActive('/kosanku/home.php') ?>"><a href="home.php">Beranda</a></li>
							<!-- <li><a href="properties.html">properties</a></li> -->
							<li class=" <?php echo menuActive('/kosanku/tentang.php') ?>"><a href="tentang.php">Tentang</a></li>
							<li class=" <?php echo menuActive('/kosanku/kosan.php') ?>"><a href="kosan.php">Kosan</a>
								<ul>
									<li><a href="kosan/?putra.html">Putra</a></li>
									<li><a href="kosan/?putri.html">Putri</a></li>
									<li><a href="kosan/?campuran.html">Campuran</a></li>
								</ul>
							</li>
							<li class="menu-default"><a href="">Berita kos</a>
								<ul>
									<li><a href="kosan-rekomendasi.html">Kosan rekomendasi</a></li>
									<li><a href="serba-serbi.html">Serba-serbi kosan</a></li>
								</ul>
							</li>
							<li><a href="contact.html">Hubungi kami</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</header>

<div class="page-wrapper bg-blue top-100 bottom-100" id="default-select">
    <div class="wrapper wrapper-960">
        <div class="card card-2">
            <div class="card-heading"></div>
            <div class="card-body">
                <h4 class="search-title">Registrasi</h4>
                <div class="search-form">
                  <!-- <div class="form-regis input-field">
                  </div> -->
                  <div class="input-field">
                    <input class="app-select form-control" type="text" placeholder="Nama Lengkap" name="nama" value="" >

                    <input class="app-select form-control" type="text" placeholder="Alamat" name="alamat"  value="">

                    <select name="gender" class="app-select form-control" style="margin-top: 1em; color: #777777 !important;">
                      <option>Pilih gender</option>
                      <option value="pria">Pria</option>
                      <option value="wanita">Wanita</option>
                    </select>

                    <input class="app-select form-control" type="email" placeholder="Email" name="email" value="">

                    <input class="app-select form-control" type="text" placeholder="Alamat" name="alamat" value="">

                    <input class="app-select form-control" type="password" placeholder="Password" name="password" value="">

                    <input class="app-select form-control" type="password" placeholder="Ulangi Password" name="password" value="">

                    <select name="role" class="app-select form-control" style="margin-top: 1em; color: #777777 !important;">
                      <option data-display="Gabung Sebagai">Pilih role</option>
                      <option value="pemilik">Pemilik kos</option>
                      <option value="pencari">Pencari kos</option>
                    </select>


                    <button class="primary-btn">Register<span class="lnr lnr-arrow-right"></span></button>

                    <a class="primary-btn" style="float: right;" href="/kosanku/login.php">Login<span class="lnr lnr-arrow-right"></span></a>

                  </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('template/footer.php') ?>
