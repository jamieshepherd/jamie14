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

    public function associateImages(Project $project, array $images)
    {
        foreach($images as $image)
        {
            Image::create(['filename' => $image, 'project_id' => $project->id]);
        }
    }
}
