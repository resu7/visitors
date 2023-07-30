<!DOCTYPE html>
<html>
<head>
    <title>Visitors App - 管理画面</title>
</head>
<body>
    <h1>入退室記録 - 管理画面</h1>

    <table>
        <tr>
            <th>学籍番号</th>
            <th>ステータス</th>
            <th>日時</th>
            <th>操作</th>
        </tr>
        @foreach($visitors as $visitor)
            <tr>
                <td>{{ $visitor->student_id }}</td>
                <td>{{ $visitor->status }}</td>
                <td>{{ $visitor->created_at }}</td>
                <td>
                    <form action="{{ url('admin', $visitor->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit">削除</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
</body>
</html>

