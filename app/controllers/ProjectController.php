<?php

class ProjectController extends Controller {

    /**
     * Setup the layout used by the controller.
     *
     * @return void
     */
    protected function addProject()
    {
        $images = array();
        for($i=0;$i<=4;$i++) {
        $current = 'image'.$i;
            if(null!== Input::file($current)) {
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

        $project = new Project;
        $project->title             = Input::get('title');
        $project->released          = Input::get('released');
        $project->tech              = Input::get('tech');
        $project->url               = Input::get('url');
        $project->text              = Input::get('text');
        $project->visible           = Input::has('public');
        $project->save();

        // associateImages
        $project->associateImages($project,$images);

        return View::make('admin.index')->with('message','Success! This project was created successfully.');
    }

    public function displayproject($id)
    {
        $project = DB::table('projects')->where('id', $id)->first();
        return View::make('project', compact('project'));
    }

    protected function getIndex()
    {
        // remember(60) an hour
        // $projects = project::with('tags')->where('type','=','blog')->remember(60)->get();
        /*
        $projects = Project::with('tags')
            ->where('type','=', $type)
            ->where('visible','=',true)
            ->orderBy('created_at', 'DESC')
            ->paginate(5);
        return $projects;
        */
    }
}
