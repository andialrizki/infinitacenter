
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>{{ $settings->title }}</title>

  <meta content="{{ $settings->meta_description }}" name="description">
  <meta content="{{ $settings->meta_keyword }}" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset($settings->favicon) }}" rel="icon">
  <link href="{{ asset($settings->favicon) }}" rel="apple-touch-icon">
  {{-- <meta property="og:image" content="https://infinitacenter.com/assets/img/1-infinitacenter-home01.png"> --}}

  <!-- Google Fonts -->
  {{-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet"> --}}

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('assets/css/style.css?v=1.2') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Arsha
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

      {{-- <h1 class="logo me-auto"><a href="index.html">Arsha</a></h1> --}}
      <!-- Uncomment below if you prefer to use an image logo -->
       <a href="/" class="logo me-auto">
         <img src="{{ asset('assets/img/logo.png') }}" alt="Website Logo" class="img-fluid">
       </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <li><a class="nav-link   scrollto" href="#portfolio">Galleries</a></li>
          <li><a class="nav-link scrollto" href="#customer">Customers</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center" style="background-image: url({{ url($banner->image)  }}); background-size: cover; 
  background-position: top center;
  background-repeat: no-repeat; object-fit: fit!important; height:60vh%;">

    <div class="container">
      <div class="row">
        <div class="col-lg-7 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          <h1>{!! $banner->desc !!}</h1>
          <div class="d-flex justify-content-center justify-content-lg-start">
            <a href="#about" class="btn-get-started scrollto">Get Started</a>
          </div>
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">


    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">
        <div class="row content">
          <div class="col-12 text-center">
            <figure class="stack stack-fanout px-3 pb-3">
              <img src="{{ asset('assets/img/1-infinitacenter-home01.png') }}">
              <img src="{{ asset('assets/img/1-infinitacenter-home03.png') }}">
              <img src="{{ asset('assets/img/1-infinitacenter-home02.png') }}">
            </figure>
            <p class="px-3">
              Life is not always easy. Everyone has a battle to fight and hurdles to overcome. Whether you are 
              struggling with anxiety, depression, aggression, or any other issues, you have to know that there is always 
              hope to find meaning and happiness in your life. Sometimes you might need to seek out professional help 
              to give you a suitable strategy to overcome you hurdles.
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us section-bg">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

            <div class="content">
              <h3>At a glance, let us <strong>introduce what we do</strong></h3>
              <p>
                We build Infinita Center to build up awareness about mental health issues not only in neurotypical individuals but also neuro-divergent individuals. We embrace every uniqueness in every individuals that seek our help. We are a team of psychologists and behavioral therapists who will be willingly to help your problems therefore you will function better in society and have meaningful well being.
              </p>
            </div>

            <div class="accordion-list">
              <ul>
                @foreach($company as $key => $item)
                  @php 
                    $no = $key + 1
                  @endphp
                  <li>
                    <a data-bs-toggle="collapse" data-bs-target="#accordion-list-{{ $no }}" class="collapsed"><span>0{{ $no }}.</span> {{$item->title}} <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                    <div id="accordion-list-{{ $no }}" class="collapse" data-bs-parent=".accordion-list">
                      <p>
                        {{ strip_tags($item->desc) }}
                      </p>
                    </div>
                  </li>
                @endforeach

              </ul>
            </div>

          </div>

          <div class="col-lg-5 justify-content-center align-items-stretch order-1 order-lg-2"data-aos="zoom-in" data-aos-delay="150">
            <figure class="stack-2 stack-2-fanout pb-3">
              <img src="{{ asset('assets/img/1-infinitacenter-home04.png') }}">
              <img src="{{ asset('assets/img/1-infinitacenter-home05.png') }}">
            </figure>
          </div>
        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Our <strong>Services</strong></h2>
          <p>
            Our psychology company provides a wide range of services, including individual counseling, 
            group therapy, psychological assessments, and workshops focused on personal growth 
            and mental well-being
          </p>
        </div>

        <div class="row">

          <div class="col-12">
            <div class="services-slider swiper" data-aos="zoom-in">
              <div class="swiper-wrapper mb-3">
                @foreach($services as $item)
                  <div class="swiper-slide d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box my-2 mx-2">
                      <div class="icon"><i class="bx {{$item->icon}}"></i></div>
                      <h4><a href="">{{ $item->title }}</a></h4>
                      <p>
                        {{ strip_tags($item->desc) }}
                      </p>
                    </div>
                  </div>
                @endforeach
              </div>
              <div class="mt-5 swiper-pagination"></div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="row">
          <div class="col-lg-9 text-center text-lg-start">
            <h3>Call to Action</h3>
            <p>
              How we can help your problems with customized solution and intervention plan tailored specifically based on your personality and needs? Our team of experts will work personally with you through the end of your intervention journey.
            </p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle scrollto" href="#contact">Call to Action</a>
          </div>
        </div>

      </div>
    </section><!-- End Cta Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Our <strong>Galleries</strong></h2>
          <p>
            Here are some of our activities includes our neuro-diverse children's activities, our social therapy sessions, out webinars, seminars, and workshops.
          </p>
        </div>

        <ul id="portfolio-flters" class="d-flex flex-column flex-sm-row justify-content-center" data-aos="fade-up" data-aos-delay="100">
          <li data-filter="*" class="filter-active">All</li>
          @foreach($gallery_category as $item)
            <li data-filter=".filter-{{ $item->id }}">{{ $item->title }}</li>
          @endforeach
        </ul>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
          @foreach($gallery as $item)
            <div class="col-lg-4 col-md-6 portfolio-item filter-{{ $item->category_id }}">
              <div class="portfolio-img"><img src="{{ url($item->image) }}" class="img-fluid" alt=""></div>
              <div class="portfolio-info">
                <p>{{$item->title}}</p>
                <a href="{{ url($item->image) }}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="{{$item->title}}"><i class="bx bx-zoom-in"></i></a>
              </div>
            </div>
          @endforeach

        </div>

      </div>
    </section><!-- End Portfolio Section -->


    <!-- ======= Customer Section ======= -->
    <section id="customer" class="customer">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Our <strong>Customers</strong></h2>
          <p>
            Our customer loyality is a testament to our unwavering commitment to providing exceptional products and 
            services, building strong relationships, and consistently exceeding our customers expectations
          </p>
        </div>

        <div class="row">
          <div class="col-12">
            <div class="clients-slider swiper" data-aos="fade-up" data-aos-delay="100">
              <div class="swiper-wrapper">
                @foreach($client as $item)
                <div
                  class="swiper-slide text-center d-flex justify-content-center align-self-center">
                  <img src="{{ $item->image }}" alt="{{ $item->title }}" class="img-fluid">
                  
                </div><!-- End testimonial item -->
                @endforeach
              </div>
              <div class="mt-5 swiper-pagination"></div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact <strong>Us</strong></h2>
          <p>
            If you have any questions, inquiries, or would like to learn more about our service, please feel free to 
            contact us through the provided channels, and our dedicated learn will be happy to assist you
          </p>
        </div>

        <div class="row">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>
                  {{ $settings->address }}
                </p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Website/eMail:</h4>
                <p>
                  www.infinitacenter.com
                  <br>
                  {{ $settings->email }}
                </p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Whatsapp:</h4>
                <p>{{ $settings->mobile_phone }}</p>
              </div>
              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15864.652829904793!2d106.6380194!3d-6.2422102!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69fbf3ea31d7cf%3A0xc495e98772f2be67!2sInfinita%20Consulting!5e0!3m2!1sen!2sid!4v1691399214931!5m2!1sen!2sid" width="400" height="300" style="border:0; width: 100%; height: 290px;" allowfullscreen loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="{{ route('sendMail') }}" method="post" role="form" class="php-email-form">
              @csrf
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="name">Your Name</label>
                  <input type="text" name="name" class="form-control" id="name" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="name">Your e-mail</label>
                  <input type="email" class="form-control" name="email" id="email" required>
                </div>
              </div>
              <div class="form-group">
                <label for="name">Subject</label>
                <input type="text" class="form-control" name="subject" id="subject" required>
              </div>
              <div class="form-group">
                <label for="name">Message</label>
                <textarea class="form-control" name="message" rows="10" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Submit</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">


    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6 footer-contact">
            <img src="{{ asset('assets/img/logo.png') }}" alt="Website Logo" class="img-fluid" style="max-width: 60%; margin-left: -3px">
            <p class="mt-1">
              Infinita Center is a psychological practice that offers psychoterapy, counseling, and psycho-educational 
              intervention based in Gading Serpong, Tangerang.
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><a href="#hero" class="scrollto">Home</a></li>
              <li><a href="#about" class="scrollto">About us</a></li>
              <li><a href="#services" class="scrollto">Services</a></li>
              <li><a href="/">Blog</a></li>
              <li><a href="/">Terms of service</a></li>
              <li><a href="/">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><a href="#services" class="scrollto">Assessment</a></li>
              <li><a href="#services" class="scrollto">Counseling</a></li>
              <li><a href="#services" class="scrollto">Psychotherapy</a></li>
              <li><a href="#services" class="scrollto">Neurodivergent</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-links">
            <h4>Our Social Networks</h4>
            <p>Presented below are the various social networks where you can connect with us</p>
            <div class="social-links mt-3">
              <a href="{{ $settings->twitter }}" target="_blank" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="{{ $settings->facebook }}" target="_blank" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="{{ $settings->instagram }}" target="_blank" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="{{ $settings->skype }}" target="_blank" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="https://www.linkedin.com/company/infinita-consulting" target="_blank" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container footer-bottom clearfix">
      <div class="copyright">
        {{ $settings->footer_text }}
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/ -->
        {{-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> --}}
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/waypoints/noframework.waypoints.js') }}"></script>
  <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('assets/js/main.js?v=1') }}"></script>
  <script type="text/javascript">
        function sendMail() {
            var url = "{{ route('sendMail') }}"
            var name = document.getElementById('name').value;
            var email = document.getElementById('email').value;
            var subject = document.getElementById('subject').value;
            var MAILmessage = document.getElementById('MAILmessage').value;

            if (name == '' || email == '' || subject == '' || MAILmessage == '') {
                Swal.fire({
                    title: 'Error!',
                    text: 'Silahkan Isi Semua form',
                    icon: 'error',
                    confirmButtonText: 'Oke'
                })
            } else {
                $.ajax({
                    type: 'POST',
                    url: url,
                    data: {
                        _token: "{{ csrf_token() }}",
                        name: name,
                        email: email,
                        subject: subject,
                        message: MAILmessage,
                    },
                    success: function(data) {

                        Swal.fire({
                            title: 'Berhasil!',
                            text: 'Email Send successfully!',
                            icon: 'success',
                            confirmButtonText: 'Oke'
                        });

                        location.reload();

                    }

                });
            }

        }
  </script>
</body>

</html>