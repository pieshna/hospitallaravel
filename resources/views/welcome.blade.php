@include('template')
@yield('header')

<div class="container-fluid">
    <div style="font-size: 60px; height: 200px; background-color: #1C6CFF; 
        background-image: linear-gradient(to bottom right, #1C6CFF, #94C5FF);" class="jumbotron jum text-white">
        <h1 class="text-center">Hospital</h1>
    </div>
    <div class="row">
        <div class="col-lg-4">
            <div class="card" style="width: 29rem; height: 24rem;">
                <img class="card-img-top" src="images/paciente.jpg" height="300px" alt="Card image cap">
                <div class="card-body">
                    <a type="button" class="card-title" href="{{url('/paciente')}}">
                        <h5> Control Pacientes</h5>
                    </a>
                </div>
            </div>
        </div>
        <br>
        <div class="col-lg-4">
            <div class="card" style="width: 29rem; height: 24rem;">
                <img class="card-img-top" src="images/planta.jpg" alt="Card image cap">
                <div class="card-body">
                    <a type="button" class="card-title" href="{{url('/planta')}}">
                        <h5>Control Plantas</h5>
                    </a>
                </div>
            </div>
        </div><br>
        <div class="col-lg-4">
            <div class="card" style="width: 29rem; height: 24rem;">
                <img class="card-img-top" src="images/camas.jpg" height="300px" alt="Card image cap">
                <div class="card-body">
                    <a type="button" class="card-title" href="{{url('/cama')}}">
                        <h5>Control Camas</h5>
                    </a>
                </div>
            </div><br>
        </div>
        <br>
        <div class="col-lg-4">
            <div class="card" style="width: 29rem; height: 24rem;">
                <img class="card-img-top" src="/images/medico.jpg" height="300px" alt="Card image cap">
                <div class="card-body">
                    <a type="button" class="card-title" href="{{url('/medico')}}">
                        <h5>Control Medicos</h5>
                    </a>
                </div>
            </div>
        </div>
        <br>
        <div class="col-lg-4">
            <div class="card" style="width: 29rem; height: 24rem;">
                <img class="card-img-top" src="images/visita.jpg" height="300px" alt="Card image cap">
                <div class="card-body">
                    <a type="button" class="card-title" href="{{url('/visita')}}">
                        <h5>Control Visitas</h5>
                    </a>
                </div>
            </div>
        </div>
        <br>
        <div class="col-lg-4">
            <div class="card" style="width: 29rem;">
                <img class="card-img-top" src="images/bitacora.jpg" alt="Card image cap">
                <div class="card-body">
                    <a type="button" class="card-title" href="{{url('/bitacora')}}">
                        <h5>Control Bitacoras</h5>
                    </a>
                </div>
            </div>
        </div>
        <br>
    </div>
    <br>
</div>

@yield('footer')