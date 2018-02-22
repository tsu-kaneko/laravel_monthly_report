@extends('common.app')
@section('content')
<h3>Monthly Report Create</h3>

<!-- メモ；クエリに->toArray()を追加してarray_columnsで整形すれば下記のセレクトボックスの使用が可能 -->
<!--{{ Form::select('tag', $tags, null, ['class' => 'form', 'id' => 'id']) }}<br>-->

<form action="/report/store" method="POST">
    {{ csrf_field() }}
    Title   : <input type="text" name="title" id="title" value=""><br>
    Content : <textarea type="text" name="content" id="content" value=""></textarea><br>
    Tag : <br>
    @foreach($tags as $tag)
        {{Form::checkbox('checkTags[]', $tag->id)}}{{$tag->name}}<br>
    @endforeach
    <input type="submit" value="Add Report">
</form>
@endsection