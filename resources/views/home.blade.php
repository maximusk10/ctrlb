

@extends('spark::layouts.app')

@section('content')
<home :user="user" inline-template>
    <div class="container">
        <!-- Application Dashboard -->
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card card-default">
                    <div class="card-header">Dashboard de {{ Auth::user()->currentTeam->name }}</div>
                    <home :user="user" :teams="teams" :current-team="currentTeam" inline-template>
                    <div class="card-body">
                        @if (Auth::user()->roleOn(Auth::user()->currentTeam) === 'owner')
                        <div class="row overview">
                        {{--  @if ($user->ownsTeam($team))  --}}        
                            <div class="col-sm overview__block overview__first">
                                <div class="row overview__camp_creadas">
                                    <p>Campañas Creadas</p>
                                </div>
                                <div class="row overview__value_block">
                                    <p> 
                                        {{ $cantidadCampanas }}
                                         
                                    </p>
                                </div>
                            </div>
                            <div class="col-sm overview__block overview__second">
                                <div class="row overview__camp_creadas">
                                    <p>Campañas Creadas este mes</p>
                                </div>
                                <div class="row overview__value_block">
                                    <p> 8 </p>
                                </div>
                            </div>
                            <div class="col-sm overview__block overview__third">
                                <div class="row overview__camp_creadas">
                                    <p>Dinero Invertido</p>
                                </div>
                                <div class="row overview__value_block">
                                    <p> 5000<span class="overview__value_currency"> MXN</span> </p>
                                </div>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="card card-default">
                    <div class="card-header">Campañas Activas</div>

                    <div class="card-body">
                        <table class="table table-responsive">
                            <thead class="thead-dark">
                                <tr>
                                <th scope="col">Nombre</th>
                                <th scope="col">Target</th>
                                <th scope="col">Fecha Inicio</th>
                                <th scope="col">Manager</th>
                                <th scope="col">Moneda</th>
                                <th scope="col">Presupuesto Inicial</th>
                                <th scope="col">Comentarios</th>
                                <th scope="col">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($listaCampanas as $camp)
                                <tr>
                                    <th scope="row">{{ $camp->nombre }}</th>
                                    <td> {{ $camp->target }} </td>
                                    <td> {{ $camp->fecha_inicio }} </td>
                                    <td> NN </td>
                                    <td> {{ $camp->moneda }} </td>
                                    <td> {{ $camp->presupuesto_inicial }} </td>
                                    <td> {{ $camp->comentarios }} </td>
                                    <td>
                                        @if (Auth::user()->roleOn(Auth::user()->currentTeam) === 'owner' || Auth::user()->roleOn(Auth::user()->currentTeam) === 'advanced')
                                            <a href="#" class="btn btn-info"><i class="fa fa-gear"></i></a>
                                        @endif
                                        @if (Auth::user()->roleOn(Auth::user()->currentTeam) === 'owner' || Auth::user()->roleOn(Auth::user()->currentTeam) === 'advanced' || Auth::user()->roleOn(Auth::user()->currentTeam) === 'premier')                                        
                                            <a href="#" class="btn btn-warning"><i class="fa fa-file-o"></i></a>
                                        @endif
                                        @if (Auth::user()->roleOn(Auth::user()->currentTeam) === 'owner')
                                            <a href="#" class="btn btn-danger"><i class="fa fa-ban"></i></a>
                                        @endif
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>

                        <div class="active__addBlock">
                            <a class="btn" href="campanas/create">
                                <i class="fa fa-plus"></i> Nueva Campaña
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="card card-default">
                    <div class="card-header">Más acciones de Administrador</div>

                    <div class="card-body">
                        <ul class="list-group">
                            <li class="list-group-item"><a href="#"> Configurar Moneda de Cambio </a></li>
                            <li class="list-group-item"><a href="#"> Ver estadísticas detalladas </a></li>
                            <li class="list-group-item"><a href="#"> Crear nuevo equipo </a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</home>
@endsection
