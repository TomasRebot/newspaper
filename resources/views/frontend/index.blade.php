@extends('frontend.layout')

@section('contenido')

<!--Slider and text with icons before Section -->
@include('frontend.contenidos.pagina-principal.slider')
<!-- end off Slider and text with icons before  Section-->

<!--cartelera section-->
@include('frontend.contenidos.pagina-principal.cartelera')
<!-- End off cartelera section -->

<!--Best shows  Section-->
@include('frontend.contenidos.pagina-principal.nosotros')
<!-- End off Best showss section -->


<!--partners Section-->
@include('frontend.contenidos.pagina-principal.partners')
<!-- End off partners section -->


@endsection
