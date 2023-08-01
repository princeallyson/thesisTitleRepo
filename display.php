<?php 
include("connection.php");
?>
<html>
<head>
	<title>View Thesis</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>


<div class="container">
<table class="table table-bordered">
<?php
//localhost/viewcourse.php?cid=203 (GET)
$cid = $_GET['cid'];
$sql = mysqli_query($connect, "SELECT * FROM thesis_records WHERE thesis_id = '$cid'");
$rec = mysqli_fetch_assoc($sql);
?>

<form>


	<tr>
		
		<td colspan=2 align="center" class="bg-info"><h2>Cavite State University</h2><h6>Department of Information Technology<br>Thesis Repository</h6></td>
	<tr>
		<td><b>Thesis Id</b></td>
		<td><?php echo $rec['thesis_id']; ?></td>
	</tr>
	<tr>
		<td><b>Thesis Title</b></td>
		<td><?php echo $rec['thesis_title']; ?></td>
	</tr>
	<tr>
		<td><b>Category</b></td>
		<td><?php echo $rec['category']; ?></td>
	</tr>
	<tr>
		<td><b>Authors</b></td>
		<td><?php echo $rec['authors']; ?></td>
	</tr>
	<tr>
		<td><b>Program</b></td>
		<td><?php echo $rec['program']; ?></td>
	</tr>
	<tr>
		<td><b>Copyright year</b></td>
		<td><?php echo $rec['copyright_year']; ?></td>
	</tr>
	<tr>
		<td><b>Thesis Adviser</b></td>
		<td><?php echo $rec['thesis_adviser']; ?></td>
	</tr>
	<tr>
		<td><b>Technical Critic</b></td>
		<td><?php echo $rec['technical_critic']; ?></td>
	</tr>
	<tr>
		<td><b>Abstract</b></td>
		<td><?php echo $rec['abstract']; ?></td>
	</tr>





</table>

<a href=list.php>View Records</a>
</form>

</div>
</body>
</html>