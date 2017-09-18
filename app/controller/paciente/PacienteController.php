<?php
/**
 * Created by PhpStorm.
 * User: 1046877159
 * Date: 18/09/2017
 * Time: 11:01 AM
 */

use EHRSql\BaseController;
use EHRSql\EHRModel;

class PacienteController extends BaseController
{
    protected $layout = 'layouts.dashboard';

    function __construct()
    {
        $this->setLocale();
    }

    public function deletePaciente() {
        /* Process the request data. */
        $item = App\model\paciente\Paciente::find(Input::get("id"));
        $item->delete();

        /* Prepare the response data. */
        $data['status'] = Config::get("constants.status.success");
        $data['message'] = Lang::get("messages.messages.ajax_success");

        /* Return the data. */
        return Response::json($data);
    }

    public function getAllPacientes() {
        /* Prepare the response data. */
        $data['items'] = App\model\paciente\Paciente::all();

        /* Return the data. */
        return Response::json($data);
    }

    public function getPacienteByID() {
        /* Prepare the response data. */
        $data['item'] = App\model\paciente\Paciente::find(Input::get('id'));

        /* Return the data. */
        return Response::json($data);
    }

    public function savePaciente() {

        $item_paciente = new App\model\paciente\Paciente();
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