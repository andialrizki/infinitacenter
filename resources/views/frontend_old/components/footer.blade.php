<!-- ======= Footer ======= -->
<footer>
    <div class="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="footer-content">
                        <div class="footer-head">
                            <div class="footer-logo">
                                {{-- <h2><span>e</span>Business</h2> --}}
                                <a href="index.html"><img src="assets/img/hiera/hiera-logo-full.png" style="width: 12em"
                                        alt="" class="img-fluid"></a>
                            </div>

                            <p> Mitbana a joint venture company of Mitsubishi Corporation and Surbana Jurong, together
                                with Sinar Mas Land, are jointly developing one of the largest mixed-use developments in
                                BSD City, Greater Jakarta, Indonesia.</p>
                            <div class="footer-icons">
                                <ul>
                                    <li>
                                        <a href="@if ($settings != null) https://{{ $settings->facebook }}@else - @endif"
                                            target="_blank"><i class="bi bi-facebook"></i></a>
                                    </li>
                                    <li>
                                        <a href="@if ($settings != null) https://{{ $settings->twitter }}@else - @endif"
                                            target="_blank"><i class="bi bi-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href="@if ($settings != null) https://{{ $settings->instagram }}@else - @endif"
                                            target="_blank"><i class="bi bi-instagram"></i></a>
                                    </li>
                                    <li>
                                        <a href="@if ($settings != null) https://{{ $settings->linkedin }}@else - @endif"
                                            target="_blank"><i class="bi bi-linkedin"></i></a>
                                    </li>
                                </ul>
                            </div>

                            <div class="row pt-4 justify-content-start">
                                <p style="text-transform: none; font-size: 14px">Development by:</span>
                                </p>
                                <div class="col-4" style="padding-right: 0 !important; object-fit:cover">
                                    <a href="index.html"><img src="assets/img/hiera/developedby-01.png"
                                            style="height: 100%" alt="" class="img-fluid"></a>
                                </div>
                                <div class="col" style="padding-left: 0 !important">
                                    <a href="index.html"><img src="assets/img/hiera/developedby-02.png"
                                            style="height: 100%" alt="" class="img-fluid"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end single footer -->
                <div class="col-md-4">
                    <div class="footer-content">
                        <div class="footer-head">
                            <h4>information</h4>
                            <p>
                                For more information please contact us below
                            </p>
                            <p>
                                {{ $settings->address }}
                            </p>
                            <div class="footer-contacts">
                                <p><span>Tel:</span> {{ $settings->mobile_phone }}</p>
                                <p><span>Email:</span> {{ $settings->email }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end single footer -->
                <div class="col-md-4">
                    <div class="footer-content">
                        <div class="footer-head">
                            <h4>Instagram</h4>
                            <div class="flicker-img">
                                <a href="#"><img src="assets/img/portfolio/1.jpg" alt=""></a>
                                <a href="#"><img src="assets/img/portfolio/2.jpg" alt=""></a>
                                <a href="#"><img src="assets/img/portfolio/3.jpg" alt=""></a>
                                <a href="#"><img src="assets/img/portfolio/4.jpg" alt=""></a>
                                <a href="#"><img src="assets/img/portfolio/5.jpg" alt=""></a>
                                <a href="#"><img src="assets/img/portfolio/6.jpg" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-area-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="copyright text-center">
                        <p>
                            @if ($settings != null)
                                {{ $settings->footer_text }}
                            @endif
                        </p>
                    </div>
                    <div class="credits">
                        <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=eBusiness
            -->
                        {{-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer><!-- End  Footer -->
