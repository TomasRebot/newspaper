
@extends('backend.dashboard')
@section('contenido')
@section('scripts')
<script src="{{asset('backend/plugins/jquery/dist/jquery.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.js"></script>
@stop
<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
        <div class="x_title">
            <h4>Crear usuario</h4>
            <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
        <br />
        {!!Form::open(['route' => ['panel.users.store'], 'method' => 'POST', 'class' => 'form-horizontal form-label-left', 'name'=>'user', 'id'=>'form1'])!!}
            @csrf
            <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Nombre completo : <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" name="name" id="name" required="required" class="@if ($errors->has('name')) parsley-error @endif form-control col-md-7 col-xs-12" value="{{ old('name') }}">
                @if ($errors->has('name'))
                    <div class="error">{{ $errors->first('name') }}</div>
                @endif
            </div>
            </div>
            <div class="form-group">
            <label for="email" class="control-label col-md-3 col-sm-3 col-xs-12">Email :</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <input id="email" class="form-control col-md-7 col-xs-12 @if ($errors->has('email')) parsley-error @endif" type="text" name="email" value="{{ old('email') }}">
                @if ($errors->has('email'))
                    <div class="error">{{ $errors->first('email') }}</div>
                @endif
            </div>
            </div>

            <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Contraseña : <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <input id="password" class="form-control col-md-7 col-xs-12 @if ($errors->has('password')) parsley-error @endif" type="text" name="password" value="{{ old('password') }}">
                @if ($errors->has('password'))
                    <span class="danger">{{ $errors->first('password') }}</span>
                @endif
            </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Roles :</label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <div class="">
                      <ul style="list-style: none; padding:10px;">
                          @foreach($roles as $iterador => $rol)
                          <li>
                            <div class="col-md-5">
                            <input type="checkbox" value="{{$rol->id}}" class="flat" name="roles[]">
                            <label>{{$rol->name}}</label>
                            </div>
                          </li>
                          @endforeach
                      </ul>
                  </div>
                </div>
            </div>
                <div class="col-md-6 col-sm-6 col-xs-12 ">
                    <button type="submit" class="btn btn-success btn-sm">Crear</button>
                    <a href="{{route('panel.users.index')}}" class="btn btn-danger btn-sm" type="button">Cancelar</a>
                </div>
        {!!Form::close()!!}
        </div>
    </div>
    </div>
</div>
@endsection

