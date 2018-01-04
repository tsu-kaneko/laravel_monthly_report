@extends('common.app')
@section('content')
<h3>Monthly Report Detail</h3>
<div>
    <ul>
        <li>{{ $report -> id }}</li>
        <li>{{ $report -> title }}</li>
        <li>{{ $report -> content }}</li>
    </ul>
    <a href="/report/{{ $report->id }}/edit">Edit</a>
</div>
@endsection