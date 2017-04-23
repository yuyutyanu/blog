@extends('common')
@section('title','show')
@section('content')
    <div class="article-box">
        <h2 class="article-box_h2">{{$article->title}}</h2>
        <h3 class="article-box_h3">{{$article->created_at}}</h3>
        <div class="article">{!!nl2br(htmlspecialchars($article->article))!!}</div>
        <form action="/posts/{{$article->id}}/edit" method="post">
            {{csrf_field()}}
            <button class="article-box_button">編集</button>
        </form>
    </div>
@endsection