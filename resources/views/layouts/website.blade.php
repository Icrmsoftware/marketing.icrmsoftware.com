<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>iCommerce - Web Design Service</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    @vite('resources/css/app.css')
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Anton&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">


    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.7.2/css/all.css">

    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.7.2/css/sharp-duotone-thin.css">

    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.7.2/css/sharp-duotone-solid.css">

    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.7.2/css/sharp-duotone-regular.css">

    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.7.2/css/sharp-duotone-light.css">

    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.7.2/css/sharp-thin.css">

    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.7.2/css/sharp-solid.css">

    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.7.2/css/sharp-regular.css">

    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.7.2/css/sharp-light.css">

    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.7.2/css/duotone-thin.css">

    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.7.2/css/duotone-regular.css">

    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.7.2/css/duotone-light.css">


    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
        integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />



    <link rel="stylesheet" href="{{ asset('css/icrm.css') }}?v={{ time() }}">
    @livewireStyles
</head>

<body class="bg-white">
    @include('partials.header')
    @yield('content')
    @include('partials.footer')

    @livewireScripts

    <!-- jQuery (Required) -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <!-- Owl Carousel JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>

    <script>
        $(document).ready(function() {
            $(".owl-carousel.testimonials").owlCarousel({
                loop: true,
                margin: 20,
                nav: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 2
                    },
                    1000: {
                        items: 3
                    }
                }
            });
        });
    </script>


</body>

</html>
