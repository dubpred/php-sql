 <?php 
$conn = new mysqli("localhost","byoung19","gq9v9yzh","byoung19");


$sql="select * from buyer"; 


$result = mysqli_query($conn,$sql);

if (mysqli_num_rows($result) > 0) {
while($row = mysqli_fetch_assoc($result)) {
 echo "id: " . $row["buyer_id"]. "----Name: " . $row["fname"]. " " . $row["lname"]. "----location: ". $row["location_id"]."<br>";
  } } else {     echo "0 results"; }  mysqli_close($conn);
 ?>
