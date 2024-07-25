@extends('layout.app')
@section('title', 'Blog')

@section('content')

<!-- BLOG -->
<section id="blog" class="section-padding">
	<div class="container">
		<div class="row">
			<div class="col-12 text-center">
				<div class="section-title">
					<h1 class="display-4 fw-bold">Recent News & Article</h1>
					<div class="line"></div>
					<p>We love to craft digital experiances for brands rather than crap and more lorem ipsums and do crazy skills</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<div class="team-member image-zoom">
					<div class="image-zoom-wrapper">
						<img src="images/blog/blog-01.jpg" width="300px" height="300px" alt="" />
					</div>
					<h5 class="mt-4">Web Design 2024</h5>
					<p class="">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quos delectus voluptates consequatur, similique libero eligendi.</p>
					<a href="#">Read More</a>
				</div>
			</div>
			<div class="col-md-4">
				<div class="team-member image-zoom">
					<div class="image-zoom-wrapper">
						<img src="images/blog/blog-02.jpg" width="300px" height="300px" alt="" />
					</div>
					<h5 class="mt-4">Digital Marketing 2024</h5>
					<p class="">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quos delectus voluptates consequatur, similique libero eligendi.</p>
					<a href="#">Read More</a>
				</div>
			</div>
			<div class="col-md-4">
				<div class="team-member image-zoom">
					<div class="image-zoom-wrapper">
						<img src="images/blog/blog-04.jpg" width="300px" height="300px" alt="" />
					</div>
					<h5 class="mt-4">Graphic Design 2024</h5>
					<p class="">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quos delectus voluptates consequatur, similique libero eligendi.</p>
					<a href="#">Read More</a>
				</div>
			</div>
		</div>
	</div>
</section>

@endsection