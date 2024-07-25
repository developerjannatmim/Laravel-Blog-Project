@extends('layout.app')
@section('title', 'Reviews')

@section('content')

<!-- REVIEW -->
<section id="reviews" class="section-padding bg-light">
	<div class="container">
		<div class="row">
			<div class="col-12 text-center">
				<div class="section-title">
					<h1 class="display-4 fw-bold">Testimonials</h1>
					<div class="line"></div>
					<p>We love to craft digital experiances for brands rather than crap and more lorem ipsums and do crazy skills</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-4 col-sm-6">
				<div class="review">
					<div class="review-head p-4 bg-white theme-shadow">
						<div class="text-warning">
							<i class="ri-star-fill"></i>
							<i class="ri-star-fill"></i>
							<i class="ri-star-fill"></i>
							<i class="ri-star-fill"></i>
							<i class="ri-star-half-fill"></i>
						</div>
						<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corrupti eveniet quis illum.</p>
					</div>
					<div class="review-person mt-4 d-flex align-items-center">
						<img class="rounded-circle" src="images/person/avatar-01.jpg" width="50px" height="50px" alt="" />
						<div class="ms-3">
							<h5>Dianne Russel</h5>
							<small>UX Architect</small>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-sm-6">
				<div class="review">
					<div class="review-head p-4 bg-white theme-shadow">
						<div class="text-warning">
							<i class="ri-star-fill"></i>
							<i class="ri-star-fill"></i>
							<i class="ri-star-fill"></i>
							<i class="ri-star-fill"></i>
							<i class="ri-star-half-fill"></i>
						</div>
						<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corrupti eveniet quis illum.</p>
					</div>
					<div class="review-person mt-4 d-flex align-items-center">
						<img class="rounded-circle" src="images/person/avatar-02.jpg" width="50px" height="50px" alt="" />
						<div class="ms-3">
							<h5>Jon Doe</h5>
							<small>UI Architect</small>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-sm-6">
				<div class="review">
					<div class="review-head p-4 bg-white theme-shadow">
						<div class="text-warning">
							<i class="ri-star-fill"></i>
							<i class="ri-star-fill"></i>
							<i class="ri-star-fill"></i>
							<i class="ri-star-fill"></i>
							<i class="ri-star-half-fill"></i>
						</div>
						<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corrupti eveniet quis illum.</p>
					</div>
					<div class="review-person mt-4 d-flex align-items-center">
						<img class="rounded-circle" src="images/person/avatar-03.jpg" width="50px" height="50px" alt="" />
						<div class="ms-3">
							<h5>John Adi</h5>
							<small>Blogger</small>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

@endsection
