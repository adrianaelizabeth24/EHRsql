<?php
/**
 * Created by PhpStorm.
 * User: 1046877159
 * Date: 17/09/2017
 * Time: 05:22 PM
 */


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use EHRSql\EHRModel;
class HistoriaPsiquiatricaFamiliar extends EHRModel
{
    use SoftDeletes;
    protected $table = 'historia_psiquiatrica_fam';

    public function paciente(){
        return $this->belongsTo('Model\Pacientes\Paciente','id_paciente');
    }
}