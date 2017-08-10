<?php
namespace App\Service;

use App\Blog;


class BlogDeleteService{
    private $blog;

    function __construct(Blog $blog)
    {
        $this->blog = $blog;
    }

    public function delete($id){
        $article = $this->blog->find($id);
        $article->delete();
    }
}