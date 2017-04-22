<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service\BlogCreateService;
use App\Service\BlogRetrieveService;

class BlogController extends Controller
{
    public function index(BlogRetrieveService $retrieveService)
    {
        $articles = $retrieveService->all();
        return view('index',compact('articles'));
    }
    public function show(BlogRetrieveService $retrieveService,$id){
        $article = $retrieveService->one($id);
        return view('show',['article' => $article]);
    }
    public function new(){
        return view('new');
    }
    public function create(Request $request,BlogCreateService $createService)
    {
        $createService->create($request);
        return redirect('/');
    }
}
