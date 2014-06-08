<?php

class ArticleController extends Controller {

    /**
     * Setup the layout used by the controller.
     *
     * @return void
     */
    protected function addArticle()
    {
        $article = new Article;
        $article->title             = Input::get('title');
        $article->setTextAttribute(   Input::get('text'));
        $article->type              = Input::get('type');
        $article->visible           = Input::has('public');
        $article->save();

        echo $article->id();

        //$tags                       = explode(',', Input::get('tags'));
        //dd($tags);

        /*
        DB::table('tags')->insert(array(
            array('email' => 'taylor@example.com', 'votes' => 0),
            array('email' => 'dayle@example.com', 'votes' => 0),
        ));
        */

        return View::make('admin.blog.create')->with('message','Awesome! This was created successfully.');
    }

    public function displayArticle($id)
    {
        $article = DB::table('articles')->where('id', $id)->first();
        return View::make('article', compact('article'));
    }

    public function blogIndex()
    {
        // remember(60) an hour
        // $articles = Article::with('tags')->where('type','=','blog')->remember(60)->get();
        $articles = Article::with('tags')->where('type','=','blog')->get();
        return View::make('blog', compact('articles'));
    }

}
