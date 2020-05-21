@include('template')
@yield('header')

<div class="container-fluid">
    <div class="jumbotron jumbotron-fluid bg-primary text-white">
        <h1 style="font-size: 60px;" class="text-center">Nuevo Paciente</h1>
    </div>
    <form action="{{url('/paciente')}}" method="post">
        @csrf
        @include('paciente.form')
        @yield('form')

        <br>

        <div class="row justify-content-between">
            <div class="col-s3"><a href="/paciente" class="btn btn-block bg-danger">Cancelar</a></div>
            <div class="col-s3"><input type="submit" class="btn btn-block btn-success" value="Guardar"></div>
        </div>
    </form>
</div>