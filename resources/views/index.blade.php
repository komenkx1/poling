@extends('layouts/master',["title"=>"Musma Teknik 2020"])
@section('content')
@php
$date = date("Y-m-d");
$regisDate = '2021-01-02';
$voteDate = '2021-01-08';
@endphp
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
							src="img/slide-title-border.png" alt=""></div>

					<div class="tp-caption text-color-light font-weight-normal" data-x="center" data-y="center"
						data-voffset="['-80','-80','-80','-130']" data-start="700" data-fontsize="['16','16','16','40']"
						data-lineheight="['25','25','25','45']" data-transform_in="y:[-50%];opacity:0;s:500;">SELAMAT
						DATANG PADA</div>

					<div class="tp-caption" data-x="center" data-hoffset="['145','145','145','320']" data-y="center"
						data-voffset="['-80','-80','-80','-130']" data-start="1000"
						data-transform_in="x:[300%];opacity:0;s:500;" data-transform_idle="opacity:0.2;s:500;"><img
							src="img/slide-title-border.png" alt=""></div>

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
						Perwakilan Mahasiswa (BPMFT) Fakultas Teknik Unud dengan tujuan Menetapkan Anggaran Dasar,
						Anggaran Rumah Tangga, Program Kerja Organisasi dan Mengevaluasi keberadaan SMFT dan BPMFT UNUD
						dalam totalitas kehidupan kemahasiswaan serta, menetapkan mekanisme pemilihan pengurus BPMFT dan
						SMFT UNUD.</p>
				</div>
			</div>
			<div class="row mb-lg-4 ">
				<div class="col-lg-6 appear-animation" data-appear-animation="fadeInLeftShorter">
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
				<div class="col-lg-6 appear-animation" data-appear-animation="fadeInRightShorter"
					data-appear-animation-delay="300">
					<div class="feature-box feature-box-style-2">
						<div class="feature-box-icon">
							<i class="icons icon-menu text-color-light"></i>
						</div>
						<div class="feature-box-info">
							<h4 class="font-weight-bold text-color-light text-4 mb-2">PEMILIHAN KETUA BPMFT</h4>
							<p class="text-color-light opacity-7 text-justify">Pemira bersama untuk memilih ketua BPMFT
								Unud untuk periode 1 tahun kedepan. Acara ini diselenggarakan setiap tahunnya guna
								meneruskan kepengurusan BPMFT ke angkatan berikutnya.</p>
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
				<div class="warning bg-danger" style="border: 1px solid black; border-radius: 5px;">
					<p class="warning-start pt-4 text-light appear-animation font-weight-bold pl-2 pr-2"
						data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200"> @guest Silahkan login
						terlebih dahulu untuk melihat status akun @endguest
						@auth
						@if ($mahasiswa->status == 'voted')
						Anda Sudah Melakukan Vote
						@elseif($mahasiswa->status != 'terverifikasi' && $mahasiswa->status !='voted' )
						Akun Anda Belum Terverifikasi. silahkan tunggu hingga admin memverifikasi
						@elseif ($date > $voteDate) Masa Vote Telah Berakhir!
						@else
						Akun Terverifikasi! @if ($date != $voteDate ) Silahkan Login kembali pada tanggal 08 Januari 2021 untuk
							melakukan pemilihan @else Silahkan Pilih salah satu calon ketua SMFT dan BPMFT dengan cara mengklik
							foto calon yang ingin dipilih kemudian klik Submit untuk menyimpan pilihan. @endif @endif @endauth
							</p> </div> </div> </div> <br>
							<div class="row pb-5 mb-5">

								<form action="/vote" class="radio-buttons" id="#create-form" method="POST">
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
												<div class="modal-body-alert">
													Yakin Ingin Memilih Paslon?
												</div>
												<div class="modal-footer ">
													<button type="button" class="btn btn-secondary"
														data-dismiss="modal">Close</button>
													<button class="btn btn-primary" type="button" id="btn-submit-modal"
														data-toggle="modal" data-target="#exampleModalalert">Submit</button>
												</div>
											</div>
										</div>
									</div>
									<div class="smft appear-animation" data-appear-animation="fadeInUpShorter">
										<div class="judul-pol">
											<h2>SMFT</h2>
										</div>
										@if (count($smft) == 0)
										<h4>Belum Ada Calon Terdaftar</h4>
										@endif
										@foreach ($smft as $item)

										<label class="custom-radio">
											<input type="radio" @guest disabled @endguest @auth @if($date != $voteDate ||
												$mahasiswa->status =='terdaftar' ||
											$mahasiswa->status == 'voted' ) disabled
											@endif @foreach ($suara as
											$item2){{$item->id == $item2->calon_id ? 'checked' : ''}}@endforeach
											@endauth required
											name="smft"
											value="{{$item->id}}" />
											<span class="radio-btn"
												style=" background: url({{$item->takeimage}});background-size: cover;background-repeat-y: no-repeat;background-position: center;"><i
													class="lar la-check-circle"></i>
												<div class="poll-icon">
													{{-- <img src="img/index.png" class="img-fluids"> --}}
												</div>
											</span>
											<span>
												<div class="button p-0 m-0">
													<p class="font-weight-bold p-2 m-0 text-4">{{$item->nama_panggilan}}
													</p>
													<button class="btn-visiMisi btn btn-primary" type="button" id=""
														data-id="{{$item->id}}">Lihat
														Visi Misi</button>
												</div>
											</span>
										</label>
										@endforeach
									</div>
									<hr>
									<div class="bpmft appear-animation mt-3" data-appear-animation="fadeInUpShorter">
										<div class="judul-pol">
											<h2>BPMFT</h2>
										</div>
										@if (count($smft) == 0)
										<h4>Belum Ada Calon Terdaftar</h4>
										@endif
										@foreach ($bpmft as $item)

										<label class="custom-radio">
											<input type="radio" @guest disabled @endguest @auth @if($date != $voteDate ||
												$mahasiswa->status =='terdaftar' ||
											$mahasiswa->status == 'voted') disabled
											@endif @foreach ($suara as
											$item2){{$item->id == $item2->calon_id ? 'checked' : ''}}@endforeach
											@endauth required
											name="bpmft" value="{{$item->id}}" />
											<span class="radio-btn"
												style=" background: url({{$item->takeimage}});background-size: cover;background-repeat-y: no-repeat;background-position: center;"><i
													class="lar la-check-circle"></i>
												<div class="poll-icon">
													{{-- <img src="img/index.png" class="img-fluids"> --}}
												</div>
											</span>
											<span>
												<div class="button p-0 m-0">
													<p class="font-weight-bold p-2 m-0 text-4">{{$item->nama_panggilan}}
													</p>
													<button class="btn-visiMisi btn btn-primary" type="button" id=""
														data-id="{{$item->id}}">Lihat
														Visi
														Misi</button>
												</div>
											</span>
										</label>
										@endforeach

									</div>

									<div class="clearfix"></div>
									@auth
									@if($date == $voteDate) 
									<div
										class="result mt-3  d-flex justify-content-center">
										@if($mahasiswa->status != 'voted' && $mahasiswa->status == 'terverifikasi' )
										<button
											class="btn btn-primary"
											type="button" id="btn-submit" data-toggle="modal"
											data-target="#exampleModalalert">Submit</button>
											@endif
										@if($mahasiswa->status == 'voted') 
										<button
											class="btn btn-primary d-block"
											type="button" id="btn-See">Lihat Hasil Sementara</button>
											@endif
									</div>
									@endif
									@endauth
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
							<i class="icon-clock icons text-color-light"></i>
						</div>
						<div class="feature-box-info pl-1">
							<h5 class="font-weight-light text-color-light opacity-7 mb-0">Tanggal Pemilihan</h5>
							<p class="text-color-light font-weight-semibold mb-0">08 / Januari / 2021</p>
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
								<span class="social-icons-Instagram"><a href="https://bit.ly/2L6nYLe"
										target="_blank" class="text-color-light font-weight-semibold" title="Whatsapp"><i
											class="mr-1 fab fa-whatsapp"></i> +6282146403929</a></span>
								<span class="social-icons-twitter pl-1"><a href="https://line.me/ti/p/~deyaachan"
										target="_blank" class="text-color-light font-weight-semibold" title="Line"><i
											class="mr-1 fab fa-line"></i> deyaachan</a></span>
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
								<span class="social-icons-Instagram"><a href="https://www.instagram.com/smft_unud/"
										target="_blank" class="text-color-light font-weight-semibold" title="SMFT UNUD"><i
											class="mr-1 fab fa-instagram"></i> INSTAGRAM</a></span>
								<span class="social-icons-twitter pl-1"><a href="https://smft.unud.ac.id/" target="_blank"
										class="text-color-light font-weight-semibold" title="Website"><i
											class="mr-1 fa fa-globe"></i> www.smft.unud.ac.id</a></span>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>

@if (!Auth::user() or $mahasiswa->status != 'voted')
{{-- modal tutor --}}
<div class="modal fade " id="modaltutor" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
	aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Alur Pemilihan</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body-tutor">
				<div class="row d-flex justify-content-center">
					<div class="col-md-12">
						<div class="main-card mb-3">
							<div class="card-body">
								<div class="vertical-timeline vertical-timeline--animate vertical-timeline--one-column">

									<div class="vertical-timeline-item vertical-timeline-element">
										<div> <span class="vertical-timeline-element-icon bounce-in"> <i
													class="badge badge-dot badge-dot-xl badge-dark"> </i> </span>
											<div class="vertical-timeline-element-content bounce-in">
												<h4 class="timeline-title">Registrasi</h4>
												<p class="text-justify">
													Masuk ke web Pemira teknik lalu klik
													<a href="@if (Route::has('register')) {{route('register')}} @else #
														@endif" data-abc="true">Daftar
													</a>
													jika belum memiliki
													akun untuk melakukan registrasi atau klik
													<a href="@if (Route::has('auth')) {{route('auth')}} @else # @endif"
														data-abc="true">Login
													</a>
													jika sudah
													memiliki akun atau sudah
													melakukan registrasi sebelumnya. Registrasi dapat dilakukan dari
													tanggal 2 sampai dengan 6 Januari 2021
												</p>
												<span class="vertical-timeline-element-date">
													<i class="fas fa-arrow-down"></i>
												</span>
											</div>
										</div>
									</div>
									<div class="vertical-timeline-item vertical-timeline-element">
										<div> <span class="vertical-timeline-element-icon bounce-in"> <i
													class="badge badge-dot badge-dot-xl badge-warning"> </i> </span>
											<div class="vertical-timeline-element-content bounce-in">
												<h4 class="timeline-title">Verifikasi</h4>
												<p class="text-justify">Harap lengkapi data diri serta siapkan foto Krm untuk persyaratan verifikasi, dan setelah melakukan registrasi, tunggu hingga
													panitia melakukan
													verifikasi ke akun anda.</p> <span class="vertical-timeline-element-date"><i
														class="fas fa-arrow-down"></i></span>
											</div>
										</div>
									</div>
									<div class="vertical-timeline-item vertical-timeline-element">
										<div> <span class="vertical-timeline-element-icon bounce-in"> <i
													class="badge badge-dot badge-dot-xl badge-danger"> </i> </span>
											<div class="vertical-timeline-element-content bounce-in">
												<h4 class="timeline-title">Status</h4>
												<p class="text-justify">Untuk mengetahui status verifikasi, silahkan
													login menggunakan akun
													yang sudah di registrasi lalu cek status akun pada bagian poling.
												</p> <span class="vertical-timeline-element-date"><i
														class="fas fa-arrow-down"></i></span>
											</div>
										</div>
									</div>
									<div class="vertical-timeline-item vertical-timeline-element">
										<div> <span class="vertical-timeline-element-icon bounce-in"> <i
													class="badge badge-dot badge-dot-xl badge-success"> </i> </span>
											<div class="vertical-timeline-element-content bounce-in">
												<h4 class="timeline-title">Pemilihan</h4>
												<p class="text-justify">Ketika akun sudah terverifikasi, maka akun anda
													siap digunakan untuk
													memilih secara serempak pada tanggal <b>08 Januari 2021</b>.</p>
												<span class="vertical-timeline-element-date"><i
														class="fas fa-arrow-down"></i></span>
											</div>
										</div>
									</div>

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>
{{-- modal tutor --}}
@endif

{{-- modal Hasil --}}
<div class="modal fade" id="hasil-sementara" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
				<div class="alert alert-success" style="display:none">
					{{ Session::get('success') }}
				</div>
				<div class="chart">
					<div class="item m-3">
						<p class="text-center font-weight-bold"># Vote SMFT</p>
						<canvas id="smft" width="250" height="180"></canvas>
					</div>
					<div class="item m-3">
						<p class="text-center font-weight-bold"># Vote BPMFT</p>
						<canvas id="bpmft" width="250" height="180"></canvas>
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
			<div class="modal-body-visimisi container pt-3">

			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="alert-vote" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
	aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Peringatan!</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div id="text-modal"></div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>
@endsection

@section('footer')
<script>
	$(window).on('load', function() {
        $('#modaltutor').modal('show');
    });
	var cSmft = document.getElementById('smft');
	var cBpmft = document.getElementById('bpmft');

	function loadDataChart(){
		$.ajax({
			url: '{{Route("chart")}}',
			type: 'get',
			success: function(data){
				chart = JSON.parse(data);
				updateChart(chart);
			}
		});
	}

	$('#btn-submit-modal').on("click", function(event){ 	
		event.preventDefault()
		var data = $('form').serialize();

		$.ajax({
			url:"{{ route('vote') }}",
			method:"POST",
			data: data,
			success:function(data){
				loadDataChart();
				$('#hasil-sementara').modal('show');
				$(".alert-success").css("display", "block");
				$(".warning").append("<strong class='text-center text-light'>"+data+"</strong");
				$(".warning-start").hide();
				$(".alert-success").append("<strong class='text-center'>"+data+"</strong");
				$(".result").append("<button class='btn btn-primary d-block' type='button' id='btn-See'>Lihat Hasil Sementara</button>")
				$("#btn-submit").remove()
					window.setTimeout(function() {
					$(".alert").fadeTo(300, 0).slideUp(300, function(){
							$(this).remove();
						});
					}, 4000);
					$('input[type="radio"]').attr('disabled', true);
			},
			error: function(data) {
				var errors = data.responseJSON;
				console.log(errors);
			}
		});

	});


	function updateChart(data){

		var smft_calons = [];
   	for(var k in data.SMFT) smft_calons.push(k);

		var prodis = data.SMFT[smft_calons[0]].prodis;
		var datasmft = {
			labels: prodis,
			datasets: [
			{
				label: smft_calons[0],
				backgroundColor: 'rgba(255, 99, 132, 0.2)',
				borderColor: 'rgba(255, 99, 132, 1)',
				borderWidth: 1,
				data: data.SMFT[smft_calons[0]].prodi_value
			}, {
				label: smft_calons[1],
				backgroundColor: 'rgba(54, 162, 235, 0.2)',
				borderColor: 'rgba(54, 162, 235, 1)',
				borderWidth: 1,
				data: data.SMFT[smft_calons[1]].prodi_value
			}]
		};

		var bpmft_calons = [];
   	for(var k in data.BPMFT) bpmft_calons.push(k);

		var databpmft = {
			labels: prodis,
			datasets: [{
				label: bpmft_calons[0],
				backgroundColor: 'rgba(255, 99, 132, 0.2)',
				borderColor: 'rgba(255, 99, 132, 1)',
				borderWidth: 1,
				data: data.BPMFT[bpmft_calons[0]].prodi_value
			}, {
				label: bpmft_calons[1],
				backgroundColor: 'rgba(54, 162, 235, 0.2)',
				borderColor: 'rgba(54, 162, 235, 1)',
				borderWidth: 1,
				data: data.BPMFT[bpmft_calons[1]].prodi_value
			}, {
				label: bpmft_calons[2],
				backgroundColor: 'rgba(14, 255, 108, 0.2)',
				borderColor: 'rgba(54, 235, 65)',
				borderWidth: 1,
				data: data.BPMFT[bpmft_calons[2]].prodi_value
			}]
		};

		var chartSMFT = new Chart(cSmft, {
			type: 'bar',
			data: datasmft,
			options: {
				scales: {
				yAxes: [{
					ticks: {
					beginAtZero: true
					}
				}]
				}
			}
		});

		var chartBPMFT = new Chart(cBpmft, {
			type: 'bar',
			data: databpmft,
			options: {
				scales: {
					yAxes: [{
						ticks: {
						beginAtZero: true
						}
					}]
				}
			}
		});
	}

	$('.btn-visiMisi').click(function(){
		var id = $(this).data('id');
		$.ajax({
			url: '{{Route("visimisi")}}',
			type: 'post',
			data: {id: id},
			success: function(data){
				$('.modal-body-visimisi').html(data);
				$('#modalVisiMisi').modal('show'); 
			}
		});
	});

	$(document).on("click",'#btn-See',function(){
		loadDataChart();
		$('#hasil-sementara').modal('show');
	});
</script>
@endsection