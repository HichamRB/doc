<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Doc</title>

        <style>
            @page {
                margin-top: 200px;
            }
            body {
                font-family: Arial, sans-serif;
                margin: 0;
                padding: 0;
            }
            .header {
                text-align: center;
                position: fixed;
                margin-top: -200px;
                margin-bottom: 20px;
                top: 20px;
                left: 20px;
                right: 20px;
                z-index: 100;
                background-color: #fff;
                padding: 10px;
                border-bottom: 1px solid #ccc;
            }
            .table-container {

            }
            .table {
                width: 100%;
                border-collapse: collapse;
                margin-bottom: 80px;
            }
            .table th, .table td {
                border: none;
                padding: 8px;
                text-align: center;
            }
            .total {
                text-align: right;
                bottom: 20px;
                right: 20px;
                margin-bottom: 60px;
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
    <div class="footer">
        <p>Company Name | Address | Contact Information</p>

    </div>

    <div class="table-container">
        <div>
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
        </div>


    </div>


    </body>
</html>
