<?php 
$conn = mysqli_connect("localhost","root","","practice");
$id = $_POST['akoSiID'];
				
$query = $conn->query("SELECT * FROM user WHERE user_id = '$id'");


$data = mysqli_fetch_array( $query );
?>

<form id="updateUser">
		<div class="status"> </div>
		<input type="hidden" name="ID" value="<?php echo $id ?>" /> 
		<div class="form-group">
			<label> Username </label>
			<input type="text" name="text1" class="form-control" value="<?php echo $data['username'] ?>" /> 
		</div>
		<div class="form-group">
			<label> Password </label>
			<input type="text" name="text2" class="form-control" value="<?php echo $data['password'] ?>" /> 
		</div>
		
		<button type="submit" class="btn btn-primary pull-right"> 
			<i class="glyphicon glyphicon-floppy-disk"> </i> Save 
		</button>
		<div class="clearfix"> </div>
</form>