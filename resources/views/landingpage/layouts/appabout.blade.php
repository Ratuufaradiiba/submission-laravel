<!DOCTYPE html>

<html lang="en">

<head>
    @include('landingpage.layouts.partials.head')
</head>

<body>
    <!-- Navigation Header-->
    @include('landingpage.layouts.partials.navbar')
    <!-- /Nav -->

    <div class="breadcrumb-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="text-center">
                        <h2 class="lg-title">About Me</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="pt-5 padding-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
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
