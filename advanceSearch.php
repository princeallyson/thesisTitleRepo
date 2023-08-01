<?php
include("connection.php");
?>
<html>
<head>
<title>Advance Search</title>
<meta charset="utf-8">
  <meta name="viewport" content="width-device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

<style>
.someClass{
width:100px;

}

</style>
</head>


<body>
<div class="container text-center">

		<h3 colspan=2 align="center" class="bg-info">Advance Search</h3>
		
		
	

</div>


<div class="container">
<form method="post">


		<td colspan=2 align="center">
		<b>Category</b>
		<select name="Category">
		<option name="category"></option>
		<option value="Computer and Architecture" <?php echo (isset($_POST['Category']) && $_POST['Category'] == 'Computer and Architecture') ? 'selected' : ''; ?>>Computer and Architecture</option>
		<option value="Intelligent Systems" <?php echo (isset($_POST['Category']) && $_POST['Category'] == 'Intelligent Systems') ? 'selected' : ''; ?> >Intelligent Systems</option>
		<option value="Software Security and Data Science" <?php echo (isset($_POST['Category']) && $_POST['Category'] == 'Software Security and Data Science') ? 'selected' : ''; ?>>Software Security and Data Science</option>
		<option value="Information and Network Systems Management" <?php echo (isset($_POST['Category']) && $_POST['Category'] == 'Information and Network Systems Management') ? 'selected' : ''; ?>>Information and Network Systems Management</option>
		<option value="Multimedia Systems" <?php echo (isset($_POST['Category']) && $_POST['Category'] == 'Multimedia Systems') ? 'selected' : ''; ?>>Multimedia Systems</option>
		<option value="Web and Mobile Computing" <?php echo (isset($_POST['Category']) && $_POST['Category'] == 'Web and Mobile Computing') ? 'selected' : ''; ?>>Web and Mobile Computing</option>
		</select>
		
	
	
	
	
	

		
		
		<b>&nbsp &nbsp &nbspProgram </b>
		<select name="Program">
		<option></option>
		<option value="BS Computer Science" <?php echo (isset($_POST['Program']) && $_POST['Program'] == 'BS Computer Science') ? 'selected' : ''; ?>>BS Computer Science</option>
		<option value="BS Information Technology" <?php echo (isset($_POST['Program']) && $_POST['Program'] == 'BS Information Technology') ? 'selected' : ''; ?>>BS Information Technology</option>
		</select>	
		
	
	
	
	
		
		
		<b>&nbsp &nbsp &nbsp Thesis Advisers</b>
		<select name="Advisers" >
		<option></option>
		<option value="AEBihis" <?php echo (isset($_POST['Advisers']) && $_POST['Advisers'] == 'AEBihis') ? 'selected' : ''; ?>>AEBihis</option>
		<option value="AEMalicsi" <?php echo (isset($_POST['Advisers']) && $_POST['Advisers'] == 'AEMalicsi') ? 'selected' : ''; ?>>AEMalicsi</option>
		<option value="AJAlmerez" <?php echo (isset($_POST['Advisers']) && $_POST['Advisers'] == 'AJAlmerez') ? 'selected' : ''; ?>>AJAlmerez</option>
		<option value="CBCarandang" <?php echo (isset($_POST['Advisers']) && $_POST['Advisers'] == 'CBCarandang') ? 'selected' : ''; ?>>CBCarandang</option>
		<option value="EFRamos" <?php echo (isset($_POST['Advisers']) && $_POST['Advisers'] == 'EFRamos') ? 'selected' : ''; ?>>EFRamos</option>
		<option value="GGPerey" <?php echo (isset($_POST['Advisers']) && $_POST['Advisers'] == 'GGPerey') ? 'selected' : ''; ?>>GGPerey</option>
		<option value="JCLontoc" <?php echo (isset($_POST['Advisers']) && $_POST['Advisers'] == 'JCLontoc') ? 'selected' : ''; ?>>JCLontoc</option>
		<option value="JMPeji" <?php echo (isset($_POST['Advisers']) && $_POST['Advisers'] == 'JMPeji') ? 'selected' : ''; ?>>JMPeji</option>
		<option value="JRErsando" <?php echo (isset($_POST['Advisers']) && $_POST['Advisers'] == 'JRErsando') ? 'selected' : ''; ?>>JRErsando</option>
		<option value="JVAves" <?php echo (isset($_POST['Advisers']) && $_POST['Advisers'] == 'JVAves') ? 'selected' : ''; ?>>JVAves</option>
		<option value="MCCruzate" <?php echo (isset($_POST['Advisers']) && $_POST['Advisers'] == 'MCCruzate') ? 'selected' : ''; ?>>MCCruzate</option>
		<option value="MMSy" <?php echo (isset($_POST['Advisers']) && $_POST['Advisers'] == 'MMSy') ? 'selected' : ''; ?>>MMSy</option>
		<option value="MRPereña" <?php echo (isset($_POST['Advisers']) && $_POST['Advisers'] == 'MRPereña') ? 'selected' : ''; ?>>MRPereña</option>
		<option value="RLMojica" <?php echo (isset($_POST['Advisers']) && $_POST['Advisers'] == 'RLMojica') ? 'selected' : ''; ?>>RLMojica</option>
		<option value="RLVillacarlos" <?php echo (isset($_POST['Advisers']) && $_POST['Advisers'] == 'RLVillacarlos') ? 'selected' : ''; ?>>RLVillacarlos</option>
		<option value="SEDaez" <?php echo (isset($_POST['Advisers']) && $_POST['Advisers'] == 'SEDaez') ? 'selected' : ''; ?>>SEDaez</option>
		<option value="VJConorado" <?php echo (isset($_POST['Advisers']) && $_POST['Advisers'] == 'VJConorado') ? 'selected' : ''; ?>>VJConorado</option>
		
		
		</select>
		
&nbsp &nbsp &nbsp
	<input type="submit" name="search" value="Search" class="someClass"></td>
	
<table class="table table-bordered mt-5">	
	<tr>
			<td align="center"><b>Thesis Title</b></td>
			<td align="center"><b>Program</b></td>
			<td align="center"><b>Category</b></td>
			<td align="center"><b>Copyright Year</b></td>
			<td align="center"><b>Thesis Adviser</b></td>
			
			
		</tr>

	
<?php

if(isset($_REQUEST['search'])){
	
$category=$_POST['Category'];
$program=$_POST['Program'];
$adviser=$_POST['Advisers'];
	
$return=mysqli_query($connect,"SELECT * FROM thesis_records WHERE category='$category' AND program='$program' AND thesis_adviser='$adviser'");
while($returnList=mysqli_fetch_assoc($return)){

?>

			<tr>
			<td align="center"><?php echo $returnList['thesis_title'];?></td>
			<td align="center"><?php echo $returnList['program'];?></td>
			<td align="center"><?php echo $returnList['category'];?></td>
			<td align="center"><?php echo $returnList['copyright_year'];?></td>	
			<td align="center"><?php echo $returnList['thesis_adviser'];?></td>
			</tr>






<?php } }?>
	
	
	
	
	
	
	



</table>
</form>
<td align="center"><a class="btn btn-primary" href="list.php" role="button">Go back</a></td>
</div>



</body>
</html>