<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products Table</title>
    <style>
        /* Style for the body */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        /* Style for the container */
        .container {
            width: 80%;
            max-width: 1000px;
            margin: auto;
            padding: 20px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        }

        /* Table styling */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        /* Table header styling */
        th {
            background-color: #4CAF50;
            color: white;
            padding: 12px 15px;
            text-align: left;
        }

        /* Table row and cell styling */
        td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        /* Hover effect for table rows */
        tr:hover {
            background-color: #f1f1f1;
        }

        /* Table header cell on hover */
        th:hover {
            background-color: #45a049;
        }

        /* Style for the heading */
        h1 {
            text-align: center;
            color: #333;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Product List</h1>
        <table>
            <thead>
                <tr>
                    <th>Product ID</th>
                    <th>Product Name</th>
                    <th>Price</th>
                    <th>Stock Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>101</td>
                    <td>Apple iPhone 14</td>
                    <td>$999</td>
                    <td>In Stock</td>
                </tr>
                <tr>
                    <td>102</td>
                    <td>Samsung Galaxy S23</td>
                    <td>$899</td>
                    <td>In Stock</td>
                </tr>
                <tr>
                    <td>103</td>
                    <td>Google Pixel 8</td>
                    <td>$799</td>
                    <td>Out of Stock</td>
                </tr>
                <tr>
                    <td>104</td>
                    <td>OnePlus 11</td>
                    <td>$749</td>
                    <td>In Stock</td>
                </tr>
                <tr>
                    <td>105</td>
                    <td>MacBook Air M2</td>
                    <td>$1,199</td>
                    <td>In Stock</td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>
