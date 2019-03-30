@extends('backend.dashboard')
@section('contenido')
<div class="col-md-12 col-sm-12 col-xs-12">
<div class="row top_tiles">
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
          <div class="tile-stats">
            <div class="icon"><i class="fa fa-caret-square-o-right"></i></div>
            <div class="count">179</div>
            <h3>Videos</h3>
            <p>En el último mes</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
          <div class="tile-stats">
            <div class="icon"><i class="fa fa-comments-o"></i></div>
            <div class="count">135</div>
            <h3>Noticias</h3>
            <p>En el último mes.</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
          <div class="tile-stats">
            <div class="icon"><i class="fa fa-child"></i></div>
            <div class="count">25</div>
            <h3>Subscripciones</h3>
            <p>En el último mes.</p>
          </div>
        </div>
        <div class=" col-lg-3 col-md-3 col-sm-6 col-xs-12">
          <div class="tile-stats">
            <div class="icon"><i class="fa fa-check-square-o"></i></div>
            <div class="count">110</div>
            <h3>Suscripciones</h3>
            <p>En el último mes.</p>
          </div>
        </div>
</div>
</div>
@endsection
