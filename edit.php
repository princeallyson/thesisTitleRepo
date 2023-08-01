<?php 
include("connection.php");
?>
<html>
<head>
	<title>Edit</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>
<div class="container">
<form method="post">
<table class="table table-bordered">
	<?php
	$cid = $_GET['cid'];
	$sql = mysqli_query($connect, "SELECT * FROM thesis_records WHERE thesis_id = '$cid'");
	$rec = mysqli_fetch_assoc($sql);
	?>
	<tr>
		<td colspan=2 align="center" class="bg-info"><h3>EDIT RECORD</h3>
		
<tr>
		<td>Thesis ID</td> 
		<td><input type="text" name="id1" value="<?php echo $rec['thesis_id']; ?> " disabled></td>
		<input type="hidden" name="id" value="<?php echo $rec['thesis_id']; ?> ?>"></td>
	</tr>

<tr>
		<td>Thesis Title</td>
		<td><input type="text" name="thesisTitle" value="<?php echo $rec['thesis_title']; ?>" required></td>
	</tr>

<tr>
		<td>Category</td>
		<td>
		<select name="Category"  required>
		<option><?php echo $rec['category']; ?></option>
		<option value="Computer and Architecture">Computer and Architecture</option>
		<option value="Intelligent Systems">Intelligent Systems</option>
		<option value="Software Security and Data Science">Software Security and Data Science</option>
		<option value="Information and Network Systems Management">Information and Network Systems Management</option>
		<option value="Multimedia Systems">Multimedia Systems</option>
		<option value="Web and Mobile Computing">Web and Mobile Computing</option>
		</select>
		</td>
	</tr>


<tr>
		<td>Authors</td>
		<td><input type="text" name="Authors" value="<?php echo $rec['authors']; ?>"></td>
	</tr>



<tr>
		<td>Program</td>
		<td>
		<select name="Program"  required>
		<option><?php echo $rec['program']; ?></option>
		<option value="BS Computer Science">BS Computer Science</option>
		<option value="BS Information Technology">BS Information Technology</option>
		</select>
		</td>
	</tr>
	
	<tr>
		<td>Copyright year</td>
		<td><input type="text" name="Year" value="<?php echo $rec['copyright_year']; ?>" required></td>
	</tr>


<tr>
		<td>Thesis Advisers</td>
		<td>
		<select name="Advisers"   required>
		<option><?php echo $rec['thesis_adviser']; ?></option>
		<option value="AEBihis">AEBihis</option>
		<option value="AEMalicsi">AEMalicsi</option>
		<option value="AJAlmerez">AJAlmerez</option>
		<option value="CBCarandang">CBCarandang</option>
		<option value="EFRamos">EFRamos</option>
		<option value="GGPerey">GGPerey</option>
		<option value="JCLontoc">JCLontoc</option>
		<option value="JMPeji">JMPeji</option>
		<option value="JRErsando">JRErsando</option>
		<option value="JVAves">JVAves</option>
		<option value="MCCruzate">MCCruzate</option>
		<option value="MMSy">MMSy</option>
		<option value="MRPereña">MRPereña</option>
		<option value="RLMojica">RLMojica</option>
		<option value="RLVillacarlos">RLVillacarlos</option>
		<option value="SEDaez">SEDaez</option>
		<option value="VJConorado">VJConorado</option>
		
		
		</select>
		</td>
	</tr>


<tr>
		<td>Technical Critic</td>
		<td>
		<select name="Critic" required>
		<option> <?php echo $rec['technical_critic']; ?></option>
		<option value="ABuri">ABuri</option>
		<option value="ECerezo">ECerezo</option>
		<option value="JBaculod">JBaculod</option>
		<option value="JMalacas">JMalacas</option>
		<option value="JPolistico">JPolistico</option>
		<option value="JRBuhain">JRBuhain</option>
		<option value="JRicarte">JRicarte</option>
		<option value="KLucas">KLucas</option>
		<option value="LVtamayo">LVTamayo</option>
		<option value="MCAngcaya">MCAngcaya</option>
		<option value="MNAquino">MNAquino</option>
		<option value="RORodriguez">RORodriguez</option>
		</select>
		</td>
	</tr>

<tr>
<td>Abstract</td>
<td><textarea name="Abstract"  rows="5" cols="30"  ><?php echo $rec['abstract']; ?></textarea>	</td>
</tr>		
			
	
	<tr>
		<td align="center" colspan=2><input type="submit" name="update" value="UPDATE"></td>
	</tr>

</table>
<p><a href="list.php">View Records</a></p>
<?php
if(isset($_REQUEST['update'])){
$ID=$_POST['id'];
$title=$_POST['thesisTitle'];
$category=$_POST['Category'];
$authors=$_POST['Authors'];
$program=$_POST['Program'];
$year=$_POST['Year'];
$adviser=$_POST['Advisers'];
$critic=$_POST['Critic'];
$abstract=$_POST['Abstract'];
$cid = $_GET['cid'];


	mysqli_query($connect, "UPDATE thesis_records SET thesis_id='$ID', thesis_title='$title', category='$category', authors='$authors', 
	program='$program', copyright_year='$year', thesis_adviser='$adviser' , technical_critic='$critic', abstract='$abstract'     WHERE thesis_id='$cid' "); ?>
	<script type="text/javascript">
		alert("Course has been successfully edited in the thesis!");
		window.location="list.php";
	</script>
<?php
}
?>
</form>
</div>
</body>
</html>