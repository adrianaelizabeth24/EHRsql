<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PacienteController extends Controller
{

    function __construct()
    {
        $this->setLocale();
    }

    public function deletePaciente() {
        /* Process the request data. */
        $item = Paciente::find(Input::get("id"));
        $item->delete();

        /* Prepare the response data. */
        $data['status'] = Config::get("constants.status.success");
        $data['message'] = Lang::get("messages.messages.ajax_success");

        /* Return the data. */
        return Response::json($data);
    }

    public function getAllPacientes() {
        /* Prepare the response data. */
        $data['items'] = Paciente::all();

        /* Return the data. */
        return Response::json($data);
    }

    public function getPacienteByID() {
        /* Prepare the response data. */
        $data['item'] = Paciente::find(Input::get('id'));

        /* Return the data. */
        return Response::json($data);
    }

    public function savePaciente() {
        $item_paciente = new Paciente();
        $item_paciente->nombre = Input::get("nombre");
        $item_paciente->apellido_paterno = Input::get("apellido_paterno");
        $item_paciente->apellido_materno = Input::get("apellido_materno");
        $item_paciente->sexo = Input::get("sexo");
        $item_paciente->direccion = Input::get("direccion");
        $item_paciente->telefono = Input::get("telefono");
        $item_paciente->nacimiento = Input::get("fecha_nacimiento");
        $item_paciente->estado_civil = Input::get("estado_civil");
        $item_paciente->religion = Input::get("religion");
        $item_paciente->escolaridad = Input::get("escolaridad");
        $item_paciente->sustento = Input::get("sustento");
        $item_paciente->ocupacion_sustento = Input::get("ocupacion_sustento");
        $item_paciente->ocupacion_persona = Input::get("ocupacion_paciente");
        $item_paciente->cafe_te_numero_tasas = Input::get("numero_tasas");
        $item_paciente->bebidas_alcoholicas = Input::get("alcohol");
        $item_paciente->dudas_alcoholismo = Input::get("dudas");
        $item_paciente->save();

        /* Prepare the response data. */
        $data['status']  = Config::get("constants.status.success");
        $data['message'] = Lang::get("messages.messages.ajax_success");

        /* Return the data. */
        return Response::json($data);
    }
}
