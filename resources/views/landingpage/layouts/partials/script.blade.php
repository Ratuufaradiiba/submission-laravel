<!-- initialize jQuery Library -->
<script src="{{ asset('landingpage/theme/plugins/jquery/jquery.js') }}"></script>
<!-- Bootstrap jQuery -->
<script src="{{ asset('landingpage/theme/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('landingpage/theme/plugins/bootstrap/js/popper.min.js') }}"></script>
<!-- Owl caeousel -->
<script src="{{ asset('landingpage/theme/plugins/owl-carousel/owl.carousel.min.js') }}"></script>
<script src="{{ asset('landingpage/theme/plugins/slick-carousel/slick.min.js') }}"></script>
<script src="{{ asset('landingpage/theme/plugins/magnific-popup/magnific-popup.js') }}"></script>
<!-- Instagram Feed Js -->
<script src="{{ asset('landingpage/theme/plugins/instafeed-js/instafeed.min.js') }}"></script>
<!-- Google Map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCC72vZw-6tGqFyRhhg5CkF2fqfILn2Tsw"></script>
<script src="{{ asset('landingpage/theme/plugins/google-map/gmap.js') }}"></script>
<!-- main js -->
<script src="{{ asset('landingpage/theme/js/custom.js') }}"></script>
<script src="https://unpkg.com/sweetalert@2.1.2/dist/sweetalert.min.js"></script>
<script src="sweetalert2.all.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/promise-polyfill@8/dist/polyfill.js"></script>
{{-- sweet alert --}}
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @if (session('success'))
        <script>
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: '{{ session('success') }}',
                showConfirmButton: true,
                timer: 1500
            })
        </script>
    @endif
    @if (session('error'))
        <script>
            Swal.fire({
                position: 'center',
                icon: 'error',
                title: '{{ session('error') }}',
                showConfirmButton: true,
                timer: 1500
            })
        </script>
    @endif
    <script>
        $('body').on('click', '.btnDelete', function(e) {
            e.preventDefault();
            var action = $(this).data('action');
            Swal.fire({
                title: 'Yakin ingin menghapus data ini?',
                text: "Data yang sudah dihapus tidak bisa dikembalikan lagi",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                cancelButtonText: 'Batal',
                confirmButtonText: 'Yakin'
            }).then((result) => {
                if (result.isConfirmed) {
                    $('#formDelete').attr('action', action);
                    $('#formDelete').submit();
                }
            })
        })
    </script>
