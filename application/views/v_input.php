<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="<?php echo base_url('index.php/backend/tambah'); ?>" method="post">
		<table>
			<tr>

				<td>From</td>
				<td><input type="text" name="rute_from"></td>
			</tr>
			<tr>
				<td>To</td>
				<td><input type="text" name="rute_to"></td>
			</tr>
			<tr>
				<td>Departure Date</td>
				<td><input type="text" name="depart_at"></td>
			</tr>
			<tr>
				<td>Price</td>
				<td><input type="text" name="price"></td>
			</tr>
			<tr>
				<td>Transport ID</td>
				<td><input type="text" name="transportid"></td>
			</tr>
		</table>
		
		<input type="submit">
</form>
</body>
</html>