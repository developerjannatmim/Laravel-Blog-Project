@extends('layout.app')
@section('title', 'About')

@section('content')

<!--  ABOUT  -->
<section id="about" class="section-padding">
	<div class="container">
		<div class="row">
			<div class="col-12 text-center">
				<div class="section-title">
					<h1 class="display-4 fw-bold">About us</h1>
					<div class="line"></div>
					<p>We love to craft digital experiances for brands rather than crap and more lorem ipsums and do crazy skills</p>
				</div>
			</div>
		</div>
		<div class="row justify-content-between align-items-center">
			<div class="col-lg-6">
				<img src="images/about/about.jpg" alt="" />
			</div>
			<div class="col-lg-5">
				<h1>About Elixir</h1>
				<p class="mt-3 mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
				<div class="d-flex  pt-4 mb-3">
					<div class="iconbox me-4">
						<i class="ri-mail-send-fill"></i>
					</div>
					<div>
						<h5>We are Awesome</h5>
						<p>Consectetur, adipisicing elit. Explicabo consequatur delectus ullam.</p>
					</div>
				</div>
				<div class="d-flex mb-3">
					<div class="iconbox me-4">
						<i class="ri-user-5-fill"></i>
					</div>
					<div>
						<h5>We are Creative</h5>
						<p>Consectetur, adipisicing elit. Explicabo consequatur delectus ullam.</p>
					</div>
				</div>
				<div class="d-flex">
					<div class="iconbox me-4">
						<i class="ri-rocket-2-fill"></i>
					</div>
					<div>
						<h5>We are Unique</h5>
						<p>Consectetur, adipisicing elit. Explicabo consequatur delectus ullam.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

@endsection
