<!DOCTYPE html>
<html>
<head>
    <title>Visitors App - 入退室記録</title>
</head>
<body>
    <h1>入退室記録</h1>

    @if(session('success'))
        <div>{{ session('success') }}</div>
    @endif

    <form action="{{ url('check-in') }}" method="post">
        @csrf
        <label for="student_id">学籍番号を入力してください：</label>
        <input type="text" id="student_id" name="student_id" required>
        <button type="submit">入室</button>
    </form>

    <form action="{{ url('check-out') }}" method="post">
        @csrf
        <label for="student_id">学籍番号を入力してください：</label>
        <input type="text" id="student_id" name="student_id" required>
        <button type="submit">退出</button>
    </form>
</body>
</html>

