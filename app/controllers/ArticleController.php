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
        $article->title     = Input::get('title');
        $article->text      = Input::get('text');
        $article->type      = 'blog';
        $article->visible   = Input::has('public');
        $article->save();

        return View::make('admin.blog.create')->with('message','Awesome! This was created successfully.');
	}

    public function displayArticle($id)
    {
        $article = DB::table('articles')->where('id', $id)->first();
        $parsedown = new Parsedown();
        return View::make('article', compact('article','parsedown'));
    }

}
