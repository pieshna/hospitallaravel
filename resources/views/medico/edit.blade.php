@include('template')
@yield('header')
<div class="container-fluid">
    <div class="jumbotron jumbotron-fluid bg-success text-white">
        <h1 style="font-size: 60px;" class="text-center">Editar Medico</h1>
    </div>
    <form action="{{url('/medico/'.$buscarmedico->codigo)}}" method="post">
        @csrf
        @method('PATCH')
        @include('medico.form')
        @yield('form')

        <br>

        <div class="row justify-content-between">
            <div class="col-s3"><a href="/medico" class="btn btn-block bg-danger">Cancelar</a></div>
            <div class="col-s3"><input type="submit" class="btn btn-block btn-success" value="Editar"></div>
        </div>
    </form>

</div>
@yield('footer')