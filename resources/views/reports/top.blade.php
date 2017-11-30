@extends('common.app')
@section('content')
<h1>Monthly Report List</h1>
<!-- 月報一覧 -->
<div>
    <ul>
        @foreach($reports as $report)
        <li>
            <a href="/report/{{ $report->id }}">{{ $report->title }}</a>
            <form action="/report/{{ $report->id }}" method="POST">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                <input type="submit" value="Delete">
            </form>
        </li>
        @endforeach
    </ul>
</div>

<!-- 月報の新規作成 -->
<div>
    <a href="/report/create">Add Report</a>
</div>
@endsection