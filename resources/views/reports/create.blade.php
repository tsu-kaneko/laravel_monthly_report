@extends('common.app')
@section('content')
<h3>Monthly Report Create</h3>
<form action="/report/store" method="POST">
    {{ csrf_field() }}
    Title   : <input type="text" name="title" id="title" value=""><br>
    Content : <textarea type="text" name="content" id="content" value=""></textarea><br>
    <input type="submit" value="Add Report">
</form>
@endsection