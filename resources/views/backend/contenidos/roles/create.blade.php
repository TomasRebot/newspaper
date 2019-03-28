
@extends('backend.dashboard')
@section('contenido')
@section('scripts')
<script src="{{asset('backend/plugins/jquery/dist/jquery.min.js')}}"></script>
@stop
<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
        <div class="x_title">
            <h4>Crear rol</h4>
            <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
        <br />
        {!!Form::open(['route' => ['panel.roles.store'], 'method' => 'POST', 'class' => 'form-horizontal form-label-left', 'name'=>'roles', 'id'=>'form2'])!!}
            @csrf
            <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Nombre : <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" name="name" id="name" required="required" class="@if ($errors->has('name')) parsley-error @endif form-control col-md-7 col-xs-12" value="{{ old('name') }}">
                @if ($errors->has('name'))
                    <div class="error">{{ $errors->first('name') }}</div>
                @endif
            </div>
            </div>
            <div class="form-group">
            <label for="email" class="control-label col-md-3 col-sm-3 col-xs-12">Etiqueta :</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <input id="slug" class="form-control col-md-7 col-xs-12 @if ($errors->has('slug')) parsley-error @endif" type="text" name="slug" value="{{ old('slug') }}">
                @if ($errors->has('slug'))
                    <div class="error">{{ $errors->first('slug') }}</div>
                @endif
            </div>
            </div>

            <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Descripcion :</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <input id="description" class="form-control col-md-7 col-xs-12 " type="text" name="description" value="{{ old('description') }}">
                @if ($errors->has('description'))
                    <span class="danger">{{ $errors->first('description') }}</span>
                @endif
            </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Permisos :</label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                    <div class="">
                        <ul style="list-style: none; padding:10px;">
                            <li>
                            <td class="a-center">
                                <input  type="checkbox" value="Super administrador" class="flat" name="roles[]">
                                <label>Super Usuario</label>
                            </td>
                            </li>
                            <li>
                            <td class="a-center ">
                                <input type="checkbox" value ="Administrador"class="flat" name="roles[]">
                                <label >Administrador</label>
                            </td>
                            </li>
                            <li>
                            <td class="a-center ">
                                <input type="checkbox" class="flat" value="Boletero" name="roles[]">
                                <label>Boletero</label>
                            </td>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
                <div class="col-md-6 col-sm-6 col-xs-12 ">
                    <button type="submit" class="btn btn-success btn-sm">Crear</button>
                    <a href="{{route('panel.roles.index')}}" class="btn btn-danger btn-sm" type="button">Cancelar</a>
                </div>
        {!!Form::close()!!}
        </div>
    </div>
    </div>
</div>
@endsection

