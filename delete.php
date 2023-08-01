<?php
include("connection.php");
$cid = $_GET['cid'];
mysqli_query($connect, "DELETE FROM thesis_records WHERE thesis_id = '$cid'");
?>
<script type="text/javascript">
	alert("The course has been deleted in the curriculum!");
	window.location="list.php";
</script>