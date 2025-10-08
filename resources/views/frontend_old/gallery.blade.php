@extends('frontend.template')

@section('content')
    <!-- ======= Portfolio Section ======= -->
    <!-- ======= Property Gallery Section ======= -->
    <div id="property_gallery" class="blog-area">
        <div class="blog-inner">
            <div class="blog-overly"></div>
            <div class="container ">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="section-headline">
                            <h4 style="color: #cd9c72">Property Gallery</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- Start Left Blog -->
                    @foreach ($product as $key => $item)
                        <div class="col-md-4 col-sm-12 col-xs-12">
                            <div class="single-blog border rounded">
                                <div class="single-blog-img">
                                    <div class="property_gallery-slider swiper">
                                        <div class="swiper-wrapper">
                                            @foreach ($product_menu[$item->title] as $slide)
                                                <div class="swiper-slide">
                                                    <div class="testimonial-item">
                                                        <img src="{{ $slide->image }}" alt="" class="rounded-top"
                                                            style="width: 100%">
                                                    </div>
                                                </div><!-- End testimonial item -->
                                            @endforeach
                                        </div>
                                        <div class="swiper-pagination"></div>
                                    </div>
                                </div>

                                <div class="blog-text px-4 pt-3">
                                    <h4 style="margin-bottom: 5px">
                                        <a href="{{ route('product_detail', $item->id) }}">
                                            @if ($item->title != '')
                                                {{ $item->title }} 
                                            @else
                                                ''
                                            @endif
                                        </a>
                                    </h4>
                                    {{-- <p>
                                        @if ($item->desc_id != '')
                                            {{ $item->desc_id }}
                                        @else
                                        @endif
                                    </p> --}}
                                    <span class="rounded text-danger">Building Area :
                                        @if ($item->building_area != ' ')
                                            {{ $item->building_area }} m<sup>2</sup>
                                        @else
                                        @endif |
                                        Land Area : @if ($item->land_area != '')
                                            {{ $item->land_area }} m<sup>2</sup>
                                        @else
                                        @endif
                                    </span>

                                </div>
                                <div class="pb-4 px-4 pt-2">
                                    <div class="row">
                                        <div class="col-5" style="padding-right: 0 !important">
                                            <div class="d-flex">

                                                <span class="material-symbols-outlined">
                                                    bed
                                                </span>
                                                <p style="margin-bottom: 0 !important" class="px-2">
                                                    @if ($item->bedroom != '')
                                                        {{ $item->bedroom }} Bedroom
                                                    @else
                                                    @endif
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-5 col-offsite-2" style="padding-left: 0 !important">
                                            <div class="d-flex">

                                                <span class="material-symbols-outlined">
                                                    bathtub
                                                </span>
                                                <p style="margin-bottom: 0 !important" class="px-2">


                                                    @if ($item->bathroom != '')
                                                        {{ $item->bathroom }} Bathroom
                                                    @else
                                                    @endif
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                            <!-- Start single blog -->
                        </div>
                    @endforeach


                    <!-- End Right Blog-->
                </div>
            </div>
        </div>
    </div><!-- End Blog Section -->
    <!-- End Portfolio Section -->
@endsection
