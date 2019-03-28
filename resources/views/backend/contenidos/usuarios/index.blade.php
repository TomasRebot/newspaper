
@extends('backend.dashboard')
@section('scripts')
<script src="{{asset('backend/plugins/jquery/dist/jquery.min.js')}}"></script>
@stop
@section('contenido')
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
        <div class="x_title">
            <h4>Listado de usuarios</h4>
            <div class="clearfix"></div>
            <ul class="nav navbar-left panel_toolbox">
                <a href="{{route('panel.users.create')}}" class="btn btn-sm btn-success">Nuevo</a>
                <a  id="deleteMultipleUsers" class="btn btn-sm btn-danger"  >Eliminar</a>
            </ul>
            <ul class="nav navbar-rigth panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"></a>
            </li>
            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <div class="table-responsive">
            <table class="table table-striped jambo_table bulk_action">
                <thead>
                <tr class="headings">
                    <th>
                    <input type="checkbox" id="check-all" class="">
                    </th>
                    <th class="column-title">Nombre </th>
                    <th class="column-title">Email </th>
                    <th class="column-title">Rol </th>
                    <th class="column-title no-link last"><span class="nobr">Estado</span>
                    <th class="bulk-actions" colspan="7">
                        <a class="antoo" style="color:#fff; font-weight:500;">Usuarios ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                    </th>
                    </th>
                </tr>
                </thead>
                <tbody>
                @can('panel.users.edit')
                @foreach($users as $user)
                <tr class="even pointer">
                    <td class="a-center ">
                    <input type="checkbox" value="{{$user->id}}" class="" name="usuarios_ids[]">
                    </td>
                    <td class=" "><a href="{{route('panel.users.edit', ['id' => $user])}}">{!!$user->name!!}</a></td>
                    <td class=" "><a href="{{route('panel.users.edit', ['id' => $user])}}">{{$user->email}}</a></td>
                    <td class=" "><a href="{{route('panel.users.edit', ['id' => $user])}}">{{$user->rol ?? 'aun no tiene'}}</a></td>
                    <td class=" last"><a href="#">{!!($user->estado == '1') ? "<label class='badge badge-success'>activo</label>" : "<label class='badge badge-danger'>inactivo</label>"!!}</a>
                    </td>
                </tr>
                @endforeach
                @endcan
                </tbody>
            </table>
            </div>
        </div>
        </div>
    </div>
  <link rel="stylesheet" href="{{asset('backend/plugins/animate.css/animate.css')}}">
  <script>
    $(document).ready(function(){
        $("#check-all").click(function () {
            $("input:checkbox").prop('checked', $(this).prop("checked"));
        });

        $('#deleteMultipleUsers').click(function(){
            var arr = $('[name="usuarios_ids[]"]:checked').map(function(){
                return this.value;
            }).get();
            var id = arr;
            $.ajaxSetup({
                headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
              });
            $.ajax({
            url: "{{url('ajax/users/delete')}}",
            type: 'post',
            dataType: "JSON",
            data: {
                "id": id,
            },
            success: function (data)
            {
                //console.log(data);
            location.reload();
            }
         });
        });
   });
</script>


  @endsection

