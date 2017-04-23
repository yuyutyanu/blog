<?php

namespace App\Http\Controllers;

use App\Service\BlogUpdateService;
use Illuminate\Http\Request;
use App\Service\BlogCreateService;
use App\Service\BlogRetrieveService;

class BlogController extends Controller
{

    private $retrieveService;
    private $request;

    function __construct(BlogRetrieveService $retrieveService,Request $request)
    {
        $this->retrieveService = $retrieveService;
        $this->request = $request;
    }

    public function index()
    {
        $articles = $this->retrieveService->all();
        return view('index',compact('articles'));
    }
    public function show($id)
    {
        $article = $this->retrieveService->one($id);
        return view('show',['article' => $article]);
    }

    public function new()
    {
        return view('new');
    }

    public function create(BlogCreateService $createService)
    {
        $createService->create($this->request);
        return redirect('/');
    }

    public function edit($id)
    {
        $article = $this->retrieveService->one($id);
        return view('new',['article' => $article]);
    }

    public function update(BlogUpdateService $updateService,$id)
    {
        $updateService->update($id,$this->request);
        return redirect('/posts/'.$id);
    }
}
