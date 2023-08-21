<!DOCTYPE html>

<html lang="en">

<head>
    @include('landingpage.layouts.partials.head')
</head>

<body>
    <!-- Navigation Header-->
    @include('landingpage.layouts.partials.navbar')
    <!-- /Nav -->
    <section class="section-padding">
        <div class="container">
            <div class="row">
                @yield('content')
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