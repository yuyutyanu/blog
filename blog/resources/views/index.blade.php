@extends('common')
@section('title','index')

@section('content')
    <form class="post-form" action="/new" method="get">
        <button class="post-form_btn">投稿</button>
    </form>

    <div class="articles-box">
        @foreach($articles as $article)
            <button class="articles-box_btn"><a class="wf-mplus1p"
                                                href="/posts/{{$article->id}}">{{$article->title}}</a></button>
        @endforeach
    </div>
@endsection