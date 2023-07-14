<?php include 'db.php'; ?>
<?php 
	$bookId = $_GET["prog_id"];
	$query 	= "SELECT * FROM portfolio_MoranSinai where prog_id=". $bookId;
	$result = mysqli_query($connection, $query);
	if($result) {
	$row = mysqli_fetch_assoc($result);
	}
	else die("DB query failed.");
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">  
		<title>
            <?php echo $row["prog_name"] . " Page"; ?>
        </title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
		<link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
	<br>
	<br>
		<div class="container">
			<?php 
		echo '<h1>' . $row["prog_name"] .'</h1>';
        echo '<h2>' . $row["prog_desc"] . '</h2>';
		$img = $row["prog_img"];
        $url = $row["prog_url"];
		echo '<br>';
		echo '<img src="' . $img . '"class="container">';
        echo '<a href="' . $url . '"class="github">Github</a>';
		?> 
	
	</div>
	<?php mysqli_free_result($result); ?>
	</body>
</html>
<?php mysqli_close($connection); ?>