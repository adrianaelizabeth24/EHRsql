@extends('layouts.app')
@section('content')

<!-- Main jumbotron for a primary marketing message or call to action -->

<div class="jumbotron">

  <div class="container">
    <h2>PEEA del Episodio Actual</h2>

    <form>

      <fieldset class="form-group">
        <legend>EL EPISODIO ACTUAL ES:</legend>


        <div class="form-check">
          <label class="form-check-label">
            <input class="form-check-input" type="radio" name="epActual" id="indistinguible">
            Indistinguible del pasado; continuación de una condición de larga evolución
          </label>
        </div>

        <div class="form-check">
          <label class="form-check-label">
            <input class="form-check-input" type="radio" name="epActual" id="exacerbacion">
            Exacerbación de un trastorno crónico
          </label>
        </div>

        <div class="form-check">
          <label class="form-check-label">
            <input class="form-check-input" type="radio" name="epActual" id="recurrencia" >
            Recurrencia de una condición previa similar
          </label>
        </div>

        <div class="form-check">
          <label class="form-check-label">
            <input class="form-check-input" type="radio" name="epActual" id="diferente">
            Significativamente diferente de cualquier condición previa
          </label>
        </div>

        <div class="form-check">
          <label class="form-check-label">
            <input class="form-check-input" type="radio" name="epActual" id="primera">
            Primera aparición sin antecedentes de enfermedades psiquiátricas previas
          </label>
        </div>

      </fieldset>


      <div class="row">
        <div class="form-group col-xs-3">
          <label for="epPrevios">Número de episodios previos:</label>
          <input type="number" class="form-control input-group-lg" id="epPrevios">
        </div>

        <div class="form-group col-xs-3">
          <label for="epPrevios">Edad de inicio del primer episodio:</label>
          <input type="number" class="form-control input-group-lg" id="edadIni">
        </div>
      </div>


      <div class="row">
        <legend>INICIO DE LOS SINTÓMAS DEL EPISODIO ACTUAL</legend>
        <fieldset class="form-group col-xs-2">

          <div class="form-check">
            <label class="form-check-label"><input class="form-check-input" type="radio" name="iniciointomas" id="<1 semana">
              <1 semana
            </label>
          </div>

          <div class="form-check">
            <label class="form-check-label"><input class="form-check-input" type="radio" name="iniciointomas" id="1-4 semanas">
              1-4 semanas
            </label>
          </div>

          <div class="form-check">
            <label class="form-check-label"><input class="form-check-input" type="radio" name="iniciointomas" id="1-3 meses">
              1-3 meses
            </label>
          </div>

          <div class="form-check">
            <label class="form-check-label"><input class="form-check-input" type="radio" name="iniciointomas" id="3-6 meses">
              3-6 meses
            </label>
          </div>

          <div class="form-check">
            <label class="form-check-label"><input class="form-check-input" type="radio" name="iniciointomas" id="6-12 meses">
              6-12 meses
            </label>
          </div>

        </fieldset>

        <fieldset class="form-group col-xs-2">

          <div class="form-check">
            <label class="form-check-label"><input class="form-check-input" type="radio" name="iniciointomas" id="1-2 años">
              1-2 años
            </label>
          </div>

          <div class="form-check">
            <label class="form-check-label"><input class="form-check-input" type="radio" name="iniciointomas" id="1-3 años">
              1-3 años
            </label>
          </div>

          <div class="form-check">
            <label class="form-check-label"><input class="form-check-input" type="radio" name="iniciointomas" id="4-5 años">
              4-5 años
            </label>
          </div>

          <div class="form-check">
            <label class="form-check-label"><input class="form-check-input" type="radio" name="iniciointomas" id="6-10 años">
              6-10 años
            </label>
          </div>

          <div class="form-check">
            <label class="form-check-label"><input class="form-check-input" type="radio" name="iniciointomas" id=">10 años">
              >10 años
            </label>
          </div>

        </fieldset>

        <div class="form-group row  col-xs-4">
          <label for="inicioEpisodio" class="col-2 col-form-label">Fecha probable de inicio del actual episodio:</label>
          <input class="form-control" type="date" id="inicioEpisodio">
        </div>
        
      </div>

      
      <div class="row">
        <legend>¿Ha Recibido Tratamiento para el Episodio Actual?</legend>
        <fieldset class="form-group col-xs-3">

          <div class="form-check">
            <label class="form-check-label"><input class="form-check-input" type="checkbox" name="tratamiento" id="Antidep">
              Antidepresivos Tri o tetracíclicos
            </label>
          </div>

          <div class="form-check">
            <label class="form-check-label"><input class="form-check-input" type="checkbox" name="tratamiento" id="ISRS">
              ISRS
            </label>
          </div>

          <div class="form-check">
            <label class="form-check-label"><input class="form-check-input" type="checkbox" name="tratamiento" id="Inhibidores">
             Inhibidores de la MAO
           </label>
         </div>

         <div class="form-check">
          <label class="form-check-label"><input class="form-check-input" type="checkbox" name="tratamiento" id="Benzodiacepinas">
            Benzodiacepinas
          </label>
        </div>

        <div class="form-check">
          <label class="form-check-label"><input class="form-check-input" type="checkbox" name="tratamiento" id="Antipsicóticos">
            Antipsicóticos
          </label>
        </div>

        <div class="form-check">
          <label class="form-check-label"><input class="form-check-input" type="checkbox" name="tratamiento" id="ISRSN">
            ISRSN
          </label>
        </div>

      </fieldset>



      <fieldset class="form-group col-xs-3">

        <div class="form-check">
          <label class="form-check-label"><input class="form-check-input" type="checkbox" name="tratamiento" id="Estabilizadores">
            Estabilizadores de afecto
          </label>
        </div>

        <div class="form-check">
          <label class="form-check-label"><input class="form-check-input" type="checkbox" name="tratamiento" id="Barbitúricos">
            Barbitúricos
          </label>
        </div>

        <div class="form-check">
          <label class="form-check-label"><input class="form-check-input" type="checkbox" name="tratamiento" id="TEC">
            TEC
          </label>
        </div>

        <div class="form-check">
          <label class="form-check-label"><input class="form-check-input" type="checkbox" name="tratamiento" id="Psicoterapia">
            Psicoterapia
          </label>
        </div>

        <div class="form-check">
          <label class="form-check-label"><input class="form-check-input" type="checkbox" name="tratamiento" id="No sabe">
            No sabe
          </label>
        </div>

        <div class="form-check">
          <label class="form-check-label"><input type="text" class="form-control input-group-lg" id="epPrevios" placeholder="Otro ¿cuál?">
          </label>
        </div>

      </fieldset>
    </div>

    <div class="form-group">
      <label>Psicofármacos Empleados para el Episodio Actual:</label>
      <textarea class="form-control" id="Psicofármacos" rows="3"></textarea>
    </div>

  </form>

</div>

</div> <!-- jumbotron -->
@stop