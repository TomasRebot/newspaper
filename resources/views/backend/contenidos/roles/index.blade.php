
@extends('backend.dashboard')
@section('scripts')
<script src="{{asset('backend/plugins/jquery/dist/jquery.min.js')}}"></script>
@stop
@section('contenido')
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
        <div class="x_title">
            <h4>Listado de roles</h4>
            <div class="clearfix"></div>
            <ul class="nav navbar-left panel_toolbox">
                <a href="{{route('panel.roles.create')}}" class="btn btn-sm btn-success">Nuevo</a>
                <a  id="deleteMultipleRoles" class="btn btn-sm btn-danger"  >Eliminar</a>
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
                    <input type="checkbox" id="check-all" class="flat">
                    </th>
                    <th class="column-title">Nombre </th>
                    <th class="column-title">slug </th>
                    <th class="column-title">descripcion </th>
                    <th class="bulk-actions" colspan="7">
                        <a class="antoo" style="color:#fff; font-weight:500;">Usuarios ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                    </th>
                    </th>
                </tr>
                </thead>
                <tbody>
                    @foreach($roles as $role)
                <tr class="even pointer">
                    <td class="a-center ">
                    <input type="checkbox" value="{{$role->id}}" class="flat" name="roles_ids[]">
                    </td>
                    <td class=" "><a href="{{route('panel.roles.edit', ['id' => $role])}}">{!!$role->name!!}</a></td>
                    <td class=" "><a href="{{route('panel.roles.edit', ['id' => $role])}}">{{$role->slug}}</a></td>
                    <td class=" "><a href="{{route('panel.roles.edit', ['id' => $role])}}">{{$role->description}}</a></td>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
            </div>
        </div>
        </div>
    </div>
  <link rel="stylesheet" href="{{asset('backend/plugins/animate.css/animate.css')}}">
  <script>
    $(document).ready(function(){
        $('#deleteMultipleRoles').click(function(){
            var arr = $('[name="roles_ids[]"]:checked').map(function(){
                return this.value;
            }).get();
            var id = arr;
            $.ajaxSetup({
                headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
              });
            $.ajax({
            url: "{{url('ajax/roles/delete')}}",
            type: 'post',
            dataType: "JSON",
            data: {
                "id": id,
            },
            success: function (data)
            {
                console.log(data);
                window.location="{{url('panel/roles')}}";
            }
         });
        });
   });
</script>


  @endsection

