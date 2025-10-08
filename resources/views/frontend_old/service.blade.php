@extends('frontend.template')
@section('content')
    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Services</h2>
                <p>Check our Services</p>
            </div>

            <div class="row content">
                @foreach ($service as $item)
                    <div class="col-lg-3 col-md-3 col-sm-12 d-flex align-items-stretch" data-aos="zoom-in"
                        data-aos-delay="100">
                        <div class="icon-box" style="min-width: 100%; margin-top: 10px">
                            <div class="icon"><img src="{{ $item->image }}" alt=""></div>
                            <h4><a href="">{{ $item->title }}</a></h4>
                            {!! $item->desc_en !!}
                        </div>
                    </div>
                @endforeach

            </div>

        </div>
    </section><!-- End Services Section -->
@endsection
