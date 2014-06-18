<?php

class Project extends Eloquent {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'projects';
    protected $guarded = array('id');

    private $rules = array(
            'title'     => 'required|min:3',
            'released'  => 'required|min:3',
            'tech'      => 'required|min:3',
            'url'       => 'required|url|min:3',
            'text'      => 'required|min:20',
            'image1'    => 'required'
    );

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

    public function validate($data)
    {
        $validation = Validator::make($data,$this->rules);

        if($validation->passes()) {
            return $errors = false;
        } else {
            return $errors = $validation->messages();
        }
    }
}
