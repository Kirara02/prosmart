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
    <script src="../../assets/vendor/js/template-customizer.js"></script>
    <script src="{{ asset('/') }}assets/js/config.js"></script>

    <script src="https://cdn.tiny.cloud/1/{your-api-key}/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
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

    <script>
        $(document).ready(function () {
            $('#table-jaksa').DataTable({
                processing: true,
                serverSide: true,
                responsive: true,
                autoWidth: true,
                lengthMenu: [
                    [20, 50, 100, -1],
                    [20, 50, 100, "All"]
                ],
                ajax: "{{ route('data.jaksa') }}",
                columns: [
                    { data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: true },
                    { data: 'nama_jaksa', name: 'nama_jaksa' },
                    { data: 'actions', name: 'actions'}
                ]
            });

            $('#table-barang-bukti').DataTable({
                processing: true,
                serverSide: true,
                responsive: true,
                autoWidth: true,
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
                    { data: 'jenis', name: 'jenis' },
                    { data: 'no_tgl_putusan', name: 'no_tgl_putusan' },
                    { data: 'status', name: 'status' },
                    { data: 'actions', name: 'actions'}
                ]
            });

            $('#table-gallery').DataTable({
                processing: true,
                serverSide: true,
                responsive: true,
                autoWidth: true,
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
                ]
            });

            $('#table-pengaturan').DataTable({
                processing: true,
                serverSide: true,
                responsive: true,
                autoWidth: true,
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
                responsive: true,
                autoWidth: true,
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
                    { data: 'catatan', name: 'catatan'},
                    { data: 'actions', name: 'actions'},
                ]
            });

            tinymce.init({
                selector: '#my-textarea', // Replace with the ID of your textarea element
                height: 300, // Adjust the height as needed
                plugins: 'advlist autolink lists link image imagetools charmap print preview',
                toolbar: 'undo redo | formatselect | bold italic backcolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
            });


        });
    </script>



</body>
</html>
