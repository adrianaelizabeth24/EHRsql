<?php
/**
 * Created by PhpStorm.
 * User: 1046877159
 * Date: 18/09/2017
 * Time: 11:04 AM
 */

namespace EHRSql;


class BaseController extends Controller {

    /**
     * Setup the layout used by the controller.
     *
     * @return void
     */
    protected function setupLayout()
    {
        if ( ! is_null($this->layout))
        {
            $this->layout = View::make($this->layout);
        }
    }
}
