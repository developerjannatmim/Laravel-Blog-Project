@extends('layout.app')
@section('title', 'Home')

@section('content')

<!--  HERO  -->
<section id="hero" class="min-vh-100 d-flex align-items-center text-center">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h1 class="text-uppercase text-white fw-bold display-1">Welcome to elixir</h1>
        <h5 class="text-white mt-3 mb-4">WE ARE TEAM OF TALENTED DESIGNERS MAKING WEBSITES WITH BOOTSTRAP</h5>
        <div>
          <a href="#" class="btn btn-brand me-2">Get Started</a>
          <a href="#" class="btn btn-light ms-2">Our Portfolio</a>
        </div>
      </div>
    </div>
  </div>
</section>

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

<!-- SERVICES -->
<section id="services" class="section-padding border-top">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <div class="section-title">
          <h1 class="display-4 fw-bold">Awesome services</h1>
          <div class="line"></div>
          <p>We love to craft digital experiances for brands rather than crap and more lorem ipsums and do crazy skills</p>
        </div>
      </div>
    </div>
    <div class="row g-4 text-center">
      <div class="col-lg-4 col-sm-6">
        <div class="service p-lg-5 p-4 theme-shadow">
          <div class="iconbox">
            <i class="ri-stack-fill"></i>
          </div>
          <h5 class="mt-4 mb-3">UX Design</h5>
          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laudantium, odio.</p>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6">
        <div class="service p-lg-5 p-4 theme-shadow">
          <div class="iconbox">
            <i class="ri-stack-fill"></i>
          </div>
          <h5 class="mt-4 mb-3">UI Design</h5>
          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laudantium, odio.</p>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6">
        <div class="service p-lg-5 p-4 theme-shadow">
          <div class="iconbox">
            <i class="ri-stack-fill"></i>
          </div>
          <h5 class="mt-4 mb-3">Logo Design</h5>
          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laudantium, odio.</p>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6">
        <div class="service p-lg-5 p-4 theme-shadow">
          <div class="iconbox">
            <i class="ri-stack-fill"></i>
          </div>
          <h5 class="mt-4 mb-3">Branding</h5>
          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laudantium, odio.</p>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6">
        <div class="service p-lg-5 p-4 theme-shadow">
          <div class="iconbox">
            <i class="ri-stack-fill"></i>
          </div>
          <h5 class="mt-4 mb-3">Programming</h5>
          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laudantium, odio.</p>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6">
        <div class="service p-lg-5 p-4 theme-shadow">
          <div class="iconbox">
            <i class="ri-stack-fill"></i>
          </div>
          <h5 class="mt-4 mb-3">Digital Marketing</h5>
          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laudantium, odio.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- COUNTER -->
<section id="counter" class="section-padding">
  <div class="container text-center">
    <div class="row g-4">
      <div class="col-lg-3 col-sm-6">
        <h1 class="text-white display-4">90,00+</h1>
        <h6 class="text-uppercase mb-0 text-white mt-3">Total Downloads</h6>
      </div>
      <div class="col-lg-3 col-sm-6">
        <h1 class="text-white display-4">58K+</h1>
        <h6 class="text-uppercase mb-0 text-white mt-3">Trusted Clients</h6>
      </div>
      <div class="col-lg-3 col-sm-6">
        <h1 class="text-white display-4">5M+</h1>
        <h6 class="text-uppercase mb-0 text-white mt-3">Themes Designed</h6>
      </div>
      <div class="col-lg-3 col-sm-6">
        <h1 class="text-white display-4">100+</h1>
        <h6 class="text-uppercase mb-0 text-white mt-3">Team Members</h6>
      </div>
    </div>
  </div>
</section>

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