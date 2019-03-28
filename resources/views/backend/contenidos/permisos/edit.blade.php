
@extends('backend.dashboard')
@section('contenido')
<div class="page-title">
    <div class="title_left">
    <h3>Editar Permiso</h3>
    </div>
</div>
<div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h4>Editar permiso</h4>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <br />
            {!!Form::open(['route' => ['panel.permisos.update', $permiso], 'method' => 'PUT', 'class' => 'form-horizontal form-label-left'])!!}
              @csrf
                <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Nombre: <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" name="name" id="name" required="required" class=" form-control col-md-7 col-xs-12" value="{{ old('name') ?? $permiso->name }}">
                  @if ($errors->has('name'))
                    <div class="error">{{ $errors->first('name') }}</div>
                  @endif
                </div>
              </div>
              <div class="form-group">p
                <label for="etiqueta" class="control-label col-md-3 col-sm-3 col-xs-12">Etiqueta :</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input id="etiqueta" class="form-control col-md-7 col-xs-12 @if ($errors->has('slug')) parsley-error @endif" type="text" name="slug" value="{{ old('slug') ?? $permiso->slug }}">
                  @if ($errors->has('slug'))
                    <div class="error">{{ $errors->first('slug') }}</div>
                  @endif
                </div>
              </div>
              <div class="form-group">
                <label for="description" class="control-label col-md-3 col-sm-3 col-xs-12">Descripcion :</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input id="description" class="form-control col-md-7 col-xs-12 @if ($errors->has('description')) parsley-error @endif" type="text" name="description" value="{{ old('description') ?? $permiso->description }}">
                  @if ($errors->has('email'))
                    <div class="error">{{ $errors->first('description') }}</div>
                  @endif
                </div>
              </div>
              <div class="ln_solid"></div>
                <div class="col-md-6 col-sm-6 col-xs-12 ">
                    <button type="submit" class="btn btn-success btn-sm">Guardar</button>
                  <a href="{{route('panel.permisos.index')}}" class="btn btn-danger btn-sm" type="button">Cancelar</a>
                </div>
              {!!Form::close()!!}
          </div>
        </div>
      </div>
    </div>
    @endsection

