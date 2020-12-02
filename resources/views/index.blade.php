@extends('layouts/master',["title"=>"Musma Teknik 2020"])
@section('content')
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
	aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Hasil Sementara</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="chart">
					<div class="item m-3">
						<p for="charSMFT" class="text-center font-weight-bold"># Vote SMFT</p>
						<canvas id="smft" width="250" height="150"></canvas>
					</div>
					<div class="item m-3">
						<p for="charSMFT" class="text-center font-weight-bold"># Vote BPMFT</p>
						<canvas id="bpmft" width="250" height="150"></canvas>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="modalVisiMisi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
	aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Visi Misi</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="feature-box feature-box-style-2">
					<div class="feature-box-icon">
						<i class="icons icon-list "></i>
					</div>
					<div class="feature-box-info">
						<h4 class="font-weight-bold  text-4 mb-2">VISI</h4>
						<p class=" opacity-7 text-justify">Kegiatan Musyawarah bersama adalah
							kegiatan untuk menetapkan peraturan Anggaran Dasar, Anggaran Rumah Tangga, Program Kerja
							Organisasi dan Mengevaluasi keberadaan SMFT dan BPMFT UNUD untuk periode 1 tahun kedepan
						</p>
					</div>
				</div>
				<div class="feature-box feature-box-style-2">
					<div class="feature-box-icon">
						<i class="icons icon-plus "></i>
					</div>
					<div class="feature-box-info">
						<h4 class="font-weight-bold  text-4 mb-2">MISI</h4>
						<p class=" opacity-7 text-justify">Kegiatan Musyawarah bersama adalah
							kegiatan untuk menetapkan peraturan Anggaran Dasar, Anggaran Rumah Tangga, Program Kerja
							Organisasi dan Mengevaluasi keberadaan SMFT dan BPMFT UNUD untuk periode 1 tahun kedepan
						</p>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>

<div role="main" class="main" id="home">
	<section class="slider-container rev_slider_wrapper" style="height: 100vh;">
		<div id="revolutionSlider" class="slider rev_slider" data-version="5.4.8" data-plugin-revolution-slider
			data-plugin-options="{'sliderLayout': 'fullscreen', 'delay': 9000, 'gridwidth': 1140, 'gridheight': 800, 'responsiveLevels': [4096,1200,992,500]}">
			<ul>
				<li class="slide-overlay slide-overlay-gradient" data-transition="fade">
					<img src="img/Untitled-3.png" alt="" data-bgposition="center center" data-bgfit="cover"
						data-bgrepeat="no-repeat" class="rev-slidebg">

					<div class="tp-caption" data-x="center" data-hoffset="['-145','-145','-145','-320']" data-y="center"
						data-voffset="['-80','-80','-80','-130']" data-start="1000"
						data-transform_in="x:[-300%];opacity:0;s:500;" data-transform_idle="opacity:0.2;s:500;"><img
							src="img/slides/slide-title-border.png" alt=""></div>

					<div class="tp-caption text-color-light font-weight-normal" data-x="center" data-y="center"
						data-voffset="['-80','-80','-80','-130']" data-start="700" data-fontsize="['16','16','16','40']"
						data-lineheight="['25','25','25','45']" data-transform_in="y:[-50%];opacity:0;s:500;">SELAMAT
						DATANG PADA</div>

					<div class="tp-caption" data-x="center" data-hoffset="['145','145','145','320']" data-y="center"
						data-voffset="['-80','-80','-80','-130']" data-start="1000"
						data-transform_in="x:[300%];opacity:0;s:500;" data-transform_idle="opacity:0.2;s:500;"><img
							src="img/slides/slide-title-border.png" alt=""></div>

					<div class="tp-caption font-weight-extra-bold text-color-light p-3"
						data-frames='[{"delay":1300,"speed":1000,"frame":"0","from":"opacity:0;x:-50%;","to":"opacity:0.7;x:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
						data-x="center" data-hoffset="['0','0','0','0']" data-y="center"
						data-fontsize="['145','145','145','250']" data-lineheight="['150','150','150','260']">MUSMA
					</div>



					<div class="tp-caption font-weight-light text-color-light"
						data-frames='[{"from":"opacity:0;","speed":300,"to":"o:1;","delay":2300,"split":"chars","splitdelay":0.05,"ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
						data-x="center" data-y="center" data-voffset="['85','85','85','140']"
						data-fontsize="['18','18','18','40']" data-lineheight="['26','26','26','45']">TEKNIK 2020</div>

				</li>
				{{-- <li class="slide-overlay slide-overlay-gradient" data-transition="fade">
								<img src="img/Untitled-3.png"  
									alt=""
									data-bgposition="center center" 
									data-bgfit="cover" 
									data-bgrepeat="no-repeat" 
									class="rev-slidebg">
							

							
								<div class="tp-caption font-weight-extra-bold text-color-light negative-ls-1"
									data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"sX:1.5;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
									data-x="center"
									data-y="center"
									data-fontsize="['50','50','50','90']"
									data-lineheight="['55','55','55','95']" style="z-index: 5;">Selamat Datang</div>
				
								<div class="tp-caption font-weight-light ws-normal text-center"
									data-frames='[{"from":"opacity:0;","speed":300,"to":"o:1;","delay":2000,"split":"chars","splitdelay":0.05,"ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
									data-x="center"
									data-y="center" data-voffset="['60','60','60','105']"
									data-width="['530','530','530','1100']"
									data-fontsize="['18','18','18','40']"
									data-lineheight="['26','26','26','45']"
									style="color: #b5b5b5; z-index: 5;"></strong> Pada Musma Teknik Tahun 2020</div>
				
								<div class="tp-dottedoverlay tp-opacity-overlay"></div>
							</li> --}}
			</ul>
		</div>
	</section>

	<section id="tentang" class="section section-height-3 bg-primary border-0 m-0 appear-animation"
		data-appear-animation="fadeIn">
		<div class="container my-3">
			<div class="row mb-5">
				<div class="col text-center appear-animation" data-appear-animation="fadeInUpShorter"
					data-appear-animation-delay="200">
					<h2 class="font-weight-bold text-color-light mb-2">Apa Itu Musma?</h2>
					<p class="text-color-light opacity-7">MUSMA merupakan kegiatan Musyawarah Mahasiswa yang
						dilaksanakan rutin setiap tahun (1 periode) masa kepemimpinan Senat Mahasiswa (SMFT) dan Badan
						Perwakilan Mahasiswa (BPM) Fakultas Teknik Unud dengan tujuan Menetapkan Anggaran Dasar,
						Anggaran Rumah Tangga, Program Kerja Organisasi dan Mengevaluasi keberadaan SMFT dan BPMFT UNUD
						dalam totalitas kehidupan kemahasiswaan serta, menetapkan mekanisme pemilihan pengurus BPMFT dan
						SMFT UNUD.</p>
				</div>
			</div>
			<div class="row mb-lg-4">
				<div class="col-lg-4 appear-animation" data-appear-animation="fadeInLeftShorter"
					data-appear-animation-delay="300">
					<div class="feature-box feature-box-style-2">
						<div class="feature-box-icon">
							<i class="icons icon-support text-color-light"></i>
						</div>
						<div class="feature-box-info">
							<h4 class="font-weight-bold text-color-light text-4 mb-2">MUSYAWARAH BERSAMA</h4>
							<p class="text-color-light opacity-7 text-justify">Kegiatan Musyawarah bersama adalah
								kegiatan untuk menetapkan peraturan Anggaran Dasar, Anggaran Rumah Tangga, Program Kerja
								Organisasi dan Mengevaluasi keberadaan SMFT dan BPMFT UNUD untuk periode 1 tahun kedepan
							</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 appear-animation" data-appear-animation="fadeInUpShorter">
					<div class="feature-box feature-box-style-2">
						<div class="feature-box-icon">
							<i class="icons icon-layers text-color-light"></i>
						</div>
						<div class="feature-box-info">
							<h4 class="font-weight-bold text-color-light text-4 mb-2">PEMILIHAN KETUA SMFT</h4>
							<p class="text-color-light opacity-7 text-justify">Pemira bersama untuk memilih ketua SMFT
								Unud untuk periode 1 tahun kedepan. Acara ini diselenggarakan setiap tahunnya guna
								meneruskan kepengurusan sekaligus melantik Ketua baru SMFT UNUD </p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 appear-animation" data-appear-animation="fadeInRightShorter"
					data-appear-animation-delay="300">
					<div class="feature-box feature-box-style-2">
						<div class="feature-box-icon">
							<i class="icons icon-menu text-color-light"></i>
						</div>
						<div class="feature-box-info">
							<h4 class="font-weight-bold text-color-light text-4 mb-2">PEMILIHAN KETUA BPMFT</h4>
							<p class="text-color-light opacity-7 text-justify">Pemira bersama untuk memilih ketua BPMFT
								Unud untuk periode 1 tahun kedepan. Acara ini diselenggarakan setiap tahunnya guna
								meneruskan kepengurusan BPMFT ke generasi baru</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="Polling" class="container">
		<div class="row justify-content-center pt-5 mt-5">
			<div class="col-lg-9 text-center">
				<div class="appear-animation" data-appear-animation="fadeInUpShorter">
					<h2 class="font-weight-bold mb-2">Polling</h2>
					<p class="mb-4"> PEMILIHAN KETUA SMFT & BPMFT</p>
				</div>
				<p class="pb-3 mb-4 appear-animation" data-appear-animation="fadeInUpShorter"
					data-appear-animation-delay="200">Silahkan Pilih salah satu calon ketua SMFT dan BPMFT dengan cara
					mengklik foto calon yang ingin dipilih kemudian klik Submit untuk menyimpan pilihan.</p>
			</div>
		</div>
		<div class="row pb-5 mb-5">

			<form action="" class="radio-buttons" method="POST">
				@csrf
				<div class="modal fade" id="exampleModalalert" tabindex="-1" role="dialog"
					aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">Alert!</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								Yakin Ingin Memilih Paslon?
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
								<button type="button" id="btn-modal-submit" class="btn btn-primary" data-dismiss="modal"
									data-toggle="modal" data-target="#exampleModal">Save changes</button>
							</div>
						</div>
					</div>
				</div>
				<div class="smft appear-animation" data-appear-animation="fadeInUpShorter">
					<div class="judul-pol">
						<h2>SMFT</h2>
					</div>
					<label class="custom-radio">
						<input type="radio" required name="radio" />
						<span class="radio-btn"
							style=" background: url(img/wahyu.jpg);background-size: cover;background-repeat-y: no-repeat;background-position: center;"><i
								class="lar la-check-circle"></i>
							<div class="poll-icon">
								{{-- <img src="img/index.png" class="img-fluids"> --}}
							</div>
						</span>
						<span>
							<div class="button p-0 m-0">
								<p class="font-weight-bold p-0 m-0">IR.Soekarno</p>
								<button class="btn btn-primary" type="button" id="btn-visiMisi" data-toggle="modal"
									data-target="#modalVisiMisi">Lihat Visi Misi</button>
							</div>
						</span>
					</label>

					<label class="custom-radio">
						<input type="radio" required name="radio" />
						<span class="radio-btn"
							style=" background: url(img/wahyu.jpg);background-size: cover;background-repeat-y: no-repeat;background-position: center;"><i
								class="lar la-check-circle"></i>
							<div class="poll-icon">
								{{-- <img src="img/index.png" class="img-fluids"> --}}
							</div>
						</span>
						<span>
							<div class="button p-0 m-0">
								<p class="font-weight-bold p-0 m-0">IR.Soekarno</p>
								<button class="btn btn-primary" type="button" id="btn-visiMisi" data-toggle="modal"
									data-target="#modalVisiMisi">Lihat Visi Misi</button>
							</div>
						</span>
					</label>
					<label class="custom-radio">
						<input type="radio" required name="radio" />
						<span class="radio-btn"
							style=" background: url(img/wahyu.jpg);background-size: cover;background-repeat-y: no-repeat;background-position: center;"><i
								class="lar la-check-circle"></i>
							<div class="poll-icon">
								{{-- <img src="img/index.png" class="img-fluids"> --}}
							</div>
						</span>
						<span>
							<div class="button p-0 m-0">
								<p class="font-weight-bold p-0 m-0">IR.Soekarno</p>
								<button class="btn btn-primary" type="button" id="btn-visiMisi" data-toggle="modal"
									data-target="#modalVisiMisi">Lihat Visi Misi</button>
							</div>
						</span>
					</label>
				</div>
				<hr>
				<div class="bpmft appear-animation mt-3" data-appear-animation="fadeInUpShorter">
					<div class="judul-pol">
						<h2>BPMFT</h2>
					</div>
					<label class="custom-radio">
						<input type="radio" required name="radio2" />
						<span class="radio-btn"
							style=" background: url(img/wahyu.jpg);background-size: cover;background-repeat-y: no-repeat;background-position: center;"><i
								class="lar la-check-circle"></i>
							<div class="poll-icon">
								{{-- <img src="img/index.png" class="img-fluids"> --}}
							</div>
						</span>
						<span>
							<div class="button p-0 m-0">
								<p class="font-weight-bold p-0 m-0">IR.Soekarno</p>
								<button class="btn btn-primary" type="button" id="btn-visiMisi" data-toggle="modal"
									data-target="#modalVisiMisi">Lihat Visi Misi</button>
							</div>
						</span>
					</label>
					<label class="custom-radio">
						<input type="radio" required name="radio2" />
						<span class="radio-btn"
							style=" background: url(img/wahyu.jpg);background-size: cover;background-repeat-y: no-repeat;background-position: center;"><i
								class="lar la-check-circle"></i>
							<div class="poll-icon">
								{{-- <img src="img/index.png" class="img-fluids"> --}}
							</div>
						</span>
						<span>
							<div class="button p-0 m-0">
								<p class="font-weight-bold p-0 m-0">IR.Soekarno</p>
								<button class="btn btn-primary" type="button" id="btn-visiMisi" data-toggle="modal"
									data-target="#modalVisiMisi">Lihat Visi Misi</button>
							</div>
						</span>
					</label>
				</div>
				<div class="clearfix"></div>
				<div class="result mt-3">
					<button class="btn btn-primary" type="button" id="btn-submit" data-toggle="modal"
						data-target="#exampleModalalert">Submit</button>
					<button class="btn btn-primary" type="button" id="btn-See" data-toggle="modal"
						data-target="#exampleModal">Lihat Hasil Sementara</button>
				</div>
			</form>
		</div>
	</section>

	<section id="contact" class="section bg-color-grey-scale-5 border-0 m-0 p-0"
		data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="200">
		<div class="container-fluid">
			<div class="row p-0">
				<div class="col-md-12 p-0">

					<!-- Google Maps - Settings on footer -->
					<div id="googlemaps" class="google-ma h-100 mb-0 p-0" style="min-height: 500px;">
						<iframe
							src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63114.03314524725!2d115.21000524619285!3d-8.631753311983303!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd241ea9986cc09%3A0xefdc9ad9df39e8f4!2sSEKBER%20FT%20UNUD*21!5e0!3m2!1sid!2sid!4v1604911691204!5m2!1sid!2sid"
							class="img-fluids" height="550" frameborder="0" style="border:0;width:100%" allowfullscreen=""
							aria-hidden="false" tabindex="0"></iframe>
					</div>

				</div>

			</div>
		</div>
	</section>

	<section class="section bg-primary border-0 m-0">
		<div class="container">
			<div class="row justify-content-center text-center text-lg-left py-4">
				<div class="col-lg-auto appear-animation" data-appear-animation="fadeInRightShorter">
					<div class="feature-box feature-box-style-2 d-block d-lg-flex mb-4 mb-lg-0">
						<div class="feature-box-icon">
							<i class="icon-location-pin icons text-color-light"></i>
						</div>
						<div class="feature-box-info pl-1">
							<h5 class="font-weight-light text-color-light opacity-7 mb-0">TEMPAT</h5>
							<p class="text-color-light font-weight-semibold mb-0">MON - FRI: 10:00am - 6:00pm</p>
						</div>
					</div>
				</div>
				<div class="col-lg-auto appear-animation" data-appear-animation="fadeInRightShorter"
					data-appear-animation-delay="200">
					<div class="feature-box feature-box-style-2 d-block d-lg-flex mb-4 mb-lg-0 px-xl-4 mx-lg-5">
						<div class="feature-box-icon">
							<i class="icon-call-out icons text-color-light"></i>
						</div>
						<div class="feature-box-info pl-1">
							<h5 class="font-weight-light text-color-light opacity-7 mb-0">NARAHUBUNG</h5>
							<p class="mb-0">
								<a href="tel:+8001234567"
									class="text-color-light font-weight-semibold text-decoration-none">800-123-4567 </a>
								<span class="text-light"> | </span>
								<a href="tel:+8001234567"
									class="text-color-light font-weight-semibold text-decoration-none">800-123-4567</a>
							</p>

						</div>
					</div>
				</div>
				<div class="col-lg-auto appear-animation" data-appear-animation="fadeInRightShorter"
					data-appear-animation-delay="400">
					<div class="feature-box feature-box-style-2 d-block d-lg-flex">
						<div class="feature-box-icon">
							<i class="icon-share icons text-color-light"></i>
						</div>
						<div class="feature-box-info pl-1">
							<h5 class="font-weight-light text-color-light opacity-7 mb-0">SOCIAL MEDIA</h5>
							<p class="mb-0">
								<span class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank"
										class="text-color-light font-weight-semibold" title="Facebook"><i
											class="mr-1 fab fa-facebook-f"></i> FACEBOOK</a></span>
								<span class="social-icons-twitter pl-3"><a href="http://www.twitter.com/" target="_blank"
										class="text-color-light font-weight-semibold" title="Twitter"><i
											class="mr-1 fab fa-instagram"></i> INSTAGRAM</a></span>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>

@endsection