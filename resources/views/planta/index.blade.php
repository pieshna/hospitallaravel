@include('template')
@yield('header')

<div class="container">
</div>
<div class="container-fluid table-responsive">
    <div class="jumbotron jumbotron-fluid bg-info text-white">
        <h1 style="font-size: 60px;" class="text-center">Lista de Plantas</h1>
    </div>
    @if(Session::has('Mensaje'))
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>{{Session::get('Mensaje')}}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif
    <a class="btn btn-primary btn-lg " href="{{url('/planta/create')}}">Nuevo</a><br><br>
    <table class="table table-hover">
        <thead>
            <tr class='bg-info'>
                <th scope="col">No. Planta</th>
                <th scope="col">Nombres</th>
                <th scope="col">Total Camas</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($planta as $plantas)
            <tr>
                <td>{{$plantas->no_planta}}</td>
                <td>{{$plantas->nombre}}</td>
                <td>{{$plantas->total_camas}}</td>
                <td>
                    
                        <a href="{{url('/planta/'.$plantas->no_planta.'/edit')}}" class="btn btn-warning">Editar</a>
                        <form method="post" action="{{url('/planta/'.$plantas->no_planta)}}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Borrar paciente?');"
                                class="btn btn-danger">Borrar</button>
                        </form>

                    
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@yield('footer')