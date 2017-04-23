<?php
namespace App\Service;

use App\Blog;
use Illuminate\Http\Request;

class BlogUpdateService{
    private $request;
    private $blog;

    function __construct(Request $request,Blog $blog)
    {
        $this->request = $request;
        $this->blog = $blog;
    }

    public function update($id,$request)
    {
        $article = $this->blog->where('id',$id)->first();
        $article->title = $request->title;
        $article->article = $request->article;
        $article->save();
    }
}