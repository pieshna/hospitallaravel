@include('template')
@yield('header')
<div class="container-fluid">
    <div class="jumbotron jumbotron-fluid bg-success text-white">
        <h1 style="font-size: 60px;" class="text-center">Editar Paciente</h1>
    </div>
    <form action="{{url('/paciente/'.$buscarpaciente->no_carne)}}" method="post">
        @csrf
        @method('PATCH')
        @include('paciente.form')
        @yield('form')

        <br>

        <div class="row justify-content-between">
            <div class="col-s3"><a href="/paciente" class="btn btn-block bg-danger">Cancelar</a></div>
            <div class="col-s3"><input type="submit" class="btn btn-block btn-success" value="Editar"></div>
        </div>
    </form>

</div>
@yield('footer')