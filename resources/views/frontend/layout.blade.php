@include('frontend.partials.header')
        <!-- Preloader -->
        @include('frontend.partials.loader')
        <!--End off Preloader -->
        <div class="culmn">
        <!--Navbar section-->
            <nav class="navbar navbar-default bootsnav navbar-fixed">
                <div class="navbar-top bg-grey fix">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="navbar-callus text-left sm-text-center">
                                    <ul class="list-inline">
                                        <li><a href=""><i class="fa fa-phone"></i> LLamanos: 0123 4567 89</a></li>
                                        <li><a href=""><i class="fa fa-envelope-o"></i> Via email: devel-tomas@gmail.com</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="navbar-socail text-right sm-text-center">
                                    <ul class="list-inline">
                                        <li><a href=""><i class="fa fa-facebook"></i></a></li>
                                        <li><a href=""><i class="fa fa-twitter"></i></a></li>
                                        <li><a href=""><i class="fa fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Start Top Search -->
                <div class="top-search">
                    <div class="container">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-search"></i></span>
                            <input type="text" class="form-control"  placeholder="Buscar obras de teatro">
                            <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
                        </div>
                    </div>
                </div>
                <!-- End Top Search -->


                <div class="container">
                    <div class="attr-nav">
                        <ul>
                            <li class="search"><a href="#"><i class="fa fa-search"></i></a></li>
                        </ul>
                    </div>

                    <!-- Start Header Navigation -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                            <i class="fa fa-bars"></i>
                        </button>
                        <a class="navbar-brand" href="">
                            <img src="{{asset('frontend/img/logo.png')}}" class="logo" alt="">
                            <!--<img src="{{asset('frontend/img/footer-logo.png')}}" class="logo logo-scrolled" alt="">-->
                        </a>

                    </div>
                    <!-- End Header Navigation -->

                    <!-- navbar menu -->
                    <div class="collapse navbar-collapse" id="navbar-menu">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="">Inicio</a></li>
                            <li><a href="#cartelera">Cartelera</a></li>
                            <li><a target="_blank" href="https://www.fundacionodeon.com.ar/ventas/">Cine</a></li>
                            <li><a href="#nosotros">Nosotros</a></li>
                            <li><a href="#contacto">Contacto</a></li>
                            <li><a href="{{url('/login')}}">Ingresar</a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div>
            </nav>
            <!--end off navbar secction-->

        @yield('contenido')


        <!--Footer section-->
        @include('frontend.partials.footer')
        <!-- end off Footer section-->


        @include('frontend.partials.scripts')
