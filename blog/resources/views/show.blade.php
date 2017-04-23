@extends('common')
@section('title','show')
@section('content')
    <div class="article-box">
        <h2 class="article-box_h2">{{$article->title}}</h2>
        <h3 class="article-box_h3">{{$article->updated_at}}</h3>
        <div class="article">{!!nl2br(htmlspecialchars($article->article))!!}</div>

        <div class="article-buttons">
            <form action="/posts/{{$article->id}}/edit" method="post">
                {{csrf_field()}}
                <button class="article-buttons_button">編集</button>
            </form>
            <form action="/posts/{{$article->id}}" method="post">
                {{ method_field('delete') }}
                {{csrf_field()}}
                <button class="article-buttons_button">削除</button>
            </form>
        </div>
    </div>
@endsection