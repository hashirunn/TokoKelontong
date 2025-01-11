<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction Details</title>
    <style>
        body {
            font-family: 'Arial, sans-serif';
            line-height: 1.6;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>
    <h1>Transaction Details</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>User</th>
                <th>Product</th>
                <th>Store</th>
                <th>Quantity</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
            @foreach($transactiondetail as $detail)
            <tr>
                <td>{{ $detail->id }}</td>
                <td>{{ $detail->user->name }}</td>
                <td>{{ $detail->product->name }}</td>
                <td>{{ $detail->stores->name }}</td>
                <td>{{ $detail->quantity }}</td>
                <td>{{ $detail->price }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>