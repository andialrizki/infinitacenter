@extends('frontend.template')

@section('content')
    <div class="blog-page area-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="page-head-blog">
                        <div class="single-blog-page">
                            <!-- search option start -->
                            <form action="#">
                                <div class="search-option">
                                    <input type="text" placeholder="Search...">
                                    <button class="button" type="submit">
                                        <i class="bi bi-search"></i>
                                    </button>
                                </div>
                            </form>
                            <!-- search option end -->
                        </div>
                        <div class="single-blog-page">
                            <!-- recent start -->
                            <div class="left-blog">
                                <h4>recent post</h4>
                                <div class="recent-post">
                                    <!-- start single post -->
                                    @foreach ($recentpost as $item)
                                        <div class="recent-single-post">
                                            <div class="post-img">
                                                <a href="{{ route('news_detail', $item->id) }}">
                                                    <img src="{{ $item->image }}" alt="">
                                                </a>
                                            </div>
                                            <div class="pst-content">
                                                <p><a href="{{ route('news_detail', $item->id) }}"> {{ $item->title }}.</a>
                                                </p>
                                            </div>
                                        </div>
                                    @endforeach


                                    <!-- End single post -->
                                </div>
                            </div>
                            <!-- recent end -->
                        </div>


                    </div>
                </div>
                <!-- End left sidebar -->
                <!-- Start single blog -->
                <div class="col-md-8 col-sm-8 col-xs-12">
                    <div class="row">
                        @foreach ($news as $item)
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="single-blog">
                                    <div class="single-blog-img">
                                        <a href="{{ route('news_detail', $item->id) }}">
                                            <img src="{{ $item->image }}" alt="">
                                        </a>
                                    </div>
                                    <div class="blog-meta">

                                        <span class="date-type">
                                            <i class="bi bi-calendar"></i>{{ $item->date_create }}
                                        </span>
                                    </div>
                                    <div class="blog-text">
                                        <h4>
                                            <a href="#">{{ $item->title }}</a>
                                        </h4>

                                    </div>
                                    <span>
                                        <a href="{{ route('news_detail', $item->id) }}" class="ready-btn">Read more</a>
                                    </span>
                                </div>
                            </div>
                        @endforeach

                        <!-- End single blog -->

                        <!-- End single blog -->
                                              {{ $news->links() }}

                    </div>
                </div>
            </div>
        </div>
    </div><!-- End Blog Page -->
@endsection
