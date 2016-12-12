  <?php 
$conn = new mysqli("localhost","byoung19","gq9v9yzh","byoung19");
$sql="select * from product_listing"; 
$result = mysqli_query($conn,$sql); 
if (mysqli_num_rows($result) > 0) {
while($row = mysqli_fetch_assoc($result)) {  
echo "Product id: " . $row["product_id"]. "----Model#: " . $row["model"]. " ----product name:" . $row["name"]. "<br>";   
} } else {     echo "0 results"; }  mysqli_close($conn);  ?>
