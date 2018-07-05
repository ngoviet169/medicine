<a href="{{ route("{$route}.edit", ['id' => $id]) }}" class="icon edit-customer"><i class="zmdi zmdi-eye"></i></a>
<a href="{{ route("{$route}.edit", ['id' => $id]) }}" class="icon edit-customer"><i class="zmdi zmdi-edit"></i></a>
{!! Form::open(['url' => route("{$route}.delete", ['id' => $id]), 'method' => 'POST', 'style' => 'vertical-align: middle; display: inline-block;']) !!}
{{ method_field('DELETE') }}
    <a href="javascript:void(0)" class="icon edit-customer sweet-warning-cancel"><i class="zmdi zmdi-delete delete-icon"></i></a>
{!! Form::close() !!}