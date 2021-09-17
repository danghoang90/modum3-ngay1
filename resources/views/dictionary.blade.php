<html>
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
<h2>Nhập từ cần tìm</h2>
<form method="post" action="/result">
    @csrf
    <input type="text" name="word">
    <input type="submit" value="Dịch">
</form>
</body>
</html>
