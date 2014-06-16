<?php

class ProjectController extends Controller {

    /**
     * Setup the layout used by the controller.
     *
     * @return void
     */
    protected function addProject()
    {
        for($i=0;$i<4;$i++) {
        $current = 'image'.$i;
            if(null!== Input::file($current)) {
                $file                       = Input::file($current);
                $destination                = 'img/projects';
                $filename                   = str_random(12);
                $filename                  .= '.'.$file->getClientOriginalExtension();
                $uploaded                   = Input::file($current)->move($destination,$filename);
                if ($uploaded) {
                    echo "Success";
                } else {
                    echo "No success";
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

        // sync images
        $project->syncImages($project,$images);

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

    protected function syncImages(Project $project, array $images)
    {
        // Create or add tags
        $found = $project->image->findOrCreate(strtolower(trim($images)));
        $tagIds = array();

        foreach($found as $tag)
        {
            $tagIds[] = $tag->id;
        }

        // Assign set tags to project
        $project->tags()->sync($tagIds);
    }

}
