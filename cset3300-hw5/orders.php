<html>
<head>
<title>orders</title>
</head>
<body>
<?php $conn = new mysqli("localhost","byoung19","gq9v9yzh","byoung19"); 









for($prodid = 1; $prodid <= 100; $prodid++){
$sql="select distinct * from orderdtl left join payment on orderdtl.buyer_id=payment.buyer_id left join buyer on orderdtl.buyer_id=buyer.buyer_id where product_id = $prodid order by product_id"; $result = mysqli_query($conn,$sql);

echo"<b><br/>product: $prodid</b><br/>";
//if (mysqli_num_rows($result) > 0) {
while($row = mysqli_fetch_assoc($result)) { echo "<br/> buyer name : " .$row["fname"]." " .$row["lname"]. " card number " .$row["card_num"]. " exp_date " .$row["exp_date"]. "<br/> quantity " .$row["order_qty"].
"<br/>ordered from store number: " .$row["store_id"]. " on " .$row["order_date"]. "<br/>";  } }
//else {     echo "0 results"; }  mysqli_close($conn);}
?>
</body>
</html>
