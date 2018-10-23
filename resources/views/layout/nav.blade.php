<!-- Navbar
    ================================================== -->
    <nav class="navbar navbar-expand-lg" style="background-color: black;">
      <div class="container">

        <a class="navbar-brand" href="{{ url('/') }}">
          <img src="~/img/logo-2.png"  alt="logo" class="logo-1">
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="fas fa-bars"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link " href="#home">Home <span class="sr-only">(current)</span></a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href='{{ url("/about") }}'>About</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href='{{ url("portfolio") }}'>Portfolio</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#testimonial">Client</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="{{ url('/articles') }}">Blog</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="./contact.html">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar
    ================================================== -->
