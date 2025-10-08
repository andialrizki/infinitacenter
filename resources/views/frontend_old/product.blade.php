@extends('frontend.template')
@section('content')
    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Poduct</h2>
                <p>Check our Product</p>
            </div>

            <div class="row" data-aos="fade-up" data-aos-delay="100">
                <div class="col-lg-12 d-flex justify-content-center">
                    <ul id="portfolio-flters">
                        <li data-filter="*" class="filter-active">All</li>

                    </ul>
                </div>
            </div>

            <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
                @foreach ($product_all as $item)
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xm-6 portfolio-item filter-app">
                        <img src="{{ $item->image }}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>{{ $item->title }}</h4>
                            <p>App</p>
                            <a href="{{ $item->image }}" data-gallery="portfolioGallery"
                                class="portfolio-lightbox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
                            <a href="{{ route('product_detail', $item->id) }}" class="details-link" title="More Details"><i
                                    class="bx bx-link"></i></a>
                        </div>
                    </div>
                @endforeach




            </div>

        </div>
    </section><!-- End Portfolio Section -->
@endsection
