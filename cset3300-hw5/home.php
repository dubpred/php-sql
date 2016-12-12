<html>
<head>
<title>orders</title>
</head>
<body>


<h1>The bold names are the names of the products </h1><br/><br/><br/>


<?php $conn = new mysqli("localhost","byoung19","gq9v9yzh","byoung19"); 









for($prodid = 1; $prodid <= 100; $prodid++){
$sql="select * from inventory left join product_listing on inventory.product_id=product_listing.product_id where inventory.product_id=$prodid group by inventory.product_id"; $result = mysqli_query($conn,$sql);


while($row = mysqli_fetch_assoc($result)) { echo "<br/><b>" .$row["name"].  "<br/></b>" .
"store number " .$row["store_id"]. " <br/>product quantity in store: " .$row["quantity"]. "<br/>" ;  } }  
mysqli_close($conn);
?>
</body>
</html>
