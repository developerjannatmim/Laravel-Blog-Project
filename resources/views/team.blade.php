@extends('layout.app')
@section('title', 'Team')

@section('content')

<!-- TEAM -->
<section id="team" class="section-padding">
	<div class="container">
		<div class="row">
			<div class="col-12 text-center">
				<div class="section-title">
					<h1 class="display-4 fw-bold">Team Members</h1>
					<div class="line"></div>
					<p>We love to craft digital experiances for brands rather than crap and more lorem ipsums and do crazy skills</p>
				</div>
			</div>
		</div>
		<div class="row g-4 text-center">
			<div class="col-md-4">
				<div class="team-member image-zoom">
					<div class="image-zoom-wrapper">
						<img src="images/team/member-01.jpg" width="300px" height="300px" alt="" />
					</div>
					<div class="team-member-content">
						<h4 class="text-white">Merine</h4>
						<p class="mb-0 text-white">Webflow Artist</p>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="team-member image-zoom">
					<div class="image-zoom-wrapper">
						<img src="images/team/member-02.jpg" width="300px" height="300px" alt="" />
					</div>
					<div class="team-member-content">
						<h4 class="text-white">Jon Doe</h4>
						<p class="mb-0 text-white">Programmer</p>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="team-member image-zoom">
					<div class="image-zoom-wrapper">
						<img src="images/team/member-03.jpg" width="300px" height="300px" alt="" />
					</div>
					<div class="team-member-content">
						<h4 class="text-white">Jasica</h4>
						<p class="mb-0 text-white">Writer</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

@endsection