<!DOCTYPE html>
<html lang="ja">
    <head>
        <title>Top</title>
    </head>

    <body>
        <h1>Monthly Report List</h1>
        <!-- 月報一覧 -->
        <div>
            <ul>
                @foreach($reports as $report)
                <li><a href="/report/{{ $report->id }}">{{ $report->title }}</a></li>
                @endforeach
            </ul>
        </div>
        
        <!-- 月報の新規作成 -->
        <div>
            <a href="/report/create">Add Report</a>
        </div>
    </body>
</html>