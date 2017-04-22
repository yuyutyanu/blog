<?php
namespace App\Service;

use App\Blog;
use Illuminate\Http\Request;

class BlogCreateService{
    private $request;
    private $blog;

    function __construct(Request $request,Blog $blog)
    {
        $this->request = $request;
        $this->blog = $blog;
    }

    public function create($request){
        $this->blog->create($request->all());
    }
}