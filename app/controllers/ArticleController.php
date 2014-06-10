<?php

class ArticleController extends Controller {

    /**
     * Setup the layout used by the controller.
     *
     * @return void
     */
    protected function addArticle()
    {
        // Create article object
        $article = new Article;
        $article->title             = Input::get('title');
        $article->setTextAttribute(   Input::get('text'));
        $article->type              = Input::get('type');
        $article->visible           = Input::has('public');
        $article->save();

        // Get array of tags from Input, sync them to $article
        $tags       = explode(',', Input::get('tags'));
        $article->syncTags($article,$tags);

        // Let them know the article was successful
        return View::make('admin.blog.create')->with('message','Awesome! This was created successfully.');
    }

    public function displayArticle($id)
    {
        $article = DB::table('articles')->where('id', $id)->first();
        return View::make('article', compact('article'));
    }

    public function displayIndex()
    {
        $type = Request::segment(1);
        // remember(60) an hour
        // $articles = Article::with('tags')->where('type','=','blog')->remember(60)->get();
        $articles = Article::with('tags')
            ->where('type','=', $type)
            ->where('visible','=',true)
            ->get();
        return View::make('blog', compact('articles'));
    }
    /* no longer required, delete this
    public function syncTags(Article $article, array $tags)
    {
        // Create or add tags
        $found = $article->tag->findOrCreate(strtolower(trim($tags)));

        $tagIds = array();

        foreach($found as $tag)
        {
            $tagIds[] = $tag->id;
        }

        // Assign set tags to article
        $article->tags()->sync($tagIds);
    }
    */
}
