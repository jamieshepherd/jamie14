<?php

class Image extends Eloquent {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'images';

    public function project()
    {
        return $this->belongsTo('Project');
    }

}
