<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Starter</title>
    <link rel="stylesheet" href="{{ mix("css/app.css") }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    @livewireStyles
</head>

<body class="hold-transition sidebar-mini">
<div class="wrapper" style="min-height: 93vh">
    <!-- Navbar top -->
    <x-topnav/>
    <!-- End navbar top -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4 ">
        <a href="index3.html" class="brand-link text-decoration-none">
            <span class="brand-text font-weight-light"><bold>YBLTD</bold></span>
        </a>
        <div class="sidebar ">
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="{{ asset('img/profil.jpg') }}" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <a href="#" class="d-block text-decoration-none">{{ userFullName() }}</a>
                </div>
            </div>
            <!-- Menu on the left -->
            <x-menu/>
            <!-- End menu -->
        </div>
    </aside>
    <div class="content container float-right">
        <div class="container-fluid">
            @yield("contenu")
        </div>
    </div>
    <!-- Right sidebar -->
    <x-sidebar/>
    <!-- End sidebar -->
</div>


<footer class="main-footer">
    <div class="float-right d-none d-sm-inline">
        TODO
    </div>
    <strong>Copyright &copy; 2023 Mano Raichon.</strong> All rights reserved.
</footer>

<script src="{{ mix("js/app.js") }}"></script>
@livewireScripts
</body>
</html>
