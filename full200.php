<!DOCTYPE html>
<html>
    
<?php    // Get png's from directory 
$pictures = glob("../Locations/DR_Es/*.jpg"); 

// Get number of pictures found in directory. 
// -1 to account for 0 index 
$last_pic = count($pictures)-1; 

?>
    
<head>
	<meta charset="UTF-8">
	<meta http-equiv="refresh" content="10">

	<title>Full Page Background Image | Progressive</title>
	
	<style>
		* { margin: 0; padding: 0; }
		
		html { 
			background: url("<?php echo $pictures[$last_pic]; ?>") no-repeat center center fixed; 
			-webkit-background-size: cover;
			-moz-background-size: cover;
			-o-background-size: cover;
			background-size: cover;
		}
		
		#page-wrap { width: 400px; margin: 50px auto; padding: 20px; background: white; -moz-box-shadow: 0 0 20px black; -webkit-box-shadow: 0 0 20px black; box-shadow: 0 0 20px black; }
		p { font: 15px/2 Georgia, Serif; margin: 0 0 30px 0; text-indent: 40px; }
	</style>
</head>
<?php echo $pictures[$last_pic]; ?>    


</html>
