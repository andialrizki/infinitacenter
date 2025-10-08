@extends('backend.layout.main')

@section('content')
    <h3>
        Webmin Profile</h3>

    <div class="row">
        {{-- <div class="col-md-3">
            <div class="card-body">
                <div class="card">
                    <div class="col-12 mb-2">
                        <div class="border rounded p-2">
                            <h4 class="mb-1">Featured Image</h4>
                            <div class="media flex-column">
                                <img src="{{ asset('favicon.ico') }}" id="logoImage" class="rounded mr-2 mb-1 mb-md-0"
                                    style="object-fit: fill" width="110" alt="Blog Featured Image" />
                                <div class="media-body">
                                    <small class="text-muted">Silahkan upload file
                                        berukuran 1200 x 600 pixel</small>
                                    <div class="d-inline-block">
                                        <div class="input-group">
                                            <span class="input-group-btn">
                                                <a id="lfm" data-input="thumbnail" data-preview="holder"
                                                    class="btn btn-primary"
                                                    style="border-top-right-radius: 0px;border-bottom-right-radius: 0px;">
                                                    <i class="fa fa-picture-o"></i> Choose
                                                </a>
                                            </span>
                                            <input id="thumbnail" class="form-control" type="text" readonly=""
                                                onchange="getElementImage()" name="images" required>
                                            @if ($errors->has('images'))
                                                <div class="text-danger">
                                                    {{ $errors->first('images') }}
                                                </div>
                                            @endif
                                        </div>
                                        <img id="holder" style="margin-top:15px;max-height:100px;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div> --}}

        <div class=" col-12">
            <div class="card-body">
                <div class="col-md-12 col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">General</h4>
                        </div>
                        <div class="card-body">
                            <form class="form" novalidate id="formData">
                                @csrf
                                <input type="text" hidden id="settingsId"
                                    value="@if ($settings != null) {{ $settings->id }} @endif">
                                <div class="form-group">
                                    <label class="form-label" for="title">Title</label>
                                    <input type="text" id="title" name="title" class="form-control"
                                        placeholder="Title Website" aria-label="title" aria-describedby="title"
                                        value="@if ($settings != null) {{ $settings->title }} @endif" required />
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-6 ">
                                            <label class="form-label" for="telephone">Telephone</label>
                                            <input type="text" id="telephone" class="form-control"
                                                onkeypress="return onlyNumberKey(event)" placeholder="Telephone"
                                                aria-label="telephone" name="telephone"
                                                value="@if ($settings != null) {{ $settings->telephone }} @endif"
                                                aria-describedby="telephone" required />
                                        </div>
                                        <div class="col-6 ">
                                            <label class="form-label" for="fax">Fax</label>
                                            <input type="text" id="fax" class="form-control" placeholder="Fax"
                                                name="fax" aria-label="fax" aria-describedby="fax"
                                                value="@if ($settings != null) {{ $settings->fax }} @endif"
                                                required />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-6 ">
                                            <label class="form-label" for="email">Email</label>
                                            <input type="text" id="email" name="email" class="form-control"
                                                placeholder="Email" aria-label="email" aria-describedby="email"
                                                value="@if ($settings != null) {{ $settings->email }} @endif"
                                                required />
                                        </div>
                                        <div class="col-6 ">
                                            <label class="form-label" for="email_2">Email 2</label>
                                            <input type="text" id="email_2" name="email_2" class="form-control"
                                                placeholder="Email 2" aria-label="email_2" aria-describedby="email_2"
                                                value="@if ($settings != null) {{ $settings->email_2 }} @endif"
                                                required />
                                        </div>

                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="mobile_phone">Mobile Phone</label>
                                    <input type="text" id="mobile_phone" class="form-control" placeholder="Mobile Phone"
                                        aria-label="Mobile Phone" name="mobile_phone"
                                        onkeypress="return onlyNumberKey(event)"
                                        value="@if ($settings != null) {{ $settings->mobile_phone }} @endif"
                                        aria-describedby="Mobile Phone" required />
                                </div>

                                {{-- maps --}}
                                <div class="form-group col-md-12 mb-2">
                                    <label for="pac-input">@lang('web.address')</label>
                                    <input type="text" id="pac-input" class="form-control" name="address"
                                        value="{{ isset($row) && !is_null($row->location) ? $row->location->address : old('address') }}">
                                    @error('address')
                                        <small class=" text text-danger" role="alert">
                                            <strong>{{ $message }}
                                            </strong>
                                        </small>
                                    @enderror
                                    <input type="hidden" name="latitude" id="latitude"
                                        value="@if ($settings != null) {{ $settings->latitude }} @endif" />
                                    <input type="hidden" name="longitude" id="longitude"
                                        value="@if ($settings != null) {{ $settings->longitude }} @endif" />
                                </div>
                                <div class="container mt-5">
                                    <div id="map" style="height: 40em; width: 100%"></div>
                                </div>
                                {{-- end maps --}}

                                <div class="form-group">
                                    <label class="form-label" for="address">Address</label>
                                    <textarea id="address" class="form-control" placeholder="Address" aria-label="address" aria-describedby="address"
                                        name="address" required /> @if ($settings != null)
{{ $settings->address }}
@endif
</textarea>
                                </div>

                                <div class="form-group">
                                    <label class="form-label" for="address_2">Address 2</label>
                                    <textarea id="address_2" name="address_2" class="form-control" placeholder="Address 2" aria-label="address_2"
                                        aria-describedby="address_2" required /> @if ($settings != null)
{{ $settings->address_2 }}
@endif
</textarea>
                                </div>

                                <hr>

                                <h4 class="card-title">Tag Website</h4>
                                <div class="form-group">
                                    <label class="form-label" for="caption">Caption</label>
                                    <input type="text" id="caption" class="form-control" placeholder="caption"
                                        aria-label="caption" name="caption" aria-describedby="caption" required
                                        value="@if ($settings != null) {{ $settings->caption }} @endif" />
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="meta_description">Meta Description</label>
                                    <input type="text" id="meta_description" name="meta_description"
                                        class="form-control" placeholder="meta_description" aria-label="meta_description"
                                        value="@if ($settings != null) {{ $settings->meta_description }} @endif"
                                        aria-describedby="meta_description" required />
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="meta_keyword">Meta Keyword</label>
                                    <input type="text" id="meta_keyword" class="form-control"
                                        value="@if ($settings != null) {{ $settings->meta_keyword }} @endif"
                                        placeholder="meta_keyword" aria-label="meta_keyword" name="meta_keyword"
                                        aria-describedby="meta_keyword" required />
                                </div>

                                <div class="form-group">
                                    <label class="form-label" for="footer_text">Footer Text</label>
                                    <textarea id="footer_text" class="form-control" placeholder="Footer Text" name="footer_text"
                                        aria-label="footer_text" aria-describedby="footer_text" required />
@if ($settings != null)
{{ $settings->footer_text }}
@endif
</textarea>
                                </div>

                                <div class="form-group">
                                    <label class="form-label" for="contactus">Contact Us</label>
                                    <input type="text" id="contactus" class="form-control"
                                        value="@if ($settings != null) {{ $settings->contactus }} @endif"
                                        placeholder="contactus" aria-label="contactus" name="contactus"
                                        aria-describedby="contactus" required />
                                </div>

                                <div class="form-group">
                                    <label class="form-label" for="website">Website</label>
                                    <input type="text" id="website" class="form-control"
                                        value="@if ($settings != null) {{ $settings->website }} @endif"
                                        placeholder="website" aria-label="website" name="website"
                                        aria-describedby="website" required />
                                </div>

                                <div class="form-group">
                                    <label class="form-label" for="facebook">Facebook</label>
                                    <input type="text" id="facebook" class="form-control"
                                        value="@if ($settings != null) {{ $settings->facebook }} @endif"
                                        placeholder="facebook" aria-label="facebook" name="facebook"
                                        aria-describedby="facebook" required />
                                </div>

                                <div class="form-group">
                                    <label class="form-label" for="twitter">twitter</label>
                                    <input type="text" id="twitter" class="form-control"
                                        value="@if ($settings != null) {{ $settings->twitter }} @endif"
                                        placeholder="twitter" aria-label="twitter" name="twitter"
                                        aria-describedby="twitter" required />
                                </div>

                                <div class="form-group">
                                    <label class="form-label" for="youtube">youtube</label>
                                    <input type="text" id="youtube" class="form-control"
                                        value="@if ($settings != null) {{ $settings->youtube }} @endif"
                                        placeholder="youtube" aria-label="youtube" name="youtube"
                                        aria-describedby="youtube" required />
                                </div>

                                <div class="form-group">
                                    <label class="form-label" for="whatsapp">whatsapp</label>
                                    <input type="text" id="whatsapp" class="form-control"
                                        value="@if ($settings != null) {{ $settings->whatsapp }} @endif"
                                        placeholder="whatsapp" aria-label="whatsapp" name="whatsapp"
                                        aria-describedby="whatsapp" required />
                                </div>

                                <div class="form-group">
                                    <label class="form-label" for="pinterest">Pinterest</label>
                                    <input type="text" id="pinterest" class="form-control"
                                        value="@if ($settings != null) {{ $settings->pinterest }} @endif"
                                        placeholder="pinterest" aria-label="pinterest" name="pinterest"
                                        aria-describedby="pinterest" required />
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="instagram">Instagram</label>
                                    <input type="text" id="instagram" class="form-control"
                                        value="@if ($settings != null) {{ $settings->instagram }} @endif"
                                        placeholder="instagram" aria-label="instagram" name="instagram"
                                        aria-describedby="instagram" required />
                                </div>

                                <div class="form-group">
                                    <label class="form-label" for="skype">Skype</label>
                                    <input type="text" id="skype" class="form-control"
                                        value="@if ($settings != null) {{ $settings->skype }} @endif"
                                        placeholder="skype" aria-label="skype" name="skype" aria-describedby="skype"
                                        required />
                                </div>

                                <div class="form-group">
                                    <label class="form-label" for="caption_skype">Caption Skype</label>
                                    <input type="text" id="caption_skype" class="form-control"
                                        value="@if ($settings != null) {{ $settings->caption_skype }} @endif"
                                        placeholder="caption_skype" aria-label="caption_skype" name="caption_skype"
                                        aria-describedby="caption_skype" required />
                                </div>

                                <div class="form-group">
                                    <label class="form-label" for="paypal_id">Paypal ID</label>
                                    <input type="text" id="paypal_id" class="form-control"
                                        value="@if ($settings != null) {{ $settings->paypal_id }} @endif"
                                        placeholder="paypal_id" aria-label="paypal_id" name="paypal_id"
                                        aria-describedby="paypal_id" required />
                                </div>

                                <div class="form-group">
                                    <label class="form-label" for="currency">Currency</label>
                                    <input type="text" id="currency" class="form-control"
                                        value="@if ($settings != null) {{ $settings->currency }} @endif"
                                        placeholder="currency" aria-label="currency" name="currency"
                                        aria-describedby="currency" required />
                                </div>

                                <div class="col-12 mb-2">
                                    <div class="border rounded p-2">
                                        <h4 class="mb-1">Brand Image</h4>
                                        <div class="media flex-column flex-md-row">
                                            <img src="@if ($settings != null) {{ asset($settings->logo) }} @endif"
                                                id="logoImage" class="rounded mr-2 mb-1 mb-md-0" style="object-fit: fill"
                                                height="60" alt="Brand Image" />
                                            <div class="media-body">
                                                <small class="text-muted">Silahkan upload file
                                                    berukuran 1200 x 600 pixel</small>
                                                <div class="d-inline-block">
                                                    <div class="input-group">
                                                        <span class="input-group-btn">
                                                            <a id="lfm" data-input="thumbnail"
                                                                data-preview="holder" class="btn btn-primary"
                                                                style="border-top-right-radius: 0px;border-bottom-right-radius: 0px;">
                                                                <i class="fa fa-picture-o"></i> Choose
                                                            </a>
                                                        </span>
                                                        <input id="thumbnail" class="form-control" type="text"
                                                            value="@if ($settings != null) {{ asset($settings->logo) }} @endif"
                                                            readonly="" onchange="getElementImage()" name="logo"
                                                            required>
                                                        @if ($errors->has('images'))
                                                            <div class="text-danger">
                                                                {{ $errors->first('images') }}
                                                        @endif
                                                    </div>
                                                </div>
                                                <img id="holder" style="margin-top:15px;max-height:100px;">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 mb-2">
                                    <div class="border rounded p-2">
                                        <h4 class="mb-1">Favicon Image</h4>
                                        <div class="media flex-column flex-md-row">
                                            <img src="@if ($settings != null) {{ asset($settings->favicon) }} @endif"
                                                id="faviconImage" class="rounded mr-2 mb-1 mb-md-0"
                                                style="object-fit: fill" height="60" alt="Favicon Image" />
                                            <div class="media-body">
                                                <small class="text-muted">Silahkan upload file
                                                    berukuran 1200 x 600 pixel</small>
                                                <div class="d-inline-block">
                                                    <div class="input-group">
                                                        <span class="input-group-btn">
                                                            <a id="lfm2" data-input="favicon" data-preview="holder"
                                                                class="btn btn-primary"
                                                                style="border-top-right-radius: 0px;border-bottom-right-radius: 0px;">
                                                                <i class="fa fa-picture-o"></i> Choose
                                                            </a>
                                                        </span>
                                                        <input id="favicon" class="form-control" type="text"
                                                            readonly=""
                                                            value="@if ($settings != null) {{ asset($settings->favicon) }} @endif"
                                                            onchange="getElementFavicon()" name="favicon" required>
                                                        @if ($errors->has('images'))
                                                            <div class="text-danger">
                                                                {{ $errors->first('images') }}
                                                            </div>
                                                        @endif
                                                    </div>
                                                    <img id="holder" style="margin-top:15px;max-height:100px;">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-12">
                                        <button type="button" class="btn btn-primary" id='submit'
                                            onclick="addData();">Simpan</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script>
        // maps init
        // function initMap() {
        //     const myLatLng = {
        //         lat: -6.2297419,
        //         lng: 106.759478
        //     };
        //     var map = new google.maps.Map(document.getElementById('map'), {
        //         center: myLatLng,
        //         zoom: 11,
        //         mapTypeId: google.maps.MapTypeId.ROADMAP
        //     });

        //     new google.maps.Marker({
        //         position: myLatLng,
        //         map,
        //         title: "Hello Rajkot!",
        //         draggable: true
        //     });
        //     google.maps.event.addListener(marker, 'click', function(a) {
        //         console.log(a);
        //         // bingo!
        //         // a.latLng contains the co-ordinates where the marker was dropped
        //     });
        // }

        $("#pac-input").focusin(function() {
            $(this).val('');
        });
        $('#latitude').val('');
        $('#longitude').val('');
        // This example adds a search box to a map, using the Google Place Autocomplete
        // feature. People can enter geographical searches. The search box will return a
        // pick list containing a mix of places and predicted search terms.
        // This example requires the Places library. Include the libraries=places
        // parameter when you first load the API. For example:
        // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">
        function initAutocomplete() {
            {{--            var pos = {lat:   {{isset($row) && $row->location->latitude }} ,  lng: {{ isset($row) && $row->location->longitude }} }; --}}

            var map = new google.maps.Map(document.getElementById('map'), {
                center: {
                    lat: -6.2297419,
                    lng: 106.759478
                },
                zoom: 13,
                mapTypeId: 'roadmap'
            });
            // move pin and current location
            infoWindow = new google.maps.InfoWindow;
            geocoder = new google.maps.Geocoder();
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(function(position) {
                    var pos = {
                        lat: position.coords.latitude,
                        lng: position.coords.longitude
                    };
                    map.setCenter(pos);
                    var marker = new google.maps.Marker({
                        position: new google.maps.LatLng(pos),
                        map: map,
                        title: 'Current Area'
                    });
                    markers.push(marker);
                    marker.addListener('click', function() {
                        geocodeLatLng(geocoder, map, infoWindow, marker);
                    });
                    // to get current position address on load
                    google.maps.event.trigger(marker, 'click');
                }, function() {
                    handleLocationError(true, infoWindow, map.getCenter());
                });
            } else {
                // Browser doesn't support Geolocation
                console.log('dsdsdsdsddsd');
                handleLocationError(false, infoWindow, map.getCenter());
            }
            var geocoder = new google.maps.Geocoder();
            google.maps.event.addListener(map, 'click', function(event) {
                SelectedLatLng = event.latLng;
                geocoder.geocode({
                    'latLng': event.latLng
                }, function(results, status) {
                    if (status == google.maps.GeocoderStatus.OK) {
                        if (results[0]) {
                            deleteMarkers();
                            addMarkerRunTime(event.latLng);
                            SelectedLocation = results[0].formatted_address;
                            console.log(results[0].formatted_address);
                            splitLatLng(String(event.latLng));
                            $("#pac-input").val(results[0].formatted_address);
                        }
                    }
                });
            });

            function geocodeLatLng(geocoder, map, infowindow, markerCurrent) {
                var latlng = {
                    lat: markerCurrent.position.lat(),
                    lng: markerCurrent.position.lng()
                };
                /* $('#branch-latLng').val("("+markerCurrent.position.lat() +","+markerCurrent.position.lng()+")");*/
                $('#latitude').val(markerCurrent.position.lat());
                $('#longitude').val(markerCurrent.position.lng());
                geocoder.geocode({
                    'location': latlng
                }, function(results, status) {
                    if (status === 'OK') {
                        if (results[0]) {
                            map.setZoom(8);
                            var marker = new google.maps.Marker({
                                position: latlng,
                                map: map
                            });
                            markers.push(marker);
                            infowindow.setContent(results[0].formatted_address);
                            SelectedLocation = results[0].formatted_address;
                            $("#pac-input").val(results[0].formatted_address);
                            infowindow.open(map, marker);
                        } else {
                            window.alert('No results found');
                        }
                    } else {
                        window.alert('Geocoder failed due to: ' + status);
                    }
                });
                SelectedLatLng = (markerCurrent.position.lat(), markerCurrent.position.lng());
            }

            function addMarkerRunTime(location) {
                var marker = new google.maps.Marker({
                    position: location,
                    map: map
                });
                markers.push(marker);
            }

            function setMapOnAll(map) {
                for (var i = 0; i < markers.length; i++) {
                    markers[i].setMap(map);
                }
            }

            function clearMarkers() {
                setMapOnAll(null);
            }

            function deleteMarkers() {
                clearMarkers();
                markers = [];
            }

            // Create the search box and link it to the UI element.
            var input = document.getElementById('pac-input');
            $("#pac-input").val("Search Here");
            var searchBox = new google.maps.places.SearchBox(input);
            map.controls[google.maps.ControlPosition.TOP_RIGHT].push(input);
            // Bias the SearchBox results towards current map's viewport.
            map.addListener('bounds_changed', function() {
                searchBox.setBounds(map.getBounds());
            });
            var markers = [];
            // Listen for the event fired when the user selects a prediction and retrieve
            // more details for that place.
            searchBox.addListener('places_changed', function() {
                var places = searchBox.getPlaces();
                if (places.length == 0) {
                    return;
                }
                // Clear out the old markers.
                markers.forEach(function(marker) {
                    marker.setMap(null);
                });
                markers = [];
                // For each place, get the icon, name and location.
                var bounds = new google.maps.LatLngBounds();
                places.forEach(function(place) {
                    if (!place.geometry) {
                        console.log("Returned place contains no geometry");
                        return;
                    }
                    var icon = {
                        url: place.icon,
                        size: new google.maps.Size(100, 100),
                        origin: new google.maps.Point(0, 0),
                        anchor: new google.maps.Point(17, 34),
                        scaledSize: new google.maps.Size(25, 25)
                    };
                    // Create a marker for each place.
                    markers.push(new google.maps.Marker({
                        map: map,
                        icon: icon,
                        title: place.name,
                        position: place.geometry.location
                    }));
                    $('#latitude').val(place.geometry.location.lat());
                    $('#longitude').val(place.geometry.location.lng());
                    if (place.geometry.viewport) {
                        // Only geocodes have viewport.
                        bounds.union(place.geometry.viewport);
                    } else {
                        bounds.extend(place.geometry.location);
                    }
                });
                map.fitBounds(bounds);
            });
        }

        function handleLocationError(browserHasGeolocation, infoWindow, pos) {
            infoWindow.setPosition(pos);
            infoWindow.setContent(browserHasGeolocation ?
                'Error: The Geolocation service failed.' :
                'Error: Your browser doesn\'t support geolocation.');
            infoWindow.open(map);
        }

        function splitLatLng(latLng) {
            var newString = latLng.substring(0, latLng.length - 1);
            var newString2 = newString.substring(1);
            var trainindIdArray = newString2.split(',');
            var lat = trainindIdArray[0];
            var Lng = trainindIdArray[1];
            $("#latitude").val(lat);
            $("#longitude").val(Lng);
        }

        initAutocomplete();

        function getElementImage() {
            var imagelink = document.getElementById('thumbnail');
            let datavalue = imagelink.value
            console.log(datavalue)
            var showimage = document.getElementById('logoImage');
            showimage.src = `${datavalue}`
        }

        function getElementFavicon() {
            var imagelink = document.getElementById('favicon');
            let datavalue = imagelink.value
            console.log(datavalue)
            var showimage = document.getElementById('faviconImage');
            showimage.src = `${datavalue}`
        }

        function addData() {
            var id = $('#settingsId').val();
            var title = $('#title').val();
            var telephone = $('#telephone').val();
            var fax = $('#fax').val();
            var email = $('#email').val();
            var email_2 = $('#email_2').val();
            var mobile_phone = $('#mobile_phone').val();
            var address = $('#address').val();
            var address_2 = $('#address_2').val();
            var latitude = $('#latitude').val();
            var longitude = $('#longitude').val();
            var caption = $('#caption').val();
            var meta_description = $('#meta_description').val();
            var meta_keyword = $('#meta_keyword').val();
            var footer_text = $('#footer_text').val();
            var contactus = $('#contactus').val();
            var website = $('#website').val();
            var facebook = $('#facebook').val();
            var twitter = $('#twitter').val();
            var youtube = $('#youtube').val();
            var whatsapp = $('#whatsapp').val();
            var pinterest = $('#pinterest').val();
            var instagram = $('#instagram').val();
            var skype = $('#skype').val();
            var caption_skype = $('#caption_skype').val();
            var paypal_id = $('#paypal_id').val();
            var currency = $('#currency').val();
            var logo = $('#thumbnail').val();
            var favicon = $('#favicon').val();
            if (
                // title == '' ||
                // telephone == '' ||
                // fax == '' ||
                // email == '' ||
                // email_2 == '' ||
                // mobile_phone == '' ||
                // address == '' ||
                // address_2 == '' ||
                // caption == '' ||
                // meta_description == '' ||
                // meta_keyword == '' ||
                // footer_text == '' ||
                // logo == '' ||
                favicon == ''
            ) {
                Swal.fire({
                    title: 'Error!',
                    text: 'Silahkan Isi Semua form',
                    icon: 'error',
                    confirmButtonText: 'Oke'
                })
            } else {
                var url = "{{ route('setting.create') }}";
                var isUpdate = $('#settingsId').val();
                if (isUpdate != '') {
                    $.ajax({
                        type: 'POST',
                        url: url,
                        data: {
                            _token: "{{ csrf_token() }}",
                            id: isUpdate,
                            title: title,
                            telephone: telephone,
                            fax: fax,
                            email: email,
                            email_2: email_2,
                            mobile_phone: mobile_phone,
                            latitude: latitude,
                            longitude: longitude,
                            address: address,
                            address_2: address_2,
                            caption: caption,
                            meta_description: meta_description,
                            meta_keyword: meta_keyword,
                            footer_text: footer_text,
                            contactus: contactus,
                            website: website,
                            facebook: facebook,
                            twitter: twitter,
                            youtube: youtube,
                            whatsapp: whatsapp,
                            pinterest: pinterest,
                            instagram: instagram,
                            skype: skype,
                            caption_skype: caption_skype,
                            paypal_id: paypal_id,
                            currency: currency,
                            logo: logo,
                            favicon: favicon,
                        },
                        error: function(data) {
                            console.log(data)
                        },
                        success: function(data) {
                            if (data.status != 'Data Berhasil diubah') {
                                Swal.fire({
                                    title: 'Error!',
                                    text: data.status,
                                    icon: 'error',
                                    confirmButtonText: 'Oke'
                                })
                            } else {
                                Swal.fire({
                                    title: 'Berhasil!',
                                    text: 'Data Berhasil diubah',
                                    icon: 'success',
                                    confirmButtonText: 'Oke'
                                })

                                $('#sort').val('');
                                $('#statusForm option[value="active"]').attr("selected", "selected");
                                $('#title').val('');
                                $('#thumbnail').val('');
                                $('#description').val('');
                                $('#id').val(0);
                                $('#addData').modal('toggle');
                                $('#submit').attr('disabled', false);
                                $('#loading').addClass('hidden');
                                $('#simpan').removeClass('hidden');

                                location.reload();
                            }

                        }
                    })
                } else {

                    $.ajax({
                        type: 'POST',
                        url: url,
                        data: {
                            _token: "{{ csrf_token() }}",
                            title: title,
                            telephone: telephone,
                            fax: fax,
                            email: email,
                            email_2: email_2,
                            mobile_phone: mobile_phone,
                            address: address,
                            address_2: address_2,
                            latitude: latitude,
                            longitude: longitude,
                            caption: caption,
                            meta_description: meta_description,
                            meta_keyword: meta_keyword,
                            footer_text: footer_text,
                            contactus: contactus,
                            website: website,
                            facebook: facebook,
                            twitter: twitter,
                            youtube: youtube,
                            whatsapp: whatsapp,
                            pinterest: pinterest,
                            instagram: instagram,
                            skype: skype,
                            caption_skype: caption_skype,
                            paypal_id: paypal_id,
                            currency: currency,
                            logo: logo,
                            favicon: favicon,
                        },
                        error: function(data) {
                            console.log(data)
                        },
                        success: function(data) {
                            console.log(data)
                            if (data.status != 'Data Berhasil disimpan') {
                                Swal.fire({
                                    title: 'Error!',
                                    text: data.status,
                                    icon: 'error',
                                    confirmButtonText: 'Oke'
                                })
                            } else {
                                Swal.fire({
                                    title: 'Berhasil!',
                                    text: 'Data Berhasil disimpan',
                                    icon: 'success',
                                    confirmButtonText: 'Oke'
                                })

                                $('#sort').val('');
                                $('#statusForm option[value="active"]').attr("selected", "selected");
                                $('#title').val('');
                                $('#thumbnail').val('');
                                $('#description').val('');
                                $('#id').val(0);
                                $('#addData').modal('toggle');
                                $('#submit').attr('disabled', false);
                                $('#loading').addClass('hidden');
                                $('#simpan').removeClass('hidden');

                                location.reload();
                            }

                        }

                    });
                }

            }

        }

        function onlyNumberKey(evt) {
            // Only ASCII character in that range allowed
            var ASCIICode = (evt.which) ? evt.which : evt.keyCode
            if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57))
                return false;
            return true;
        }
    </script>
@endpush
