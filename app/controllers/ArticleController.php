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
        $data                           = Input::all();
        $article = new Article;
        $errors = $article->validate($data);
        if(!$errors)
        {
            $article->title             = Input::get('title');
            $article->setTextAttribute(   Input::get('text'));
            $article->type              = Input::get('type');
            $article->visible           = Input::has('public');
            $article->save();

            // sync tags
            $tags       = explode(',', Input::get('tags'));
            $article->syncTags($article,$tags);

            return Redirect::to('admin/'.$article->type.'/view')->with('message','Success! This article was created successfully.');
        } else {
            return Redirect::to('admin/'.$article->type.'/create')
                ->with('message',
                    'Changing your password was <strong>unsuccessful</strong>. Please check your submission and try again.')
                ->withErrors($errors);
        }
    }

    protected function updateArticle($id)
    {
        $text                       = Input::get('text');
        $article                    = Article::find($id);
        $article->title             = Input::get('title');
        $article->text              = Input::get('text');
        $article->summary           = substr(strip_tags(Parsedown::instance()->text($text)), 0, 250);
        $article->type              = Input::get('type');
        $article->visible           = Input::has('public');
        $article->save();

        // sync tags
        $tags       = explode(',', Input::get('tags'));
        $article->syncTags($article,$tags);

        return Redirect::to('admin/'.$article->type.'/view')->with('message','Success! This article was updated successfully.');
    }

    public function getArticle($id)
    {
        $article = DB::table('articles')->where('id', $id)->first();
        return $article;
    }

    public function displayArticle($id)
    {
        $article = DB::table('articles')->where('id', $id)->first();
        if($article->visible) {
            return View::make('article', compact('article'));
        } else {
            //return Response::error('404');
            return View::make('errors.404');
        }
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
}
