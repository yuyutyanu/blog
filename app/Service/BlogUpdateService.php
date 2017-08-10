<?php
namespace App\Service;

use App\Blog;

class BlogUpdateService{

    private $blog;

    function __construct(Blog $blog)
    {
        $this->blog = $blog;
    }

    public function update($id,$request)
    {
        $article = $this->blog->find($id);
        $article->title = $request->title;
        $article->article = $request->article;
        $article->save();
    }
}