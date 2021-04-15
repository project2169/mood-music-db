<div style="text-align:center;"><h1>Welcome!!!</h1><a href="logout.php">Logout</a></div>
<?php 

include "config.php";

$images_sql = "SELECT * FROM images";

$result = mysqli_query($con,$images_sql);

//$row = mysqli_fetch_array($result);

while ($row = mysqli_fetch_array($result)) {
	$image = $row['image']; ?>
	<!-- Base64 image -->
	<img src="<?= $image ?>" width="300px" height="300px"  >
	<?php
}

//$filename = $row['name'];
//$image = $row['image'];
