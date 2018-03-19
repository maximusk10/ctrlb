@extends('spark::layouts.app')

@section('content')
  <crear-campana inline-template>
  <section class="container">
    <div class="row justify-content-center">
      <div class="col-md-12">
        <div class="card card-default">
          <div class="card-header">
              Crear una nueva campaña en equipo {{ Auth::user()->currentTeam->name }}
          </div>
          <div class="card-body">
            {!! Form::open(array('url'=>'campanas', 'method'=>'POST', 'autocomplete'=>'off')) !!}
              {{ csrf_field() }}
            <div class="form-group">
              <label for="txtNombre">Nombre de la Campaña</label>
              <input type="text" class="form-control" name="txtNombre" id="txtNombre" value="Campaña Bonita" placeholder="Nombre de la campaña">
            </div>
            <div class="form-group">
              <label for="txtTarget">Target</label>
              <input type="text" class="form-control" name="txtTarget" id="txtTarget" value="wwwww" placeholder="Target">
            </div>
            <div class="form-group">
              <label for="txtFechaInicio"> Fecha de Inicio </label>
              <datepicker input-class="form-control" :format="customFormatter" name="txtFechaInicio" id="txtFechaInicio" calendar-class="form-control"></datepicker>
            </div>
            <div class="form-group">
              <label for="txtComentarios">Comentarios</label>
              <input type="text" class="form-control" name="txtComentarios" id="txtComentarios" value="assd" placeholder="Comentarios">
            </div>
            <div class="form-group">
              <label for="txtMoneda">Moneda</label>
              <input type="text" class="form-control" name="txtMoneda" id="txtMoneda" value="USD" placeholder="Moneda">
            </div>
            <div class="form-group">
              <label for="txtPresupuestoInicial">Presupuesto Inicial</label>
              <input type="text" class="form-control" name="txtPresupuestoInicial" id="txtPresupuestoInicial" value="1100" placeholder="Presupuesto Inicial (en la moneda escogida)">
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary">Guardar</button>
              <button type="reset" class="btn btn-danger">Cancelar</button>
            </div>
            {!! Form::close()!!}  
            </div>
        </div>
      </div>
    </div>  
  </section>
  </crear-campana>
@endsection