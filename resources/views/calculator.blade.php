<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="/calculator" method="post">
    @csrf
    <p>Product Description
        <input type="text" name="description" >
    </p>
    <p>List Price
        <input type="number" name="price">
    </p>
    <p>Discount Percent
        <input type="number" name="percent">
    </p>
    <p>
        <button type="submit" name="calculate">Calculate Discount</button>
    </p>
</form>
</body>
</html>
