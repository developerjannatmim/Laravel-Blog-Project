<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top">
  <div class="container">
    <a class="navbar-brand" href="#">
      <img class="logo" src="images/logo/main-logo.png" />
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active" href="{{ url('/') }}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/about') }}">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/services') }}">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/portfolio') }}">Portfolio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/reviews') }}">Reviews</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/team') }}">Team</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/contact') }}">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/blog') }}">Blog</a>
        </li>
      </ul>
      <a href="#" class="btn btn-brand ms-lg-3">Download</a>
    </div>
  </div>
</nav>
