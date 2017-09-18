<?php
/**
 * Created by PhpStorm.
 * User: 1046877159
 * Date: 17/09/2017
 * Time: 04:57 PM
 */


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use EHRSql\EHRModel;

class ReporteConsulta extends EHRSql\EHRModel
{
    use SoftDeletes;

    protected $table = 'reporte_consulta';

    public function consulta() {
        return $this->belongsTo('Model\Consulta\Consulta', 'id_consulta');
    }

}