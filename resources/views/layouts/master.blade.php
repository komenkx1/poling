<!DOCTYPE html>
<html>

<head>

	<!-- Basic -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>{{$title ?? ''}}</title>

	<meta name="keywords" content="Musma Teknik 2020" />
	<meta name="description" content="Musma Teknik 2020">
	<meta name="SMFT" content="smft.unud.id/musma">

	<!-- Favicon -->
	<link rel="shortcut icon" href="/img/apple-icon-precomposed.png" type="image/x-icon" />
	<link rel="apple-touch-icon" href="/img/apple-icon-precomposed.png">

	<!-- Mobile Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

	<!-- Web Fonts  -->
	<link
		href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light%7CPlayfair+Display:400"
		rel="stylesheet" type="text/css">

	<!-- Vendor CSS -->
	<link rel="stylesheet" href="/vendor/line-awesome-1.3.0/1.3.0/css/line-awesome.min.css">
	<link rel="stylesheet" href="/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="/vendor/fontawesome-free/css/all.min.css">
	<link rel="stylesheet" href="/vendor/animate/animate.min.css">
	<link rel="stylesheet" href="/vendor/simple-line-icons/css/simple-line-icons.min.css">
	<link rel="stylesheet" href="/vendor/owl.carousel/assets/owl.carousel.min.css">
	<link rel="stylesheet" href="/vendor/owl.carousel/assets/owl.theme.default.min.css">
	<link rel="stylesheet" href="/vendor/magnific-popup/magnific-popup.min.css">



	<!-- Theme CSS -->
	<link rel="stylesheet" href="/css/theme.css">
	<link rel="stylesheet" href="/css/theme-elements.css">


	<!-- Current Page CSS -->
	<link rel="stylesheet" href="/vendor/rs-plugin/css/settings.css">
	<link rel="stylesheet" href="/vendor/rs-plugin/css/layers.css">
	<link rel="stylesheet" href="/vendor/rs-plugin/css/navigation.css">

	<!-- Demo CSS -->


	<!-- Skin CSS -->
	<link rel="stylesheet" href="/css/skins/default.css">

	<!-- Theme Custom CSS -->
	<link rel="stylesheet" href="/css/custom.css">

	<!-- Head Libs -->
	<script src="/vendor/modernizr/modernizr.min.js"></script>

</head>

<body class="loading-overlay-showing" data-plugin-page-transition data-loading-overlay
	data-plugin-options="{'hideDelay': 200}">
	<div class="loading-overlay">
		<div class="bounce-loader">
			<div class="bounce1"></div>
			<div class="bounce2"></div>
			<div class="bounce3"></div>
		</div>
	</div>

	<body class="one-page" data-target="#header" data-spy="scroll" data-offset="100">

		<div class="body">
			@include('layouts/navigation')
			@yield('content')

			<footer id="footer" class="mt-0">
				<div class="footer-copyright">
					<div class="container py-2">
						<div class="row py-4">
							<div class="col d-flex align-items-center justify-content-center">
								<p><strong>MUSMA TEKNIK 2020</strong> - © Copyright 2020. All Rights Reserved.</p>
							</div>
						</div>
					</div>
				</div>
			</footer>

		</div>

		<!-- Vendor -->
		<script src="/vendor/jquery/jquery.min.js"></script>
		<script src="/vendor/jquery.appear/jquery.appear.min.js"></script>
		<script src="/vendor/jquery.easing/jquery.easing.min.js"></script>
		<script src="/vendor/jquery.cookie/jquery.cookie.min.js"></script>
		<script src="/vendor/popper/umd/popper.min.js"></script>
		<script src="/vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="/vendor/common/common.min.js"></script>
		<script src="/vendor/jquery.validation/jquery.validate.min.js"></script>
		<script src="/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
		<script src="/vendor/jquery.gmap/jquery.gmap.min.js"></script>
		<script src="/vendor/jquery.lazyload/jquery.lazyload.min.js"></script>
		<script src="/vendor/isotope/jquery.isotope.min.js"></script>
		<script src="/vendor/owl.carousel/owl.carousel.min.js"></script>
		<script src="/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
		<script src="/vendor/vide/jquery.vide.min.js"></script>
		<script src="/vendor/vivus/vivus.min.js"></script>

		<!-- Theme Base, Components and Settings -->
		<script src="/js/theme.js"></script>

		<!-- Current Page Vendor and Views -->
		<script src="/vendor/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
		<script src="/vendor/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
		<script src="/js/views/view.contact.js"></script>

		<!-- Theme Custom -->
		<script src="/vendor/chart.js/dist/Chart.min.js"></script>
		<script src="/js/custom.js"></script>

		<!-- Theme Initialization Files -->
		<script src="/js/theme.init.js"></script>

		<!-- Examples -->
		<script src="/js/examples/examples.portfolio.js"></script>

		<script>
			$(document).ready(function(){
				$.ajaxSetup({
					headers: {
						'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
					}
				});

				$('#btn-See').click(function(){
					$('#hasil-sementara').modal('show');
				});

				$('#btn-submit-modal').on("click", function(event){ 
					
					event.preventDefault()
					var data = $('form').serialize();

					$.ajax({
						url:"{{ route('vote') }}",
						method:"POST",
						data: data,
						success:function(data){
							$('#hasil-sementara').modal('show');
						},
						error: function(data) {
							var errors = data.responseJSON;
							console.log(errors);
						}
			 		});
	
				});
			  
			});
		</script>

		<script>
			$('.btn-visiMisi-smft').on("click", function(event){ 	
				console.log("triggered");
				var index = $(this).data('index');
				$('#modal-visi').html("<?= $smft[0]->visi ?>");
				$('#modal-misi').html("<?= $smft[0]->misi ?>");
				$('#modalVisiMisi').modal('show');
			});

			$('.btn-visiMisi-bpmft').on("click", function(event){ 
				console.log("triggered");
				var index = $(this).data('index');
				$('#modal-visi').html("<?= $bpmft[0]->visi ?>");
				$('#modal-misi').html("<?= $bpmft[0]->misi ?>");
				$('#modalVisiMisi').modal('show');
			});
		</script>


	</body>

</html>