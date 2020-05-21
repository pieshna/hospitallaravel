@include('template')
@yield('header')

<div class="container">
</div>
<div class="container-fluid table-responsive">
    <div class="jumbotron jumbotron-fluid bg-info text-white">
        <h1 style="font-size: 60px;" class="text-center">Registro de Visitas</h1>
    </div>
    @if(Session::has('Mensaje'))
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>{{Session::get('Mensaje')}}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif
    <a class="btn btn-primary btn-lg " href="{{url('/visita/create')}}">Nuevo</a><br><br>
    <table class="table table-hover">
        <thead>
            <tr class='bg-info'>
                <th scope="col">Id de visita</th>
                <th scope="col">Nombre de visita</th>
                <th scope="col">No de visita</th>
                <th scope="col">Horario</th>
                <th scope="col">Duracion</th>
                <th scope="col">Paciente</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($visitas as $visita)
            <tr>
                <td>{{$visita->idvisita}}</td>
                <td>{{$visita->nombre_visita}}</td>
                <td>{{$visita->no_visitas}}</td>
                <td>{{$visita->horario}}</td>
                <td>{{$visita->duracion}}</td>
                <td>{{$visita->nombres.' '.$visita->apellidos}}</td>
                <td>
                    <div class="row">
                        <a href="{{url('/visita/'.$visita->idvisita.'/edit')}}" class="btn btn-warning"
                            style='margin-right: 1rem'>Editar</a>

                        <form method="post" action="{{url('/visita/'.$visita->idvisita)}}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Borrar Datos?');"
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