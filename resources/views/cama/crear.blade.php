@include('template')
@yield('header')

<div class="container-fluid">
    <div class="jumbotron jumbotron-fluid bg-primary text-white">
        <h1 style="font-size: 60px;" class="text-center">Ingresar Cama</h1>
    </div>
    <form action="{{url('/cama')}}" method="post">
        @csrf
        @include('cama.form')
        @yield('form')

        <br>

        <div class="row justify-content-between">
            <div class="col-s3"><a href="/cama" class="btn btn-block bg-danger">Cancelar</a></div>
            <div class="col-s3"><input type="submit" class="btn btn-block btn-success" value="Guardar"></div>
        </div>
    </form>
</div>
@yield('footer')