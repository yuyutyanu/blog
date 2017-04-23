@extends('common')
@section('title','new')
@section('content')
    <div class="new-post">
        @if(empty($article))
            <form action="create" method="post">
                {{ csrf_field() }}
                <input class="new-post_input" type="text" name="title" value="">
                <textarea class="new-post_textarea" rows="40" cols="100" name="article"></textarea>
                <br>
                <button class="new-post_button">投稿</button>
            </form>
        @else
            <form action="/posts/{{$article->id}}" method="post">
                {{ method_field('patch') }}
                {{ csrf_field() }}
                <input class="new-post_input" type="text" name="title" value="{{$article->title}}">
                <textarea class="new-post_textarea" rows="40" cols="100" name="article">{{$article->article}}</textarea>
                <br>
                <button class="new-post_button">投稿</button>
            </form>
        @endif
    </div>
@endsection