<!DOCTYPE html>
<html
    lang="en"
    class="light-style layout-navbar-fixed layout-menu-fixed"
    dir="ltr"
    data-theme="theme-default"
    data-assets-path="{{ asset('/') }}assets/"
    data-template="vertical-menu-template"
>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }} | ProSmart</title>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('/') }}assets/logo/logo_prosmart_kotak.png" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Icons -->
    <link rel="stylesheet" href="{{ asset('/') }}assets/vendor/fonts/fontawesome.css" />
    <link rel="stylesheet" href="{{ asset('/') }}assets/vendor/fonts/tabler-icons.css" />
    <link rel="stylesheet" href="{{ asset('/') }}assets/vendor/fonts/flag-icons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('/') }}assets/vendor/css/rtl/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ asset('/') }}assets/vendor/css/rtl/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ asset('/') }}assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset('/') }}assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="{{ asset('/') }}assets/vendor/libs/node-waves/node-waves.css" />
    <link rel="stylesheet" href="{{ asset('/') }}assets/vendor/libs/typeahead-js/typeahead.css" />
    <link rel="stylesheet" href="{{ asset('/') }}assets/vendor/libs/flatpickr/flatpickr.css" />
    <link rel="stylesheet" href="{{ asset('/') }}assets/vendor/libs/select2/select2.css" />

    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="{{ asset('/') }}assets/vendor/js/helpers.js"></script>
    {{-- <script src="../../assets/vendor/js/template-customizer.js"></script> --}}
    <script src="{{ asset('/') }}assets/js/config.js"></script>

    <script src="https://cdn.tiny.cloud/1/a8zube64hm2g9hibvk0novxagjnpi0231rl5sg66bw72i2lu/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
</head>
<body>


   <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            @include('components.sidebar')
            <div class="layout-page">
                @include('components.navbar')
                <div class="content-wrapper">
                    <div class="container-xxl flex-grow-1 container-p-y">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
   </div>


    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="{{ asset('/') }}assets/vendor/libs/jquery/jquery.js"></script>
    <script src="{{ asset('/') }}assets/vendor/libs/popper/popper.js"></script>
    <script src="{{ asset('/') }}assets/vendor/js/bootstrap.js"></script>
    <script src="{{ asset('/') }}assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="{{ asset('/') }}assets/vendor/libs/node-waves/node-waves.js"></script>

    <script src="{{ asset('/') }}assets/vendor/libs/hammer/hammer.js"></script>
    <script src="{{ asset('/') }}assets/vendor/libs/i18n/i18n.js"></script>
    <script src="{{ asset('/') }}assets/vendor/libs/typeahead-js/typeahead.js"></script>

    <script src="{{ asset('/') }}assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="{{ asset('/') }}assets/vendor/libs/cleavejs/cleave.js"></script>
    <script src="{{ asset('/') }}assets/vendor/libs/cleavejs/cleave-phone.js"></script>
    <script src="{{ asset('/') }}assets/vendor/libs/moment/moment.js"></script>
    <script src="{{ asset('/') }}assets/vendor/libs/flatpickr/flatpickr.js"></script>
    <script src="{{ asset('/') }}assets/vendor/libs/select2/select2.js"></script>

    <!-- Main JS -->
    <script src="{{ asset('/') }}assets/js/main.js"></script>
    <!-- Page JS -->
    <script src="{{ asset('/') }}assets/js/form-layouts.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- DataTables CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.1/css/jquery.dataTables.min.css">

    <!-- DataTables Buttons CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.0.0/css/buttons.dataTables.min.css">

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- DataTables JS -->
    <script src="https://cdn.datatables.net/1.11.1/js/jquery.dataTables.min.js"></script>

    <!-- DataTables Buttons JS -->
    <script src="https://cdn.datatables.net/buttons/2.0.0/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.0.0/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.0.0/js/buttons.print.min.js"></script>

    <!-- JSZip -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>

    <!-- pdfmake -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.66/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.66/vfs_fonts.js"></script>

   <!-- Include Bootstrap Tags Input CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-tagsinput/dist/bootstrap-tagsinput.css">

    <!-- Include Bootstrap Tags Input JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>


    <script>
        $(document).ready(function () {
            $('#table-jaksa').DataTable({
                processing: true,
                serverSide: true,
                lengthMenu: [
                    [20, 50, 100, -1],
                    [20, 50, 100, "All"]
                ],
                ajax: "{{ route('data.jaksa') }}",
                columns: [
                    { data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: true },
                    { data: 'nama_jaksa', name: 'nama_jaksa' },
                    { data: 'actions', name: 'actions'}
                ],
                dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
            });

            $('#table-barang-bukti').DataTable({
            processing: true,
            serverSide: true,
            lengthMenu: [
                [20, 50, 100, -1],
                [20, 50, 100, "All"]
            ],
            ajax: "{{ route('data.barang-bukti') }}",
            columns: [
                { data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false },
                { data: 'no_reg', name: 'no_reg' },
                { data: 'nama_terpidana', name: 'nama_terpidana' },
                { data: 'jaksa.nama_jaksa', name: 'jaksa.nama_jaksa' },
                { data: 'jenis.barang_bukti', name: 'jenis.barang_bukti' },
                { data: 'no_tgl_putusan', name: 'no_tgl_putusan' },
                { data: 'status', name: 'status' },
                {data: 'status_barang', name: 'status_barang',
                render : function(data, type, row){
                if (row.status_barang == '1') {
                    return "<span class='badge bg-danger bg-glow'>Belum Diambil</span>";
                }else if (row.status_barang == '2') {
                    return "<span class='badge bg-warning bg-glow'>Sudah Diambil</span>";
                }
            }
        },
                { data: 'actions', name: 'actions'}
            ],
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });

            $('#table-gallery').DataTable({
                processing: true,
                serverSide: true,
                lengthMenu: [
                    [20, 50, 100, -1],
                    [20, 50, 100, "All"]
                ],
                ajax: "{{ route('data.gallery') }}",
                columns: [
                    { data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false },
                    { data: 'judul', name: 'judul' },
                    { data: 'image', name: 'image' },
                    { data: 'created_at', name: 'created_at' },
                    { data: 'actions', name: 'actions'}
                ],
                dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
            });

            $('#table-pengaturan').DataTable({
                processing: true,
                serverSide: true,
                lengthMenu: [
                    [20, 50, 100, -1],
                    [20, 50, 100, "All"]
                ],
                ajax: "{{ route('data.pengaturan') }}",
                columns: [
                    { data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false },
                    { data: 'deskripsi', name: 'deskripsi' },
                    { data: 'img_url', name: 'img_url' },
                    { data: 'actions', name: 'actions'}
                ]
            });

            $('#table-pengajuan').DataTable({
                processing: true,
                serverSide: true,
                lengthMenu: [
                    [20, 50, 100, -1],
                    [20, 50, 100, "All"]
                ],
                ajax: "{{ route('data.pengajuan') }}",
                columns: [
                    { data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false },
                    { data: 'tgl_pengajuan', name: 'tgl_pengajuan' },
                    { data: 'nama_pemohon', name: 'nama_pemohon' },
                    { data: 'nama_terdakwa', name: 'nama_terdakwa'},
                    { data: 'no_handphone', name: 'no_handphone'},
                    { data: 'alamat', name: 'alamat'},
                    { data: 'jenis', name: 'jenis'},
                    { data: 'catatan', name: 'catatan'},
                    { data: 'actions', name: 'actions'},
                ],
                dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
            });

            $('#table-jenis').DataTable({
                processing: true,
                serverSide: true,
                lengthMenu: [
                    [20, 50, 100, -1],
                    [20, 50, 100, "All"]
                ],
                ajax: "{{ route('data.jenis') }}",
                columns: [
                    { data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false },
                    { data: 'barang_bukti', name: 'barang_bukti' },
                    { data: 'actions', name: 'actions'},
                ],
                dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
            });

            tinymce.init({
                selector: '#my-textarea', // Replace with the ID of your textarea element
                height: 300, // Adjust the height as needed
                plugins: 'advlist autolink lists link image imagetools charmap print preview',
                toolbar: 'undo redo | formatselect | bold italic backcolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
            });

            $(".table").on('click', '.btn-delete', function(e) {
            e.preventDefault();

                Swal.fire({
                    title: 'Hapus data?',
                    text: "Hapus data bersifat permanen!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Ya, Hapus!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $(this).parent().submit()
                    }
                })
            });

            $(".logout").on('click', function() {
                Swal.fire({
                    title: 'Logout?',
                    text: "Anda akan logout!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Ya, Logout!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $("#logout-form").submit()
                    }
                })
            });

        });
    </script>

    <script>
        $(document).ready(function() {
        var notif = $('#notif-unread').data('id');
        $.ajax({
            url: "{{ route('notif.all') }}",
            type: "GET",
            dataType: "json",
            success: function(data) {
            for (var i = 0; i < data.length; i++) {
                var notif = data[i];
                var html = '' +
                '<li>' +
                '    <a href="#">' +
                '        <div class="media notification-item" id="notif-unread" data-idnotif="' + notif.id + '" onclick="readNotif(' + notif.id + ',\''+notif.links+'\', this)">' +
                '            <div class="notification-img bg-light-success"></div>' +
                '            <div class="media-body">' +
                '                <h6 class="notification-label font-success">Pengajuan Baru</h6>' +
                '                <p>Terdapat Pengajuan Baru yang harus di verifikasi</p>' +
                '                <span class="notification-time">' + notif.data + '</span>' +
                '            </div>' +
                '            <div class="notification-right"><a href="#"><i data-feather="x"></i></a></div>' +
                '        </div>' +
                '    </a>' +
                '</li>';
                $('#notif-all').prepend(html);
            }
            $('#countNotif').html(data.length);
            }
        });
        });

        function readNotif(id_notif, links, element) {
        $.ajax({
            url: "{{ url('') }}/notif/" + id_notif,
            type: "GET",
            dataType: "json",
            success: function(data) {
            $(element).closest('li').remove();
            var count = parseInt($('#countNotif').html()) - 1;
            $('#countNotif').html(count);
            window.location.href = links;
            }
        });
        }
    </script>


    <style>
    .bootstrap-tagsinput .tag {
        background-color: #007bff;
        color: #ffffff;
      }
      </style>



</body>
</html>
