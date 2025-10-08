@extends('backend.layout.main')

@section('content')
    <div class="card shadow">
        <div class="card-body pl-0 pr-0">


            <div class="row p-2">
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-12">
                    <h3><b>Video Youtube</b></h3>
                </div>


                <div class="input-group mb-2 col-xxl-6 col-xl-6 col-lg-6 col-12">
                    <div class="input-group-prepend">
                        <span class="input-group-text  border-right-0" id="basic-addon1"><i data-feather="search"></i></span>
                    </div>
                    <input type="text" id="search" class="form-control border-left-0" placeholder="Pencarian"
                        aria-label="Pencarian" aria-describedby="basic-addon1">

                    <div class="btn-group float-end pl-2" role="group">
                        <button data-toggle="modal" onclick="openForm()" class="btn btn-primary"><i data-feather="plus"></i>
                            Add</button>
                        <button onclick="multideleted()" class="btn btn-danger"><i data-feather="check"></i> Delete</button>
                    </div>
                </div>
            </div>

            <x-tables>
                <x-slot name="thead">
                    <tr>
                        <th>
                            <div class="form-check form-check-primary">
                                <input type="checkbox" class="form-check-input " id="customCheckAll"
                                    style="cursor: pointer" />
                                <label class="form-check-label" for="customCheckAll"></label>
                            </div>
                        </th>
                        <th>No</th>
                        <th>Title</th>
                        <th>sort</th>
                        <th>Youtube</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </x-slot>
                <x-slot name="tbody">
                    @foreach ($data as $x => $item)
                        <tr>
                            <td>
                                <div class="form-check form-check-primary">
                                    <input type="checkbox" class="form-check-input delete-checkbox"
                                        id="customCheck{{ $item->id }}" value="{{ $item->id }}"
                                        style="cursor: pointer" />
                                    <label class="form-check-label" for="customCheck{{ $item->id }}"></label>
                                </div>
                            </td>
                            <td>{{ $x + 1 }}</td>
                            <td>{{ $item->title }}</td>
                            <td>{{ $item->sort }}</td>
                            <td>
                                <a href="https://youtube.com/watch?v={{ $item->youtube_id }}" target="_blank">
                                    <img src="{{ 'http://img.youtube.com/vi/' . str_replace('?feature=share', '', $item->youtube_id) . '/default.jpg' }}"
                                        alt="youtube">
                                </a>
                            </td>
                            <td>
                                <div class="custom-control custom-switch custom-switch-primary">
                                    <input type="checkbox" class="custom-control-input" id="status{{ $item->id }}"
                                        onchange="updateStatus({{ $item->id }})"
                                        @if ($item->status == 'active') checked @endif />
                                    <label class="custom-control-label" for="status{{ $item->id }}">
                                        <span class="switch-icon-left"> <i data-feather="check"></i></span>
                                        <span class="switch-icon-right"> <i data-feather="x"></i></span>
                                    </label>
                                </div>
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i data-feather="list"></i>
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#"
                                            onclick="edit('{{ $item->id }}','{{ $item->sort }}','{{ $item->status }}','{{ $item->title }}','{{ $item->desc }}','{{ $item->youtube_id }}')"><i
                                                data-feather="edit"></i> Edit</a>
                                        <a class="dropdown-item" href="#" onclick="deleted({{ $item->id }})"><i
                                                data-feather="trash"></i> Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </x-slot>
                </x-table>

        </div>
    </div>


    {{-- Form Action --}}

    <div class="modal-size-lg d-inline-block">
        <div class="modal fade text-left" id="addData" tabindex="-1" role="dialog" aria-labelledby="myModalLabel17"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel17">Video Youtube Form</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!-- Basic multiple Column Form section start -->
                        <section id="multiple-column-form">
                            <div class="row">
                                <div class="col-12 p-0">
                                    <div class="card shadow-none">
                                        <div class="card-body">
                                            <form class="form" id="formData">
                                                <input type="hidden" name="id" id="id" value="0">
                                                <div class="row">
                                                    <div class="col-md-6 col-12">
                                                        <div class="form-group">
                                                            <label for="sort">Sort</label>
                                                            <input type="text" onkeypress="return onlyNumberKey(event)"
                                                                id="sort" class="form-control" placeholder="Sort"
                                                                name="sort" required />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-12">
                                                        <div class="form-group">
                                                            <label for="statusForm">Status</label>
                                                            <select name="status" class="form-control" id="statusForm"
                                                                required>
                                                                <option value="active">Active</option>
                                                                <option value="inactive">inactive</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 col-12">
                                                        <div class="form-group">
                                                            <label for="title">Title</label>
                                                            <input type="text" id="title" class="form-control"
                                                                placeholder="Title" name="sort" required />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 col-12">
                                                        <div class="form-group">
                                                            <label for="description">Description</label>
                                                            <textarea name="description" class="form-control" placeholder="Description" id="description" required></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 mb-2">
                                                        <div class="border rounded p-2">
                                                            <div class="col-md-12 col-12 mb-1 p-0">
                                                                <div class="input-group">
                                                                    <input type="text" id="video_yt"
                                                                        class="form-control"
                                                                        placeholder="Masukan Link Youtube Untuk Cari Video"
                                                                        aria-describedby="button-addon2" />
                                                                    <div class="input-group-append" id="button-addon2">
                                                                        <button class="btn btn-outline-primary"
                                                                            onclick="youtube()" type="button"><i
                                                                                data-feather="search"></i> Cari
                                                                            Video</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div id='yt' class="hidden">
                                                                <a id="link_yt" href="https://youtube.com/watch?v="
                                                                    target="_blank">
                                                                    <img class="w-100" id="thumb"
                                                                        style="height: 280px"
                                                                        src="{{ 'http://img.youtube.com/vi/default.jpg' }}"
                                                                        alt="youtube">
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 text-right">
                                                        <div class="btn-group float-end pl-2" role="group">
                                                            <button type="button" id='submit' onclick="addData()"
                                                                class="btn btn-outline-primary">
                                                                <div id="simpan" class="">
                                                                    <i data-feather="save"></i> Simpan
                                                                </div>
                                                                <div id="loading" class="hidden">
                                                                    <span class="spinner-border spinner-border-sm"
                                                                        role="status" aria-hidden="true"></span>
                                                                    <span class="">Loading...</span>
                                                                </div>
                                                            </button>
                                                            <button type="reset" class="btn btn-outline-danger"><i
                                                                    data-feather="refresh-cw"></i> Reset</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- Basic Floating Label Form section end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@push('js')
    <script>
        //delete
        function deleted(id) {
            Swal.fire({
                title: 'Apakah Anda yakin ingin menghapus data Ini ?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya Yakin !',
                cancelButtonText: 'Batalkan'
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire(
                        'Berhasil!',
                        'Berhasil menghapus Data',
                        'success'
                    );
                    $.ajax({
                        type: "get",
                        url: "{{ '/webmin/video/delete/' }}" + id,
                        data: {
                            id: id
                        },
                        success: function(result) {
                            location.reload();
                        }
                    });
                }
            })
        }



        //multi delete


        function multideleted() {
            var id = [];
            $('.delete-checkbox:checked').each(function() {
                id.push(parseInt($(this).val()));
            });
            Swal.fire({
                title: 'Apakah Anda yakin ingin menghapus Banner Ini ?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya Yakin !',
                cancelButtonText: 'Batalkan'
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire(
                        'Berhasil!',
                        'Berhasil menghapus banner',
                        'success'
                    );
                    $.ajax({
                        type: "get",
                        url: "{{ route('video.multi_delete') }}",
                        data: {
                            id: id
                        },
                        success: function(result) {
                            location.reload();
                        }
                    });
                }
            })
        }

        //update status

        function updateStatus(id) {
            var sts;
            var url = "{{ '/webmin/video/status/' }}" + id;
            if (document.getElementById('status' + id).checked) {
                sts = 'active';
            } else {
                sts = 'inactive';
            }
            $.ajax({
                type: 'GET',
                url: url,
                data: {
                    sts: sts
                },
                success: function(data) {
                    Swal.fire({
                        title: 'Berhasil!',
                        text: 'Status Berhasil Diubah',
                        icon: 'success',
                        confirmButtonText: 'Oke'
                    })

                    location.reload();
                }
            });
        }


        //save data

        function addData() {

            if ($('#sort').val() == '' || $('#statusForm').val() == '' || $('#title').val() == '' || $('#video_yt').val() ==
                '') {
                Swal.fire({
                    title: 'Error!',
                    text: 'Silahkan Isi Semua form',
                    icon: 'error',
                    confirmButtonText: 'Oke'
                })
            } else if ($.isNumeric($('#sort').val()) == false) {
                Swal.fire({
                    title: 'Error!',
                    text: 'Silahkan Isi form dengan benar',
                    icon: 'error',
                    confirmButtonText: 'Oke'
                })
            } else {
                var isnot_youtubeshort = $('#video_yt').val().match(/shorts/);

                $('#submit').attr('disabled', '');
                $('#loading').removeClass('hidden');
                $('#simpan').addClass('hidden');
                var url = "{{ route('video.create') }}";

                if (isnot_youtubeshort != 'shorts') {
                    $.ajax({
                        type: 'POST',
                        url: url,
                        data: {
                            _token: "{{ csrf_token() }}",
                            id: $('#id').val(),
                            sort: $('#sort').val(),
                            status: $('#statusForm').val(),
                            title: $('#title').val(),
                            youtube_id: $('#video_yt').val().replace('https://www.youtube.com/watch?v=', ''),
                            description: $('#description').val(),
                        },
                        success: function(data) {
                            if (data.status != 'Data Berhasil disimpan') {
                                Swal.fire({
                                    title: 'Error!',
                                    text: data.status,
                                    icon: 'error',
                                    confirmButtonText: 'Oke'
                                })

                                $('#submit').attr('disabled', false);
                                $('#loading').addClass('hidden');
                                $('#simpan').removeClass('hidden');
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
                                $('#video_yt').val('');
                                $('#yt').addClass('hidden');
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
                } else {
                    console.log('is shorts')

                    $.ajax({
                        type: 'POST',
                        url: url,
                        data: {
                            _token: "{{ csrf_token() }}",
                            id: $('#id').val(),
                            sort: $('#sort').val(),
                            status: $('#statusForm').val(),
                            title: $('#title').val(),
                            youtube_id: $('#video_yt').val().replace('https://youtube.com/shorts/', ''),
                            description: $('#description').val(),
                        },
                        success: function(data) {
                            if (data.status != 'Data Berhasil disimpan') {
                                Swal.fire({
                                    title: 'Error!',
                                    text: data.status,
                                    icon: 'error',
                                    confirmButtonText: 'Oke'
                                })

                                $('#submit').attr('disabled', false);
                                $('#loading').addClass('hidden');
                                $('#simpan').removeClass('hidden');
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
                                $('#video_yt').val('');
                                $('#yt').addClass('hidden');
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


        //edit
        function edit(id, sort, sts, title, desc, youtube) {
            var isnot_youtubeshort = youtube.match(/feature=share/);
            if (isnot_youtubeshort != 'feature=share') {
                console.log('is not shorts')

                $('#video_yt').val('https://www.youtube.com/watch?v=' + youtube);
                $('#link_yt').attr("href", "https://www.youtube.com/watch?v=" + youtube);
                $('#thumb').attr("src", "http://img.youtube.com/vi/" + youtube + "/default.jpg");
            } else {
                // is short
                console.log('is shorts')

                $('#video_yt').val('https://youtube.com/shorts/' + youtube);
                $('#link_yt').attr("href", "https://youtube.com/shorts/" + youtube);
                $('#thumb').attr("src", "http://img.youtube.com/vi/" + youtube.replace('?feature=share', '') +
                    "/default.jpg");
            }
            $('#id').val(id);
            $('#sort').val(sort);
            $('#statusForm option[value="' + sts + '"]').attr("selected", "selected");
            $('#title').val(title);
            $('#description').val(desc);
            $('#yt').removeClass('hidden');

            $('#addData').modal('toggle');
        }


        function openForm() {
            $('#sort').val('');
            $('#statusForm').val("active").change();
            $('#title').val('');
            $('#video_yt').val('');
            $('#yt').addClass('hidden');
            $('#description').val('');
            $('#id').val(0);
            $('#addData').modal('toggle');
        }



        function youtube() {
            var isnot_youtubeshort = $('#video_yt').val().match(/shorts/);
            $('#yt').removeClass('hidden');
            var imgshort = $('#video_yt').val().replace('https://youtube.com/shorts/', '');
            if (isnot_youtubeshort != 'shorts') {
                console.log('not shorts')
                $('#link_yt').attr("href", "https://www.youtube.com/watch?v=" + $('#video_yt').val().replace(
                    'https://www.youtube.com/watch?v=', ''));
                $('#thumb').attr("src", "http://img.youtube.com/vi/" + $('#video_yt').val().replace(
                    'https://www.youtube.com/watch?v=', '') + "/default.jpg");
            } else {
                console.log('is shorts')
                $('#link_yt').attr("href", "https://youtube.com/shorts/" + $('#video_yt').val().replace(
                    'https://youtube.com/shorts/', ''));
                $('#thumb').attr("src", "http://img.youtube.com/vi/" + imgshort.replace('?feature=share', '') +
                    "/default.jpg");
            }

        }

        // https: //youtube.com/shorts/enFFvxpu_VM?feature=share

        function onlyNumberKey(evt) {

            // Only ASCII character in that range allowed
            var ASCIICode = (evt.which) ? evt.which : evt.keyCode
            if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57))
                return false;
            return true;
        }
    </script>
@endpush
