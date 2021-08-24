<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eloquent</title>
</head>
<body>
    <h1>Menampilkan data dengan eloquent</h1>
    <table border='1'>
        <tr>
            <td>ID Purchase</td>
            <td>ID Product</td>
            <td>Price</td>
            <td>Description</td>
        </tr>
        @foreach($purchaseitem as $p)
        <tr>
            <th>{{$p->id_purchase }}</th>
            <th>{{$p->id_product }}</th>
            <th>{{$p->price }}</th>
            <th>{{$p->description }}</th>
        </tr>
        @endforeach
    </table>
</body>
</html>