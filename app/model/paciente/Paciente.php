<?php
/**
 * Created by PhpStorm.
 * User: 1046877159
 * Date: 17/09/2017
 * Time: 04:48 PM
 */

namespace App\model\paciente;

use Illuminate\Database\Eloquent\Model;
use EHRSql\EHRModel;


class Paciente extends EHRModel
{
    protected $table = 'paciente';

}