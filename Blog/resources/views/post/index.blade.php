<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>List Post</title>
</head>

<body class="tb">
    <div class="content-table">
        <table>
            <caption>Posts</caption>
            <thead>
                <tr class="title-tb">
                    <th>ID</th>
                    <th>title</th>
                    <th>content</th>
                    <th>slug</th>
                    <th>published</th>
                    <th>published_at</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($posts as $item )
                    <tr class="line-tb">
                        <td>{{$item->id}}</td>
                        <td>{{$item->title}}</td>
                        <td>{{$item->content}}</td>
                        <td>{{$item->slug}}</td>
                        <td>{{$item->published}}</td>
                        <td>{{$item->published_at}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>