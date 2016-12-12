  <?php $conn = new mysqli("localhost","byoung19","gq9v9yzh","byoung19");
$sql="select * from buyer join orderdtl on buyer.buyer_id=orderdtl.buyer_id"; $result = mysqli_query($conn,$sql); 
if (mysqli_num_rows($result) > 0) 
{ while($row = mysqli_fetch_assoc($result)) 
{  echo "id: " . $row["buyer_id"]. "----Name: " . $row["fname"]. " " . $row["lname"]. "----location: ". $row["location_id"].
"----order number " .$row["order_no"]. "----store " .$row["store_id"]. "----product id " .$row[product_id]. "----order quantity " .$row[order_qty].
"<br>";   } } else {     echo "0 results"; }  mysqli_close($conn);  ?>
