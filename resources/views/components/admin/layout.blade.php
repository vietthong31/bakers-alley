@props(['title' => "Baker's Alley Admin", 'h1' => 'Dashboard'])

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>{{ $title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="/css/bootstrap.css" rel="stylesheet" />
    <link href="/css/noti.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body class="sb-nav-fixed">
    <x-admin.navbar />
    <div id="layoutSidenav">
        <x-admin.sidenav />
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">{{ $h1 }}</h1>

                    {{ $breadcrumb }}

                    {{ $slot }}

                    {{-- display message if it's exist --}}
                    @if (session()->has('success'))
                        <div id="noti" x-data="{ show: true }"
                            x-init="setTimeout(() => show = false, 4000)"
                            x-show="show" x-transition>
                            <p>{{ session('success') }}</p>
                        </div>
                    @endif

                </div>
            </main>
            <x-admin.footer />
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="/js/scripts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="/js/datatables-simple-demo.js"></script>
</body>

</html>
