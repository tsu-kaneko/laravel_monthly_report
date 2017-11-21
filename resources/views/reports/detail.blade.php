<!DOCTYPE html>
<html lang="ja">
    <head>
        <title>Detail</title>
    </head>

    <body>
        <h1>Monthly Report Detail</h1>
        <div>
            <ul>
                <li>{{ $report -> id }}</li>
                <li>{{ $report -> title }}</li>
                <li>{{ $report -> content }}</li>
            </ul>
        </div>
    </body>
</html>