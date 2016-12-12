<html> <head></head> <body> <?php 
$month = array ('January', 'February', 'March', 'April',  'May', 'June', 'July', 'August',  'September', 'October', 'November', 'December');
$monthDays = array ('January' => 31, 'February' => 28,  'March' => 31, 'April' => 30,  'May' => 31, 'June' => 30,  'July' => 31, 'August' => 31,  'September' => 30, 'October' => 31,  'November' => 30, 'December' => 31);
$thirty = [];

echo"<table>
	<tr><th>month</th><th>days</th></tr>";
foreach($monthDays as $item => $days){
echo"
<tr>
<td>$item</td>
<td>$days</td>
</tr>";
}
echo"</table>";
?>

</body> 
</html>
