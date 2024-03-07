<?php
$products = [
['name' => '商品A', 'price' => 1000],
['name' => '商品B', 'price' => 1500],
['name' => '商品C', 'price' => 2000],
// 他の商品データも追加可能
];


?>

<!doctype html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Products</title>
</head>
<body>
    <h1>商品一覧</h1>

    <ul>
        @foreach ($products as $product)
        <li>{{ $product['name'] }} - ¥{{ number_format($product['price']) }}</li>
        @endforeach
    </ul>
</body>
</html>

