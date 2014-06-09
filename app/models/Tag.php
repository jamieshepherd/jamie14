<?php

class Tag extends Eloquent {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'tags';
    protected $guarded = array('id');

    public function article()
    {
        return $this->belongsToMany('Article');
    }

}
