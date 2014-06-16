<?php

class Project extends Eloquent {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'projects';
    protected $guarded = array('id');

    public function images()
    {
        return $this->hasMany('Image');
    }

}
