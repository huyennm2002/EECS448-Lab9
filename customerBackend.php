<style>
    <?php include 'style.css'; ?>
</style>
<?php
    $username = $_POST['email'];
    $q1 = $_POST['item1'];
    $q2 = $_POST['item2'];
    $q3 = $_POST['item3'];
    $password = $_POST['pw'];
    $total1 = $q1 * 2;
    $total2 = $q2 * 4;
    $total3 = $q3 * 6;
    $total = $total1 + $total2 + $total3;
    $shipping = $_POST['shipping'];
    $shippingPrice = 0;
    $shippingType = "Free 7 day";
    if($shipping == "option2"){
        $shippingPrice = 50;
        $shippingType = "Over Night";
    }
    elseif($shipping == "option3"){
        $shippingPrice = 5;
        $shippingType = "3-day";
    }
    $total = $total + $shippingPrice;
    echo "<h1> User's Receipt </h1>";
    echo "<h3>Welcome to our online shopping site!</h3>";
    echo "<div>Your password is ".$password.".</div><br>";
    echo "<table>
            <tr> 
                <th> </th>
                <th> Quantity </th>
                <th> Cost per Item </th>
                <th> Subtotal </th>
            </tr>";
    echo    "<tr>
                <td>Gummies </td>
                <td>" . $q1 . "</td>";
    echo       "<td> $2.00 </td>";
    echo       "<td>$" . $total1 . "</td>
            </tr>";
    echo    "<tr>
                <td>Bread </td>
                <td>" . $q2 . "</td>";
    echo       "<td> $4.00 </td>";
    echo       "<td>$" . $total2 . "</td>
            </tr>";
    echo    "<tr>
                <td>Snack mix </td>
                <td>" . $q3 . "</td>";
    echo       "<td> $6.00 </td>";
    echo       "<td>$" . $total3 . "</td>
            </tr>";
    echo    "<tr>
                <td>Shipping </td>
                <td>" . $shippingType . "</td>
                <td> </td>";
    echo       "<td> $" . $shippingPrice. "</td>";
    echo       "</tr>";
    echo    "<tr>
                <td>Total Cost </td>
                <td> </td>
                <td> </td>";
    echo       "<td> $" . $total. "</td>";
    echo       "</tr>";
    echo  "</table>";
?>
