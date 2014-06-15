<?php

class ArticleController extends Controller {

    /**
     * Setup the layout used by the controller.
     *
     * @return void
     */
    protected function addArticle()
    {
        // Do the tags first
        $tags       = explode(',', Input::get('tags'));

        $article = new Article;
        $article->title             = Input::get('title');
        $article->setTextAttribute(   Input::get('text'));
        $article->type              = Input::get('type');
        $article->visible           = Input::has('public');
        $article->save();

        // sync tags
        $article->syncTags($article,$tags);

        return View::make('admin')->with('message','Success! This article was created successfully.');
    }

    public function displayArticle($id)
    {
        $article = DB::table('articles')->where('id', $id)->first();
        return View::make('article', compact('article'));
    }

    public function blogIndex()
    {
        $articles = $this->getIndex('blog');
        return View::make('blog', compact('articles'));
    }

    public function tutorialIndex()
    {
        $articles = $this->getIndex('tutorial');
        return View::make('tutorials', compact('articles'));
    }

    protected function getIndex($type)
    {
        // remember(60) an hour
        // $articles = Article::with('tags')->where('type','=','blog')->remember(60)->get();
        $articles = Article::with('tags')
            ->where('type','=', $type)
            ->where('visible','=',true)
            ->orderBy('created_at', 'DESC')
            ->paginate(5);
        return $articles;
    }

    protected function syncTags(Article $article, array $tags)
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

}
