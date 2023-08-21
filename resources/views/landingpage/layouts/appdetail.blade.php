<!DOCTYPE html>

<html lang="en">

<head>
    @include('landingpage.layouts.partials.head')
</head>

<body>
    <!-- Navigation Header-->
    @include('landingpage.layouts.partials.navbar')
    <!-- /Nav -->
    <section class="single-block-wrapper section-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
                    @yield('content')
                </div>
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