<?php
namespace EHRSql;

use Eloquent;
use Input;
use Auth;

class EHRModel extends Eloquent {
    protected $appends = array('source');
    protected $source = "normal";

    public function save(array $options = array()) {
        //Set the creator.
        if(Auth::check()) {
            $this->id_creator = Auth::user()->id;
        } else {
            $device = Mobile\Device::find(Input::get("id_device"));

            if($device) {
                if($device->user) {
                    $this->id_creator = $device->user->id;
                }
            }
        }

        return parent::save($options);
    }

    public function getSourceAttribute() {
        return $this->source;
    }

    public function setSourceAttribute($source) {
        $this->source = $source;
    }
}
