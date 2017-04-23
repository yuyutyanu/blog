<?php
namespace App\Service;

use App\Blog;

class BlogCreateService
{
    private $blog;

    function __construct(Blog $blog)
    {
        $this->blog = $blog;
    }

    public function create($request)
    {
        $this->blog->create($request->all());
    }
}