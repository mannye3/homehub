<?php
include('dbconfig.php');
if($_POST['id'])
{
	$id=$_POST['id'];
	
	$stmt = $DB_con->prepare("SELECT * FROM bus WHERE cityfrom=:id");
	$stmt->execute(array(':id' => $id));
	?><option selected="selected">Select State </option>
	<?php while($row=$stmt->fetch(PDO::FETCH_ASSOC))
	{
		?>
		<option value="<?php echo $row['stateto']; ?>"><?php echo $row['stateto']; ?></option>
		<?php
	}
}
?>