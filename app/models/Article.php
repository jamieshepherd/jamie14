<?php

class Article extends Eloquent {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'articles';
    protected $guarded = array('id');

    public function setTextAttribute($value) {
        $this->attributes['text'] = $value;
        $this->attributes['summary'] = substr(strip_tags($value), 0, 250);
    }

    public function tags()
    {
        return $this->hasMany('Tag','id');
    }

}
