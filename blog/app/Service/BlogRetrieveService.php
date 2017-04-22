<?php
namespace App\Service;

use App\Blog;
use Illuminate\Http\Request;

class BlogRetrieveService{
    private $request;
    private $blog;

    function __construct(Request $request,Blog $blog)
    {
        $this->request = $request;
        $this->blog = $blog;
    }

    public function all(){
        $articles = $this->blog->all();
        return $articles;
    }
    public function one($id){
        $article = $this->blog->where('id',$id)->first();
        return $article;
    }
}