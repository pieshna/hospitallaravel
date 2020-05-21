@include('template')
@yield('header')

<div class="container">
</div>
<div class="container-fluid table-responsive">
    <div class="jumbotron jumbotron-fluid bg-info text-white">
        <h1 style="font-size: 60px;" class="text-center">Medicos</h1>
    </div>
    @if(Session::has('Mensaje'))
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>{{Session::get('Mensaje')}}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif
    <a class="btn btn-primary btn-lg " href="{{url('/medico/create')}}">Nuevo</a><br><br>
    <table class="table table-hover">
        <thead>
            <tr class='bg-info'>
                <th scope="col-s2">Codigo</th>
                <th scope="col-s3">Nombres</th>
                <th scope="col-s3">Apellidos</th>
                <th scope="col-s3">Especialidad</th>
                <th scope="col-s3">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($medicos as $medico)
            <tr>
                <td>{{$medico->codigo}}</td>
                <td>{{$medico->nombres}}</td>
                <td>{{$medico->apellidos}}</td>
                <td>{{$medico->especialidad}}</td>
                <td>
                    <div class="row">
                        <a href="{{url('/medico/'.$medico->codigo.'/edit')}}" class="btn btn-warning"
                            style='margin-right: 1rem'>Editar</a>

                        <form method="post" action="{{url('/medico/'.$medico->codigo)}}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Borrar paciente?');"
                                class="btn btn-danger">Borrar</button>
                        </form>

                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@yield('footer')