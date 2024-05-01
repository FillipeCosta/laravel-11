<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <script src="{{ asset('js/script.js') }}"></script>
    <link rel="stylesheet" href=" {{ asset('css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    <title>ATHENA</title>
</head>

<style>
    body {
        background-color: #EEEEEE;
    }
</style>

<body>
    <div id="wrapper" class="d-flex">
        <!-- Sidebar -->
        <div id="sidebar-wrapper" class="border-end bg-white">
            <div class="sidebar-heading border-bottom bg-light"><img src="{{ asset('img/logo-semfundo.png')}}" alt="" style="width: 41px"> <strong> ATHENA </strong></div>
            <div class="list-group list-group-flush">
                <a href="" class="list-group-item list-group-item-action list-group-item-light p-3 {{ request()->routeIs('dashboard') ? 'active' : '' }}">Dashboard</a>
                <a href="" class="list-group-item list-group-item-action list-group-item-light p-3 {{ request()->routeIs('forms.cadastral') ? 'active' : '' }}"><i class="bi bi-clipboard-data-fill"></i> Formulários</a>
           </div>
        </div>
        <!-- Page content wrapper -->
        <div id="page-content-wrapper">
            <!-- Top navigation -->
            <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                <div class="container-fluid d-flex justify-content-end">
                    {{-- <button id="sidebarToggle" class="btn btn-primary">Toggle Menu</button> --}}

                    {{-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button> --}}
                </div>
            </nav>
            <!-- Page content -->
            <div class="container-fluid">
                <main>
                    @yield('content')
                </main>
            </div>
        </div>
    </div>
</body>

<script>
    /// Script validation Bootstrap Forms
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (() => {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        const forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.from(forms).forEach(form => {
            form.addEventListener('submit', event => {
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                }

                form.classList.add('was-validated')
            }, false)
        })
    })()



    //
    // Scripts
    //

    window.addEventListener('DOMContentLoaded', event => {

        // Toggle the side navigation
        const sidebarToggle = document.body.querySelector('#sidebarToggle');
        if (sidebarToggle) {
            // Uncomment Below to persist sidebar toggle between refreshes
            // if (localStorage.getItem('sb|sidebar-toggle') === 'true') {
            //     document.body.classList.toggle('sb-sidenav-toggled');
            // }
            sidebarToggle.addEventListener('click', event => {
                event.preventDefault();
                document.body.classList.toggle('sb-sidenav-toggled');
                localStorage.setItem('sb|sidebar-toggle', document.body.classList.contains(
                    'sb-sidenav-toggled'));
            });
        }

    });
</script>

</html>
