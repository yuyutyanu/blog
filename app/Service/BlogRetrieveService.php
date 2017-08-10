<?php
namespace App\Service;

use App\Blog;
use Illuminate\Http\Request;

class BlogRetrieveService
{

    private $blog;

    function __construct(Blog $blog)
    {
        $this->blog = $blog;
    }

    public function all()
    {
        $articles = $this->blog->all();
        return $articles;
    }

    public function one($id)
    {
        $article = $this->blog->find($id);
        return $article;
    }
}