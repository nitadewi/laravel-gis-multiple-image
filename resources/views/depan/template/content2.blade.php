@include('depan.template.head')

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container">

            <div class="logo float-left">
                <h1 class="text-light"><a href="index.html"><span>GIS: Kabupaten Belitung</span></a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
            </div>

            <nav class="nav-menu float-right d-none d-lg-block">
                <ul>
                    <li class="active"><a href="index.html">Home</a></li>

                    <li><a href="team.html">Maps</a></li>
                    <li class="drop-down"><a href="">Atraction</a>
                        <ul>
                            <li><a href="#">Semua category</a></li>
                            <li class="drop-down"><a href="#">Category</a>
                                <ul>
                                    <li><a href="#">Deep Drop Down 1</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="contact.html">Contact Us</a></li>
                </ul>
            </nav><!-- .nav-menu -->

        </div>
    </header><!-- End Header -->

    @yield('content')

    <!-- Begin Page Content -->
    <main id="main">
        @yield('main')
    </main>
    <!-- End of Main Content -->

    @include('depan.template.footer')