<?php
/**
 * Created by PhpStorm.
 * User: 1046877159
 * Date: 18/09/2017
 * Time: 01:18 AM
 */

namespace EHRSql;

use Eloquent;
use Auth;
use Input;
use DB;


class BaseModel extends Eloquent {
    protected $appends = array('source');
    protected $source = "normal";

    private function useInheritance() {
        return get_parent_class($this) != "EHRSql\BaseModel";
    }

    public function newFromBuilder($attributes = array()) {
        /* Merge own attributes with parent. */

        if ($this->useInheritance() && !empty($this->inheritedData)) {
            $parent_data = DB::table($this->parentTable)->where("id", "=", $attributes->{$this->relationField})->select($this->inheritedData)->first();
            $attributes = array_merge((array) $parent_data, (array) $attributes);
        }

        /* Create instance with merged attributes. */
        $class = get_class($this);
        $instance = new $class();
        $instance->exists = true;
        $instance->setRawAttributes((array) $attributes, true);

        return $instance;
    }

    public function save(array $options = array()) {
        $query = $this->newQueryWithoutScopes();

        // If the "saving" event returns false we'll bail out of the save and return
        // false, indicating that the save failed. This gives an opportunities to
        // listeners to cancel save operations if validations fail or whatever.
        if ($this->fireModelEvent('saving') === false) {
            return false;
        }

        // If the model already exists in the database we can just update our record
        // that is already in this database using the current IDs in this "where"
        // clause to only update this model. Otherwise, we'll just insert them.
        if ($this->exists) {

            /* Check if model has inheritance. */
            if ($this->useInheritance()) {
                if (Auth::check()) {
                    $this->id_creator = Auth::user()->id;
                } else {
                    $device = Mobile\Device::find(Input::get("id_device"));

                    if ($device) {
                        $this->id_creator = $device->user->id;
                    }
                }

                $attributes = $this->getAttributes();
                $parent_data = DB::table($this->parentTable)->where("id", "=", $attributes[$this->relationField])->first();

                if ($parent_data) {
                    $class = get_parent_class($this);
                    $instance = new $class();
                    $model = $instance->getModel();
                    $parent = $model->where("id", "=", $parent_data->id)->first();

                    if ($parent) {

                        /* Save parent data and unset that data from child model attributes. */
                        foreach ($this->inheritedData as $data_name) {
                            if (array_key_exists($data_name, $attributes)) {
                                $parent->{$data_name} = $attributes[$data_name];
                                unset($attributes[$data_name]);
                            }
                        }

                        foreach ($this->duplicatedData as $data_name) {
                            if (array_key_exists($data_name, $attributes)) {
                                if ($data_name == "title") {
                                    $parent->name = $attributes[$data_name];
                                } else if ($data_name == "id_content_title") {
                                    $parent->id_content_name = $attributes[$data_name];
                                } else {
                                    $parent->{$data_name} = $attributes[$data_name];
                                }
                            }
                        }

                        $parent->save();
                        $this->setRawAttributes((array) $attributes);
                    }
                }
            }

            $saved = $this->performUpdate($query, $options);
        }

        // If the model is brand new, we'll insert it into our database and set the
        // ID attribute on the model to the value of the newly inserted row's ID
        // which is typically an auto-increment value managed by the database.
        else {

            /* Check if model has inheritance. */
            if ($this->useInheritance()) {
                if (Auth::check()) {
                    $this->id_creator = Auth::user()->id;
                } else {
                    $device = Mobile\Device::find(Input::get("id_device"));

                    if ($device) {
                        $this->id_creator = $device->user->id;
                    }
                }

                $attributes = $this->getAttributes();
                $class = get_parent_class($this);
                $parent = new $class();

                /* Save parent data and unset that data from child model attributes. */
                foreach ($this->inheritedData as $data_name) {
                    if (array_key_exists($data_name, $attributes)) {
                        $parent->{$data_name} = $attributes[$data_name];
                        unset($attributes[$data_name]);
                    }
                }

                foreach ($this->duplicatedData as $data_name) {
                    if (array_key_exists($data_name, $attributes)) {
                        if ($data_name == "title") {
                            $parent->name = $attributes[$data_name];
                        } else if ($data_name == "id_content_title") {
                            $parent->id_content_name = $attributes[$data_name];
                        } else {
                            $parent->{$data_name} = $attributes[$data_name];
                        }
                    }
                }

                $parent->save();
                $attributes[$this->relationField] = $parent->id;
                $this->setRawAttributes((array) $attributes);
            }

            $saved = $this->performInsert($query, $options);
        }

        if ($saved)
            $this->finishSave($options);

        return $saved;
    }

    public function delete() {
        if (is_null($this->primaryKey)) {
            throw new \Exception("No primary key defined on model.");
        }

        if ($this->exists) {
            if ($this->fireModelEvent('deleting') === false)
                return false;

            // Here, we'll touch the owning models, verifying these timestamps get updated
            // for the models. This will allow any caching to get broken on the parents
            // by the timestamp. Then we will go ahead and delete the model instance.
            if ($this->useInheritance()) {
                $attributes = $this->getAttributes();
                $parent_data = DB::table($this->parentTable)->where("id", "=", $attributes[$this->relationField])->first();

                if ($parent_data) {
                    $class = get_parent_class($this);
                    $instance = new $class();
                    $model = $instance->getModel();
                    $parent = $model->find($parent_data->id);

                    if ($parent) {
                        $parent->delete();
                    }
                }
            }

            $this->touchOwners();
            $this->performDeleteOnModel();
            $this->exists = false;
            // Once the model has been deleted, we will fire off the deleted event so that
            // the developers may hook into post-delete operations. We will then return
            // a boolean true as the delete is presumably successful on the database.
            $this->fireModelEvent('deleted', false);

            return true;
        }
    }

    public function touch() {
        if ($this->useInheritance()) {
            $attributes = $this->getAttributes();
            $parent_data = DB::table($this->parentTable)->where("id", "=", $attributes[$this->relationField])->first();

            if ($parent_data) {
                $class = get_parent_class($this);
                $instance = new $class();
                $model = $instance->getModel();
                $parent = $model->find($parent_data->id);

                if ($parent) {
                    $parent->touch();
                }
            }
        }

        $this->updateTimestamps();

        return $this->save();
    }

    public function restore() {
        // If the restoring event does not return false, we will proceed with this
        // restore operation. Otherwise, we bail out so the developer will stop
        // the restore totally. We will clear the deleted timestamp and save.
        if ($this->fireModelEvent('restoring') === false) {
            return false;
        }

        if ($this->useInheritance()) {
            $attributes = $this->getAttributes();
            $parent_data = DB::table($this->parentTable)->where("id", "=", $attributes[$this->relationField])->first();

            if ($parent_data) {
                $class = get_parent_class($this);
                $instance = new $class();
                $model = $instance->getModel();
                $parent = $model->withTrashed()->where("id", "=", $parent_data->id)->first();

                if ($parent) {
                    $parent->restore();
                }
            }
        }

        $this->{$this->getDeletedAtColumn()} = null;
        // Once we have saved the model, we will fire the "restored" event so this
        // developer will do anything they need to after a restore operation is
        // totally finished. Then we will return the result of the save call.

        $this->exists = true;
        $result = $this->save();
        $this->fireModelEvent('restored', false);

        return $result;
    }

    public function getSourceAttribute() {
        return $this->source;
    }

    public function setSourceAttribute($source) {
        $this->source = $source;
    }
}
