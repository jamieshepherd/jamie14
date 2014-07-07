<?php

class Article extends Eloquent {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'articles';
    protected $guarded = array('id');

    private $rules = array(
            'title' => 'Required|Min:3',
            'text' => 'Required|Min:20',
            'tags' => 'Required|Min:3'
    );

    public function setTextAttribute($value) {
        $this->attributes['text'] = $value;
        $this->attributes['summary'] = substr(strip_tags(Parsedown::instance()->text($value)), 0, 250);
    }

    public function tags()
    {
        return $this->belongsToMany('Tag');
    }

    public function syncTags(Article $article, array $tags)
    {
        // Create or add tags
        $tagIds = [];
        foreach($tags as $tag)
        {
            $found = Tag::firstOrCreate(['name' => trim(strtolower($tag))]);
            $tagIds[] = $found->id;
        }

        // Assign set tags to article
        $article->tags()->sync($tagIds);
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

    public function listTags($input)
    {
        $output = "";
        foreach($input as $tag) {
            $output .= $tag->name .',';
        }
        return rtrim($output, ",");
    }

}
