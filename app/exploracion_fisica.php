<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class exploracion_fisica extends Model
{
    protected $table = 'exploracion_fisica';

    public function paciente() {
        return $this->belongsTo("paciente", "id_paciente", "id");
    }
}
