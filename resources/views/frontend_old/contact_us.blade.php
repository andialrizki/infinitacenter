@extends('frontend.template')

@section('content')
    <!-- ======= Contact Section ======= -->
    <div id="contact" class="contact-area">
        <div class="contact-inner">
            <div class="contact-overly"></div>
            <div class="container ">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="section-headline">
                            <h4 style="color: #cd9c72">Contact us</h4>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- Start contact icon column -->
                    <div class="col-md-4">
                        <div class="contact-icon text-center">
                            <div class="single-icon">
                                <i class="bi bi-phone"></i>
                                <p>
                                    Call: {{ $settings->mobile_phone }}<br>
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Start contact icon column -->
                    <div class="col-md-4">
                        <div class="contact-icon text-center">
                            <div class="single-icon">
                                <i class="bi bi-envelope"></i>
                                <p>
                                    Email: {{ $settings->email }}<br>
                                    <span>Web: {{ URL('') }}</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Start contact icon column -->
                    <div class="col-md-4">
                        <div class="contact-icon text-center">
                            <div class="single-icon">
                                <i class="bi bi-geo-alt"></i>
                                <p>
                                    Location: {{ $settings->address }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- Start  contact -->
                    <div class="col-md-6">
                        <div class="form contact-form">
                            <form role="form" action="{{ route('sendMail') }}" method="POST" class="php-email-form">
                                @csrf
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" id="name"
                                        placeholder="Your Name" required>
                                </div>
                                <div class="form-group mt-3">
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="Your Email" required>
                                </div>
                                <div class="form-group mt-3">
                                    <input type="text" class="form-control" name="subject" id="subject"
                                        placeholder="Subject" required>
                                </div>
                                <div class="form-group mt-3">
                                    <textarea class="form-control" style="height: 245px" name="message" rows="5" placeholder="Message" required></textarea>
                                </div>
                                <div class="my-3">
                                    <div class="loading">Loading</div>
                                    <div class="error-message"></div>
                                    <div class="sent-message">Your message has been sent. Thank you!</div>
                                </div>
                                <div class="text-center"><button type="submit">Send Message</button></div>
                            </form>
                        </div>
                    </div>
                    <!-- End Left contact -->
                    <!-- Start Google Map -->
                    <div class="col-md-6">
                        <!-- Start Map -->
                        <div class="row">
                            <div class="col-8">
                                <img id="myImg" src="{{ asset('') }}/storage/photos/contact/hiera-map.png"
                                    height="380" width="100%" alt="">

                            </div>
                            <div class="col-4 justify-content-center pt-3">
                                <div class="col-12 ">
                                    <p style="font-size: 10px"><img
                                            src="{{ asset('') }}/storage/photos/contact/hiera-icon-map-01.png"
                                            alt="" width="30px">
                                        to Toll Serpong- Balaraja</p>
                                </div>
                                <div class="col-12 ">
                                    <p style="font-size: 10px"><img
                                            src="{{ asset('') }}/storage/photos/contact/hiera-icon-map-02.png"
                                            alt="" width="30px">
                                        to AEON Mall BSD</p>
                                </div>
                                <div class="col-12 ">
                                    <p style="font-size: 10px"><img
                                            src="{{ asset('') }}/storage/photos/contact/hiera-icon-map-03.png"
                                            alt="" width="30px">
                                        to Soekarno-Hatta Airport</p>
                                </div>
                                <div class="col-12 ">
                                    <p style="font-size: 10px"><img
                                            src="{{ asset('') }}/storage/photos/contact/hiera-icon-map-04.png"
                                            alt="" width="30px">
                                        to Tanah Abang Station</p>
                                </div>
                            </div>
                        </div>
                        {{-- <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22864.11283411948!2d-73.96468908098944!3d40.630720240038435!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sbg!4v1540447494452"
                            width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></iframe> --}}
                        <!-- End Map -->
                    </div>
                    <!-- End Google Map -->


                </div>
            </div>
        </div>
        {{-- modal image --}}
        <!-- The Modal -->
        <div id="myModal" class="modal">
            <span class="close">&times;</span>
            <img class="modal-content" id="img01">
            <div id="caption"></div>
        </div>
        <!-- End #main -->
    </div><!-- End Contact Section -->
@endsection

@push('js')
    <script>
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
@endpush
