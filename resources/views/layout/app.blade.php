<!DOCTYPE html>
<html lang="en">
@include('layout.partials.head')

<body class="d-flex flex-column h-100">
  @include('layout.partials.navbar')

  <main class="page-content flex-shrink-0">
      @yield("content")
  </main>

  @include('layout.partials.footer')

  <!-- jQUery js CDN -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="{{ asset('js/app.js') }}"></script>
  @yield('scripts')
</body>

</html>

resources/views/layout/partials