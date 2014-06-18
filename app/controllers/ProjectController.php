<?php

class ProjectController extends Controller {

    /**
     * Setup the layout used by the controller.
     *
     * @return void
     */
    protected function addProject()
    {
        $data = Input::all();
        $project = new Project;
        $errors = $project->validate($data);

        if(!$errors)
        {
            $images = array();
            for($i=0;$i<=4;$i++) {
            $current = 'image'.$i;
            if(null!== Input::file($current))
            {
                $file                       = Input::file($current);
                $destination                = 'img/projects';
                $filename                   = str_random(12);
                $filename                  .= '.'.$file->getClientOriginalExtension();
                $uploaded                   = Input::file($current)->move($destination,$filename);
                if ($uploaded) {
                    $images[] = $filename;
                } else {
                    Log::error('Something went wrong with image upload');
                }
            }
            }

        $project->title             = Input::get('title');
        $project->released          = Input::get('released');
        $project->tech              = Input::get('tech');
        $project->url               = Input::get('url');
        $project->text              = Input::get('text');
        $project->visible           = Input::has('public');
        $project->save();

        // associateImages
        $project->associateImages($project,$images);

        return Redirect::to('admin/project/view')->with('message','Success! This project was created successfully.');
        } else {
            return Redirect::to('admin/project/create')
                ->with('message',
                    'Creating this project was <strong>unsuccessful</strong>. Please check your submission and try again.')
                ->withErrors($errors);
        }

    }

    protected function updateProject($id)
    {
        $project                    = Project::find($id);
        $project->title             = Input::get('title');
        $project->released          = Input::get('released');
        $project->tech              = Input::get('tech');
        $project->url               = Input::get('url');
        $project->text              = Input::get('text');
        $project->visible           = Input::has('public');
        $project->save();

        // Do image update separately?

        return Redirect::to('admin/project/view')->with('message','Success! This project was updated successfully.');
    }

    public function displayproject($id)
    {
        $project = DB::table('projects')->with('images')->where('id', $id)->get();
        return View::make('project', compact('project'));
    }
}
