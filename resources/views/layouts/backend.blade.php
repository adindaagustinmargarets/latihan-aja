<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ isset($title) ? $title : 'LARAVEL' }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-RXf+QSDCUQs6fVV8tGSn0tTjSFSYb3ydDbB+2l3fnxQ0UDq0iDujGnljlBv0PKmR5x1YbAlqz1MIbxxrjkhzQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    @stack('css')
</head>

<body>
    <div class="d-flex min-vh-100">
        {{-- Sidebar di kiri --}}
        <div class="bg-light border-end" style="width: 250px;">
            @include('layouts.partials.sidebar')
        </div>

        {{-- Konten utama dan footer --}}
        <div class="flex-grow-1 d-flex flex-column">
            {{-- Konten --}}
            <main class="flex-grow-1 p-4">
                @yield('content')
            </main>

            {{-- Footer --}}
            @include('layouts.partials.footer')
        </div>
    </div>
</body>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
<!--JQuery-->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<!-- DataTables JS -->
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<!-- Sweatalert -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@stack('js')
@if(session('success'))
<script>
    Swal.fire({
        position: "center",
        icon: "success",
        text: "{{ session('success') }}",
        showConfirmButton: false,
        timer: 1800
    });
</script>
@elseif(session('error'))
<script>
    Swal.fire({
        position: "center",
        icon: "error",
        text: "{{ session('error') }}",
        showConfirmButton: false,
        timer: 1800
    });
</script>
@endif

</html>