@extends('layout.app')
@section('title', 'Contact')

@section('content')

<!-- CONTACT -->
<section id="contact" class="section-padding bg-light">
	<div class="container">
		<div class="row">
			<div class="col-12 text-center">
				<div class="section-title">
					<h1 class="display-4 text-white fw-bold">Get in touch</h1>
					<div class="line bg-white"></div>
					<p class="text-white">We love to craft digital experiances for brands rather than crap and more lorem ipsums and do crazy skills</p>
				</div>
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col-lg-8">
				<form action="#" class="row g-3 p-lg-5 p-4 bg-white theme-shadow">
					<div class="form-group col-lg-6">
						<input type="text" class="form-control" placeholder="Enter first name" />
					</div>
					<div class="form-group col-lg-6">
						<input type="text" class="form-control" placeholder="Enter last name" />
					</div>
					<div class="form-group col-lg-12">
						<input type="email" class="form-control" placeholder="Enter Email address" />
					</div>
					<div class="form-group col-lg-12">
						<input type="text" class="form-control" placeholder="Enter subject" />
					</div>
					<div class="form-group col-lg-12">
						<textarea type="message" rows="5" class="form-control" placeholder="Enter Message"></textarea>
					</div>
					<div class="form-group col-lg-12 d-grid">
						<button class="btn btn-brand">Send Message</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>

@endsection
