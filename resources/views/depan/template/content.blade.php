@include('depan.template.head')
@include('depan.template.header')

@yield('content')

<!-- Begin Page Content -->
<main id="main">
    @yield('main')
</main>
<!-- End of Main Content -->

@include('depan.template.footer')