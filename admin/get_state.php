<?php
include('dbconfig.php');
if($_POST['id'])
{
	$id=$_POST['id'];
		
	$stmt = $DB_con->prepare("SELECT * FROM bus WHERE statefrom=:id");
	$stmt->execute(array(':id' => $id));
	?><option selected="selected">Select City </option><?php
	while($row=$stmt->fetch(PDO::FETCH_ASSOC))
	{
		?>
        	<option value="<?php echo $row['cityfrom']; ?>"><?php echo $row['cityfrom']; ?></option>
        <?php
	}
}
?>