@if (Request::segment(1) != '')
    <div id="hero" style="max-height: 70vh !important;margin-bottom:40px">
        @foreach ($banner as $item)
            <img src="{{ asset($item->image) }}" style="height: 100%; width:  100%; object-fit:cover;" alt="{{Request::segment(1)}}"
                srcset="">
        @endforeach
    </div>
@else
    <section id="hero">
        <!-- Slide 1 -->
        
            <div class="hero-container">
                <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel"
                    data-bs-interval="5000">

                    <ol id="hero-carousel-indicators" class="carousel-indicators"></ol>

                    <div class="carousel-inner" role="listbox">
                        @foreach ($banner as $items)
                            <div class="carousel-item @if ($items->index == 0) active @endif"
                                style="background-image: url({{ $items->image }})">
                                <div class="carousel-container">
                                    <div class="container">
                                        <h2 class="animate__animated animate__fadeInDown">{{ $items->title }}</h2>
                                        <p class="animate__animated animate__fadeInUp">{{ $items->desc }}</p>
                                        <a href="{{ $items->content_url }}"
                                            class="btn-get-started scrollto animate__animated animate__fadeInUp">Get
                                            Started</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach




                    </div>

                    <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
                    </a>

                    <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
                    </a>

                </div>
            </div>
      
    </section><!-- End Hero Section -->
@endif
