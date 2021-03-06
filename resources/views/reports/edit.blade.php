@extends('common.app')
@section('content')
<h3>Monthly Report Edit</h3>
<div>
    <form action="/report/{{ $report->id }}" method="POST">
        {{ csrf_field() }}
        {{ method_field('PUT') }}
        <input type="text" id="title" name="title" value="{{ $report->title }}"><br>
        <input type="text" id="content" name="content" value="{{ $report->content }}"><br>
        <input type="submit" value="Update">
    </form>
</div>
@endsection