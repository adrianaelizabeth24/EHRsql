<?php
/**
 * Created by PhpStorm.
 * User: 1046877159
 * Date: 17/09/2017
 * Time: 05:27 PM
 */


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use EHRSql\EHRModel;
class ehr extends EHRModel
{
    use SoftDeletes;

    protected $table = 'ehr';

    public function paciente(){
        return $this->belongsTo('Model\Pacientes\Paciente','id_paciente');
    }

    public function tratamiento(){
        return $this->belongsTo('Model\Examenes\HistorialTratamiento','id_tratamiento');
    }

}