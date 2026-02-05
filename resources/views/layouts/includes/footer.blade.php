<footer class="footer mt-auto py-4">
    <div class="container">
        <div class="row align-items-center">

            <!-- Kiri: Brand / Copyright -->
            <div class="col-md-6 text-center text-md-start mb-2 mb-md-0">
                <span class="text-light fw-semibold">&copy; {{ date('Y') }} MyApp. All rights reserved.</span>
            </div>

            <!-- Kanan: Links -->
            <div class="col-md-6 text-center text-md-end">
                <a href="{{ url('/') }}" class="text-light me-3">Home</a>
                <a href="{{ url('/helps') }}" class="text-light me-3">Helps</a>
                <a href="{{ url('/contact') }}" class="text-light">Contact</a>
            </div>

        </div>
    </div>
</footer>
