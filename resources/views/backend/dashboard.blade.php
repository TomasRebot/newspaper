
@include('backend.partials.header')
  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
      @include('backend.menu.nav')
        <!-- top navigation -->

        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main" >
            <div class="animated fadeInRight">
                @yield('contenido')
            </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        @include('backend.partials.footer')
        <!-- /footer content -->
      </div>
    </div>
@include('backend.partials.scripts')
@include('backend.partials.toastr')

