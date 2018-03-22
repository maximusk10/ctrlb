@extends('spark::layouts.app')
@section('content')
  <section class="container">
    <div class="row justify-content-center">
      <div class="col-md-12">
        <div class="card card-default">
          <div class="card-header">
              Gestor de Campañas
          </div>
          <div class="card-body">

            <table class="table table-responsive">
                <thead>
                    <tr>
                        <td colspan="2">
                            <strong>Resumen</strong>
                        </td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            Nombre
                        </td>
                        <td>
                            {{ $campaign[0]->nombre }}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Target
                        </td>
                        <td>
                            {{ $campaign[0]->target }}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Fecha Inicio
                        </td>
                        <td>
                            {{ $campaign[0]->fecha_inicio }}
                        </td>
                    </tr>
                    
                    <tr>
                        <td>
                            Moneda
                        </td>
                        <td>
                            {{ $campaign[0]->moneda }}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Presupuesto Inicial
                        </td>
                        <td>
                            {{ $campaign[0]->presupuesto_inicial }}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Comentarios
                        </td>
                        <td>
                            {{ $campaign[0]->comentarios }}
                        </td>
                    </tr>
                    

                </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>  
  </section>
@endsection