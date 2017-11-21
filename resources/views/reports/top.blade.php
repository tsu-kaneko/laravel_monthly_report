<!DOCTYPE html>
<html lang="ja">
    <head>
        <title>Top</title>
    </head>

    <body>
        <h1>Monthly List</h1>
        <div>
            <ul>
                @foreach($reports as $report)
                <li><a href="/report/{{ $report->id }}">{{ $report->title }}</a></li>
                @endforeach
            </ul>
        </div>
    </body>
</html>