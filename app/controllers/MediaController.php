<?php

class MediaController extends Controller {

    /**
     * Setup the layout used by the controller.
     *
     * @return void
     */
    protected function addImage()
    {
        // upload the image
        $file                       = Input::file('image');
        $destination                = 'img/projects';
        $filename                   = str_random(12);
        $filename                  .= '.'.$file->getClientOriginalExtension();
        $uploaded                   = Input::file('image')->move($destination,$filename);
        if ($uploaded) {
            // make a new image
            $image                      = new Image;
            $image->project_id          = Input::get('project_id');
            $image->filename            = $filename;
            $image->save();
            return Redirect::to('admin/project/view')->with('message','Success! This image was added successfully.');
        } else {
            Log::error('Something went wrong with image upload');
        }
    }
}
