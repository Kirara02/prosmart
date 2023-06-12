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
    <title>{{ $title }} | Pro Smart</title>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('/') }}assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">

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
    <link rel="stylesheet" href="{{ asset('/') }}assets/vendor/libs/apex-charts/apex-charts.css" />
    <link rel="stylesheet" href="{{ asset('/') }}assets/vendor/libs/swiper/swiper.css" />
    <link rel="stylesheet" href="{{ asset('/') }}assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css" />
    <link rel="stylesheet" href="{{ asset('/') }}assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css" />
    <link rel="stylesheet" href="{{ asset('/') }}assets/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.css" />

    <!-- Page CSS -->
    <link rel="stylesheet" href="{{ asset('/') }}assets/vendor/css/pages/cards-advance.css" />
    <!-- Helpers -->
    <script src="{{ asset('/') }}assets/js/config.js"></script>

</head>
<body>


   <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            @include('components.sidebar')
            <div class="layout-page">
                @include('components.navbar')
                <div class="content-wrapper">
                    <div class="container-xxl flex-grow-1 container-p-y">

                        <p>Haiiii</p>
                    </div>
                </div>
            </div>
        </div>
   </div>


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
    <script src="{{ asset('/') }}assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js"></script>

    <script src="{{ asset('/') }}assets/vendor/libs/formvalidation/dist/js/FormValidation.min.js"></script>
    <script src="{{ asset('/') }}assets/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js"></script>
    <script src="{{ asset('/') }}assets/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js"></script>

    <!-- Main JS -->
    <script src="{{ asset('/') }}assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="{{ asset('/') }}assets/js/app-access-roles.js"></script>
    <script src="{{ asset('/') }}assets/js/modal-add-role.js"></script>
</body>
</html>
