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
            <th>ID</th>
            <td>{{ $post->id }}</td>
        </tr>
        <tr>
            <th>title</th>
            <td>{{ $post->title }}</td>
        </tr>
        <tr>
            <th>content</th>
            <td>{{ $post->content }}</td>
        </tr>
        <tr>
            <th>created_at</th>
            <td>{{ $post->created_at }}</td>
        </tr>
        <tr>
            <th>updated_at</th>
            <td>{{ $post->updated_at }}</td>
        </tr>
    </table>    
</body>

</html>