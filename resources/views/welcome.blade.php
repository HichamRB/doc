<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Doc</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />


        <style>
            body {
                font-family: Arial, sans-serif;
                margin: 20px;
                margin-top: 100px;
            }
            .header {
                text-align: center;
                margin-bottom: 20px;
                position: fixed;
                top: 20px;
                left: 20px;
                right: 20px;
                z-index: 100;
                background-color: #fff;
                padding: 10px;
                border-bottom: 1px solid #ccc;
            }
            .table {
                margin-top: 100px;
                width: 100%;
                border-collapse: collapse;
                margin-bottom: 20px;
            }
            .table th, .table td {
                border: 1px solid #000;
                padding: 8px;
            }
            .total {
                text-align: right;
            }
            .footer {
                position: fixed;
                bottom: 20px;
                left: 0;
                right: 0;
                text-align: center;
            }
        </style>
    </head>
    <body>
    <div class="header">
        <h1>Invoice</h1>
        <p>Client Name: Your Client</p>
    </div>

        <table class="table">
            <thead>
            <tr>
                <th>Product ID</th>
                <th>Product Name</th>
                <th>Price</th>
            </tr>
            </thead>
            <tbody>
            @foreach($data as $item)
                <tr>
                    <td>{{ $item['id'] }}</td>
                    <td>{{ $item['name'] }}</td>
                    <td>{{ $item['price'] }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>

    <div class="total">
        <strong>Total Price: 400</strong>
    </div>

    <div class="footer">
        <p>Company Name | Address | Contact Information</p>
    </div>
    </body>
</html>
