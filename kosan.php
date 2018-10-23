<?php include('template/header.php') ?>

<section class="kosan-area relative" id="kosan-list" style="padding-bottom: 3em;">
	<div class="container">
    <div class="kosan-search">
      <div class="container">
        <div class="search-field">
          <form class="search-form">
            <div class="row">
              <div class="col-lg-12 d-flex align-items-center justify-content-center toggle-wrap">
                <div class="row">
                  <div class="col">
                    <h4 class="search-title">Cari kosanmu disini</h4>
                  </div>
                </div>
              </div>

              <div class="col-lg-4 col-md-6 col-xs-6">
                <select name="lokasi" class="app-select form-control" required>
                  <option data-display="Lokasi">Pilih lokasi</option>
                  <option value="1">Surabaya</option>
                  <option value="2">Sidoarjo</option>
                  <option value="3">Gresik</option>
                </select>
              </div>
              <div class="col-lg-4 col-md-6 col-xs-6">
                <select name="kategori" class="app-select form-control" required>
                  <option data-display="kategori kos">Pilih kategori kos</option>
                  <option value="1">Khusus wanita</option>
                  <option value="2">Khusus Pria</option>
                  <option value="3">Campuran</option>
                </select>
              </div>
              <div class="col-lg-4 col-md-6 col-xs-6">
                <select name="kapasitas" class="app-select form-control" required>
                  <option data-display="kapasitas kamar">pilih kapasitas</option>
                  <option value="1">satu</option>
                  <option value="2">dua</option>
                  <option value="3">tiga</option>
                  <option value="4">empat</option>
                </select>
              </div>

              <div class="col-lg-6 range-wrap">
                <p>Rentang harga (Rp):</p>
                <input type="text" id="range" value="" name="range" />
              </div>
              <div class="col-lg-4 d-flex justify-content-end">
                <button class="primary-btn">Cari Sekarang<span class="lnr lnr-arrow-right"></span></button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- kosan result -->
		<div class="row">
			<div class="col-lg-4">
				<div class="single-property">
					<div class="images">
						<img class="img-fluid mx-auto d-block" src="assets/img/s1.jpg" alt="">
						<span>sisa 10 kamar</span>
					</div>

					<div class="desc">
						<div class="top d-flex justify-content-between">
							<h4><a href="#">Kosan Dina</a></h4>
							<h4>Rp. 10jt/bln</h4>
						</div>
						<div class="middle">
							<div class="d-flex justify-content-start">
								<!-- <p>kasur/kamar: 2</p> -->
								<p>kapasitas: 1-2 orang</p>
								<p></p>
								<p>Luas kamar: 3x2m</p>
							</div>
							<div class="d-flex justify-content-start">
								<p>Wi-Fi: <span class="green">Yes</span></p>
								<p>KM dlm: <span class="red">No</span></p>
								<p>AC: <span class="red">No</span></p>
							</div>
						</div>
						<p>Alamat: &nbsp;jln. Raya Made no.35 Sambikerep</p>
						<p>Kota: &nbsp; Surabaya</p>
						<div class="bottom d-flex justify-content-start">
							<p><span class="lnr lnr-heart"></span> 15 Votes</p>
							<p><span class="lnr lnr-bubble"></span> 02 Testimonial</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="single-property">
					<div class="images">
						<img class="img-fluid mx-auto d-block" src="assets/img/s2	.jpg" alt="">
						<span>sisa 2 kamar</span>
					</div>

					<div class="desc">
						<div class="top d-flex justify-content-between">
							<h4><a href="#">Kosan Mawar</a></h4>
							<h4>Rp. 1,5jt/bln</h4>
						</div>
						<div class="middle">
							<div class="d-flex justify-content-start">
								<!-- <p>kasur/kamar: 2</p> -->
								<p>kapasitas: 1-2 orang</p>
								<p></p>
								<p>Luas kamar: 3x2m</p>
							</div>
							<div class="d-flex justify-content-start">
								<p>Wi-Fi: <span class="green">Yes</span></p>
								<p>KM dlm: <span class="red">No</span></p>
								<p>AC: <span class="red">No</span></p>
							</div>
						</div>
						<p>Alamat: &nbsp;jln. Raya Made no.35 Sambikerep</p>
						<p>Kota: &nbsp; Surabaya</p>
						<div class="bottom d-flex justify-content-start">
							<p><span class="lnr lnr-heart"></span> 15 Votes</p>
							<p><span class="lnr lnr-bubble"></span> 02 Testimonial</p>
						</div>
					</div>
				</div>
			</div>

			<div class="col-lg-4">
				<div class="single-property">
					<div class="images">
						<img class="img-fluid mx-auto d-block" src="assets/img/s3.jpg" alt="">
						<span>sisa 4 kamar</span>
					</div>

					<div class="desc">
						<div class="top d-flex justify-content-between">
							<h4><a href="#">Kosan Melati</a></h4>
							<h4>Rp. 1jt/bln</h4>
						</div>
						<div class="middle">
							<div class="d-flex justify-content-start">
								<!-- <p>kasur/kamar: 2</p> -->
								<p>kapasitas: 1-2 orang</p>
								<p></p>
								<p>Luas kamar: 3x2m</p>
							</div>
							<div class="d-flex justify-content-start">
								<p>Wi-Fi: <span class="green">Yes</span></p>
								<p>KM dlm: <span class="red">No</span></p>
								<p>AC: <span class="red">No</span></p>
							</div>
						</div>
						<p>Alamat: &nbsp;jln. Raya Made no.35 Sambikerep</p>
						<p>Kota: &nbsp; Surabaya</p>
						<div class="bottom d-flex justify-content-start">
							<p><span class="lnr lnr-heart"></span> 15 Votes</p>
							<p><span class="lnr lnr-bubble"></span> 02 Testimonial</p>
						</div>
					</div>
				</div>
			</div>
		</div>
    <br>
    <div class="row">
      <div class="col-lg-4">
        <div class="single-property">
          <div class="images">
            <img class="img-fluid mx-auto d-block" src="assets/img/s1.jpg" alt="">
            <span>sisa 10 kamar</span>
          </div>

          <div class="desc">
            <div class="top d-flex justify-content-between">
              <h4><a href="#">Kosan Dina</a></h4>
              <h4>Rp. 10jt/bln</h4>
            </div>
            <div class="middle">
              <div class="d-flex justify-content-start">
                <!-- <p>kasur/kamar: 2</p> -->
                <p>kapasitas: 1-2 orang</p>
                <p></p>
                <p>Luas kamar: 3x2m</p>
              </div>
              <div class="d-flex justify-content-start">
                <p>Wi-Fi: <span class="green">Yes</span></p>
                <p>KM dlm: <span class="red">No</span></p>
                <p>AC: <span class="red">No</span></p>
              </div>
            </div>
            <p>Alamat: &nbsp;jln. Raya Made no.35 Sambikerep</p>
            <p>Kota: &nbsp; Surabaya</p>
            <div class="bottom d-flex justify-content-start">
              <p><span class="lnr lnr-heart"></span> 15 Votes</p>
              <p><span class="lnr lnr-bubble"></span> 02 Testimonial</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="single-property">
          <div class="images">
            <img class="img-fluid mx-auto d-block" src="assets/img/s2	.jpg" alt="">
            <span>sisa 2 kamar</span>
          </div>

          <div class="desc">
            <div class="top d-flex justify-content-between">
              <h4><a href="#">Kosan Mawar</a></h4>
              <h4>Rp. 1,5jt/bln</h4>
            </div>
            <div class="middle">
              <div class="d-flex justify-content-start">
                <!-- <p>kasur/kamar: 2</p> -->
                <p>kapasitas: 1-2 orang</p>
                <p></p>
                <p>Luas kamar: 3x2m</p>
              </div>
              <div class="d-flex justify-content-start">
                <p>Wi-Fi: <span class="green">Yes</span></p>
                <p>KM dlm: <span class="red">No</span></p>
                <p>AC: <span class="red">No</span></p>
              </div>
            </div>
            <p>Alamat: &nbsp;jln. Raya Made no.35 Sambikerep</p>
            <p>Kota: &nbsp; Surabaya</p>
            <div class="bottom d-flex justify-content-start">
              <p><span class="lnr lnr-heart"></span> 15 Votes</p>
              <p><span class="lnr lnr-bubble"></span> 02 Testimonial</p>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4">
        <div class="single-property">
          <div class="images">
            <img class="img-fluid mx-auto d-block" src="assets/img/s3.jpg" alt="">
            <span>sisa 4 kamar</span>
          </div>

          <div class="desc">
            <div class="top d-flex justify-content-between">
              <h4><a href="#">Kosan Melati</a></h4>
              <h4>Rp. 1jt/bln</h4>
            </div>
            <div class="middle">
              <div class="d-flex justify-content-start">
                <!-- <p>kasur/kamar: 2</p> -->
                <p>kapasitas: 1-2 orang</p>
                <p></p>
                <p>Luas kamar: 3x2m</p>
              </div>
              <div class="d-flex justify-content-start">
                <p>Wi-Fi: <span class="green">Yes</span></p>
                <p>KM dlm: <span class="red">No</span></p>
                <p>AC: <span class="red">No</span></p>
              </div>
            </div>
            <p>Alamat: &nbsp;jln. Raya Made no.35 Sambikerep</p>
            <p>Kota: &nbsp; Surabaya</p>
            <div class="bottom d-flex justify-content-start">
              <p><span class="lnr lnr-heart"></span> 15 Votes</p>
              <p><span class="lnr lnr-bubble"></span> 02 Testimonial</p>
            </div>
          </div>
        </div>
      </div>
    </div>
	</div>
</section>

<?php include('template/footer.php') ?>
