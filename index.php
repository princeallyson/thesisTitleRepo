<?php
include("connection.php");
$sql = mysqli_query($connect, "SELECT COUNT(*) AS num FROM thesis_records");
$id = mysqli_fetch_assoc($sql);
?>

<html>
<head>
<title>Laboratory 4</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>

<body>

<div class="container">

<table class="table table-bordered">
<form method="post">

<tr>
		
		<td colspan=2 align="center" class="bg-info"><h2>Cavite State University</h2><h6>Department of Information Technology<br>Thesis Repository</h6></td>
	<tr>



<tr>
		<td>Thesis ID</td> 
		<td><input type="text" name="id1" value="<?php echo 1000 + $id['num'] ; ?> " disabled></td>
		<input type="hidden" name="id" value="<?php echo $id['num'] + 1000; ?>"></td>
	</tr>

<tr>
		<td>Thesis Title</td>
		<td><input type="text" name="thesisTitle" style="width: 500px; " required></td>
	</tr>

<tr>
		<td>Category</td>
		<td>
		<select name="Category" required>
		<option></option>
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
		<td><input type="text" name="Authors" style="width: 500px; "></td>
	</tr>



<tr>
		<td>Program</td>
		<td>
		<select name="Program" required>
		<option></option>
		<option value="BS Computer Science">BS Computer Science</option>
		<option value="BS Information Technology">BS Information Technology</option>
		</select>
		</td>
	</tr>
	
	<tr>
		<td>Copyright year</td>
		<td><input type="text" name="Year" required></td>
	</tr>


<tr>
		<td>Thesis Advisers</td>
		<td>
		<select name="Advisers" required>
		<option></option>
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
		<option></option>
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
<td><textarea name="Abstract" rows="5" cols="30"></textarea></td>
</tr>



<tr>
		<td colspan=2 align="center"><br><input type="submit" name="add" value="ADD RECORD">
		<input type="reset" name="clear" value="RESET">
		
		</td>
</tr>

<tr>
		<td >
		<a href=list.php>View Records</a>
		</td>
</tr>

		
		

</table>

<?php
if(isset($_REQUEST['add'])){
$ID=$_POST['id'];
$title=$_POST['thesisTitle'];
$category=$_POST['Category'];
$authors=$_POST['Authors'];
$program=$_POST['Program'];
$year=$_POST['Year'];
$advisers=$_POST['Advisers'];
$critic=$_POST['Critic'];
$abstract=$_POST['Abstract'];


mysqli_query($connect,"INSERT INTO thesis_records VALUES('$ID' , '$title' , '$category' , '$authors' , '$program' , '$year' ,'$advisers' , '$critic' , '$abstract')");

echo "
            <script type=\"text/javascript\">
            alert('You  have successfully added a thesis');
            </script>
        ";

}


?>







</form>
</div>
</body>
</html>