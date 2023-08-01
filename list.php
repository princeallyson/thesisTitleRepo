<?php
include("connection.php");
?>

<html>
<head>
<title>List of Thesis</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

<style>
.someClass{
width:290px;

}

.view{
float:right;
}

.title{
line-height: 40px;
   min-height: 10px;
   height: 20px;
     width: 400px;
}

</style>




</head>
<body>	


<div class="container-fluid">
<h3 class="bg-info text-center 	">Thesis Repository</h3>

		

<form method="post">

<td>

<input type="text"  name="find" id="find" placeholder="Enter Keyword, ThesisID or Thesis Title" class="someClass" value="<?php if (isset($_POST['find'])) echo $_POST['find']; ?>" />
<input type="submit" name="search" value="Search">
<input type="submit" class="btn btn-primary view" name="viewAll" value="View All Records">
</td>








</form>

<table class="table table-bordered ">

<form>

		
		<tr>
			<td align="center"><b>Thesis Title</b></td>
			<td align="center"><b>Authors</b></td>
			<td align="center"><b>Copyright year</b></td>
			<td align="center"><b>Program</b></td>
			<td align="center"><b>Actions</b></td>
			
		</tr>
		
<?php 
if(isset($_REQUEST['viewAll'])){
$recs=mysqli_query($connect, "SELECT * FROM thesis_records");
while($records=mysqli_fetch_assoc($recs)){
?>
		<tr>
			
			<td align="center" class="title"><?php echo $records['thesis_title'];?></td>
			<td align="center"><?php echo $records['authors'];?></td>
			<td align="center"><?php echo $records['copyright_year'];?></td>
			<td align="center"><?php echo $records['program'];?></td>
			<td align="center">
			<a href="display.php?cid=<?php echo $records['thesis_id']; ?>"><img src="view.png" width="20px" height="20px"></a>
			<a href="edit.php?cid=<?php echo $records['thesis_id']; ?>"><img src="edit.png" width="20px" height="20px"></a>
			<a href="delete.php?cid=<?php echo $records['thesis_id']; ?>" onclick="return confirm('Are you sure to delete this thesis?');"><img src="delete.png" width="20px" height="20px"></a>
			</td>	
		</tr>
		
		
		
<?php } }?>




<?php
if(isset($_REQUEST['search'])){

$keyword=$_POST['find'];

$return=mysqli_query($connect,"SELECT * FROM thesis_records WHERE concat(thesis_id,thesis_title) like'%$keyword%'");
while($returnList=mysqli_fetch_assoc($return)){

?>
			

		<tr >
			
			<td align="center"><?php echo $returnList['thesis_title'];?></td>
			<td align="center"><?php echo $returnList['authors'];?></td>
			<td align="center"><?php echo $returnList['copyright_year'];?></td>
			<td align="center"><?php echo $returnList['program'];?></td>
			<td align="center">
			<a href="display.php?cid=<?php echo $returnList['thesis_id']; ?>"><img src="view.png" width="20px" height="20px"></a>
			<a href="edit.php?cid=<?php echo $returnList['thesis_id']; ?>"><img src="edit.png" width="20px" height="20px"></a>
			<a href="delete.php?cid=<?php echo $returnList['thesis_id']; ?>" onclick="return confirm('Are you sure to delete this thesis?');"><img src="delete.png" width="20px" height="20px"></a>
			</td>	
		</tr>

  
<?php } }?>




</form>

</table>
<td align="center"><a class="btn btn-primary" href="advanceSearch.php" role="button">Try Advance Search</a></td>
</div>

</body>
</html>