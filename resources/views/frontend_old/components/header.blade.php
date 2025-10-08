  <header id="header" class="fixed-top d-flex align-items-center">
      <div class="container d-flex justify-content-between">

          <div class="logo">
              {{-- <h1><a href="index.html"><span>e</span>Business</a></h1> --}}
              <!-- Uncomment below if you prefer to use an image logo -->
              <a href="{{ route('home') }}" class="logo"><img
                      src="@if ($settings != null) {{ $settings->logo }} @endif" alt=""
                      class="img-fluid"></a>
          </div>

          <nav id="navbar" class="navbar">
              <ul>
                  <li><a class="nav-link scrollto @if (Request::segment(1) == null) active @else null @endif"
                          href="{{ route('home') }}">Home</a></li>
                  <li><a class="nav-link scrollto @if (Request::segment(1) == 'about') active @else null @endif"
                          href="{{ route('about') }}">About</a></li>
                  {{-- <li><a class="nav-link scrollto" href="#services">Services</a></li> --}}
                  <li><a class="nav-link scrollto @if (Request::segment(1) == 'gallery') active @else null @endif"
                          href="{{ route('gallery') }}">Property Gallery</a></li>
                  <li><a class="nav-link scrollto @if (Request::segment(1) == 'video') active @else null @endif"
                          href="{{ route('video') }}">Video</a></li>
                  {{-- <li><a class="nav-link scrollto" href="#team">Team</a></li> --}}
                  <li><a class="nav-link @if (Request::segment(1) == 'news') active @else null @endif"
                          href="{{ route('news') }}">News</a></li>
                  {{-- <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
                      <ul>
                          <li><a href="#">Drop Down 1</a></li>
                          <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i
                                      class="bi bi-chevron-right"></i></a>
                              <ul>
                                  <li><a href="#">Deep Drop Down 1</a></li>
                                  <li><a href="#">Deep Drop Down 2</a></li>
                                  <li><a href="#">Deep Drop Down 3</a></li>
                                  <li><a href="#">Deep Drop Down 4</a></li>
                                  <li><a href="#">Deep Drop Down 5</a></li>
                              </ul>
                          </li>
                          <li><a href="#">Drop Down 2</a></li>
                          <li><a href="#">Drop Down 3</a></li>
                          <li><a href="#">Drop Down 4</a></li>
                      </ul>
                  </li> --}}
                  <li><a class="nav-link scrollto @if (Request::segment(1) == 'contact-us') active @else null @endif"
                          href="{{ route('contact-us') }}">Contact</a></li>
              </ul>
              <i class="bi bi-list mobile-nav-toggle"></i>
          </nav><!-- .navbar -->

      </div>
  </header><!-- End Header -->
