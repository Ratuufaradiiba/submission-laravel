<!DOCTYPE html>

<html lang="en">

<head>
    @include('landingpage.layouts.partials.head')
</head>

<body>
    <!-- Navigation Header-->
    @include('landingpage.layouts.partials.navbar')
    <!-- /Nav -->

    <!-- Slider -->
    @include('landingpage.layouts.partials.slider')
    <!-- /Slider -->

    <section class="section-padding pt-4">
        <div class="container">
            <div class="row">
                @yield('content')

                @include('landingpage.layouts.partials.sidebar')
            </div>
        </div>
    </section>

    <!-- Footer -->
    @include('landingpage.layouts.partials.footer')
    <!-- /Footer -->

    <!-- Script -->
    @include('landingpage.layouts.partials.script')
    <!-- /Script -->

</body>