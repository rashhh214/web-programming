<!DOCTYPE html>
<html>
<head>
    <style>
        table {
            border-collapse: collapse;
            width: 60%;
            margin: 20px auto;
            font-family: Arial, sans-serif;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
            border-radius: 8px;
        }
        th, td {
            border: 1px solid #4A90E2;
            padding: 12px 15px;
            text-align: center;
        }
        th {
            background-color: #4A90E2;
            color: white;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 0.05em;
        }
        tr:nth-child(even) {
            background-color: #F2F9FF;
        }
        tr:hover {
            background-color: #D0E7FF;
        }
        .low-stock {
            color: red;
            font-weight: bold;
        }
    </style>
</head>
<body>

<?php
    $products = array(
        array("name" => "Product A", "price" => 10.50, "stock" => 12),
        array("name" => "Product B", "price" => 5.60, "stock" => 7),
        array("name" => "Product C", "price" => 7.00, "stock" => 5),
        array("name" => "Product D", "price" => 12.30, "stock" => 9),
        array("name" => "Product E", "price" => 8.45, "stock" => 15),
        array("name" => "Product F", "price" => 6.20, "stock" => 3)
    );
?>

<table>
    <tr>
        <th>No.</th>
        <th>Product</th>
        <th>Price</th>
        <th>Stock</th>
    </tr>

    <?php
    $no = 1;
    foreach ($products as $product) {
        $rowClass = ($product['stock'] < 10) ? ' class="low-stock"' : '';
        echo "<tr{$rowClass}>";
        echo "<td>{$no}</td>";
        echo "<td>{$product['name']}</td>";
        echo "<td>{$product['price']}</td>";
        echo "<td>{$product['stock']}</td>";
        echo "</tr>";
        $no++;
    }
    ?>
</table>

</body>
</html>
