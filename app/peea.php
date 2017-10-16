<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class peea extends Model
{
    protected $table = 'peea';

    public function paciente() {
        return $this->belongsTo("paciente", "id_paciente", "id");
    }
}
