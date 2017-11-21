<!DOCTYPE html>
<html lang="ja">
    <head>
        <title>Edit</title>
    </head>

    <body>
        <h1>Monthly Report Edit</h1>
        <div>
            <form action="/report/{{ $report->id }}" method="POST">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <input type="text" id="title" name="title" value="{{ $report->title }}"><br>
                <input type="text" id="content" name="content" value="{{ $report->content }}"><br>
                <input type="submit" value="Update">
            </form>
        </div>
    </body>
</html>