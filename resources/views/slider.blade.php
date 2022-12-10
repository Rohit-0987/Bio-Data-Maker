<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Bootstrap 5 Multi Item Carousel Example</title>
	<link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" />
	<style>
		.container {
			padding-right: 15px;
			padding-left: 15px;
			margin-right: auto;
			margin-left: auto;
		}

		@media (min-width: 768px) {
			.container {
				width: 750px;
			}
		}

		@media (min-width: 992px) {
			.container {
				width: 970px;
			}
		}

		@media (min-width: 1200px) {
			.container {
				width: 1170px;
			}
		}



		@media (max-width: 767px) {
			#featureContainer .carousel-inner .carousel-item>div {
				display: none;
			}

			#featureContainer .carousel-inner .carousel-item>div:first-child {
				display: block;
			}
		}

		#featureContainer .carousel-inner .carousel-item.active,
		#featureContainer .carousel-inner .carousel-item-next,
		#featureContainer .carousel-inner .carousel-item-prev {
			display: flex;
		}

		/* medium and up screens */
		@media (min-width: 768px) {

			#featureContainer .carousel-inner .carousel-item-end.active,
			#featureContainer .carousel-inner .carousel-item-next {
				transform: translateX(25%);
			}

			#featureContainer .carousel-inner .carousel-item-start.active,
			#featureContainer .carousel-inner .carousel-item-prev {
				transform: translateX(-25%);
			}

			#featureContainer .card img {
				width: 90%;
				height: 60vh;
			}

			#featureContainer .carousel-item {
				justify-content: space-between;
			}
		}

		@media (max-width: 767px) {
			#featureContainer .card img {
				width: 100%;
				height: 85vh;
			}
		}

		#featureContainer .carousel-inner .carousel-item-end,
		#featureContainer .carousel-inner .carousel-item-start {
			transform: translateX(0);
		}

		#featureContainer .card {
			border: 0;
		}

		#featureContainer .card {
			position: relative;
		}

		#featureContainer .card .card-img-overlays {
			position: absolute;
			bottom: 15%;
			left: 10%;
			color: #fff;
			font-weight: bolder;
		}

		#featureContainer a {
			text-decoration: none;
		}

		#featureContainer .indicator {
			border: 1px solid rgb(202, 202, 202);
			padding: 3px 6px 3px 6px;
		}

		#featureContainer .indicator:hover {
			background-color: blue;
			border: 1px solid blue;
			transition: 200ms;
		}

		#featureContainer .indicator:hover {
			color: white;
			transition: 200ms;
		}

		#featureContainer .indicator {
			color: lightgray;
		}

		#featureContainer .float-end {
			padding-top: 10px;
		}
	</style>
</head>

<body>
	<div class="container" id="featureContainer" style="margin:150px auto">

		<div class="row mx-auto my-auto justify-content-center">
			<div id="featureCarousel" class="carousel slide" data-bs-ride="carousel">

				<div class="float-end pe-md-4">
					<a class="indicator" href="#featureCarousel" role="button" data-bs-slide="prev">
						<span class="fas fa-chevron-left" aria-hidden="true"></span>
					</a> &nbsp;&nbsp;
					<a class="w-aut indicator" href="#featureCarousel" role="button" data-bs-slide="next">
						<span class="fas fa-chevron-right" aria-hidden="true"></span>
					</a>
				</div>
				<div class="carousel-inner" role="listbox">
					<div class="carousel-item active">
						<div class="col-md-3">
							<div class="card">
								<div class="card-img">
									<img src="images/slider/1.jpg" class="img-fluid">
								</div>
								<div class="card-img-overlays">Slide 1</div>
							</div>
						</div>
					</div>
					<div class="carousel-item">
						<div class="col-md-3">
							<div class="card">
								<div class="card-img">
									<img src="images/slider/2.jpg" class="img-fluid">
								</div>
								<div class="card-img-overlays">Slide 2</div>
							</div>
						</div>
					</div>
					<div class="carousel-item">
						<div class="col-md-3">
							<div class="card">
								<div class="card-img">
									<img src="images/slider/3.jpg" class="img-fluid">
								</div>
								<div class="card-img-overlays">Slide 3</div>
							</div>
						</div>
					</div>
					<div class="carousel-item">
						<div class="col-md-3">
							<div class="card">
								<div class="card-img">
									<img src="images/slider/4.jpg" class="img-fluid">
								</div>
								<div class="card-img-overlays">Slide 4</div>
							</div>
						</div>
					</div>
					

			</div>
		</div>
	</div>

	<script src="https://code.jquery.com/jquery-3.6.0.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
		crossorigin="anonymous"></script>
	<script>
		let items = document.querySelectorAll('#featureContainer .carousel .carousel-item');
		items.forEach((el) => {
			const minPerSlide = 4
			let next = el.nextElementSibling
			for (var i = 1; i < minPerSlide; i++) {
				if (!next) {
					// wrap carousel by using first child
					next = items[0]
				}
				let cloneChild = next.cloneNode(true)
				el.appendChild(cloneChild.children[0])
				next = next.nextElementSibling
			}
		})
		$(document).ready(function () {
			$('#featureCarousel').carousel({ interval: false });
			$('#featureCarousel').carousel('pause');
		});
	</script>
	<script type="text/javascript">

		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-36251023-1']);
		_gaq.push(['_setDomainName', 'jqueryscript.net']);
		_gaq.push(['_trackPageview']);

		(function () {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();

	</script>
	<script>
		try {
			fetch(new Request("https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js", { method: 'HEAD', mode: 'no-cors' })).then(function (response) {
				return true;
			}).catch(function (e) {
				var carbonScript = document.createElement("script");
				carbonScript.src = "//cdn.carbonads.com/carbon.js?serve=CK7DKKQU&placement=wwwjqueryscriptnet";
				carbonScript.id = "_carbonads_js";
				document.getElementById("carbon-block").appendChild(carbonScript);
			});
		} catch (error) {
			console.log(error);
		}
	</script>
</body>

</html>