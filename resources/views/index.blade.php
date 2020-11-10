@extends('layouts/master')
@section('content')
			<div role="main" class="main" id="home">
				<div class="slider-container rev_slider_wrapper" style="height: 100vh;">
					<div id="revolutionSlider" class="slider rev_slider" data-version="5.4.8" data-plugin-revolution-slider data-plugin-options="{'sliderLayout': 'fullscreen', 'delay': 9000, 'gridwidth': 1140, 'gridheight': 800, 'responsiveLevels': [4096,1200,992,500]}">
						<ul>
							<li class="slide-overlay" data-transition="fade">
								<img src="img/slides/slide-one-page-1-1.jpg"  
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
							</li>
						</ul>
					</div>
				</div>
				<section id="tentang" class="section section-height-3 bg-primary border-0 m-0 appear-animation" data-appear-animation="fadeIn">
					<div class="container my-3">
						<div class="row mb-5">
							<div class="col text-center appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
								<h2 class="font-weight-bold text-color-light mb-2">Apa Itu Musma?</h2>
								<p class="text-color-light opacity-7">MUSMA  merupakan kegiatan Musyawarah Mahasiswa yang dilaksanakan rutin setiap tahun (1 periode) masa kepemimpinan Senat Mahasiswa (SMFT) dan Badan Perwakilan Mahasiswa (BPM) Fakultas Teknik Unud dengan tujuan Menetapkan Anggaran Dasar, Anggaran Rumah Tangga, Program Kerja Organisasi  dan Mengevaluasi keberadaan SMFT dan BPMFT UNUD dalam totalitas kehidupan kemahasiswaan serta, menetapkan mekanisme pemilihan pengurus BPMFT dan SMFT UNUD.</p>
							</div>
						</div>
						<div class="row mb-lg-4">
							<div class="col-lg-4 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="300">
								<div class="feature-box feature-box-style-2">
									<div class="feature-box-icon">
										<i class="icons icon-support text-color-light"></i>
									</div>
									<div class="feature-box-info">
										<h4 class="font-weight-bold text-color-light text-4 mb-2">MUSYAWARAH BERSAMA</h4>
										<p class="text-color-light opacity-7">Lorem ipsum dolor sit amet, consectetur adipiscing <span class="alternative-font text-color-light">metus.</span> elit. Quisque rutrum pellentesque imperdiet.</p>
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
										<p class="text-color-light opacity-7">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellentesque imperdiet. Nulla lacinia iaculis nulla.</p>
									</div>
								</div>
							</div>
							<div class="col-lg-4 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="300">
								<div class="feature-box feature-box-style-2">
									<div class="feature-box-icon">
										<i class="icons icon-menu text-color-light"></i>
									</div>
									<div class="feature-box-info">
										<h4 class="font-weight-bold text-color-light text-4 mb-2">PEMILIHAN KETUA BPMFT</h4>
										<p class="text-color-light opacity-7">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellentesque imperdiet. Nulla lacinia iaculis nulla.</p>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
\
						</div>
					</div>
				</section>
				
				<div id="Polling" class="container">
					<div class="row justify-content-center pt-5 mt-5">
						<div class="col-lg-9 text-center">
							<div class="appear-animation" data-appear-animation="fadeInUpShorter">
								<h2 class="font-weight-bold mb-2">Polling</h2>
								<p class="mb-4"> PEMILIHAN KETUA SMFT & BPMFT</p>
							</div>
							<p class="pb-3 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">Silahkan Pilih salah satu calon ketua SMFT dan BPMFT dengan cara mengklik foto calon yang ingin dipilih kemudian klik Submit untuk menyimpan pilihan</p>
						</div>
					</div>
					<div class="row pb-5 mb-5">
                           
                                <form action="" class="radio-buttons">
                                    <div class="smft appear-animation" data-appear-animation="fadeInUpShorter">
                                        <div class="judul-pol">
                                            <h2>SMFT</h2>
                                        </div>
                              <label class="custom-radio">
                                <input type="radio" name="radio"/>
                                <span class="radio-btn"
                                  ><i class="lar la-check-circle"></i>
                                  <div class="poll-icon">
                                   <img src="data:image/jpeg;base64,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" width="100%" alt="">
                                    <h3>IR.Soekarno</h3>
                                  </div>
                                </span>
                              </label>
                              <label class="custom-radio">
                                <input type="radio" name="radio" />
                                <span class="radio-btn"
                                  ><i class="lar la-check-circle"></i>
                                  <div class="poll-icon">
                                  <img src="data:image/jpeg;base64,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" width="100%" alt="">
                                    <h3>IR.Soekarno</h3>
                                  </div>
                                </span>
                              </label>
                              <label class="custom-radio">
                                <input type="radio" name="radio" />
                                <span class="radio-btn"
                                  ><i class="lar la-check-circle"></i>
                                  <div class="poll-icon">
                                   <img src="data:image/jpeg;base64,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" width="100%" alt="">
                                    <h3>IR.Soekarno</h3>
                                  </div>
                                </span>
                              </label>
                                    </div>
                                    <div class="bpmft appear-animation" data-appear-animation="fadeInUpShorter">
                                        <div class="judul-pol">
                                            <h2>BPMFT</h2>
                                        </div>
                                        <label class="custom-radio">
                                          <input type="radio" name="radio2"/>
                                          <span class="radio-btn"
                                            ><i class="lar la-check-circle"></i>
                                            <div class="poll-icon">
                                             <img src="data:image/jpeg;base64,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" width="100%" alt="">
                                              <h3>IR.Soekarno</h3>
                                            </div>
                                          </span>
                                        </label>
                                        <label class="custom-radio">
                                          <input type="radio" name="radio2" />
                                          <span class="radio-btn"
                                            ><i class="lar la-check-circle"></i>
                                            <div class="poll-icon">
                                            <img src="data:image/jpeg;base64,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" width="100%" alt="">
                                              <h3>IR.Soekarno</h3>
                                            </div>
                                          </span>
                                        </label>
                                     
                                              </div>
                              <div class="clear"></div>
                              <button class="btn btn-primary">Submit</button>
                            </form>
                            </div>
            

                                                
                        </div>
         
				

				<section id="contact" class="section bg-color-grey-scale-1 border-0 py-0 m-0">
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-6">
								
								<!-- Google Maps - Settings on footer -->
                                <div id="googlemaps" class="google-ma h-100 mb-0 p-5" style="min-height: 400px;">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63114.03314524725!2d115.21000524619285!3d-8.631753311983303!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd241ea9986cc09%3A0xefdc9ad9df39e8f4!2sSEKBER%20FT%20UNUD*21!5e0!3m2!1sid!2sid!4v1604911691204!5m2!1sid!2sid" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                                </div>
				
							</div>
							<div class="col-md-6 p-5 my-5">
								
								<div class="px-4">
									<h2 class="font-weight-bold line-height-1 mb-2">Contact Us</h2>
									<p class="text-3 mb-4">LOREM IPSUM DOLOR SIT A MET</p>
									<form id="contactForm" class="contact-form form-style-2 pr-xl-5" action="php/contact-form.php" method="POST">
										<div class="contact-form-success alert alert-success d-none mt-4" id="contactSuccess">
											<strong>Success!</strong> Your message has been sent to us.
										</div>
				
										<div class="contact-form-error alert alert-danger d-none mt-4" id="contactError">
											<strong>Error!</strong> There was an error sending your message.
											<span class="mail-error-message text-1 d-block" id="mailErrorMessage"></span>
										</div>
										
										<div class="form-row">
											<div class="form-group col-xl-4">
												<input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" id="name" placeholder="Name" required>
											</div>
											<div class="form-group col-xl-8">
												<input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" id="email" placeholder="Email" required>
											</div>
										</div>
										<div class="form-row">
											<div class="form-group col">
												<input type="text" value="" data-msg-required="Please enter the subject." maxlength="100" class="form-control" name="subject" id="subject" placeholder="Subject" required>
											</div>
										</div>
										<div class="form-row">
											<div class="form-group col">
												<textarea maxlength="5000" data-msg-required="Please enter your message." rows="4" class="form-control" name="message" id="message" placeholder="Message" required></textarea>
											</div>
										</div>
										<div class="form-row">
											<div class="form-group col">
												<input type="submit" value="SUBMIT" class="btn btn-primary btn-rounded font-weight-semibold px-5 btn-py-2 text-2" data-loading-text="Loading...">
											</div>
										</div>
									</form>
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
							<div class="col-lg-auto appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">
								<div class="feature-box feature-box-style-2 d-block d-lg-flex mb-4 mb-lg-0 px-xl-4 mx-lg-5">
									<div class="feature-box-icon">
										<i class="icon-call-out icons text-color-light"></i>
									</div>
									<div class="feature-box-info pl-1">
										<h5 class="font-weight-light text-color-light opacity-7 mb-0">NARAHUBUNG</h5>
										<a href="tel:+8001234567" class="text-color-light font-weight-semibold text-decoration-none">800-123-4567</a>
									</div>
								</div>
							</div>
							<div class="col-lg-auto appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="400">
								<div class="feature-box feature-box-style-2 d-block d-lg-flex">
									<div class="feature-box-icon">
										<i class="icon-share icons text-color-light"></i>
									</div>
									<div class="feature-box-info pl-1">
										<h5 class="font-weight-light text-color-light opacity-7 mb-0">SOCIAL MEDIA</h5>
										<p class="mb-0">
											<span class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" class="text-color-light font-weight-semibold" title="Facebook"><i class="mr-1 fab fa-facebook-f"></i> FACEBOOK</a></span>
											<span class="social-icons-twitter pl-3"><a href="http://www.twitter.com/" target="_blank" class="text-color-light font-weight-semibold" title="Twitter"><i class="mr-1 fab fa-twitter"></i> TWITTER</a></span>
											<span class="social-icons-instagram pl-3"><a href="http://www.linkedin.com/" target="_blank" class="text-color-light font-weight-semibold" title="Linkedin"><i class="mr-1 fab fa-instagram"></i> INSTAGRAM</a></span>
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
			</div>
			@endsection