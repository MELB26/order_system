<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table>
    <p>
        MENU
    </p>
            <tr>
                <th>Order</th>
                <th>Amount</th>
            </tr>
            <tr>
                <td>Burger</td>
                <td>50</td>
            </tr>
            <tr>
                <td>Fries</td>
                <td>175</td>
            </tr>
            <tr>
                <td>Steak</td>
                <td>150</td>
            </tr>
        </table>
        <style>
            table, th, td{
                border: 2px solid black;
                padding: 10px;
                text-align: center;
            }
        </style>

    <form action="" method="post">
        <br>
        <label for="food"> Select an order </label>
        <select name="food" id="food">
            <option value="burger">Burger</option>
            <option value="fries">Fries</option>
            <option value="steak">Steak</option>
        </select>
        <br><br>
        quantity: <input type="number" id="quantity" name="quantity" min="1" max="1000"><br>
        cash: <input type="text" name="cash"><br><br>
        <input type="submit" name="submit" Value="Submit">
    </form>


    <?php
    if (isset($_POST['submit'])) {
    $prices = [
        'burger' => 50,
        'fries' => 175,
        'steak' => 150,
    ];

    $food = $_POST['food'];
    $quantity = $_POST['quantity'];
    $cash = $_POST['cash'];

    $totalPrice = $prices[$food] * $quantity;
    $change = $cash - $totalPrice;
    
    echo "<h1>RECEIPT</h1>";
    echo "<p>Total Price: $totalPrice</p>";
    echo "<p>You Paid: $cash</p>";
    echo "<p>CHANGE: $change</p>";
    echo "<p>" . date("m/d/Y h:i:s a") . "</p>";
    }
    ?>
</body>
</html>
