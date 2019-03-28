
@extends('backend.dashboard')
@section('contenido')
<div class="page-title">
    <div class="title_left">
    <h3>Editar Usuario</h3>
    </div>
</div>
<div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h4>Editar usuario</h4>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <br />
            {!!Form::open(['route' => ['panel.users.update', $user], 'method' => 'PUT', 'class' => 'form-horizontal form-label-left'])!!}
              @csrf
                <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Nombre completo : <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" name="name" id="name" required="required" class=" form-control col-md-7 col-xs-12" value="{{ old('name') ?? $user->name }}">
                  @if ($errors->has('name'))
                    <div class="error">{{ $errors->first('name') }}</div>
                  @endif
                </div>
              </div>
              <div class="form-group">
                <label for="email" class="control-label col-md-3 col-sm-3 col-xs-12">Email :</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input id="email" class="form-control col-md-7 col-xs-12 @if ($errors->has('email')) parsley-error @endif" type="text" name="email" value="{{ old('email') ?? $user->email }}">
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
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Confirme la contraseña : <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="password_confirm" class="form-control col-md-7 col-xs-12 @if ($errors->has('password_confirm')) parsley-error @endif" type="text" name="password_confirm" value="{{ old('password_confirm') }}">
                    @if ($errors->has('password_confirm'))
                    <span class="danger">{{ $errors->first('password_confirm') }}</span>
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
                                <input type="checkbox" value="{{$rol->id}}" @if(in_array($rol->id, $rolesUser)) checked @endif()class="flat" name="roles[]">
                                <label>{{$rol->name}}</label>
                                </div>
                              </li>
                              @endforeach
                          </ul>
                      </div>
                    </div>
                </div>
              <div class="ln_solid"></div>
                <div class="col-md-6 col-sm-6 col-xs-12 ">
                    <button type="submit" class="btn btn-success btn-sm">Guardar</button>
                  <a href="{{route('panel.users.index')}}" class="btn btn-danger btn-sm" type="button">Cancelar</a>
                </div>
              {!!Form::close()!!}
          </div>
        </div>
      </div>
    </div>
    @endsection

