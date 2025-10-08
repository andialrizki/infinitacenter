@extends('frontend.template')

@section('content')
    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="product area-padding">
        <div class="container" data-aos="fade-up">
            <div class="row" data-aos="fade-up" data-aos-delay="200">
                <div class="section-headline">
                    <h4 style="color: #cd9c72">{{ $product->title }}</h2>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="col-12">
                        <img src="{{ $product->image }}" alt="" width="100%" id="mainImage">
                    </div>
                    <div class="row pt-3">
                        <div class="single-blog-img">
                            <div class="product-slider swiper">
                                <div class="swiper-wrapper">
                                    @foreach ($product_menu[$product->title] as $key => $item)
                                        <div class="swiper-slide">
                                            <div class="testimonial-item">
                                                <div id="changeImage{{ $key }}"
                                                    onclick="changeImage('{{ $item->image }}');" class="item-hover">
                                                    <img src="{{ $item->image }}" alt="{{ $item->image }}" class="rounded"
                                                        style="width: 100%">
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">

                    <h5>Featured</h5>
                    <div class="table-responsive">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="d-inline-flex flex-row">
                                            <span class="material-symbols-outlined">
                                                area_chart
                                            </span>
                                            <span>
                                                Land Area :
                                            </span>
                                        </div>

                                    </td>
                                    <td>
                                        <p style="margin-bottom: 0 !important" class="px-2">
                                            @if ($product->land_area != '')
                                                {{ $product->land_area }} m<sup>2</sup>
                                            @else
                                            @endif
                                        </p>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="d-inline-flex flex-row">
                                            <span class="material-symbols-outlined">
                                                apartment
                                            </span>
                                            <span>
                                                Building Area :
                                            </span>
                                        </div>
                                    </td>
                                    <td>
                                        <p style="margin-bottom: 0 !important" class="px-2">
                                            @if ($product->building_area != '')
                                                {{ $product->building_area }} m<sup>2</sup>
                                            @else
                                            @endif
                                        </p>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="d-inline-flex flex-row">
                                            <span class="material-symbols-outlined">
                                                bedroom_parent
                                            </span>
                                            <span>
                                                Bedroom :
                                            </span>
                                        </div>
                                    </td>
                                    <td>
                                        <p style="margin-bottom: 0 !important" class="px-2">
                                            @if ($product->bedroom != '')
                                                {{ $product->bedroom }}
                                            @else
                                            @endif
                                        </p>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="d-inline-flex flex-row">
                                            <span class="material-symbols-outlined">
                                                bathtub
                                            </span>
                                            <span>
                                                Bathroom :
                                            </span>
                                        </div>
                                    </td>
                                    <td>
                                        <p style="margin-bottom: 0 !important" class="px-2">
                                            @if ($product->bathroom != '')
                                                {{ $product->bathroom }}
                                            @else
                                            @endif
                                        </p>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="d-inline-flex flex-row">
                                            <span class="material-symbols-outlined">
                                                window_closed
                                            </span>
                                            <span>
                                                Window :
                                            </span>
                                        </div>
                                    </td>
                                    <td>
                                        <p style="margin-bottom: 0 !important" class="px-2">
                                            @if ($product->jendela != '')
                                                {{ $product->jendela }}
                                            @else
                                            @endif
                                        </p>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="d-inline-flex flex-row">
                                            <span class="material-symbols-outlined">
                                                electric_bolt
                                            </span>
                                            <span>
                                                Electricity :
                                            </span>
                                        </div>
                                    </td>
                                    <td>
                                        <p style="margin-bottom: 0 !important" class="px-2">
                                            @if ($product->listrik != '')
                                                {{ $product->listrik }}
                                            @else
                                            @endif
                                        </p>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="d-inline-flex flex-row">
                                            <span class="material-symbols-outlined">
                                                room_preferences
                                            </span>
                                            <span>
                                                Maid's room :
                                            </span>
                                        </div>
                                    </td>
                                    <td>
                                        <p style="margin-bottom: 0 !important" class="px-2">
                                            @if ($product->kamar_pembantu != '')
                                                {{ $product->kamar_pembantu }} room
                                            @else
                                            @endif
                                        </p>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="d-inline-flex flex-row">
                                            <span class="material-symbols-outlined">
                                                tools_ladder
                                            </span>
                                            <span>
                                                Ladders :
                                            </span>
                                        </div>
                                    </td>
                                    <td>
                                        <p style="margin-bottom: 0 !important" class="px-2">
                                            @if ($product->tangga != '')
                                                {{ $product->tangga }}
                                            @else
                                            @endif
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-inline-flex flex-row">
                                            <span class="material-symbols-outlined">
                                                thermostat_carbon
                                            </span>
                                            <span>
                                                Floor :
                                            </span>
                                        </div>
                                    </td>
                                    <td>
                                        <p style="margin-bottom: 0 !important" class="px-2">
                                            @if ($product->lantai != '')
                                                {{ $product->lantai }}
                                            @else
                                            @endif
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-inline-flex flex-row">
                                            <span class="material-symbols-outlined">
                                                door_front
                                            </span>
                                            <span>
                                                Door :
                                            </span>
                                        </div>
                                    </td>

                                    <td>
                                        <p style="margin-buttom:0 !important" class="px-2">
                                            @if ($product->pintu != '')
                                                {{ $product->pintu }}
                                            @else
                                            @endif
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-inline-flex flex-row">
                                            <span class="material-symbols-outlined">
                                                water_drop
                                            </span>
                                            <span>
                                                Water :
                                            </span>
                                        </div>
                                    </td>
                                    <td>
                                        <p style="margin-bottom: 0 !important" class="px-2">
                                            @if ($product->air != '')
                                                {{ $product->air }}
                                            @else
                                            @endif
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 35%">
                                        <div class="d-inline-flex flex-row">
                                            <span class="material-symbols-outlined">
                                                valve
                                            </span>
                                            <span>
                                                Water Sanitation :
                                            </span>
                                        </div>
                                    </td>
                                    <td>
                                        <p style="margin-bottom: 0 !important" class="px-2">
                                            @if ($product->sanita_air != '')
                                                {{ $product->sanita_air }}
                                            @else
                                            @endif
                                        </p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <h5>
                        Description
                    </h5>
                    <p>{!! $product->desc_id !!}</p>
                </div>
            </div>

        </div>
    </section>
    <!-- End Portfolio Section -->
@endsection


@push('js')
    <script>
        function changeImage(src) {
            document.getElementById('mainImage').src = src
        }
    </script>
@endpush
