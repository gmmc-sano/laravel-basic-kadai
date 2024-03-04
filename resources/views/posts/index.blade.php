<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>基礎</title>
</head>

<body>
    <table>
        <tr>
            <th>title</th>
            <th>content</th>
        </tr>
        @foreach($posts as $post)
        <tr>
            <td>{{ $post->title }}</td>
            <td>{{ $post->content }}</td>
        </tr>
        @endforeach
    </table>    
</body>

</html>