<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="MI Muhammadiyah Gempolsewu - Pendidikan Islam Berkualitas">
    <title>MI Muhammadiyah Gempolsewu - Beranda</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">

    <!-- AOS Animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    {{-- main css --}}
    <link rel="stylesheet" href="{{ asset("css/guest/main.css") }}">
    
    {{-- css --}}
    @stack('style')

</head>

<body>

    <!-- Top Info Bar -->
    <x-guest-topbar></x-guest-topbar>

    <!-- Navbar -->
    <x-guest-navbar></x-guest-navbar>

    @yield('main')

    <!-- Footer -->
    <x-guest-footer></x-guest-footer>

    <!-- Back to Top -->
    <a href="#" class="back-to-top" id="backToTop">
        <i class="fas fa-arrow-up"></i>
    </a>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- AOS Animation -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    @stack('script')

</body>

</html>
