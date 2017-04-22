@extends('common')
@section('title','new')
@section('content')
    <div class="new-post">
        <form action="create" method="post">
            {{ csrf_field() }}
            <input class="new-post_input" type="text"  name="title">
            <textarea class="new-post_textarea"rows="40" cols="100"  name="article"></textarea>
            <br>
            <button class="new-post_button">投稿</button>
        </form>
    </div>
@endsection