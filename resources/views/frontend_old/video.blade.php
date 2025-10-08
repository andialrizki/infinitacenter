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
                            <h4 style="color: #cd9c72">Video</h4>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- Start Left Blog -->
                    @foreach ($video as $key => $item)
                        <div class="col-md-6 mt-3">
                            <iframe width="100%" height="317"
                                src="https://www.youtube.com/embed/{{ $item->youtube_id }}" title="YouTube video player"
                                frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                        </div>
                    @endforeach


                    <!-- End Right Blog-->
                </div>
                                      {{ $video->links() }}

            </div>
        </div>
    </div><!-- End Blog Section -->
    <!-- End Portfolio Section -->
@endsection
