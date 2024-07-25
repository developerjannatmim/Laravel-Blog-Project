@extends('layout.app')
@section('title', 'Portfolio')

@section('content')

<!-- PORTFOLIO -->
<section id="portfolio" class="section-padding">
	<div class="container">
		<div class="row">
			<div class="col-12 text-center">
				<div class="section-title">
					<h1 class="display-4 fw-bold">Our Portfolio</h1>
					<div class="line"></div>
					<p>We love to craft digital experiances for brands rather than crap and more lorem ipsums and do crazy skills</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<div class="portfolio-item image-zoom mt-4">
					<div class="image-zoom-wrapper">
						<img src="images/projects/project-02.jpg" alt="" />
					</div>
					<a href="images/projects/project-02.jpg" data-fancybox="gallery" class="iconbox">
						<i class="ri-search-line"></i>
					</a>
				</div>
				<div class="portfolio-item image-zoom mt-4">
					<div class="image-zoom-wrapper">
						<img src="images/projects/project-03.jpg" alt="" />
					</div>
					<a href="images/projects/project-03.jpg" data-fancybox="gallery" class="iconbox">
						<i class="ri-search-line"></i>
					</a>
				</div>
			</div>

			<div class="col-md-4">
				<div class="portfolio-item image-zoom mt-4">
					<div class="image-zoom-wrapper">
						<img src="images/projects/project-04.jpg" alt="" />
					</div>
					<a href="images/projects/project-04.jpg" data-fancybox="gallery" class="iconbox">
						<i class="ri-search-line"></i>
					</a>
				</div>
				<div class="portfolio-item image-zoom mt-4">
					<div class="image-zoom-wrapper">
						<img src="images/projects/project-07.jpg" alt="" />
					</div>
					<a href="images/projects/project-07.jpg" data-fancybox="gallery" class="iconbox">
						<i class="ri-search-line"></i>
					</a>
				</div>
			</div>

			<div class="col-md-4">
				<div class="portfolio-item image-zoom mt-4">
					<div class="image-zoom-wrapper">
						<img src="images/projects/project-05.jpg" alt="" />
					</div>
					<a href="images/projects/project-05.jpg" data-fancybox="gallery" class="iconbox">
						<i class="ri-search-line"></i>
					</a>
				</div>
				<div class="portfolio-item image-zoom mt-4">
					<div class="image-zoom-wrapper">
						<img src="images/projects/project-08.jpg" alt="" />
					</div>
					<a href="images/projects/project-08.jpg" data-fancybox="gallery" class="iconbox">
						<i class="ri-search-line"></i>
					</a>
				</div>
			</div>
		</div>
	</div>
</section>

@endsection