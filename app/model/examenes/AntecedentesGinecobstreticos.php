<?php
/**
 * Created by PhpStorm.
 * User: 1046877159
 * Date: 17/09/2017
 * Time: 05:25 PM
 */


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use EHRSql\EHRModel;
class AntecedentesGinecobstreticos extends EHRModel
{
    use SoftDeletes;

    protected $table = 'antecedentes_ginecobstetricos';

    public function paciente(){
        return $this->belongsTo('Model\Pacientes\Paciente','id_paciente');
    }
}